<?php
namespace app\home\controller;

use think\Controller;
use think\Session;
use think\Image;
use think\Loader;
use think\File;
use think\Request;

class News extends Controller
{
    public function __construct(Request $request = null)
    {
        parent::__construct($request);
        if (!Session::has('id')) {
            $this->redirect('Registe/index');
        }      
    }

    public function apply()
    {
        //个人信息
        $id = Session::get('id');
        $userlist = db('stu_apply')->where('id=' . $id)->find();
        $this->assign('userlist', $userlist);
        //工作经历
        $exlist = db('experience')->where('sid=' . $id)->select();
        $this->assign('exlist', $exlist);
        //所获荣誉
        $honorlist = db('honor')->where('sid=' . $id)->select();
        $this->assign('honorlist', $honorlist);
        //活动申请
        $projectlist = db('applications')
            ->alias('a')
            ->join('activity ac', 'a.aid=ac.id')
            ->where($id . '=a.sid')
            ->order('a.id desc')
            ->field('a.status,a.aid,ac.theme')
            ->select();
        $this->assign('projectlist', $projectlist);
        //兑换中心
        $integral = db('admin_exchange')
            ->alias('ae')
            ->join('stu_act_info sa', 'sa.sid=ae.stu_id')
            ->join('activity ac', 'ac.id=sa.aid')
            ->where('stu_id=' . $id)
            ->field('ae.*,ac.theme')
            ->find();
        $integra2 = db('admin_exchange')
            ->alias('ae')
            ->join('stu_act_info sa', 'sa.sid=ae.stu_id')
            ->join('activity ac', 'ac.id=sa.aid')
            ->where('stu_id=' . $id)
            ->field('ac.theme')
            ->select();
        $this->assign('integral', $integral);
        $this->assign('integra2', $integra2);
         //活动信息
        $messagelist = db('applications')
            ->alias('s')
            ->join('activity ac', 's.aid=ac.id')
            ->join('stu_apply ap', 'ap.id=s.sid')
            ->where('s.sid=' . $id)
            ->where('s.status=1')
            ->field('s.*,ac.theme,ap.name')
            ->select();
         $messagelist2 = db('applications')
         ->alias('s')
         ->join('activity ac', 's.aid=ac.id')
         ->join('stu_apply ap', 's.sid=ap.id')
         ->join('teaching te', 'te.catname=ac.unit')
         ->join('stu_act_info sa','sa.aid=ac.id')
         ->where('s.sid=' . $id)
         ->field('s.*,ac.theme,ap.name,te.id,sa.aid,images')
         ->find();
        $messagelist3 = db('stu_apply')->where('id=' . $id)->find();
        $this->assign('messagelist', $messagelist);
        $this->assign('messagelist3', $messagelist3);
     //往期活动感悟
        $oldlist = db('stu_act_info')
             ->alias('sa')
             ->join('activity ac', 'sa.aid=ac.id')
             ->where('sa.sid=' . $id)
            ->select();
        $this->assign('oldlist', $oldlist);
     //岗位
        $this->assign('work', $messagelist);
        $this->assign('messname', $messagelist2);
     //岗位申请
        $worklist = db('jobclass')->select();
        $this->assign('worklist', $worklist);
        $id = Session::get('id');
        if(!$id){
            $id=0;
        }
        $zhi=db('stu_apply')->where('status=1')->where('id='.$id)->select();
        if($zhi){
            $a=1;
            $this->assign('a',$a);
        }else{
            $a=0;
            $this->assign('a',$a);
        }
        
    //岗位申请列表
    $postapply=db('post_apply')
    ->alias('po')
    ->where("sid='$id'")
    ->join('activity ac','po.aid=ac.id')
    ->join('jobclass jo','po.poid=jo.id')
    ->field('ac.theme,jo.pname,po.status')
    ->select();
    $this->assign('postapply',$postapply);
    return $this->fetch();
    }
    //个人信息添加头像
    public function modal_upload_img()
    {
        return $this->fetch();
    }
    public function upimg()
    {
        $id = Session::get('id');
        $x = input('X');
        $y = input('Y');
        $w = input('W');
        $h = input('H');
        $image = \think\Image::open(request()->file('photo'));
//        echo "<pre>";
//        print_r($image);exit;
        //将图片裁剪为300x300并保存为crop.png
        $filename = date('YmdHis', time());
        $image->crop($w, $h, $x, $y)->save('.' . Config('uploadpath') . '/' . $filename . '.png');
       // $image->thumb(150, 150)->save(Config('uploadpath').'/thumb.png');
       // $file=request()->file('photo');
     //$info=$file->move(Config('uploadpath'));
        $sql = db("stu_apply")->where('id=' . $id)->setField('photo', $filename);
        $msg = [
            'code' => 1,
            'path' => Config('uploadpath') . '/' . $filename . '.png'
        ];
        return json_encode($msg);
    }
    //活动信息上传图片
    public function modal_upload_img2()
    {
        return $this->fetch();
    }

