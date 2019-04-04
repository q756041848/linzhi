<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"D:\phpStudy\WWW\xlz\public/../application/home\view\registe\index.html";i:1545744303;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
	<meta name="viewport" content="user-scalable=no,width=device-width,initial-scale=1,maximum-scale=1">
	<title>临沂职业学院志愿者管理服务系统</title>
	<link rel="stylesheet" type="text/css" href="__STATIC__/home/regsite/css/common.css">
	<link rel="stylesheet" type="text/css" href="__STATIC__/home/regsite/css/login.css">
	<!-- <link href="http://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"> -->
	<link rel="stylesheet" type="text/css" href="__STATIC__/home/regsite/css/bootstrapmin.css"/>
	<!-- <link rel="stylesheet" type="text/css" href="https://cdn.bootcss.com/layer/2.3/skin/layer.css"> -->
	<link rel="stylesheet" type="text/css" href="__STATIC__/home/regsite/css/layer.css"/>
	<!-- <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script> -->
	<script type="text/javascript" src="__STATIC__/home/regsite/js/jq.js"></script>
	<!-- <script src="https://cdn.bootcss.com/layer/2.2/layer.js"></script> -->
	<script type="text/javascript" src="__STATIC__/home/regsite/js/layer.js"></script>
</head>

<body onload="tupian(),dd()">
	<div class="container">
	<div class="lefts">
		临沂职业学院志愿者管理服务系统
	</div>
	<div class="img">
		<ul id="tu">
			<li><img src="__STATIC__/home/regsite/images/1.jpg" /></li>
			<li><img src="__STATIC__/home/regsite/images/2.jpg" /></li>
			<li><img src="__STATIC__/home/regsite/images/3.jpg" /></li>
		</ul>
	</div>
	<div class="login_cont">
		<div class="login_nav">
			<div class="nav_slider">
				<a style="cursor:pointer;" class="signup focus">注册</a>
				<a style="cursor:pointer;" class="signin" id="logins">登录</a>
			</div>
		</div>
		<form method="post" id="form1">
			<div class="input_signup active">
				<!-- <input type="hidden" name="__token__" value="<?php echo \think\Request::instance()->token(); ?>" /> -->
				<input class="input bi" id="user" name="user" type="text" onkeyup="this.value=this.value.replace(/\s+/g,'')" placeholder="用户名（必填项）" onblur="user_yanzheng()" onfocus="user_yan()">&nbsp;&nbsp;<span id="user_z" style="display:none;color:green ">✔</span>
			    <div class="sty" id="user_y"></div>
				<input class="input bi" id="password" name="password" type="password" onkeyup="this.value=this.value.replace(/\s+/g,'')" placeholder="密码（必填项）" onblur="pass_yanzheng()" onfocus="pass_yan()">&nbsp;&nbsp;<span id="pass_z" style="display:none;color:green ">✔</span>
				<div class="sty" id="pass_y"></div>
				<input class="input bi" id="repassword" name="repassword" type="password" onkeyup="this.value=this.value.replace(/\s+/g,'')"  placeholder="再次输入密码（必填项）" onblur="user_pass()">&nbsp;&nbsp;<span id="repass_z" style="display:none;color:green ">✔</span>
				<div class="sty" id="pass_ys"></div>
				<input class="input bi" id="name" name="name" type="text" onkeyup="this.value=this.value.replace(/\s+/g,'')" onblur="name_yanzheng()" onfocus="name_yan()"  placeholder="姓名（必填项）">&nbsp;&nbsp;<span id="name_z" style="display:none;color:green ">✔</span>
				<div class="sty" id="name_y"></div>
				<div>
					&nbsp;&nbsp;性别&nbsp;&nbsp;&nbsp;&nbsp;
					<label class="demo--label">
						<input class="demo--radio" type="radio" name="sex" value="1" checked>
						<span class="demo--radioInput"></span>&nbsp;男
					</label>
					<label class="demo--label">
						<input class="demo--radio" type="radio" name="sex" value="0">
						<span class="demo--radioInput"></span>&nbsp;女
					</label>
				</div><br /> <br />
				<div class="select">
					<select name="college" id="college">
							<option>选择学院</option>
							<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $key=>$vo): ?> 
							<option value="<?php echo $vo['id']; ?>"><?php echo $vo['catname']; ?></option>
							<?php endforeach; endif; else: echo "" ;endif; ?>
					</select>
				</div>
				<div class="select" style="width:130px">
					<select name="department" id="department">
							<option>选择系别</option>
					</select>
				</div>
				<div class="select" style="width:100px">
					<select  name="class" id="class">
							<option id="ban">选择班级</option>
					</select>
				</div>
				<br /> <br /><br />
				<input class="input bi" id="phone" type="text" name="phone"  onkeyup="this.value=this.value.replace(/\s+/g,'')" class="account" placeholder="手机号（必填项）" onfocus="phone_yan()" onblur="checkPhone()">&nbsp;&nbsp;<span id="phone_z" style="display:none;color:green ">✔</span>
				<div class="sty" id="phone_y"></div>
				<input id="te" type="text" placeholder="特长（选填项）" onkeyup="this.value=this.value.replace(/\s+/g,'')" id="speciality" name="speciality"  onfocus="spe_yan()" onblur="spe_yanzheng()">
				<div class="sty" id="spe_y"></div>
				<div class="aa" style="display:none">请填写符合格式的用户名</div>
				<input type="text" placeholder="职务（选填项）" id="post" name="post" onkeyup="this.value=this.value.replace(/\s+/g,'')" placeholder="请输入职务" onblur="post_yanzheng()" onfocus="post_yan()">
				<div class="sty" id="post_y"></div>
				<input type="text" placeholder="户籍（选填项）" onkeyup="this.value=this.value.replace(/\s+/g,'')" id="house" name="house" onfocus="house_yan()" onblur="house_yanzheng()">
				<div class="sty" id="house_y"></div>
				<input name="codes" id="codes" style="width: 130px;height: 40px" placeholder="请输入验证码" type="text" onblur="yan()" onfocus="yans()"/>
				<img src="<?php echo captcha_src(); ?>" style="width: 130px;height: 40px" id="co"/>
				<button type="button" style="width: 100px;height: 40px; background-color: #007acc;border:0px;color: azure;text-align: center;cursor:pointer;border-radius:5px" class="shuaxin">刷新验证码</button>
				<div style="height:0px" class="yanwen"></div>
				<br/><br/>
				<input type="button" id="submit" class="button sub" name="button" value="注册">
			</div>
		</form>
		<form method="post" id="form2">
			<div class="input_signin">
				<input class="input" id="users" name="user" type="text" onkeyup="this.value=this.value.replace(/\s+/g,'')" aria-label="用户名" placeholder="用户名">
				<div class="sty"></div>
				<input class="input" id="passwords" name="password" type="password" onkeyup="this.value=this.value.replace(/\s+/g,'')" aria-label="密码" placeholder="密码">
				<div class="sty"></div>
				<input name="codes" id="code" class="codess"  style="width: 130px;height: 40px" placeholder="请输入验证码" type="text" onblur="yan_ss()" onfocus="yans_s()"/>
				<img src="<?php echo captcha_src(); ?>"  style="width: 130px;height: 40px" id="imgs" class="yanz" />
				<!-- onclick="javascript:this.src='<?php echo captcha_src(); ?>?rand='+Math.random()" -->
				<button type="button" style="width: 100px;height: 40px; background-color: #007acc;border:0px;color: azure;text-align: center;cursor:pointer;border-radius:5px" class="shuaxins">刷新验证码</button>
				<div style="height:0px" class="yanwen_s"></div>
				<br/><br/>
				<input type="button" id="button" class="button login" name="button" value="登录">
			</div>
		</form>
	</div>
