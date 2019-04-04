<?php
namespace app\home\controller;
use think\Request;
use think\Controller;
use think\Session;
use think\Validate;
class Registe extends Controller
{   //映射页面
    public function index(){
        $list=db('teaching')->where('pid=0')->where('id>1')->select();
        foreach($list as $key => &$v){
			$v['secondlist']=db('teaching')->where('pid='.$v['id'])->select();
			foreach($v['secondlist'] as $k => &$t){
				$t['thirdlist']=db('teaching')->where('pid='.$t['id'])->select();
			}
        }
		$this->assign('list',$list);
        return $this->view->fetch();
    }
    //注册
    public function zhuce(){
        //Validate::token('__token__','',['__token__'=>input('param.__token__')]);       
        // $validate=new Validate(
        //     [    
        //         '__token__'=>'require|token', 
        //         'user' => "require|unique:stu_apply", 
        //         'user'=>'require|length:3,16',
        //     ]
        // );
        $data=input('post.');
        $code=$data['codes'];
        $a=$data['user'];
        $b=$data['password'];
        $c=$data['repassword'];
        $selects=db('stu_apply')->where('user='."'$a'")->find();
        if(!captcha_check($code)){
            $msg=['code'=>0,'msg'=>'验证码填写错误'];
            return json_encode($msg);
        }else{
            if($selects){
                $msg=['code'=>1,'msg'=>'用户名已被使用，请重新填写'];
                return json_encode($msg);
            }else{
                if($b!=$c){
                    $msg=['code'=>2,'msg'=>'两次填写密码不一致'];
                    return json_encode($msg);
                }else{             
                    unset($data['repassword']);
                    unset($data['codes']);
                    $data['password']=md5($data['password']);
                    // if(!$validate->check($data)){
                    //     dump($validate->getError());
                    //     //$msg=['code'=>4,'msg'=>$validate->getError()];
                    // }else{
                        // unset($data['__token__']);
                        $info=db('stu_apply')->insert($data);
                        if($info){
                        $msg=['code'=>3,'msg'=>'注册成功，请登录'];
                        // return "验证成功";
                        return json_encode($msg);
                    }                  
                   }
                 //}
               } 
        }
       
     }
     //用户名验证
     public function user_yanzheng(){
        $data=input('post.');
        $selects=db('stu_apply')->select();
        foreach($selects as $key=>$val ){
            $user=$val['user'];
            if($data['user']==$user){
                $msg=['code'=>0,'msg'=>'用户名已被使用，请重新填写'];
                return json_encode($msg);   
        }else{
            $msg=['code'=>1];
        }
     }
     return json_encode($msg);
    }
     //三级联动获取系别
     public function xi(){
         $id=input('id');
         $xi=db('teaching')->where('pid='.$id)->select();
         return json_encode($xi);
     }
     //三级联动获取班级
     public function ban(){
        $id=input('id');
        $ban=db('teaching')->where('pid='.$id)->select();
        return json_encode($ban);
     }

     //登录
     public function do_login(){
        $data=input('post.');
        $a=$data['user'];
        $code=$data['codes'];
        $info=db('stu_apply')->where('user='."'$a'")->find();
        if(!captcha_check($code)){
            $msg=['code'=>0,'msg'=>'验证码填写错误'];
        }else{
        if(!$info){
            $msg=['code'=>1,'msg'=>'用户名不存在'];
        }else{
            if($info['password']==md5($data['password'])){
                Session::set('id',$info['id']);
                Session::set('user',$info['user']);
                $msg=['code'=>2,'msg'=>'登录成功'];
            }else{
                $msg=['code'=>3,'msg'=>'密码错误'];
            }
        }
    }
        return json_encode($msg);
    }

}