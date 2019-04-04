<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:76:"D:\phpStudy\WWW\xlz\public/../application/admin\view\stu_act_info\layer.html";i:1545735763;s:71:"D:\phpStudy\WWW\xlz\public/../application/admin\view\template\base.html";i:1545717426;s:82:"D:\phpStudy\WWW\xlz\public/../application/admin\view\template\javascript_vars.html";i:1545717426;}*/ ?>
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


<div class="page-container">
    <form class="form form-horizontal" id="form" method="post" action="<?php echo \think\Request::instance()->baseUrl(); ?>">
        <input type="hidden" name="id" value="<?php echo isset($vo['id']) ? $vo['id'] :  ''; ?>">
        <input type="hidden" name="condition" value="1">
        <div style="margin-left: 200px;margin-bottom: -10px;border: 0px solid;width: 132px;border-radius: 120px;background: #c3c3c3;color: #fff">&nbsp;&nbsp;Particulars / 详情</div>
        <div class="row cl"style="border-top: 2px solid #c3c3c3;width: 700px;margin-left: 200px;">
            <label class="form-label col-xs-3 col-sm-3" style="color: blue;margin-top: 10px">现场照片：</label>
            <div class="formControls col-xs-6 col-sm-6"style="margin-top: 10px">
                <img width="200px" src="<?php if($vo['images'] == ''): ?>\static\admin\images\5abd0172fb1966040afe7f2e5c313d4d.jpg<?php else: ?><?php echo $vo['images']; endif; ?>">
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl" class="row cl" style="width: 700px;margin-left: 200px;" >
            <label class="form-label col-xs-3 col-sm-3" style="color: blue">学生姓名：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <?php echo isset($list['name']) ? $list['name'] :  ''; ?>
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl" style="width: 700px;margin-left: 200px;">
            <label class="form-label col-xs-3 col-sm-3" style="color: blue;">活动方案：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <?php echo isset($list['theme']) ? $list['theme'] :  ''; ?>
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl" style="width: 700px;margin-left: 200px;">
            <label class="form-label col-xs-3 col-sm-3" style="color: blue;"><span class="c-red">*</span>二级学院：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <?php echo isset($list['catname']) ? $list['catname'] :  ''; ?>
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl" style="width: 700px;margin-left: 200px;">
            <label class="form-label col-xs-3 col-sm-3" style="color: blue;"><span class="c-red">*</span>感悟内容：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <text name="content"><?php echo isset($vo['content']) ? $vo['content'] :  ''; ?></text>
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl" style="width: 700px;margin-left: 200px;">
            <label class="form-label col-xs-3 col-sm-3" style="color: blue;">学生审核人员：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <?php if($vo['sec_ass_status'] == 0): ?>未审核<?php else: ?><?php echo $vo['sec_assessor']; endif; ?>
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl" style="width: 700px;margin-left: 200px;">
            <label class="form-label col-xs-3 col-sm-3" style="color: blue;">学生审核日期：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <?php if($vo['sec_ass_status'] == 0): ?>未审核<?php else: ?><?php echo $vo['sec_ass_date']; endif; ?>
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl" style="width: 700px;margin-left: 200px;">
            <label class="form-label col-xs-3 col-sm-3" style="color: blue;">二级学院审核状态：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <?php echo !empty($vo['sec_ass_status'])?'已审核':'未审核'; ?>
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl" style="width: 700px;margin-left: 200px;">
            <label class="form-label col-xs-3 col-sm-3" style="color: blue;">审核人员：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <?php if($vo['ass_status'] == 0): ?>未审核<?php else: ?><?php echo $vo['assessor']; endif; ?>
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl" style="width: 700px;margin-left: 200px;">
            <label class="form-label col-xs-3 col-sm-3" style="color: blue;">审核日期：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <?php if($vo['ass_status'] == 0): ?>未审核<?php else: ?><?php echo $vo['ass_date']; endif; ?>
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl" style="width: 700px;margin-left: 200px;">
            <label class="form-label col-xs-3 col-sm-3" style="color: blue;">审核状态：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <?php echo !empty($vo['ass_status'])?'已审核':'未审核'; ?>
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
    </form>
</div>

<script type="text/javascript" src="__LIB__/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="__LIB__/layer/2.4/layer.js"></script>
<script type="text/javascript" src="__STATIC__/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="__STATIC__/h-ui.admin/js/H-ui.admin.js"></script>
<script type="text/javascript" src="__STATIC__/js/app.js"></script>
<script type="text/javascript" src="__LIB__/icheck/jquery.icheck.min.js"></script>

<script type="text/javascript" src="__LIB__/Validform/5.3.2/Validform.min.js"></script>
<script type="text/javascript" src="__LIB__/My97DatePicker/WdatePicker.js"></script>
<script>
    $(function () {
        $("[name='status'][value='<?php echo isset($vo['status']) ? $vo['status'] :  ''; ?>']").prop("checked", true);

        $('.skin-minimal input').iCheck({
            checkboxClass: 'icheckbox-blue',
            radioClass: 'iradio-blue',
            increaseArea: '20%'
        });

        $("#form").Validform({
            tiptype: 2,
            ajaxPost: true,
            showAllError: true,
            callback: function (ret){
                ajax_progress(ret);
            }
        });
    })
</script>

</body>
</html>