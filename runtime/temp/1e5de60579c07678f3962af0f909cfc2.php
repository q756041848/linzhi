<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:72:"D:\phpStudy\WWW\xlz\public/../application/admin\view\pactivity\edit.html";i:1546513741;s:71:"D:\phpStudy\WWW\xlz\public/../application/admin\view\template\base.html";i:1545717426;s:82:"D:\phpStudy\WWW\xlz\public/../application/admin\view\template\javascript_vars.html";i:1545717426;}*/ ?>
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


<!--时间插件-->
<link href="__STATIC__/date/bootstrap.css" rel="stylesheet">
<link href="__STATIC__/date/bootstrap-datetimepicker.css" rel="stylesheet">
<style>
    /*<!--隐藏Nav-->*/
    .breadcrumb{
        display: none;
    }
    /*顶部注册按钮*/
    .btn-danger { width: 50%;}
    .btn-default {  width: 50%;}

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

    /*表单固定长度*/
    input.form-control.chang {width: 300px;height: 30px;}

    /*选择表单固定长度*/
    select.form-control.chang {width: 300px;}
    .jieshi { margin-left: 100px;}

    /*按钮*/
    .btn-primary{
        width: 120px;
        height: 30px;
        line-height: 0px;
    }
    .buttons {
        width: 65%;
    }
    input.btn.btn-danger { width: 300px;}
    .btns{margin: 0 0 30px 100px;width: 300px;}
    a:hover{text-decoration:none}

    /*其余*/
    span{color: #8C8C8C;width: 300px;float: left;}
    input[type="checkbox"] {  float: left;}
    p {margin: 10px 0px;}
    p.gouxuan {width: 80%; margin-left: 100px;}


    label{
        position: relative;
    }
    #fileinp{
        position: absolute;
        left: 0;
        top: 0;
        opacity: 0;
    }

    /*input时间控件*/
    input.time {
        float: left;
        width: 245px;
        height: 30px;
    }


    /*上传*/
    /*父级容器*/
    .show {
        width: 455px;
        height: 38px;
        position:relative;
    }

    /*显示部分*/
    #fil{
        position:absolute;
        top:0px;
        left: 0px;
        width: 100px;
        height: 30px;
        line-height: 30px;
        background-color: #428bca;
        border-color: #357ebd;
        color: #fff;
        text-align: center;
        vertical-align: middle;
        border: 1px solid transparent;
        font-weight: 900;
        font-size:125%

        -moz-border-radius: 5px;
        -webkit-border-radius: 5px;
        border-radius: 5px; /* future proofing */
        -khtml-border-radius: 5px; /* for old Konqueror browsers */
    }

    /*隐藏部分*/
    #file{
        position: absolute;
        width: 310px;
        height: 30px;
        z-index: 999;
        top: 0px;
        left: 100px;
    }

    /*隐藏上传文件*/
    input[type=file] {
        display: block;
        opacity: 0.0;
    }

    .text{
        right: 50px;
        top: 0px;
        width: 180px;
        position: absolute;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        border: 1.5px solid#ddd;
        padding: 5px;
        border-radius: 5px;
        color: #838383;
    }

