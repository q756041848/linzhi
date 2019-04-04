<?php
namespace app\admin\controller;

\think\Loader::import('controller/Controller', \think\Config::get('traits_path') , EXT);

use app\admin\Controller;
use think\Session;
class Activity extends Controller
{
    use \app\admin\traits\controller\Controller;
//    use \app\admin\traits\think\Session;
    // 方法黑名单
    protected static $blacklist = [];
    //主页
    public function index()
    {
        $model = $this->getModel();
        // 列表过滤器，生成查询Map对象
        $map = $this->search($model, [$this->fieldIsDelete => $this::$isdelete]);

        // 特殊过滤器，后缀是方法名的
        $actionFilter = 'filter' . $this->request->action();
        if (method_exists($this, $actionFilter)) {
            $this->$actionFilter($map);
        }

        // 自定义过滤器
        if (method_exists($this, 'filter')) {
            $this->filter($map);
        }
        $this->datalist($model, $map);

//        数据库显示条件
        $map['isdelete']=0;
        unset($map['isdelete']);

        //管理员：0；学生处：1；二级学院：2；
        $quanxian = db('admin_role_user')->where('user_id='.Session::get('iu_id'))->find();
        switch ($quanxian['role_id'])
        {
            case 1: //学生处   1
                $this->view->assign('quanxian',1);
                $where = '1=1';
                break;
            case 6://二级学院   2
                $this->view->assign('quanxian',2);
                $where = 'college='.Session::get('coll');
                break;
            default://管理员   0
                $this->view->assign('quanxian',0);
                $where = '1=1';
        }

        //参数
        $page = 10;             //分页
        $status = [3,4,5];     //项目标识:3[结束],4[退回],5.[撤回]

        //Sql语句 需要连表-管理员表【发布人员、审核人员】
        $info = db('activity')
            ->where('status','in',$status)
            ->where('isdelete=0')
            ->where($where)
            ->order('id desc')
            ->paginate($page);

        //映射数据 ：分页、content、记录条数
        $this->view->assign('page',$info->render());    //分页
        $this->view->assign('list',$info);              //主页数据列
        $this->view->assign('count', $info->total());   //数据条数
        $this->view->assign('stu',0);

        return $this->view->fetch();
    }

    //高亮搜索
    protected function filter(&$map)
    {
        if ($this->request->param("theme")) {
            $map['theme'] = ["like", "%" . $this->request->param("theme") . "%"];
        }
    }

    //删除
    public function ldel(){
        $data = input('post.');
//        return $data;
//        exit('aa');
        $data['isdelete'] = 1;
        $info = db('activity')->update($data);
        if ($info){
            return 1;
        }
    }

    public function huifu(){
        echo "1";
    }


    //回收站
    public function recycleBin()
    {
//        $map['a.isdelete']=1;
//        unset($map['isdelete']);

        //管理员：0；学生处：1；二级学院：2；
        $quanxian = db('admin_role_user')->where('user_id='.Session::get('iu_id'))->find();
        switch ($quanxian['role_id'])
        {
            case 1: //学生处   1
                $this->view->assign('quanxian',1);
                $where = '1=1';
                break;
            case 6://二级学院   2
                $this->view->assign('quanxian',2);
                $where = 'college='.Session::get('coll');
                break;
            default://管理员   0
                $this->view->assign('quanxian',0);
                $where = '1=1';
        }

        //参数
        $page = 10;         //分页
        $status = [3,4,5];     //项目标识:3[结束],4[退回],5[撤回]

        //Sql语句 需要连表-管理员表【发布人员、审核人员】
        $info = db('activity')
            ->alias('a')
            ->where('a.status','in',$status)
            ->where('isdelete=1')
            ->where($where)
            ->paginate($page);

        //映射数据 ：分页、content、记录条数
        $this->view->assign('page',$info->render());    //分页
        $this->view->assign('list',$info);              //主页数据列
        $this->view->assign('count', $info->total());   //数据条数
        $this->view->assign('stu',1);

        return $this->view->fetch();
    }

    //  详情
    public function table()
    {
        $info =db('activity')
            ->alias('a')
            ->where('a.id='.input('id'))
            ->join('admin_user b','a.audit_number=b.id')    //审核人
            ->join('admin_user c','a.issue_number=c.id')    //发布人
            ->field('a.*,b.realname,c.realname realname1')
            ->select();

        $this->view->assign('list', $info);
        return $this->view->fetch('table');
    }

    //评分映射
    public function pingfen(){
        $id = input('id');
        $sel = db('activity')->where('id='.$id) ->find();
        $this->view->assign('sel', $sel['grade']);
        $this->view->assign('id', $id);
        return $this->view->fetch('pingfen');
    }

    //评分修改
    public function grade(){
       $data = input('post.');
       db('activity')->update($data);
       return '1';
    }





    /**
     * 永久删除
     */
    public function deleteForever()
    {
        $model = $this->getModel();
        $pk = $model->getPk();
        $ids = $this->request->param($pk);
        $where[$pk] = ["in", $ids];

        //从数据库查找地址且删除附件
        $files = db('activity')->where('id='.$ids)->find();
        //https://192.168.4.251:8443/svn/lzserver//        $a = 'D:\phpStudy\WWW\lzserver\public\tmp\uploads/20181214\686cfa18685d3ee07a9998206ca00fb5.txt';
        //$project = 'D:\phpStudy\WWW\lzserver\public'.$files['project'];
        unlink ('.'.$files['project']);

        if (false === $model->where($where)->delete()) {
            return ajax_return_adv_error($model->getError());
        }
        return ajax_return_adv("删除成功");
    }
    /**
     * 默认删除操作
     */
    public function delete()
    {
        return $this->updateField($this->fieldIsDelete, 1, "移动到回收站成功");
    }

    /**
     * 从回收站恢复
     */
    public function recycle()
    {
        return $this->updateField($this->fieldIsDelete, 0, "恢复成功");
    }
}
