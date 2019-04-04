<?php
namespace app\admin\controller;

\think\Loader::import('controller/Controller', \think\Config::get('traits_path') , EXT);
use think\Loader;
use think\Exception;
use think\Config;
use think\Db;
use app\admin\Controller;
use think\Session;

class PastAct extends Controller
{
    use \app\admin\traits\controller\Controller;
    // 方法黑名单
    protected static $blacklist = [];

    protected function filter(&$map)
    {

        if ($this->request->param("title")) {
            $map['title'] = ["like", "%" . $this->request->param("title") . "%"];
        }

    }
    //回收站方法
    public function recycleBin()
    {


        $coll = Session::get('coll');
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

//查询是否删除
        $map['pa.isdelete'] = 1;
        unset($map['isdelete']);
//判断是学生处还是超级管理员   0是管理员 1 是学生处
        if($coll==0||$coll==1){

        }else{
            $map['pa.college']=$coll;
        }
//连表查询
        $list = db('past_act')->alias('pa')
            //连表activity
            ->join('__ACTIVITY__ ac', 'pa.aid=ac.id')
            //连表admin_user
            ->join('__ADMIN_USER__ au', 'pa.iu_id=au.id')
            //连表所属学院
            ->join('__TEACHING__ t','pa.college = t.id')
            //需要的字段
            ->field('pa.*,ac.theme,ac.id ac_id,ac.issue_number,au.realname,ac.project,t.catname')
            //倒序排序
            ->order('pa.id desc')
            //查询是状态为举行完毕的活动
            ->where('ac.status=3')
            ->where($map)
            //分页数据4条
            ->paginate(4);
        $this->view->assign('list', $list);
        $this->view->assign('coll',$coll);
        $this->view->assign("count", $list->total());
        $this->view->assign("page", $list->render());
        $this->view->assign('numPerPage', $list->listRows());



        return $this->view->fetch();

    }
    //首页页面方法
    public function index()
    {

        $coll = Session::get('coll');
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

//查询是否删除
        $map['pa.isdelete'] = 0;
        unset($map['isdelete']);
//判断是学生处还是超级管理员   0是管理员 1 是学生处
        if($coll==0||$coll==1){

        }else{
            $map['pa.college']=$coll;
        }
//连表查询
        $list = db('past_act')->alias('pa')
            //连表activity
            ->join('__ACTIVITY__ ac', 'pa.aid=ac.id')
            //连表admin_user
            ->join('__ADMIN_USER__ au', 'pa.iu_id=au.id')
            //连表所属学院
             ->join('__TEACHING__ t','pa.college = t.id')
            //需要的字段
            ->field('pa.*,ac.theme,ac.id ac_id,ac.issue_number,au.realname,ac.project,t.catname')
            //倒序排序
            ->order('pa.id desc')
            //查询是状态为举行完毕的活动
            ->where('ac.status=3')
            ->where($map)
            //分页数据4条
            ->paginate(4);
        $this->view->assign('list', $list);
        $this->view->assign('coll',$coll);
        $this->view->assign("count", $list->total());
        $this->view->assign("page", $list->render());
        $this->view->assign('numPerPage', $list->listRows());



        return $this->view->fetch();
    }

//添加方法
    public function add()
    {
        $coll = Session::get('coll');
        $controller = $this->request->controller();
 //查询activity表
        if($coll==0||$coll==1){
            $map='';
        }else{
            $map['college']=$coll;
        }
        $selelist=db('activity')->where($map)->where('status=3')->select();
        $this->view->assign('selelist',$selelist);
        if ($this->request->isAjax()) {
            // 插入
            $data = $this->request->except(['id']);
            $data['releasetime'] = time();
            $data['iu_id'] = Session::get('iu_id');
            $data['college'] = Session::get('coll');
            if (empty($data['img'])) {
                $data['img'] = '/static/admin/images/5abd0172fb1966040afe7f2e5c313d4d.jpg';
            }

            // 验证
            if (class_exists($validateClass = Loader::parseClass(Config::get('app.validate_path'), 'validate', $controller))) {
                $validate = new $validateClass();
                if (!$validate->check($data)) {
                    return ajax_return_adv_error($validate->getError());
                }
            }
                // 写入数据
                if (
                    class_exists($modelClass = Loader::parseClass(Config::get('app.model_path'), 'model', $this->parseCamelCase($controller)))
                    || class_exists($modelClass = Loader::parseClass(Config::get('app.model_path'), 'model', $controller))
                ) {
                    //使用模型写入，可以在模型中定义更高级的操作
                    $model = new $modelClass();
                    $ret = $model->isUpdate(false)->save($data);
                } else {
                    // 简单的直接使用db写入
                    Db::startTrans();
                    try {
                        $model = Db::name($this->parseTable($controller));
                        $ret = $model->insert($data);
                        // 提交事务
                        Db::commit();
                    } catch (\Exception $e) {
                        // 回滚事务
                        Db::rollback();

                        return ajax_return_adv_error($e->getMessage());
                    }
                }

            return ajax_return_adv('添加成功');
        } else {
            // 添加
            return $this->view->fetch(isset($this->template) ? $this->template : 'edit');
        }
    }
//修改方法
    public function edit()
    {
        $coll = Session::get('coll');
        if($coll==0||$coll==1){
            $map='';
        }else{
            $map['college']=$coll;
        }
        $selelist=db('activity')->where($map)->where('status=3')->select();
        $this->view->assign('selelist',$selelist);

        $controller = $this->request->controller();

        if ($this->request->isAjax()) {
            // 更新
            $data = $this->request->post();
            if (!$data['id']) {
                return ajax_return_adv_error("缺少参数ID");
            }

            // 验证
            if (class_exists($validateClass = Loader::parseClass(Config::get('app.validate_path'), 'validate', $controller))) {
                $validate = new $validateClass();
                if (!$validate->check($data)) {
                    return ajax_return_adv_error($validate->getError());
                }
            }

            // 更新数据
            if (
                class_exists($modelClass = Loader::parseClass(Config::get('app.model_path'), 'model', $this->parseCamelCase($controller)))
                || class_exists($modelClass = Loader::parseClass(Config::get('app.model_path'), 'model', $controller))
            ) {
                // 使用模型更新，可以在模型中定义更高级的操作
                $model = new $modelClass();
                $ret = $model->isUpdate(true)->save($data, ['id' => $data['id']]);
            } else {
                // 简单的直接使用db更新
                Db::startTrans();
                try {
                    $model = Db::name($this->parseTable($controller));
                    $ret = $model->where('id', $data['id'])->update($data);
                    // 提交事务
                    Db::commit();
                } catch (\Exception $e) {
                    // 回滚事务
                    Db::rollback();

                    return ajax_return_adv_error($e->getMessage());
                }
            }

            return ajax_return_adv("编辑成功");
        } else {
            // 编辑
            $id = $this->request->param('id');
            if (!$id) {
                throw new HttpException(404, "缺少参数ID");
            }
            $vo = $this->getModel($controller)->find($id);
            if (!$vo) {
                throw new HttpException(404, '该记录不存在');
            }

            $this->view->assign("vo", $vo);

            return $this->view->fetch();
        }
    }

//详情显示页方法
    public function lay()
    {
        //接受id
            $id=input('id');
            $list=db('activity')
                ->alias('ac')
                ->join('__ADMIN_USER__ au','ac.audit_number=au.id')
                ->join('__ADMIN_USER__ au1','ac.issue_number=au1.id')
                ->field('au1.realname realname1,au.realname,ac.*')
                ->where('ac.id='.$id)
                ->select();

            $this->view->assign('list',$list);

        return $this->view->fetch('layer');
    }
    //评分页面显示方法
    public function grade(){
        $id=input('id');
        $data=db('past_act')->where('id='.$id)->find();
        $this->view->assign('data',$data);
        return $this->view->fetch();
    }
    //修改评分方法
    public function grade_check(){
        $data=input('post.');
        //echo $data;
        //print_r($data);exit;
        $info=db('past_act')->update($data);
        if($info){
            return ajax_return_adv("编辑成功");
        }
    }
}