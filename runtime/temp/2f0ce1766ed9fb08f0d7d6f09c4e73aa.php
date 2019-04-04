<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:72:"D:\phpStudy\WWW\xlz\public/../application/admin\view\activity\table.html";i:1546516205;s:71:"D:\phpStudy\WWW\xlz\public/../application/admin\view\template\base.html";i:1545717426;s:82:"D:\phpStudy\WWW\xlz\public/../application/admin\view\template\javascript_vars.html";i:1545717426;}*/ ?>
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
        width: 500px;
        margin: auto;
    }

    /*表单*/
    label{
        font-weight: lighter;
        font-family: "微软雅黑";
        width: 100px;
        text-align: right;
        line-height: 34px;
    }

    input{
        border: none;
    }
    /*其余*/
    span{color: #8C8C8C;width: 300px;float: left;}
    input[type="checkbox"] {  float: left;}
    p {
        margin: 10px 0px;
        border-bottom: 1px solid #ddd;
    }
    p.gouxuan {width: 80%; margin-left: 100px;}

    label{
        position: relative;
    }
    /*<!--隐藏Nav-->*/
    .breadcrumb{
        display: none;
    }
</style>
<body style="color:#7d7979;;background-color: #ddd;">
<div class="panel panel-default">
    <div class="panel-body">
        <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $key=>$li): ?>
        <form id="form1" class="form-inline" enctype="multipart/form-data">
            <!--活动主题-->
            <p><label>活动主题：</label>
                <input type="text" name="theme" value="<?php echo $li['theme']; ?>"  /></p>

            <!--活动简介-->
            <p>
                <label style="height: 60px">活动简介：</label>
                <!--<input type="text" name="intro" value="<?php echo $li['intro']; ?>"  placeholder="活动简介"/>-->
                <textarea class="form-control" name="intro" style="width: 365px;padding: 0px;float: right;height: 60px;margin-top: 5px;border: none" rows="2"><?php echo $li['intro']; ?></textarea>
            </p>

            <!--活动单位-->
            <p><label>申请单位：</label>
                <input type="text" name="unit" value="<?php echo $li['unit']; ?>"  placeholder="申请单位"/></p>

            <!--活动地区-->
            <p><label>活动地区：</label>
                <input type="text" name="address" value="<?php echo $li['address']; ?>" placeholder="活动地区范围"/></p>

            <!--活动人数-->
            <p><label>需要人数：</label>
                <input type="text" name="number" value="<?php echo $li['number']; ?>"  placeholder="需要人数"/></p>

            <!--开始时间-->
            <p><label>开始时间：</label>
                <input type="text" name="start_time" value="<?php echo date('Y-m-d H:i:s',$li['start_time']); ?>"  placeholder="活动开始时间"/></p>

            <!--结束时间-->
            <p><label>结束时间：</label>
                <input type="text" name="over_time" value="<?php echo date('Y-m-d H:i:s',$li['over_time']); ?>"  placeholder="活动结束时间"/></p>

            <!--发起人-->
            <p><label>活动状态：</label>
                <?php switch($li['status']): case "'0'": ?>审核中<?php break; case "1": ?>审核通过<?php break; case "2": ?>已发布<?php break; case "3": ?>活动已结束<?php break; case "4": ?>【审核未通过】
                        <p id="reason" style="width: 400px;margin: 0 auto;text-align: left;border: none;">退回原因：<?php echo $li['reason']; ?></p>
                    <?php break; case "5": ?>已经撤回<?php break; endswitch; ?>
            </p>

            <!--发起人-->
            <p><label>审核人员：</label>
                <input type="text" name="initiator" value="<?php echo $li['realname']; ?>"  placeholder="活动发起人"/></p>

            <!--发起人-->
            <p><label>发布人员：</label>
                <input type="text" name="initiator" value="<?php echo $li['realname1']; ?>"  placeholder="活动发起人"/></p>

            <!--发起人-->
            <p><label>发起日期：</label>
                <input type="text" name="initiator" value="<?php echo date('Y-m-d H:i:s',$li['initiator_time']); ?>"  placeholder="活动发起人"/></p>

            <!--发起日期-->
            <p><label>工作时常：</label>
                <input type="text" name="initiator" value="<?php echo $li['sotime']; ?>"  /></p>

            <!--发起人-->
            <p><label>发起人：</label>
                <input type="text" name="initiator" value="<?php echo $li['initiator']; ?>"  placeholder="活动发起人"/></p>
            <br>
            <!--活动方案-->
            <!--http://www.lz.com/<?php echo $li['project']; ?>-->
            <p>
                <a href="<?php echo $li['project']; ?>" class="btn btn-default" style="display: block;">方案下载</a>
            </p>
        </form>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
</div>
</body>

<script type="text/javascript" src="__LIB__/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="__LIB__/layer/2.4/layer.js"></script>
<script type="text/javascript" src="__STATIC__/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="__STATIC__/h-ui.admin/js/H-ui.admin.js"></script>
<script type="text/javascript" src="__STATIC__/js/app.js"></script>
<script type="text/javascript" src="__LIB__/icheck/jquery.icheck.min.js"></script>

</body>
</html>