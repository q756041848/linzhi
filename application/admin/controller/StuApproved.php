<?php
namespace app\admin\controller;
\think\Loader::import('controller/Controller', \think\Config::get('traits_path'), EXT);
use think\Session;
use app\admin\Controller;
use think\Loader;
use think\Config;
use think\Db;
class StuApproved extends Controller
{
    use \app\admin\traits\controller\Controller;
    // 方法黑名单
    protected static $blacklist = [];

//搜索
    protected function filter(&$map)
    {

        if ($this->request->param("name")) {
            $map['name'] = ["like", "%" . $this->request->param("name") . "%"];
        }
        if ($this->request->param("class")) {
            $map['class'] = ["like", "%" . $this->request->param("catname3") . "%"];
        }
        if ($this->request->param("phone")) {
            $map['phone'] = ["like", "%" . $this->request->param("phone") . "%"];
        }
    }
    //详情
    public function show()
    {
        $id = input('id');
        $map['s.id'] = $id;
        $list = db('stu_apply')
            ->alias('s')
            ->join('teaching t', 't.id=s.college')
            ->join('teaching ta', 'ta.id=s.department')
            ->join('teaching tas', 'tas.id=s.class')
            ->field('s.*,t.catname catname1,ta.catname catname2,tas.catname catname3')
            ->where($map)
            ->find();
        $list['exchange'] = db('admin_exchange')->where('stu_id=' . $id)->select();
        $list['exper'] = db('experience')->where('sid="' . $id . '"')->select();
        $list['honor'] = db('honor')->where('sid="' . $id . '"')->select();
        if (empty($list['photo'])) {
            $list['photo'] = '/static/admin/images/touxaing.png';
        }
        $this->view->assign('vo', $list);
        return $this->view->fetch();
    }
//首页
    public function index()
    {
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

        $map['s.isdelete'] = 0;
        $map['s.status'] = 1;
        $page = 10;  ///分页/
        //学院系班级
        $list = db('stu_apply')->alias('s')
            ->join('teaching t', 't.id=s.college')
            ->join('teaching ta', 'ta.id=s.department')
            ->join('teaching tas', 'tas.id=s.class')
            ->field('s.*,t.catname catname1,ta.catname catname2,tas.catname catname3')
            ->where($map)
            ->where($where)
            ->order('s.id desc')
            ->paginate($page);
        $this->view->assign('page', $list->render());    //分页
        $this->view->assign('list', $list);
        $this->view->assign('count', $list->total());   //数据条数
        return $this->view->fetch();
    }
    //修改
    public function edit()
    {
        $id = input('id');
        $map['s.id'] = $id;
        $map['s.isdelete'] = 0;
        $map['s.status'] = 1;
        $list = db('stu_apply')
            ->alias('s')
            ->join('teaching t', 't.id=s.college')
            ->join('teaching ta', 'ta.id=s.department')
            ->join('teaching tas', 'tas.id=s.class')
            ->field('s.*,t.catname catname1,ta.catname catname2,tas.catname catname3')
            ->where($map)
            ->select();
        foreach ($list as $key => $value) {
            $v1 = $value['catname1'];
            $v2 = $value['catname2'];
            $v3 = $value['catname3'];
        }
        $this->view->assign('list1', $v1);
        $this->view->assign('list2', $v2);
        $this->view->assign('list3', $v3);

        //学院
        $college = db('teaching')
            ->where('pid=0')
            ->where('id>1')
            ->select();
        //专业
        $department = db('teaching')
            ->where('pid>0&&pid<8')
            ->select();
        //班级
        $class = db('teaching')
            ->where('pid>7')
            ->select();

        $this->view->assign('class', $class);
        $this->view->assign('college', $college);
        $this->view->assign('department', $department);

        $data = input('post.');
        if ($data) {
            db('stu_apply')->update($data);
            return ajax_return_adv('修改成功');
        }
        $id = $id = input('id');
        $vo = db('stu_apply')->where('id=' . $id)->find($id);
        $this->view->assign("vo", $vo);
        return $this->view->fetch();
    }

    //兑换积分
    public function exchange()
    {
        $id = input('id');
        $list = db('stu_apply')
            ->alias('s')
            ->join('work_sheet w', 'w.sid=s.id')
            ->field('s.name,w.times')
            ->where('id=' . $id)
            ->find();
        $this->view->assign('vo', $list);
        return $this->view->fetch();
    }
}