</div>	
	<script type="text/javascript" src="__STATIC__/home/regsite/js/login.js"></script>
</body>

</html>

<script>
	//banner图片
	var m = 0;
	var times;
	function tupian() {
		var tupian1 = document.getElementById('tu').getElementsByTagName('li');
		for (var i = 0; i < tupian1.length; i++) {
			tupian1[i].style.display = "none";
		}
		tupian1[m].style.display = "block";
		m++;
		if (m > 2) {
			m = 0
		}
		times = setTimeout('tupian()', 3000)
	}
	//验证用户名
	function user_yan(){
	var user=$('#user').val();	
		$('#user_y').html('&nbsp;用户名只能是3到16位数字或者字母、下划线').css('color','#333');
		$('#user').css({'border-color':''});
		$('#user_z').hide();	
    }
	function user_yanzheng(){	
	var user=$('#user').val();
	if(!(/^[A-Za-z0-9_]{3,16}$/).test(user)){
		$('#user_y').html('&nbsp;用户名只能是3到16位数字或者字母、下划线').css('color','red');
		$('#user').css({'border-color':'red'});
		$('#user_z').hide();
	}else{
		$.ajax({
		url:"<?php echo url('Registe/user_yanzheng'); ?>",
		type:"post",
		data:{user:user},
		success:function(res){
			var result=JSON.parse(res);
			if(result.code==0){
				$('#user_z').hide();
				$('#user_y').html('&nbsp;用户名已被使用，请重新填写').css('color','red');
				$('#user').css({'border-color':'red'});		
			 }
			 else{
				$('#user_y').html('');
				$('#user_z').show();
				$('#user').css({'border-color':''});
			}
			
		}
	})
		
	}
}
    //密码验证
