<?php
namespace app\admin\controller;

\think\Loader::import('controller/Controller', \think\Config::get('traits_path') , EXT);

use app\admin\Controller;
use think\Loader;
use think\Exception;
use app\common\model\WebLog as ModelWebLog;
use think\Db;
use think\File;
use think\Request;
use think\Session;
//正在进行
class Pactivity extends Controller
{
    use \app\admin\traits\controller\Controller;
//    // 方法黑名单
    protected static $blacklist = [];


    //===========公共方法============//
    //首页
    public function index()
    {
        $page = 7;  //分页

        //管理员：0；学生处：1；二级学院：2；
        $quanxian = db('admin_role_user')->where('user_id='.Session::get('iu_id'))->find();//判断二级和三级的权限
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

        //Sql语句
        $info = db('activity')
            ->where('status','in',[0,1,2])  //0:待审核；1审核未发布；2已发布
            ->where($where)
            ->order('id desc')
            ->paginate($page);

        //映射数据 ：分页、content、记录条数
        $this->view->assign('page',$info->render());    //分页
        $this->view->assign('list',$info);              //主页数据列
        $this->view->assign('count', $info->total());   //数据条数

        return $this->view->fetch('index');
    }

    //详情
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

    //===========学生处============//
    //学生处专属审批方案
    public function audit(){
        $data = input('post.');
        $data['audit_number'] = Session::get('iu_id');
        $data['audit_time']= date("Y-m-d H:i:s",time());
        if($data['status']==4){
            $data['isdelete'] = 1;
        }
        $info = db('activity')->update($data);
        return $msg = ['code'=>"1"];
    }



    //===========二级学院============//
    //创建活动-->form表单部分
    public function edit()
    {
        $data = input('post.');
        if ($data){
            $data['college'] = Session::get('coll');          //学院id
            $data['issue_number'] = 0;     //发布人员等于0   默认
            $data['audit_number'] = 0;    //审核人员等于0   默认
            $data['initiator_time'] = time();   //发起时间
            $data['start_time'] = strtotime( $data['start_time']);      //开始时间转换
            $data['over_time'] = strtotime( $data['over_time']);       //结束时间转换
            $data['status'] = 0;
            $info = db('activity')->update($data);
            return ajax_return_adv('添加成功');
        }else{
            return $this->view->fetch('edit');
        }
    }
    public function testup()
    {
        return $this->view->fetch();
    }

    //创建活动-->文件上传不问->选择文件先上传然后返回插入id给前端，前端点击创建根基id修改数据库
    public function fil()
    {
        $file = $this->request->file('project');
        if ($file){
            $path = ROOT_PATH . 'public/tmp/uploads/';
            $name=iconv('utf-8','gbk',$file->getInfo()['name']);
            $info = $file->move($path,$name);
            $data['project'] =  $this->request->root() . '/tmp/uploads/' .$file->getInfo()['name'];
            $data['status'] = 6;    //状态等于6
        }
        $id = db('activity')->insertGetId($data);
        return $id;
    }

    //二级撤回申请
        public function chehui(){
            $data = [
                'id'=>input('id'),
                'isdelete'=>1,
                'status'=>5
            ];
            $info = db('activity')->update($data);
            if ($info){
                return $msg = ['code'=>'1'];
            }
        }

    //发布
    public function issue(){
        //影响字段:
        //发布人、发布日期、状态
        $data = [
            'id'=>input('id'),
            'issue_time'=>time(),
            'status'=>2,
            'issue_number'=>Session::get('iu_id')  //发布人
        ];
        $info = db('activity')->update($data);
        if ($info){
            return $msg = ['code'=>'1'];
        }
    }

    //结束按钮
    public function over(){
        $data = [
            'id'=>input('id'),
            'status'=>3,
            'over_time'=>time(), //结束日期
        ];
        $info = db('activity')->update($data);
        if ($info){
            return $msg = ['code'=>'1'];
        }
    }