    public function upimg2()
    {
        $id = Session::get('id');
        $x = input('X');
        $y = input('Y');
        $w = input('W');
        $h = input('H');
        $image = \think\Image::open(request()->file('images'));

        //将图片裁剪为300x300并保存为crop.png
        $filename = date('YmdHis', time());
        $image->crop($w, $h, $x, $y)->save('.' . Config('uploadpath') . '/' . $filename . '.png');


        $msg = [
            'code' => 1,
            'path' => Config('uploadpath') . '/' . $filename . '.png'
        ];
        return json_encode($msg);
    }
    //提交我的活动信息
    public function insertmessage()
    {
        $udata = input('post.');
        $nanny = input('aid');
        // echo "<pre>";
        // print_r($udata);
        // exit;
        unset($udata['name']);
        $udata['sid'] = Session::get('id');
        $sql = db('stu_act_info')->where('aid=' . $nanny)->where('sid=' . $udata['sid'])->select();
        if ($sql) {
            return 0;
        } else {
            $info = db('stu_act_info')->insert($udata);
            print_r($info);
        }



    }

//个人信息修改
    public function do_useredit()
    {
        $data = input('post.');
        // print_r($data);exit;
        $info = db('stu_apply')->update($data);
        return json_encode($info);
    }


//工作经历修改映射
    public function editwork()
    {
        $id = input('id');
        $work = db('experience')->where('eid=' . $id)->find();
        $work['starttime']=date("Y-m-d",$work['starttime']) ;
        $work['endtime']=date("Y-m-d",$work['endtime']) ;
        $this->assign('work', $work);
        return $this->fetch();
    }


    //工作经历修改
    public function editxiu()
    {
        $udata = input('post.');
        $id = $udata['eid'];
        $udata['starttime'] = strtotime( $udata['starttime']);
        $udata['endtime'] = strtotime( $udata['endtime']);
        $info = db('experience')->update($udata);
        $sel = db('experience')->where('eid=' . $id)->find();
        return $sel;
    }