function pass_yan(){
	var pass=$('#password').val();
      	$('#pass_z').hide();
		$('#pass_y').html('&nbsp;请填写长度为6-16个数字和字母组成的密码').css('color','#333');
		$('#password').css({'border-color':''});
}
function pass_yanzheng(){
	var pass=$('#password').val();
	var passs=pass.length;	
	if(!(/^(?![0-9]+$)(?![a-zA-Z]+$)[0-9A-Za-z]{6,16}$/.test( pass)) ) {
		$('#pass_z').hide();
		$('#pass_y').html('&nbsp;请填写长度为6-16个数字和字母组成的密码').css('color','red');
		$('#password').css({'border-color':'red'});
	}else{
		$('#pass_z').show();
        $('#pass_y').html('');
		$('#password').css({'border-color':''});
	}
}	//第二次密码验证
function user_pass(){
	var pass=$('#password').val();
	var passs=$('#repassword').val();
	if(pass!=passs){
		$('#repass_z').hide();
		$('#pass_ys').html('&nbsp;两次密码填写不一致').css('color','red');
		$('#repassword').css({'border-color':'red'});
	}else{
		if(passs!=''){
			$('#repass_z').show();
            $('#pass_ys').html('');
			$('#repassword').css({'border-color':''});
		}	
	}
}   
   //姓名验证
function name_yan(){
	var name=$('#name').val();
	    $('#name_z').hide();
		$('#name_y').html('&nbsp;').css('color','#333');
		$('#name').css({'border-color':''});
}
function name_yanzheng(){
	var name=$('#name').val();
	var reg= /^[\u4E00-\u9FA5]{2,4}$/;
	if(name==''){
	   $('#name_z').hide();
       $('#name_y').html('&nbsp;请先填写你的姓名').css('color','red');
	   $('#name').css({'border-color':'red'});
	}else{
	 if(reg.test(name)){
	   n=1;
	   $('#name_z').show();
       $('#name_y').html('');
	   $('#name').css({'border-color':''});
	}else{
	   $('#name_z').hide();
	   $('#name_y').html('&nbsp;请规范填写你的姓名').css('color','red');
	   $('#name').css({'border-color':'red'});
	}
  }
}  
  //院 系 班 三级联动,获取系别
