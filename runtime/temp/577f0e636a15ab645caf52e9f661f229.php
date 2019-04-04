<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"D:\phpStudy\WWW\xlz\public/../application/home\view\index\single.html";i:1545735765;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Single Post</title>
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
<body>
    <header >
            <input type="hidden" class="se" value="<?php echo $se; ?>" />
        <div class="widewrapper masthead">
            <div class="container">
                <a href="<?php echo url('index/index'); ?>" id="logo">
                    <img src="__STATIC__/home/oldnews/image/logo.jpg" />
                    <span>临沂职业学院志愿者管理服务系统</span>
                </a>
                <div id="mobile-nav-toggle" class="pull-right">
                    <a href="#" data-toggle="collapse" data-target=".clean-nav .navbar-collapse">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>
                <nav class="pull-right clean-nav">
                    <div class="collapse navbar-collapse">
                        <ul class="nav2" id='nav'>
                            <li>
                                <a href="<?php echo url('Index'); ?>">首页</a>
                            </li>
                        </ul>
                        <ul class="nav nav-pills navbar-nav" id='navv'>

                                <li>
                                    <a href="<?php echo url('Index/index'); ?>">首页</a>
                                </li>
                                <li>
                                    <a href="<?php echo url('News/news'); ?>">志愿者活动申请</a>
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
                  <a href="<?php echo url('index/index'); ?>">首页</span>
                  >
                  <span>详情</span>
                </div>
                <div class="clean-searchbox">
                    <form action="#" method="get" accept-charset="utf-8">
                        <input class="searchfield" id="searchbox" type="text" placeholder="关键词" value="<?php echo $tags; ?>" class='tags' name='tags'>
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
                    <article class="blog-post">
                        <header class='tu1'>
                            <div class="lead-image">
                                <img src="__STATIC__../..<?php echo $newslist['img']; ?>" alt="">
                            </div>
                        </header>
                        <div class="body">
                            <h2><?php echo $newslist['title']; ?></h2>
                            <div class="meta">
                                <i class="fa fa-user"></i> <?php echo $newslist['realname']; ?> <i class="fa fa-calendar"></i><?php echo date('Y-m-d H:i:s',$newslist['releasetime']); ?><span class="data"><a
                                        href="#comments"></a></span>
                                        院系：<?php echo $newslist['catname']; ?>
                            </div>
                            <p>
                                <?php echo htmlspecialchars_decode($newslist['content']); ?>
                            </p>
                        </div>
                    </article>
                </div>
                <aside class="col-md-4 blog-aside">
                    <div class="aside-widget">
                        <header class='tu1'>
                            <h3>往期新闻</h3>
                        </header>
                        <div class="body scroller">
                            <ul class="clean-list">
                                <?php if(is_array($newslist2) || $newslist2 instanceof \think\Collection || $newslist2 instanceof \think\Paginator): if( count($newslist2)==0 ) : echo "" ;else: foreach($newslist2 as $key=>$newslist2): ?>
                                <li><a href="<?php echo url('Index/single',['id'=>$newslist2['id']]); ?>"><?php echo $newslist2['title']; ?></a></li>
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
    <script src="http://libs.baidu.com/jquery/2.0.0/jquery.js"></script>
    <script src="__STATIC__/home/oldnews/js/bootstrap.min.js"></script>
    <script src="__STATIC__/home/oldnews/js/modernizr.js"></script>

</body>
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
</html>     