</style>
<div class="panel panel-default" style="margin-top: -20px;">
    <div class="panel-body">
        <form id="form" class="form-inline" enctype="multipart/form-data">
            <!--隐藏id    因为是先上传在修改所以需要-->
                <input type="hidden" name="id" value="" id="id"/>

            <!--活动主题-->
            <p><label>活动主题：</label>
                <input type="text" name="theme" value="" class="form-control chang" placeholder="活动主题"/></p>

            <!--活动简介-->
            <p><label>活动简介：</label>
                <textarea class="form-control" name="intro" style="width: 300px" rows="2" placeholder="活动简介"></textarea>
            </p>


            <!--活动单位-->
            <p><label>申请单位：</label>
                <input type="text" name="unit" value="" class="form-control chang" placeholder="申请单位"/></p>


            <!--活动地区-->
            <p><label>活动地区：</label>
                <input type="text" name="address" value="" class="form-control chang" placeholder="活动地区范围"/></p>


            <!--&lt;!&ndash;活动方案&ndash;&gt;-->
            <div class="show">
                <label for="files">活动方案：</label>
                <!--隐藏上传-->
                <input name="project" type="file" id="file"/>
                <!--显示上传-->
                <d class="btns" id="fil">点击上传</d><d class="text">  word |   png  |  zip   |  xlsx </d>
            </div>


            <!--活动人数-->
            <p><label>需要人数：</label>
                <input type="text" name="number" value="" class="form-control chang" placeholder="需要人数"/></p>

            <!--开始时间-->
            <label>开始时间：</label>
            <div class="input-append date form_datetime" style="width: 310px" name="" data-date="">
                <input size="16" type="text" name="start_time" value="" class="time" placeholder="开始时间">
                <span class="add-on"><d class="icon-calendar">✚</d></span>
                <span class="add-on"><d class="icon-remove">X</d></span>
            </div>
            <p></p>

            <label>结束时间：</label>
            <div class="input-append date form_datetime" style="width: 310px" name="" data-date="">
                <input size="16" name="over_time" type="text" value="" class="time" placeholder="结束时间">
                <span class="add-on"><d class="icon-calendar">✚</d></span>
                <span class="add-on"><d class="icon-remove">X</d></span>
            </div>
            <!--工作时常-->
            <p><label>工作时常：</label>
                <input type="number" name="sotime" class="form-control chang" min="1" placeholder="学生工作时常"/></p>

            <!--发起人-->
            <p><label>活动发起人：</label>
                <input type="text" name="initiator" value="" class="form-control chang" placeholder="活动发起人"/></p>


            <label></label>
            <input type="submit" id="btn_file" class="btn btn-danger buttons" value="提交活动"/><br>
        </form>
    </div>
</div>

<script type="text/javascript" src="__LIB__/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="__LIB__/layer/2.4/layer.js"></script>
<script type="text/javascript" src="__STATIC__/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="__STATIC__/h-ui.admin/js/H-ui.admin.js"></script>
<script type="text/javascript" src="__STATIC__/js/app.js"></script>
<script type="text/javascript" src="__LIB__/icheck/jquery.icheck.min.js"></script>

<script src="__STATIC__/date/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="__LIB__/Validform/5.3.2/Validform.min.js"></script>
<!--上传插件js-->
<script type="text/javascript" src="__STATIC__/upload/jquery.html5uploader.js"></script>
<!--<script src="https://cdn.bootcss.com/twitter-bootstrap/4.1.3/js/bootstrap.js"></script>-->
<!--时间控件依赖JS-->
<script type="text/javascript" src="__STATIC__/date/bootstrap.js"></script>
<script type="text/javascript" src="__STATIC__/date/bootstrap-datetimepicker.js"></script>
<script type="text/javascript" src="__STATIC__/date/bootstrap-datetimepicker.zh-CN.js" charset="UTF-8"></script>


<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        language:  'zh-CN',  //引的中文版Js
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        forceParse: 0,
        showMeridian: 1
    });
    $('.form_date').datetimepicker({
        language:  'zh-CN',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0
    });
    $('.form_time').datetimepicker({
        language:  'zh-CN',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 1,
        minView: 0,
        maxView: 1,
        forceParse: 0
    });

    //选择文件上传提示 [限定]【word | txt | img |zip |png】
    $("#file").change(function () {
        // console.log($("#file")[0].files);//可以查看全部 数组列
        var name = $("#file")[0].files['0'].name;
        /*检查最后的后缀名*/
        var str = name;
        var re = /.*\.docx|xlsx|png|zip$/ig;
        // console.log(re.test(str));
        if (re.test(str)){
            if (name){
                var data = new FormData($('#form')[0]);
                $.ajax({
                    'url':'<?php echo url("Pactivity/fil"); ?>',
                    'type':'post',
                    'data':data,
                    async:false,//async. 默认是true，即为异步方式---false 同步方式
                    contentType:false,
                    processData:false,
                    'success':function(result){
                        $('#id').val(result);//返回值为id
                        $('#fil').html("已选择");
                        $('.text').html(name);
                        $("#btn_file").attr('type','submit');
                    }
                });
            }
        }else{
            layer.msg('格式不正确');
            $('.text').html('限定：word  |  png  |  zip  |  excel');
            $("#btn_file").attr('type','button');
        }
    });


    //上传表单
    $(function () {
        $("#form").Validform({
            tiptype:2,
            ajaxPost:true,
            showAllError:true,
            callback:function(ret){
                ajax_progress(ret);
            }
        });
    });

</script>

</body>
</html>