    //活动申请人员->映射
    public function applications(){
        $id = input('id');
        if(!empty($id)){
            $info = db('applications')
                ->alias('a')
                ->where('a.aid='.$id)
                ->join('stu_apply	 b','a.sid=b.id')               //发布人
                ->join('teaching c0','c0.id=b.college')          //学院
                ->join('teaching c1','c1.id=b.department')      //系部
                ->join('teaching c2','c2.id=b.class')           //班级
                ->field('a.*,b.name,b.college,b.department,b.class,b.sex,c0.catname catname0,c1.catname catname1,c2.catname catname2')
                ->paginate(5);

            $this->view->assign('page',$info->render());
            $this->view->assign('list',$info);
        }
        //断判暂无申请
        $apply = \db('applications')->where('aid='.$id)->find();    //暂无申请判断
        $applynum = \db('organizers')->where('aid='.$id)->count();  //已招募
        $countnum = \db('activity')->where('id='.$id)->find();      //需要人数
        if ($apply){
            $this->view->assign('countnum',$countnum['number']);
            $this->view->assign('num',$applynum);
            $this->view->assign('states',1);
        }else{
            $this->view->assign('states',0);
        }
        return $this->view->fetch('applications');
    }


    //活动申请人员->操作
    //活动申请人员状态更改【organizers=活动人员表】、【activity=活动表】   //状态、审核人员、审核日期、退回原因
    //val1:退回状态；val2:申请表id；val3:提醒字；val4:活动id；val5:学生id;
    public function status(){
        $data = input('post.');
        //查人数
        $number = db('activity')->where('id='.$data['aid'])->find(); //活动表预期人数
        $num = db('organizers')->where('aid='.$data['aid'])->count();//已被审核通过活动人员表人数

        //通过：验证人数||退回：不执行
        if ($data['status']=='1'){
            //判断人数是否达到开始预期的人数
            if ($num<$number['number']){
                $upd['auditor'] =Session::get('iu_id');    //审核人id
                $upd['moddate'] = time();                       //审核时间
                $upd['status'] = $data['status'];               //状态
                $upd['id'] = $data['id'];                       //id
                db('applications')->update($upd);
                    //活动人员表
                    $insert['sid'] = $data['sid']; //学生id
                    $insert['aid'] = $data['aid'];  //活动id
                    $insert['post'] = 0;            //岗位id 默认是0
                    $info = db('organizers')->insert($insert);
                    return $info;
            }else{
                return 2;
            }
        }else{
            $upd['auditor'] =Session::get('iu_id');               //审核人id
            $upd['moddate'] = time();                                   //审核时间
            $upd['status'] = $data['status'];                           //状态
            $upd['id'] = $data['id'];                                   //id
            $upd['reason'] = !empty($data['reason'])?$data['reason']:'';//退回原因默认为空
            $info = db('applications')->update($upd);
            return $info;
        }
    }

    //岗位申请->操作
    //岗位表Name、岗位申请表数据学生id==参加活动学生id、学生表id,Name
    //stu_apply：学生表的姓名  //post：岗位表的名字  //post_apply：岗位申请  //applications：参加活动申请表的活动id    //organizers：人员表
    public function jobs(){
        $id = input('id');
        if(!empty($id)){        //判断其它方法错误，用于排错
            $info = db('post_apply')
                ->alias('a')
                ->join('jobclass b','a.poid=b.id')          //岗位链接
                ->join('stu_apply d','a.sid=d.id')         //参加活动申请表学生id==学生表学生id
                ->join('teaching c0','c0.id=d.college')     //学院
                ->join('teaching c1','c1.id=d.department')   //系部
                ->join('teaching c2','c2.id=d.class')       //班级
                ->where('a.aid='.$id)                                //岗位申请表id
                ->field('a.*,b.pname,d.name,d.sex,d.college,d.department,d.class,c0.catname catname0,c1.catname catname1,c2.catname catname2')
                ->paginate(5);

            $this->view->assign('page',$info->render());
            $this->view->assign('list',$info);
        }

        //断判暂无申请
        $apply = \db('post_apply')->where('aid='.$id)->find();
        if ($apply){
            $this->view->assign('num',\db('post_apply')->where('status=1 and aid='.$id)->count());
            $this->view->assign('count',\db('jobclass')->count());  //总人数
            $this->view->assign('states',1);
        }else{
            $this->view->assign('states',0);
        }
        return $this->view->fetch('jobs');
    }

    //岗位申请状态变动   //字段变动：状态、审核人员、审核日期
    public function jobsta(){
        $data = input();
        $data['atime'] = time();
        $data['audit'] = Session::get('iu_id');
        $info = db('post_apply')->update($data);
        if ($info){
            return $data;
        }
    }

}
