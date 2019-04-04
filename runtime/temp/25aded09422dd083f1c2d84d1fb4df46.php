<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"F:\phpStudy\WWW\lz\public/../application/home\view\index\index.html";i:1545785242;}*/ ?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<title>Home</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width">
		<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
		<script type="text/javascript" src="https://cdn.bootcss.com/layer/2.3/layer.js"></script>
		<!-- Bootstrap styles -->
		<link rel="stylesheet" href="__STATIC__/home/oldnews/css/bootstrap.min.css">

		<!-- Font-Awesome -->
		<link rel="stylesheet" href="__STATIC__/home/oldnews/css/font-awesome/css/font-awesome.min.css">

		<!-- Styles -->
		<link rel="stylesheet" href="__STATIC__/home/oldnews/css/style.css" id="theme-styles">

		<!--[if lt IE 9]>      
        <script src="js/vendor/google/html5-3.6-respond-1.1.0.min.js"></script>
    <![endif]-->

	</head>
	<body onload="a()">
		<header>
			<input type="hidden" class="se" value="<?php echo $se; ?>" />
			<div class="widewrapper masthead">
				<div class="container">
					<a href="<?php echo url('index/index'); ?>" id="logo">
						<img src="__STATIC__/home/oldnews/image/logo.jpg"/>
						<span >临沂职业学院志愿者管理服务系统</span>
					</a>				
					<div id="mobile-nav-toggle" class="pull-right">
						<a href="#" data-toggle="collapse" data-target=".clean-nav .navbar-collapse">
							<i class="fa fa-bars"></i>
						</a>
					</div>
					<nav class="pull-right clean-nav">
							<div class="collapse navbar-collapse">
								<ul class="nav nav-pills navbar-nav" id='nav'>
									<li>
										<a href="<?php echo url('registe/index'); ?>" class="button">注册</a>	
									</li>
									<li>
										<a href="<?php echo url('registe/index?a=1'); ?>" class="button lo">登录</a>
									</li>
									<li>
										<a href="<?php echo url('admin/pub/login'); ?>" class="button">后台入口</a>
									</li>
								</ul>
								<ul class="nav nav-pills navbar-nav" id='navv'>

										<li>
											<a href="<?php echo url('Index/index'); ?>">首页</a>
										</li>
										<li>
											<a id="active" style="display:none" href="<?php echo url('News/news'); ?>">志愿者活动申请</a>
										</li>
										<li>
											<a href="<?php echo url('News/apply'); ?>">个人中心</a>
										</li>
										<li>
												<a href="<?php echo url('admin/pub/login'); ?>" >后台入口</a>
											</li>
										<li>
											<a href="javascript:;" onclick="logout()">退出</a>
										</li>
									</ul>
							</div>
						</nav>
				</div>
				
			</div>
			
			<div class="widewrapper subheader">
				<div class="container">
					<div class="clean-breadcrumb">
						<a href="#">首页</a>
					</div>
					<div class="clean-searchbox">
						<form action="<?php echo url("","",true,false);?>" method="get" accept-charset="utf-8">
							<input class="searchfield" id="searchbox" name='tags' type="text" placeholder="关键词"  value='<?php echo $tags; ?>' class='tags' >
							<button class="searchbutton" type="submit">
                            <i class="fa fa-search"></i>
                        </button>
						</form>        
					</div>
				</div>
			</div>
		</header>
		<div class="widewrapper main">
			<div class="container">
				<div class="row">
					<div class="col-md-8 blog-main">
						<div class="row">
								<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $key=>$list): ?>
							<div class="col-md-6 col-sm-6">
							
								<article class=" blog-teaser">
									<header  class='tu1'>
										<img src="__STATIC__../..<?php echo $list['img']; ?>" alt="">
										<hr>
									</header>
									<div class="body">
										<span class='title1'> <?php echo $list['title']; ?></span>
										<span class='data'> <?php echo date('Y-m-d',$list['releasetime']); ?></span>
									</div>
									<div class="clearfix">
										<a href="<?php echo url('Index/single',['id'=>$list['id']]); ?>" class="btn btn-clean-one">更多</a>
									</div>
								</article>
								
							</div>
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</div>
						<div class='page'>	
							<?php echo $showpage; ?>
							</div>
					</div>
					<aside class="col-md-4 blog-aside">
						<div class="aside-widget">
							<header>
								<h3>往期新闻</h3>
							</header>
							<div class="body">
								<ul class="clean-list">
										<?php if(is_array($list2) || $list2 instanceof \think\Collection || $list2 instanceof \think\Paginator): if( count($list2)==0 ) : echo "" ;else: foreach($list2 as $key=>$list2): ?>
									<li>
										<a href="<?php echo url('Index/single',['id'=>$list2['id']]); ?>"><?php echo $list2['title']; ?></a>
									</li>
									<?php endforeach; endif; else: echo "" ;endif; ?>
									
								</ul>
							</div>
						</div>
					</aside>
				</div>
			</div>
		</div>
		<div class="widewrapper copyright">
				<span>临沂职业学院志愿者管理服务系统</span>
				<span>鲁ICP备：09033875号-2</span>
				<span>0539-2872077</span>
				<span>邮编：276017</span>
				<span>地址：山东省临沂市罗庄区湖东路63号</span>
	</div>
	   <!-- <script src="http://libs.baidu.com/jquery/2.0.0/jquery.js"></script> -->
	   <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
		<script src="__STATIC__/home/oldnews/js/bootstrap.min.js"></script>
		<script src="__STATIC__/home/oldnews/js/modernizr.js"></script>
<script>
var id=$('.se').val();
if(id){
	 $('#nav').hide();
     $('#navv').show();
}else{
	 $('#nav').show();	
	 $('#navv').hide();	
}
function logout() {
            layer.confirm('您确定要退出登录？', {
                title: '退出提醒'
            }, function (index) {
                layer.msg('退出成功');
                location.href = '<?php echo Url("News/logout"); ?>'
            })
        }
</script>
	</body>

</html>
<script>
	function a(){
	   var a=<?php echo $a; ?>;
	   if(a==1){
		 $('#active').show();
	   }else{
		 $('#active').hide();
	   }
	   
	}
 </script>
