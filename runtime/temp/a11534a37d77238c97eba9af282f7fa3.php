<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:70:"F:\phpStudy\WWW\lz\public/../application/admin\view\past_act\edit.html";i:1545734352;s:70:"F:\phpStudy\WWW\lz\public/../application/admin\view\template\base.html";i:1545717590;s:81:"F:\phpStudy\WWW\lz\public/../application/admin\view\template\javascript_vars.html";i:1545717590;}*/ ?>
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
        <div class="row cl">
            <label class="form-label col-xs-2 col-sm-2">活动标题：</label>
            <div class="formControls col-xs-8 col-sm-8">
                    <input type="text" name="title"  class="input-text" required="required" value="<?php echo isset($vo['title']) ? $vo['title'] :  ''; ?>">
            </div>
            <div class="col-xs-2 col-sm-2"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-2 col-sm-2">活动方案：</label>
            <div class="formControls col-xs-8 col-sm-8">
                <div class="select-box">
                    <select name="aid" class="select">
                        <option>请选择...</option>
                        <?php if(is_array($selelist) || $selelist instanceof \think\Collection || $selelist instanceof \think\Paginator): if( count($selelist)==0 ) : echo "" ;else: foreach($selelist as $key=>$sel): ?>
                        <option value="<?php echo $sel['id']; ?>"<?php if(!empty($vo['aid'])): if($sel['id'] == $vo['aid']): ?> selected <?php endif; else: endif; ?>><?php echo $sel['theme']; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </div>
            </div>
            <div class="col-xs-2 col-sm-2"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-2 col-sm-2">活动内容：</label>
            <div class="formControls col-xs-8 col-sm-8">
                <div>
                    <script id="editor" name="content" type="text/plain" style="height:400px" ><?php if(!(empty($vo['content']) || (($vo['content'] instanceof \think\Collection || $vo['content'] instanceof \think\Paginator ) && $vo['content']->isEmpty()))): ?><?php echo htmlspecialchars_decode($vo['content']); endif; ?></script>
                    </div>
                    <div id="markdown" class="mt-20"></div>
            </div>
            <div class="col-xs-2 col-sm-2"></div>
        </div>


                        <div class="row cl">
                        <label class="form-label col-xs-2 col-sm-2"><span class="c-red">*</span>活动缩略图：</label>
                    <div class="formControls col-xs-8 col-sm-8">
                        <input id="photos" type="text" name="img" style="width:500px" class="input-text" value="<?php echo isset($vo['img']) ? $vo['img'] :  ''; ?>" />
                        <button id="uploadimg" type="button" class="btn btn-primary radius">&nbsp;&nbsp;上传图片&nbsp;&nbsp;</button>
                    <img style="height: 50px;" id="photoimg" src="<?php echo isset($vo['img']) ? $vo['img'] :  ''; ?>">
                        </div>
                        <div class="col-xs-2 col-sm-2"></div>
                        </div>

        <div class="row cl">
            <label class="form-label col-xs-2 col-sm-2">状态：</label>
            <div class="formControls col-xs-8 col-sm-8 skin-minimal">
                <div class="radio-box">
                    <input type="radio" name="status" id="status-1" value="1" checked>
                    <label for="status-1">发布</label>
                </div>
                <div class="radio-box">
                    <input type="radio" name="status" id="status-0" value="0">
                    <label for="status-0">不发布</label>
                </div>
            </div>
            <div class="col-xs-2 col-sm-2"></div>
        </div>

        <div class="row cl">
            <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                <button type="submit" class="btn btn-primary radius">&nbsp;&nbsp;提交&nbsp;&nbsp;</button>
                <button type="button" class="btn btn-default radius ml-20" onClick="layer_close();">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
            </div>
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
<script type="text/javascript" charset="utf-8" src="__LIB__/ueditor/1.4.3/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="__LIB__/ueditor/1.4.3/ueditor.all.min.js"> </script>
<script type="text/javascript" charset="utf-8" src="__LIB__/ueditor/1.4.3/lang/zh-cn/zh-cn.js"></script>

<script>
    $('#uploadimg').click(function () {
        layer.open({
            type: 2,
            title: false,
            shadeClose: true,
            shade: 0.8,
            area: ['90%', '90%'],
            content: '<?php echo url("AdminUser/modal_upload_img"); ?>'
        });
    });
    $(function () {
        $("[name='status'][value='<?php echo isset($vo['status']) ? $vo['status'] :  ''; ?>']").prop("checked", true);
        $("[name='a_id']").find("[value='<?php echo isset($vo['a_id']) ? $vo['a_id'] :  ''; ?>']").attr("selected", true);

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
<script>
    $(function () {
            var ue = UE.getEditor('editor',{
            serverUrl:'<?php echo \think\Url::build("Ueditor/index"); ?>'
      });
                var converter = new showdown.Converter(),
                text= $("#markdown_tpl").html();
            $("#markdown").html(converter.makeHtml(text));
    })
</script>

</body>
</html>