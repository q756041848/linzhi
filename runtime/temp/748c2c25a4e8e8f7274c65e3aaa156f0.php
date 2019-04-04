<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:66:"D:\phpStudy\WWW\xlz\public/../application/home\view\news\news.html";i:1545788767;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <!-- Bootstrap styles -->
    <link rel="stylesheet" href="__STATIC__/home/news/css/bootstrap.min.css">

    <!-- Font-Awesome -->
    <link rel="stylesheet" href="__STATIC__/home/news/css/font-awesome/css/font-awesome.min.css">

    <script src="__STATIC__/home/news/js/jquery2.min.js"></script>

    <!-- Styles -->
    <link rel="stylesheet" href="__STATIC__/home/news/css/style.css" id="theme-styles">
    <script src="__STATIC__/home/news/js/layer2.js"></script>
   
</head>

<body onload="a()">
    <header>
        <div class="widewrapper masthead">
            <div class="container">
                <a href="<?php echo url('index/index'); ?>" id="logo">
                    <img src="__STATIC__/home/news/img/logo.jpg" style="width: 100px;height: 100px;" stalt="clean Blog">
                    <span>临沂职业学院志愿者管理服务系统
                    </span>
                </a>

                <div id="mobile-nav-toggle" class="pull-right">
                    <a href="#" data-toggle="collapse" data-target=".clean-nav .navbar-collapse">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>

                <nav class="pull-right clean-nav">
                    <div class="collapse navbar-collapse">
                        <ul class="nav nav-pills navbar-nav">

                            <li>
                                <a href="<?php echo url('Index/index'); ?>">首页</a>
                            </li>
                            <li>
                                <a id="active" style="display:none" href="<?php echo url('News/news'); ?>">志愿者活动申请</a>
                            </li>
                            <li>
                                <a href="<?php echo url('News/apply'); ?>" class="userinfo">个人中心</a>
                               

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
                    <a href="#">活动</a>
                </div>
                <div class="clean-searchbox">
                    <form action="<?php echo url("","",true,false);?>" method="get" accept-charset="utf-8">

                        <input class="searchfield" id="searchbox" type="text" placeholder="关键词" value="<?php echo $tags; ?>" class='tags'
                            name='tags'>
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
                                <a href="<?php echo url('News/newslist',['id'=>$list['id']]); ?>">
                                    <header class="tu1">
                                        <img src=" __STATIC__<?php echo $list['project']; ?>" alt="">

                                        <hr>
                                    </header>
                                    <div class="body">
                                        <span class='title1'> <?php echo $list['theme']; ?></span>
                                        <span class='data'> <?php echo date('Y-m-d',$list['issue_time']); ?></span>
                                    </div>
                                    <div class="clearfix">
                                        <a href="<?php echo url('News/newslist',['id'=>$list['id']]); ?>" class="btn btn-clean-one">更多</a>
                                    </div>
                                </a>
                            </article>

                        </div>
                        <?php endforeach; endif; else: echo "" ;endif; ?>

                    </div>
                </div>
                <aside class="col-md-4 blog-aside">

                    <div class="aside-widget">
                        <header>
                            <h3>新闻标题</h3>
                        </header>
                        <div class="body">
                            <ul class="clean-list">
                                <?php if(is_array($list2) || $list2 instanceof \think\Collection || $list2 instanceof \think\Paginator): if( count($list2)==0 ) : echo "" ;else: foreach($list2 as $key=>$list2): ?>
                                <li>
                                    <a href="<?php echo url('news/newslist',['id'=>$list2['id']]); ?>"><?php echo $list2['theme']; ?></a>
                                </li>
                                <?php endforeach; endif; else: echo "" ;endif; ?>

                            </ul>
                        </div>
                    </div>



                </aside>
            </div>
        </div>
    </div>

    <footer>

        <div class="widewrapper copyright">
            <span>临沂职业学院志愿者管理服务系统</span>
            <span>鲁ICP备：09033875号-2</span>
            <span>0539-2872077</span>
            <span>邮编：276017</span>
            <span>地址：山东省临沂市罗庄区湖东路63号</span>
        </div>
    </footer>

    <script src="http://libs.baidu.com/jquery/2.0.0/jquery.js"></script>
    <script src="__STATIC__/home/news/js/bootstrap.min.js"></script>
    <script src="__STATIC__/home/news/js/modernizr.js"></script>
    <script>
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