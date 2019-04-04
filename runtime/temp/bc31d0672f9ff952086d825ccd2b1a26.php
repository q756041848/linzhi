<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:74:"D:\phpStudy\WWW\xlz\public/../application/admin\view\activity\pingfen.html";i:1545637237;s:71:"D:\phpStudy\WWW\xlz\public/../application/admin\view\template\base.html";i:1545717426;s:82:"D:\phpStudy\WWW\xlz\public/../application/admin\view\template\javascript_vars.html";i:1545717426;}*/ ?>
﻿<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport"
          content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <title><?php echo \think\Config::get('site.title'); ?></title>
    <link rel="Bookmark" href="__ROOT__/favicon.ico" >
    <link rel="Shortcut Icon" href="__ROOT__/favicon.ico" />
    <!--[if lt IE 9]>
    <script type="text/javascript" src="__LIB__/html5.js"></script>
    <script type="text/javascript" src="__LIB__/respond.min.js"></script>
    <script type="text/javascript" src="__LIB__/PIE_IE678.js"></script>
    <![endif]-->

    <!--jq-->
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="__STATIC__/h-ui/css/H-ui.min.css"/>
    <link rel="stylesheet" type="text/css" href="__STATIC__/h-ui.admin/css/H-ui.admin.css"/>
    <link rel="stylesheet" type="text/css" href="__LIB__/Hui-iconfont/1.0.7/iconfont.css"/>
    <link rel="stylesheet" type="text/css" href="__LIB__/icheck/icheck.css"/>
    <link rel="stylesheet" type="text/css" href="__STATIC__/h-ui.admin/skin/default/skin.css" id="skin"/>
    <link rel="stylesheet" type="text/css" href="__STATIC__/h-ui.admin/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="__STATIC__/css/app.css"/>
    <link rel="stylesheet" type="text/css" href="__LIB__/icheck/icheck.css"/>
    
    <!--[if IE 6]>
    <script type="text/javascript" src="__LIB__/DD_belatedPNG_0.0.8a-min.js"></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
    <!--定义JavaScript常量-->
<script>
    window.THINK_ROOT = '<?php echo \think\Request::instance()->root(); ?>';
    window.THINK_MODULE = '<?php echo \think\Url::build("/" . \think\Request::instance()->module(), "", false); ?>';
    window.THINK_CONTROLLER = '<?php echo \think\Url::build("___", "", false); ?>'.replace('/___', '');
</script>
</head>
<body>

<nav class="breadcrumb">
    <div id="nav-title"></div>
    <a class="btn btn-success radius r btn-refresh" style="line-height:1.6em;margin-top:3px" href="javascript:;" title="刷新"><i class="Hui-iconfont"></i></a>
</nav>


<link href="http://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<style>
    .htmleaf-container {
        margin-top: 60px;
    }
    a {
        color: #f1c40f;
    }

    a:hover,
    a:active,
    a:focus {
        color: #dab10d;
    }

    .rating-stars {
        width: 100%;
        text-align: center;
    }

    .rating-stars .rating-stars-container {
        font-size: 0px;
    }

    .rating-stars .rating-stars-container .rating-star {
        display: inline-block;
        font-size: 32px;
        color: #555555;
        cursor: pointer;
        padding: 5px 30px;
    }

    .rating-stars .rating-stars-container .rating-star.is--active,
    .rating-stars .rating-stars-container .rating-star.is--hover {
        color: #f1c40f;
    }

    .rating-stars .rating-stars-container .rating-star.is--no-hover {
        color: #555555;
    }
    .font d{
        padding: 5px 39px;
    }
</style>
<body>
        <div class="htmleaf-container">
        <div class="position-relative overflow-hidden p-3 p-md-6 m-md-3 text-center bg-light">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <div class="rating-stars block">
                <div class="rating-stars-container">

                    <div  <?php if($sel == "D"): ?>class="rating-star is--active"<?php else: ?> class="rating-star" <?php endif; ?>  onclick="grade('D',<?php echo $id; ?>)">
                        <i class="fa fa-star"></i>
                    </div>

                    <div <?php if($sel == "C"): ?>class="rating-star is--active"<?php else: ?> class="rating-star" <?php endif; ?> onclick="grade('C',<?php echo $id; ?>)">
                        <i class="fa fa-star"></i>
                    </div>
                    <div <?php if($sel == "B"): ?>class="rating-star is--active"<?php else: ?> class="rating-star" <?php endif; ?> onclick="grade('B',<?php echo $id; ?>)">
                        <i class="fa fa-star"></i>
                    </div>
                    <div <?php if($sel == "A"): ?>class="rating-star is--active"<?php else: ?> class="rating-star" <?php endif; ?> onclick="grade('A',<?php echo $id; ?>)">
                        <i class="fa fa-star"></i>
                    </div>
                    <div <?php if($sel == "A+"): ?>class="rating-star is--active"<?php else: ?> class="rating-star" <?php endif; ?> onclick="grade('A+',<?php echo $id; ?>)">
                    <i class="fa fa-star"></i>
                </div>
                </div>

            <!--<div class="font">-->
                <!--<d>D</d>-->
                <!--<d>C</d>-->
                <!--<d>B</d>-->
                <!--<d>A</d>-->
                <!--<d>A+</d>-->
            </div>


            </div>
            <br />
            <br />
        </div>
    </div>
</div>
<script src="__STATIC__/js/click/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="__STATIC__/js/click/jquery.rating-stars.min.js"></script>
<script>
    var ratingOptions = {
        selectors: {
            starsSelector: '.rating-stars',
            starSelector: '.rating-star',
            starActiveClass: 'is--active',
            starHoverClass: 'is--hover',
            starNoHoverClass: 'is--no-hover',
            targetFormElementSelector: '.rating-value'
        }
    };

    $(".rating-stars").ratingStars(ratingOptions);
    $('div.is--active').prevAll().addClass("is--active");// 当前元素之前所有的兄弟节点

    function grade(val,val2){
        $.ajax({
            url:'<?php echo url("Activity/grade"); ?>',
            type:'post',
            data:{grade:val,id:val2},
            success:function (res){
                location.reload();
            }
        });
    }
</script>
</body>

<script type="text/javascript" src="__LIB__/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="__LIB__/layer/2.4/layer.js"></script>
<script type="text/javascript" src="__STATIC__/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="__STATIC__/h-ui.admin/js/H-ui.admin.js"></script>
<script type="text/javascript" src="__STATIC__/js/app.js"></script>
<script type="text/javascript" src="__LIB__/icheck/jquery.icheck.min.js"></script>

</body>
</html>