    //添加工作经历
    public function insertwork()
    {
        $data = input('post.');

        if (empty($data)) {
            $id = input('id');
            $work = db('experience')->find();
            $this->assign('work', $work);
            return $this->fetch();
        } else {
            $udata = input('post.');
            $udata['sid'] = Session::get('id');
            $udata['starttime'] = strtotime( $udata['starttime']);
            $udata['endtime'] = strtotime( $udata['endtime']);
            $info = db('experience')->insertGetId($udata);
            $sel = db('experience')->where('eid=' . $info)->find();
            return $sel;

        }
    }
    //所获荣誉添加
    public function inserthonor()
    {
        $data = input('post.');
        if (empty($data)) {
            $id = input('id');
            $honor = db('honor')->find();
            $this->assign('honor', $honor);
            return $this->fetch();
        } else {
            $udata = input('post.');
            $udata['sid'] = Session::get('id');
            $in = db('honor')->where('sid=' . $udata['sid'])->count();
            if ($in >= 3) {
                $msg = [
                    'code' => 0,
                    'msg' => '所获荣誉只能添加三条'
                ];
                return json_encode($msg);
            }else{
                $udata['award_date'] = strtotime( $udata['award_date']);
                $info = db('honor')->insertGetId($udata);
                $sel = db('honor')->where('hid=' . $info)->find();
                $msg = [
                    'code' => 1,
                    'msg' => $sel
                ];
                return json_encode($msg);
            }
           
        }
    }
    //修改所获荣誉映射
    public function edithonor()
    {

        $id = input('id');
        $honor = db('honor')->where('hid=' . $id)->find();
        $honor['award_date']=date('Y-m-d',$honor['award_date']);
        $this->assign('honor', $honor);
        return $this->fetch();
    }
    //修改所获荣誉映射
    public function editsuo()
    {
        $udata = input('post.');
        $id = $udata['hid'];
        $udata['award_date'] = strtotime( $udata['award_date']);
        $honor = db('honor')->update($udata);
        $sel = db('honor')->where('hid=' . $id)->find();
        return $sel;
    }
    public function News()
    {
        $tags = input('tags');   
    //获取传过来的关键词
        if ($tags) {
            $map = ['theme' => ['like', '%' . $tags . '%']];
            $catlist = db('activity')
                ->order('id desc')
                ->where($map)
                ->where('status=2')
                ->where('isdelete=0')
                ->paginate(8);
            $this->assign('showpage', $catlist->render());
            $this->assign('list', $catlist);
            $catlist2 = db('activity')
                ->order('id desc')
                ->where($map)
                ->where('status=2')
                ->where('isdelete=0')
                ->select();
            $this->assign('tags', $tags);
            $this->assign('list2', $catlist2);
            $id = Session::get('id');
            if(!$id){
                $id=0;
            }
            $zhi=db('stu_apply')->where('status=1')->where('id='.$id)->select();
            if($zhi){
                $a=1;
                $this->assign('a',$a);
            }else{
                $a=0;
                $this->assign('a',$a);
            }
        } else {
            $catlist = db('activity')
                ->order('id desc')
                ->where('status=2')
                ->paginate(8);
            $this->assign('showpage', $catlist->render());
            $this->assign('list', $catlist);
            $catlist2 = db('activity')
                ->order('id desc')
                ->where('status=2')
                ->where('isdelete=0')
                ->select();
            $this->assign('tags', null);
            $this->assign('list2', $catlist2);
            $id = Session::get('id');
            $zhi=db('stu_apply')->where('status=1')->where('id='.$id)->select();
            if($zhi){
                $a=1;
                $this->assign('a',$a);
            }else{
                $a=0;
                $this->assign('a',$a);
            }
        }
        return $this->fetch();
    }
    public function Newslist()
    {
        $id = input('id');
        $newslist = db('activity')
            ->where('id=' . $id)
            ->where('status=2')
            ->where('isdelete=0')
            ->order('id desc')
            ->find();
        $this->assign('newslist', $newslist);
        $tags = input('tags');//获取传过来的关键词
        if ($tags) {
            $map = ['theme' => ['like', '%' . $tags . '%']];
            $newslist2 = db('activity')
                ->order('id desc')
                ->where($map)
                ->where('status=2')
                ->where('isdelete=0')
                ->select();
            $this->assign('tags', $tags);
            $this->assign('newslist2', $newslist2);
            $id = Session::get('id');
            if(!$id){
                $id=0;
            }
            $zhi=db('stu_apply')->where('status=1')->where('id='.$id)->select();
            if($zhi){
                $a=1;
                $this->assign('a',$a);
            }else{
                $a=0;
                $this->assign('a',$a);
            }
        } else {
            $newslist2 = db('activity')
                ->order('id desc')
                ->where('status=2')
                ->where('isdelete=0')
                ->select();
            $this->assign('tags', null);
            $this->assign('newslist2', $newslist2);
            $id = Session::get('id');
            if(!$id){
                $id=0;
            }
            $zhi=db('stu_apply')->where('status=1')->where('id='.$id)->select();
            if($zhi){
                $a=1;
                $this->assign('a',$a);
            }else{
                $a=0;
                $this->assign('a',$a);
            }
        }
      
        return $this->fetch();
    }
    public function addapp()
    {
        $id = Session::get('id');
        $idapp = input('post.');
        $aid = $idapp['aid'];
        $sta=db('activity')->where('id='.$aid)->column('start_time');
        foreach($sta as $key=>$val){
            $a=$val;//当前申请活动的开始时间
        }

        $over=db('activity')->where('id='.$aid)->column('over_time');
        foreach($over as $key=>$val){
            $b=$val;//当前申请活动的结束时间
        }
        $succ=db('applications')->where('sid='.$id)->column('aid');
        $tiao=count($succ);
        $i=0;
        foreach($succ as $key=>$val){
            $ids=$val;
            $stas=db('activity')->where('id='.$ids)->column('start_time');
            foreach($stas as $key=>$val){
                $c=$val;//申请成功活动的开始时间
           
            $overs=db('activity')->where('id='.$ids)->column('over_time');
            foreach($overs as $key=>$val){            
                $d=$val;//申请成功活动的结束时间
                $cha = db('applications')->where('sid=' . $id)->where('aid='.$aid)->select();
                if ($cha) {
                    $msg = ['code' => 0, 'msg' => '你已经申请过了，不能重复申请..'];
                    return json_encode($msg);
                }else{
                        if($b<$c || $a>$d){
                            $i++;
                             
                        }else{
                            $msg = ['code' => 2, 'msg' => '申请时间冲突'];
                            return json_encode($msg);
                        }
                    }    
                
             }
            
          }
        }
        if($i==$tiao){
            $cha = db('applications')->where('sid=' . $id)->where('aid='.$aid)->select();
            if (!$cha) {
                $idapp['filingdate']=time();  
                $val = db('applications')->insert($idapp);
                
                  $list = db('applications')->where('sid',null)->where('aid=' . $aid)->setField('sid', $id);

                $msg = ['code' => 1, 'msg' => '申请成功'];
                return json_encode($msg);
            }else {
                $msg = ['code' => 0, 'msg' => '你已经申请过了，不能重复申请.'];
                return json_encode($msg);
            }
            
            }else{               
                $msg = ['code' => 2, 'msg' => '申请时间冲突.'];
                return json_encode($msg);
            }
       
}
    public function add()
    {
        $stulist = input('post.');
        $val = db('stu_act_info')->insert($stulist);
        print_r($val);

    }
    //工作经历删除
    public function experience_del()
    {
        $eid = input('eid');
        $info = db('experience')->where('eid=' . $eid)->delete();
        if ($info) {
            $this->success('删除成功');
        } else {
            $this->error('删除失败');
        }
    }
    //所获荣誉删除
    public function honor_del()
    {
        $hid = input('hid');
        $info = db('honor')->where('hid=' . $hid)->delete();
        if ($info) {
            $this->success('删除成功');
        } else {
            $this->error('删除失败');
        }
    }
    