$('#college').click(function(){
	var id=$(this).val();
	$.ajax({
		url:"<?php echo url('Registe/xi'); ?>",
		type:"post",
		data:{id:id},
		success:function(res){
			$('#department').html('');
			var result=JSON.parse(res);
			var str='';
			$.each(result,function(i,v){
                str+='<option value="'+v.id+'">'+v.catname+'</option>';
			})
			$('#department').append(str);
			var idd=$('#department').val();
			$.ajax({
		      url:"<?php echo url('Registe/ban'); ?>",
		      type:"post",
		      data:{id:idd},
		      success:function(res){
			      $('#class').html('');
			      var result=JSON.parse(res);
			      var str='';
			      $.each(result,function(i,v){
                  str+='<option value="'+v.id+'">'+v.catname+'</option>';
			 })
			      $('#class').append(str);
		}
	})	
		}
	})
	
}) 
//院 系 班 三级联动,获取班级
$('#department').click(function(){
	var id=$(this).val();
	$.ajax({
		url:"<?php echo url('Registe/ban'); ?>",
		type:"post",
		data:{id:id},
		success:function(res){
			$('#class').html('');
			var result=JSON.parse(res);
			var str='';
			$.each(result,function(i,v){
                str+='<option value="'+v.id+'">'+v.catname+'</option>';
			})
			$('#class').append(str);
		}
	})
}) 
	//验证手机号
	function phone_yan(){
		$('#phone_z').hide();
		$('#phone_y').html('请填写你的手机号').css('color','#333');
		$('#phone').css({'border-color':''});
	}
	function checkPhone(){
	$('#phone_y').html(''); 	 
    var phone = document.getElementById('phone').value;
    if(!(/^1[34578]\d{9}$/.test(phone))){
		$('#phone_z').hide(); 
		$('#phone_y').html('请填写正确格式手机号').css('color','red');
		$('#phone').css({'border-color':'red'});
        return false; 
    }else{
		$('#phone_z').show();
		$('#phone_y').html('');
		$('#phone').css({'border-color':''});
	} 
}   
	 //注册ajax
	 $('.sub').click(function(){
		
		 var user=$('#user').val();
		 if(!(/^[A-Za-z0-9_]{3,16}$/).test(user)){
            $('#user_y').html('&nbsp;用户名只能是3到16位数字或者字母、下划线').css('color','red');
			$('#user').css({'border-color':'red'});
			layer.msg('用户名只能是3到16位数字或者字母',{time:2000});
 		}else{
			var pass=$('#password').val();
	        var passs=pass.length;
	        if(passs<6 || passs>16 ){
					$('#pass_y').html('&nbsp;请填写长度为6-16个数字和字母组成的密码').css('color','red');
					$('#password').css({'border-color':'red'});
					layer.msg('请填写长度为6-16个数字和字母组成的密码',{time:2000});
			}else{
				var pa=$('#password').val();
	            var pay=$('#repassword').val();
	            if(pa!=pay){
		            $('#pass_ys').html('&nbsp;两次密码填写不一致').css('color','red');
					$('#repassword').css({'border-color':'red'});
					layer.msg('两次密码填写不一致',{time:2000});
				}else{
					var name=$('#name').val();
					var reg= /^[\u4E00-\u9FA5]{2,4}$/;
					if(!reg.test(name)){
						$('#name_y').html('&nbsp;请规范填写你的姓名').css('color','red');
						$('#name').css({'border-color':'red'});
						layer.msg('请规范填写你的姓名',{time:2000});
					}else{
						var lists_1=$('#college').val();
						var lists_2=$('#department').val();
						var lists_3=$('#class').val();
						if(lists_1=='选择学院' || lists_2=='选择系别' || lists_3=='选择班级'){
							layer.msg('请选择你的学院、系别、班级',{time:2000});
						}else{
							var phone = document.getElementById('phone').value;
							if(!(/^1[34578]\d{9}$/.test(phone))){  
							$('#phone_y').html('手机号填写有误').css('color','red');
							$('#phone').css({'border-color':'red'});
							layer.msg('手机号填写有误',{time:2000});
							}else{
								$.ajax({
									url:"<?php echo url('Registe/zhuce'); ?>",
									type:"post",
									data:$('#form1').serialize(),
									success:function(res){
										var result=JSON.parse(res);
										if(result.code==0){
											layer.msg(result.msg,{time:2000});
											$("#co").attr("src","<?php echo captcha_src(); ?>" + "?" + Math.random());
										}
										if(result.code==1){
											layer.msg(result.msg,{time:2000});
										}
										if(result.code==2){
											layer.msg(result.msg,{time:2000});
										}
										if(result.code==3){
											layer.msg(result.msg,{time:2000});
											$('input:text').val('');
											$('input:password').val('');
											$('.sty').html('');
											this.className="signup focus";
											$(".signup")[0].className="signup";
											$(".input_signin")[0].className="input_signin active";
											$(".input_signup")[0].className="input_signup";
							}              
							               $("#imgs").attr("src","<?php echo captcha_src(); ?>" + "?" + Math.random());
										   $('#name_z').hide();
                                           $('#user_z').hide();
										   $('#pass_z').hide();
										   $('#repass_z').hide();
										   $('#phone_z').hide();
										
						}
						})
							}
						}
					}
				}	
			}
		 }
	 })

//登录
$('.login').click(function(){
    $.ajax({
      url:"<?php echo url('Registe/do_login'); ?>",
      type:"post",
      data:$('#form2').serialize(),
      success:function(res){
        var result=JSON.parse(res);
		if(result.code==0){
          layer.msg(result.msg,{time:3000});
		  $("#imgs").attr("src","<?php echo captcha_src(); ?>" + "?" + Math.random());
		}
		if(result.code==1){
          layer.msg(result.msg,{time:3000});
		  $("#imgs").attr("src","<?php echo captcha_src(); ?>" + "?" + Math.random());
		}
		if(result.code==3){
          layer.msg(result.msg,{time:3000});
		  $("#imgs").attr("src","<?php echo captcha_src(); ?>" + "?" + Math.random());
        }
        if(result.code==2){
          layer.msg(result.msg,{time:2000},function(){
            location.href="<?php echo url('news/news'); ?>"
          });
         
		}
        
      }
    })
    
  })
  //index页面点击登录跳转到登陆的table
  function dd(){
	var a=window.location.href;
	if(a.indexOf("a/1") >= 0 ) {
		$('#logins').addClass('focus'); 
		this.className="signup focus";
		$(".signup")[0].className="signup";
		$(".input_signin")[0].className="input_signin active";
		$(".input_signup")[0].className="input_signup";
     }
  } 
 //刷新验证码
 $('.shuaxin').click(function(){
	$("#co").attr("src","<?php echo captcha_src(); ?>" + "?" + Math.random());
 })  
 $('.shuaxins').click(function(){
	$("#imgs").attr("src","<?php echo captcha_src(); ?>" + "?" + Math.random());
 })

</script>