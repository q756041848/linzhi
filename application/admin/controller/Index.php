<?php
/**
 * tpAdmin [a web admin based ThinkPHP5]
 *
 * @author yuan1994 <tianpian0805@gmail.com>
 * @link http://tpadmin.yuan1994.com/
 * @copyright 2016 yuan1994 all rights reserved.
 * @license http://www.apache.org/licenses/LICENSE-2.0
 */

//------------------------
// 管理后台首页
//-------------------------

namespace app\admin\controller;

use app\admin\Controller;
use think\Loader;
use think\Session;
use think\Db;

class Index extends Controller
{

    public function index()
    {
        // 读取数据库模块列表生成菜单项
        $nodes = Loader::model('AdminNode', 'logic')->getMenu();

        // 节点转为树
        $tree_node = list_to_tree($nodes);

        // 显示菜单项
        $menu = [];
        $groups_id = [];
        foreach ($tree_node as $module) {
            if ($module['pid'] == 0 && strtoupper($module['name']) == strtoupper($this->request->module())) {
                if (isset($module['_child'])) {
                    foreach ($module['_child'] as $controller) {
                        $group_id = $controller['group_id'];
                        array_push($groups_id, $group_id);
                        $menu[$group_id][] = $controller;
                    }
                }
            }
        }

        // 获取授权节点分组信息
        $groups_id = array_unique($groups_id);
        if (!$groups_id) {
            exception("没有权限");
        }
        $groups = Db::name("AdminGroup")->where(['id' => ['in', $groups_id], 'status' => "1"])->order("sort asc,id asc")->field('id,name,icon')->select();

        $this->view->assign('groups', $groups);
        $this->view->assign('menu', $menu);

        return $this->view->fetch();
    }

    /**
     * 欢迎页
     * @return mixed
     */
    public function welcome()
    {
        // 查询个人信息
        $info = Db::name("AdminUser")->where("id", UID)->find();
        $this->view->assign("info", $info);
        //获取session中的coll(所属学院)
         $coll=Session::get('coll'); 
        
        //登录的角色不同查询语句的条件不同
         if ($coll=='0'||$coll=='1') {//超级管理员/学生处
            $map['s.isdelete']=0;
            $map['s.status']=0;
            $maps['p.isdelete']=0;

         }else{//二级学院
            $map['s.isdelete']=0;
            $map['s.status']=0;
            $map['s.college']=$coll;
            $maps['p.isdelete']=0;
            $maps['p.college']=$coll;
         }

         $m='';        
          if ($coll==1) {//如果是学生处
              $m=11;        
            }elseif($coll==0){//如果是超级管理员
                $m=22;
            }else{//其余为二级学院
                $m=33;
            }

            //往期活动       
            $nelist=db('past_act')
            ->alias('p')
            ->field('p.id,p.aid,p.title tit,p.releasetime times')
            ->where($maps)
            ->paginate(5);
             //最新活动
            $maps['p.status']=2;
            $newlist=db('activity')
             ->alias('p')
             ->field('p.id,p.theme tit,p.issue_time times')
             ->where($maps)
             ->paginate(5); 
    



		// 申请列表
		$bm=input('bm');
		if($bm==''){
			$bm=1;
		}
        $tab=input('tab');//数据库中的表名
        if ($m==11 && $tab=='') {
            $bm=4;
           $tab='stu_act_info';
        }
        

		if($tab==''||$tab=='stu_apply')
        {
            $tab='stu_apply';

        $colist=db($tab)->alias('s')
            ->join('teaching t','t.id=s.college')
            ->join('teaching ta','ta.id=s.department')
            ->join('teaching tas','tas.id=s.class')
            ->field('s.id,s.name,s.sex,s.phone,t.catname catname1,ta.catname catname2,tas.catname catname3')
            ->where($map)
            ->paginate(10);       
        }elseif ($tab=='activity') {//活动表

             $colist=db($tab)
             ->alias('s')
             ->field('s.id,s.theme,s.project,s.college,s.initiator,s.intro')
             ->where($map)
             ->paginate(5);
        }elseif ($tab=='stu_act_info') {//学生成绩表
            unset($map['s.college']);
            $map['s.status']=1;                      
            if ($m == 33) {
                $map['s.sec_ass_status']=0;
                $map['s.secschool']=$coll;
            }elseif ($m==11) {
                 $map['s.sec_ass_status']=1;
                  $map['s.ass_status']=0;
                 
            }
//             echo "<pre>";
//             print_r($map);
            $colist=db('stu_act_info')
                ->alias('s')
                ->join('__TEACHING__ ac','ac.id=s.secschool')
                 ->join('__ACTIVITY__ pa','s.aid=pa.id')
                 ->join('__STU_APPLY__ vo','s.sid=vo.id')
                ->where($map)
                ->field('s.id,s.aid,s.sid,s.content,pa.theme,vo.name,ac.catname')
                 ->paginate(5);
				 echo db('stu_act_info')->getLastSql();
//				   echo "<pre>";
//             print_r($colist);
        }else{
         unset($map['s.college']);
        $colist=db($tab)->alias('s')
			->join('stu_apply sa','sa.id=s.sid')
            ->join('teaching t','t.id=sa.college')
            ->join('teaching ta','ta.id=sa.department')
            ->join('teaching tas','tas.id=sa.class')
            ->field('s.id,s.aid,sa.name,sa.sex,sa.phone,t.catname catname1,ta.catname catname2,tas.catname catname3')
            ->where($map)
            ->paginate(10);
		}
		 $c=count($colist);//表格中未审核状态的总数	

		  $this->view->assign('coll',$coll);
        $this->view->assign('m',$m);//判断是否为学生处的人
         $this->view->assign('c',$c);//未审核列表总数
		 $this->view->assign('nelist',$nelist);//往期新闻公告列表映射
          $this->view->assign('newlist',$newlist);//往期新闻公告列表映射
//         $this->view->assign('nepages',$newlist->render());  //新闻公告列表分页映射
//		 $this->view->assign('nepage',$nelist->render());  //新闻公告列表分页映射

         $this->view->assign('bm',$bm);//申请待审核
         $this->view->assign('colist',$colist);//申请待审核列表映射
//		 $this->view->assign('copage',$colist->render());//申请待审核列表分页映射
        return $this->view->fetch();
        }
   
	 public function update()
    {
        $params=input();
		$info=db('admin_user')->where('id='.$params['id'])->update($params);
        return json($info);
    }
	 public function getPage(){
        if(request()->isAjax()){

    //1.获取数据（curPage）
            $page=input('get.');
            $curPage = $page['curPage'];

     //2.定义分页所需的数据
            $totalItem = '10';   //总记录数(自行定义)
            $pageSize='4';  //每一页记录数(自行定义)
            $totalPage =ceil($totalItem/$pageSize);  //总页数
            $startItem = ($curPage-1) * $pageSize;//根据页码来决定查询数据的节点

            //3.查询数据
            $res=db('content')
                ->limit($startItem,$pageSize)
                ->select();

            //4.放入所有数据
            $arr['totalItem']=$totalItem;
            $arr['pageSize']=$pageSize;
            $arr['totalPage']=$totalPage;
            foreach($res as $lab) {
                $arr['data_content'][] = $lab;
            }

           //5.结果返回（此处没有判定是否查询成功）
            $this->result($arr,'1','成功','json');

        }
    }

}
