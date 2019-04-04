<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:72:"D:\phpStudy\WWW\xlz\public/../application/admin\view\pactivity\jobs.html";i:1545880059;s:71:"D:\phpStudy\WWW\xlz\public/../application/admin\view\template\base.html";i:1545717426;s:82:"D:\phpStudy\WWW\xlz\public/../application/admin\view\template\javascript_vars.html";i:1545717426;}*/ ?>
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


<link href="__STATIC__/css/bootcss/bootstrap.min.css" rel="stylesheet">
<style>
    /*面板大小*/
    .panel.panel-default {
        width: 100%;
        height: 100%;
        margin: auto;
    }
    .btn{padding: 5px}

    /*通过*/
    .pass{
        float: right;
        width: 75px;
    }
    /*未通过*/
    .notpass{
        float: right;
        width: 75px;
    }


    /*列表样式*/
    #xinxi{
        width: 1000px;
    }
    #xinxi li{
        float: left;
        border-right: 2px solid#848484;
        text-align: center;
    }

    #xinxi li:last-child{
        border: none;
    }
</style>
<div class="page-container">
    <div class="panel panel-default"  style="margin-top: 20px;border: none;">
        <div class="panel-body">
            <!--页面显示判断-->
            <?php if($states == 1): ?>

            <!--//val1:退回状态；val2:申请表id；val3:提醒字；-->
            <!--<h1>岗位申请</h1>-->
            <ul class="list-group">
                <kbd>岗位：<?php echo $count; ?>/<?php echo $num; ?></kbd>
                <!--循环遍历-->
                <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $key=>$li): ?>
                <li class="list-group-item" style="height: 80px;">

                    <!--按钮分割线-->
                    <?php if($li['status'] == 1): ?>
                    <button class="btn btn-default pass">已通过</button>
                    <?php else: if($li['status'] == 2): ?>
                    <button class="btn btn-danger notpass">未通过</button>
                    <?php else: ?>
                    <span style="float: right;">
                        <button class="btn btn-default" onclick="status(1,<?php echo $li['id']; ?>,'通过',)">通过</button>
                        <button class="btn btn-danger" onclick="status(2,<?php echo $li['id']; ?>,'退回',)">退回</button>
                    </span>
                    <?php endif; endif; ?>
                    <!--按钮分割线-->
                    <ul id="xinxi">
                        <span class="glyphicon glyphicon-user" style="float: left"></span>
                        <li style="width: 150px">学生姓名 : <?php echo $li['name']; ?></li>
                        <li style="width: 100px">性别 : <?php echo !empty($li['sex'])?'男':'女'; ?></li>
                        <li style="width: 150px">学院: <?php echo $li['catname0']; ?></li>
                        <li style="width: 150px">系部: <?php echo $li['catname1']; ?></li>
                        <li style="width: 100px">班级：<?php echo $li['catname2']; ?></li>
                        <li style="width: 250px">申请岗位:<?php echo $li['pname']; ?></li>
                    </ul>

                </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                <!--分页-->
                <span style="text-align: center;display: block;"><?php echo $page; ?></span>
            </ul>

            <?php else: ?>
                <h1 style="text-align: center;">暂无申请</h1>
            <?php endif; ?>
            <!--页面显示判断-->
        </div>
    </div>
</div>
<script>
    //val1:退回状态；val2:表id；val3:提醒字；
    function status(val,val2,val3) {
        $.ajax({
            'url':'<?php echo url("Pactivity/jobsta"); ?>',
            'type':'post',
            'data':{status:val,id:val2},
            'success':function(result){
                layer.msg('已'+val3,function () {
                    location.reload();
                });
            }
        });
    }
</script>

<script type="text/javascript" src="__LIB__/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="__LIB__/layer/2.4/layer.js"></script>
<script type="text/javascript" src="__STATIC__/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="__STATIC__/h-ui.admin/js/H-ui.admin.js"></script>
<script type="text/javascript" src="__STATIC__/js/app.js"></script>
<script type="text/javascript" src="__LIB__/icheck/jquery.icheck.min.js"></script>

</body>
</html>