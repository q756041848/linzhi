<?php
namespace app\admin\controller;

\think\Loader::import('controller/Controller', \think\Config::get('traits_path') , EXT);

use think\Loader;
use think\Config;
use think\Db;
use app\admin\Controller;
use think\Session;

class StuActInfo extends Controller
{
    use \app\admin\traits\controller\Controller;
    // 方法黑名单
    protected static $blacklist = [];
//搜索
    protected function filter(&$map)
    {
        if ($this->request->param("content")) {
//            $nanny = $this->request->param("sid");
//            $list=db('vol_apply')->where('name='. "$nanny")->select();
//            echo "<pre>";
//            print_r($list[0]['name']);
//            exit;
            $map["content"] = ["like", "%" . $this->request->param("content") . "%"];
//            $map['a.id']=$this->request->param("id");
//            unset($map['id']);

//            $list=db('stu_act_info')
//                ->alias('a')
//                ->join('__TEACHING__ ac','ac.id=a.secschool')
//                ->join('__ACTIVITY__ pa','a.a_id=pa.id')
//                ->join('__VOL_APPLY__ vo','a.sid=vo.id')
//                ->join('__ADMIN_USER__ us','a.sec_assessor=us.id')
//                ->join('__ADMIN_USER__ ux','a.assessor=ux.id')
//                ->where('a.sid='.$nanny)
//                ->field('a.*,pa.theme,vo.name,ac.catname,us.realname,ux.realname realnames')
//                ->select();
//            echo "<pre>";
//            print_r($list);
//            exit;
//            echo db('stu_act_info')->getLastSql();
//            exit;
//            $this->view->assign('list',$list);
//            zhangxiaoyu 18nian12yue25ri;
        }
    }
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

        $coll = Session::get('coll');
        if($coll==0||$coll==1){

        }else{
            $map['a.secschool']=$coll;
        }
        $map['a.isdelete']=0;
        unset($map['isdelete']);
//        echo "<pre>";
//        print_r($map);
//        exit;
        $list=db('stu_act_info')
            ->alias('a')
            ->join('__TEACHING__ ac','ac.id=a.secschool')
            ->join('__ACTIVITY__ pa','a.aid=pa.id')
            ->join('__STU_APPLY__ vo','a.sid=vo.id')
            ->where($map)
            ->order('a.id')
            ->field('a.*,pa.theme,vo.name,ac.catname')
//,us.realname
            ->select();
        $count=db('stu_act_info')
            ->alias('a')
            ->join('__TEACHING__ ac','ac.id=a.secschool')
            ->join('__ACTIVITY__ pa','a.aid=pa.id')
            ->join('__STU_APPLY__ vo','a.sid=vo.id')
            ->where($map)
            ->order('a.id')
            ->field('count(*)')
//,us.realname
            ->select();
//            echo "<pre>";
//            print_r($count[0]['count(*)']);
//            exit;
//        $a=Session::get('coll');
//        print_r($a);
//        exit;
        $this->view->assign('list',$list);
        $this->view->assign('count',$count[0]['count(*)']);
        $this->view->assign('coll',$coll);
        return $this->view->fetch();
    }
    //回收站
    public function recycleBin()





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

        $map['a.isdelete']=1;
        unset($map['isdelete']);

        $list=db('stu_act_info')
            ->alias('a')
            ->join('__TEACHING__ ac','ac.id=a.secschool')
            ->join('__ACTIVITY__ pa','a.aid=pa.id')
            ->join('__STU_APPLY__ vo','a.sid=vo.id')
            ->where($map)
            ->field('a.*,pa.theme,vo.name,ac.catname')
            ->select();
        $this->view->assign('list',$list);
        return $this->view->fetch();
    }
    //评分
    public function grade(){
        $id=input('id');
        $coll = Session::get('coll');
//            echo "<pre>";
//            print_r($id);
//            exit;
        $data=db('stu_act_info')->where('id='.$id)->find();
        $this->view->assign('data',$data);
        $this->view->assign('coll',$coll);
        return $this->view->fetch();
    }
    //评分修改
    public function grade_check(){
        $id=input('id');
//        print_r($id);
//        exit;
        $grade=input('grade');
        $data=[
            'condition'=>1,
            'id'=>$id,
            'grade'=>$grade
        ];

        $info=db('stu_act_info')->update($data);
        if($info){
            return ajax_return_adv("编辑成功");
        }
    }
    //详情
    public function lay()
    {
        $id=input('id');
        $lists=db('stu_act_info')->where('id='.$id)->find();
//            echo "<pre>";
//            print_r($lists);
//            exit;
        $list=db('stu_act_info')
            ->alias('a')
            ->join('__TEACHING__ ac','ac.id=a.secschool')
            ->join('__ACTIVITY__ pa','a.aid=pa.id')
            ->join('__STU_APPLY__ vo','a.sid=vo.id')
            ->where('a.id='.$id)
            ->field('a.*,pa.theme,vo.name,ac.catname')
            ->select();
//            echo "<pre>";
//            print_r($list);
//            exit;
        $this->view->assign('list',$list[0]);
        $this->view->assign('vo',$lists);
        return $this->view->fetch('layer');

    }
    //第一个状态修改
    public function addedit(){
        $id=input('id');
        $ids = Session::get('iu_id');
        $list=db('admin_user')->where('id='. $ids)->select();
//        echo "<pre>";
//        print_r($list[0]['realname']);
//        exit;
        $infos=db('stu_act_info')->where('id='. $id)->select();
        $nanny=$infos[0]['sec_ass_status']?0:1;
        $data=[
            "id"=>$id,
            "sec_ass_status"=>$nanny,
            "sec_assessor"=>$list[0]['realname'],
            "sec_ass_date"=>date("Y-m-d H:i:s")
        ];
        $info=db('stu_act_info')->update($data);
        echo "<script>window.location ='/admin/stu_act_info/index'</script>";
}
    //第二个状态修改
    public function addedits(){
        $id=input('id');
        $ids = Session::get('iu_id');
//        echo "<pre>";
//        print_r($coll);
//        exit;
        $list=db('admin_user')->where('id='.$ids)->select();

        $infos=db('stu_act_info')->where('id='. $id)->select();
        $nanny=$infos[0]['ass_status']?0:1;
        $data=[
            "id"=>$id,
            "ass_status"=>$nanny,
            "assessor"=>$list[0]['realname'],
            "ass_date"=>date("Y-m-d H:i:s")
        ];
        $info=db('stu_act_info')->update($data);
        echo "<script>window.location ='/admin/stu_act_info/index'</script>";
    }
}