    //撤销活动申请
    public function projectlist()
    {
        $aid = input('aid');
        $projectlist = db('applications')->where('aid=' . $aid)->find();
        if ($projectlist['status'] == 0) {
            $info = db('applications')->where('aid=' . $aid)->delete();
            $msg = ['code' => 0, 'msg' => '撤销成功'];
        } else {
            if ($projectlist['status'] == 2) {
                $msg = ['code' => 2, 'msg' => '审核未通过，不能撤销'];
            }
            if ($projectlist['status'] == 1) {
                $msg = ['code' => 1, 'msg' => '不能撤销申请，审核已通过'];
            }

        }
        return json_encode($msg);
    }
    //岗位申请
    public function applywork()
    {
        
        $data = input('post.');
        $data['sid'] = Session::get('id');
        $data['time'] = time();
        $messagelist = db('applications')
            ->alias('s')
            ->join('activity ac', 's.aid=ac.id')
            ->join('stu_apply ap', 'ap.id=s.sid')
            ->where('s.sid=' . Session::get('id'))
            ->where('s.status=1')
            ->field('s.*,ac.theme,ap.name')
            ->count();
        if ($messagelist >= 3) {
            $jobclass=db('post_apply')->where('sid='.Session::get('id'))->where('aid='.$data['aid'])->select();
            if(!$jobclass){
                $val = db('post_apply')->insert($data);
                $msg = ['code' => 0, 'msg' => '申请成功，等待审核'];
            }else{
                $msg = ['code' => 2, 'msg' => '已经申请，请等待审核'];
            }
            
        } else {
            $msg = ['code' => 1, 'msg' => '不能申请，活动必须参加三次以上'];
        }
        return json_encode($msg);


    }

    public function logout()
    {
        Session::clear();
        $this->redirect('Index/index');
    }



}
?>
