<?php
namespace app\home\controller;

use think\Controller;
use think\Session;
class Index extends Controller
{
    //新闻首页
    public function Index()
    {   
        $se = Session::get('user');
        $tags = input('tags');

    //获取传过来的关键词
        if ($tags) {
            $map = ['title' => ['like', '%' . $tags . '%']];
            $catlist = db('past_act')
                ->order('pv desc')
                ->where($map)
                ->where('status=1')
                ->where('isdelete=0')
                ->paginate(8);
            $this->assign('showpage', $catlist->render());
            $this->assign('list', $catlist);
            $catlist2 = db('past_act')
                ->order('id desc')
                ->where($map)
                ->where('status=1')
                ->where('isdelete=0')
                ->paginate(20);
            $this->assign('tags', $tags);
            $this->assign('list2', $catlist2);
        } else {
            $catlist = db('past_act')
                ->order('pv desc')
                ->where('status=1')
                ->where('isdelete=0')
                ->paginate(8);
            $this->assign('showpage', $catlist->render());
            $this->assign('list', $catlist);
            $catlist2 = db('past_act')
                ->order('id desc')
                 ->where('status=1')
                 ->where('isdelete=0')
                ->paginate(20);
            $this->assign('tags', null);//没有关键词的情况处理
            $this->assign('list2', $catlist2);
        }
        
        $this->assign('se', $se);
        $greatpeople= db('stu_act_info')
        ->alias('s')
        ->join('activity ac', 's.aid=ac.id')
        ->join('stu_apply sa','sa.id=s.sid')
        ->group('s.sid')
        ->having('count(s.grade)>=3 and grade="A+"')
        ->field('s.*,sa.name,photo,ac.theme')
        ->select(); 
        $this->assign('greatpeople',$greatpeople);
       
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

        return $this->fetch();
    }
//新闻详情
    public function single()
    {
        $se = Session::get('user');
        $id = input('id');
        db('past_act')->where('id='.$id)->setInc('pv'); 
        $newslist = db('past_act')
            ->alias('p')
            ->join('admin_user au', 'au.id=p.iu_id')
            ->join('teaching tc ','p.college=tc.id')
            ->where('p.id=' . $id)
            ->order('p.id desc')
            ->field('p.*,au.realname,tc.catname')
            ->find();
        $this->assign('newslist', $newslist);
        $tags = input('tags');//获取传过来的关键词
        if ($tags) {
            $map = ['title' => ['like', '%' . $tags . '%']];
            $newslist2 = db('past_act')
                ->alias('p')
                ->join('admin_user au', 'au.id=p.iu_id')
                ->order('p.id desc')
                ->where($map)
                 ->where('p.status=1')
                ->field('p.*,au.realname')
                ->paginate(20);
            $this->assign('tags', $tags);
            $this->assign('newslist2', $newslist2);
        } else {
            $newslist2 = db('past_act')
                ->alias('p')
                ->join('admin_user au', 'au.id=p.iu_id')
                 ->where('p.status=1')
                 ->where('p.isdelete=0')
                ->order('p.id desc')
                ->field('p.*,au.realname')
                ->paginate(20);
            $this->assign('tags', null);//没有关键词的情况处理
            $this->assign('newslist2', $newslist2);

        }
        $this->assign('se', $se);
        return $this->fetch();
    }
    public function volunt(){
        $se = Session::get('user');
        $id = input('sid');
        $voluntlist= db('stu_act_info')
        ->alias('s')
        ->join('activity ac', 's.aid=ac.id')
        ->join('stu_apply sa','sa.id=s.sid')
        ->group('s.sid')
        ->having('count(s.grade)>=3 and grade="A+"')
        ->field('s.*,sa.name,photo,ac.theme,issue_time,unit')
        ->find();
        $voluntlist2= db('stu_act_info')
        ->alias('s')
        ->join('activity ac', 's.aid=ac.id')
        ->join('stu_apply sa','sa.id=s.sid')
        ->group('s.sid')
        ->having('count(s.grade)>=3 and grade="A+"')
        ->field('s.*,sa.name,photo,ac.theme')
        ->select();  
        $this->assign('voluntlist',$voluntlist);
        $this->assign('voluntlist2',$voluntlist2);

        $this->assign('se', $se);
        return $this->fetch();
    }
    
}
?>