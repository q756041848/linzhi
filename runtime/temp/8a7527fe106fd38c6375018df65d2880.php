<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"D:\phpStudy\WWW\xlz\public/../application/home\view\news\newslist.html";i:1545794270;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Single Post</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <script src="__STATIC__/home/news/js/jquery2.min.js"></script>
    <!-- Bootstrap styles -->
    <link rel="stylesheet" href="__STATIC__/home/news/css/bootstrap.min.css">

    <!-- Font-Awesome -->
    <link rel="stylesheet" href="__STATIC__/home/news/css/font-awesome/css/font-awesome.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="__STATIC__/home/news/css/style.css" id="theme-styles">
</head>

<body onload="a()">
    <header>
        <div class="widewrapper masthead">
            <div class="container">
                <a href="<?php echo url('News/index'); ?>" id="logo">
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
                    <a href="<?php echo url('news/news'); ?>">活动</a>
                    >
                    <a href="#">详情</a>

                </div>


                <div class="clean-searchbox">
                    <form action="#" method="get" accept-charset="utf-8">

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
                    <article class="blog-post">
                        <div class="body">

                            <h2><?php echo $newslist['theme']; ?></h2>
                            <div class="meta">
                                <i class="fa fa-user"></i> <?php echo $newslist['issue_number']; ?> <i class="fa fa-calendar"></i><?php echo date('Y-m-d H:i:s',$newslist['issue_time']
                                    ); ?><span
                                    class="data"><a href="#comments"></a></span>
                            </div>
                            <p>
                                <?php echo htmlspecialchars_decode($newslist['intro']); ?>
                            </p>
                            <!-- apply.html -->
                            <form method="post" id='form1'>
                                <input type="hidden" value=" <?php echo $newslist['id']; ?>" name="id">
                                <a title="申请" onclick="admin_add(this,'<?php echo $newslist['id']; ?>')" href="javascript:;" class="button thesametime"
                                    style="display:block;width:100px;height:30px">
                                    申请活动
                                </a>
                                <a href="<?php echo $newslist['project']; ?>" class="button thesametime wenjian" style="display:block;width:100px;height:30px">文件下载</a>
                            </form>
                        </div>
                    </article>
                </div>
                <aside class="col-md-4 blog-aside">
                    <div class="aside-widget">
                        <header>
                            <h3>新闻标题</h3>
                        </header>
                        <div class="body">
                            <ul class="clean-list">
                                <?php if(is_array($newslist2) || $newslist2 instanceof \think\Collection || $newslist2 instanceof \think\Paginator): if( count($newslist2)==0 ) : echo "" ;else: foreach($newslist2 as $key=>$newslist2): ?>
                                <li><a href="<?php echo url('news/newslist',['id'=>$newslist2['id']]); ?>"><?php echo $newslist2['theme']; ?></a></li>
                                <?php endforeach; endif; else: echo "" ;endif; ?>

                            </ul>
                        </div>
                    </div>



                </aside>
            </div>
        </div>
    </div>

    <footer>
        <div class="widewrapper footer">

        </div>
        <div class="widewrapper copyright">
            <span>临沂职业学院志愿者管理服务系统</span>
            <span>鲁ICP备：09033875号-2</span>
            <span>0539-2872077</span>
            <span>邮编：276017</span>
            <span>地址：山东省临沂市罗庄区湖东路63号</span>
        </div>
    </footer>

    <!-- <script src="http://libs.baidu.com/jquery/2.0.0/jquery.js"></script> -->
    <script src="__STATIC__/home/news/js/bootstrap.min.js"></script>
    <script src="__STATIC__/home/news/js/modernizr.js"></script>
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.bootcss.com/layer/2.3/skin/layer.css">
    <script type="text/javascript" src="https://cdn.bootcss.com/layer/2.3/layer.js"></script> -->
    <link rel="stylesheet" href="__STATIC__/home/news/css/layer.css" id="theme-styles">
    <script type="text/javascript" src="__STATIC__/home/news/js/layerjs.js"></script>
    <script>
        function admin_add(obj, id) {
            layer.confirm('确定申请吗？', {
                btn: ['确定', '取消'] //按钮
            }, function () {
                $.ajax({
                    url: "<?php echo url('News/addapp'); ?>",
                    type: 'post',
                    data: {
                        aid: id
                    },
                    success: function (rel) {
                        var result = JSON.parse(rel);
                        if (result.code == 0) {
                            layer.msg(result.msg);
                        }
                        if (result.code == 1) {
                            layer.msg(result.msg);
                        }
                        if (result.code == 2) {
                            layer.msg(result.msg);
                        }
                    }
                });
            }, function () {
                layer.msg('操作已取消');
            });

        }
        $('.thesametime').click(function () {
            $.ajax({
                url: "<?php echo url('News/rangeTime'); ?>",
                type: 'post',
                data: {
                    aid: id
                },
                success: function (rel) {

                    var result = JSON.parse(rel);
                    if (result.code == 0) {
                        layer.msg(result.msg);
                    }
                    if (result.code == 1) {
                        layer.msg(result.msg);
                    }
                }
            });
        });

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