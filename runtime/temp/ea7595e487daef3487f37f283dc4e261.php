<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:73:"D:\phpStudy\WWW\xlz\public/../application/admin\view\pactivity\index.html";i:1546514615;s:71:"D:\phpStudy\WWW\xlz\public/../application/admin\view\template\base.html";i:1545717426;s:82:"D:\phpStudy\WWW\xlz\public/../application/admin\view\template\javascript_vars.html";i:1545717426;}*/ ?>
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


<style>
    .btn{
        border-radius: 4px;
    }
    .btn-default {
        background-color: #fff;
        border-color: #ddd;
        width: 100%;
        border-radius: 4px;
    }
</style>

<div class="page-container" style="margin-top: 50px;">
    <div class="cl pd-5 bg-1 bk-gray">
        <?php if($quanxian == 2): ?>
        <a class="btn btn-primary radius mr-5" style="float: left" href="javascript:;" onclick="layer_open('添加活动','/admin/pactivity/edit.html','780px','600px')"><i class="Hui-iconfont"></i> 添加</a>
        <?php endif; ?>
        <strong style="float:right;">共有数据 ：<?php echo $count; ?>条</strong>
        </span>
    </div>

    <?php if($count > 0): ?> <!--判断是否有条数-->
    <table class="table table-border table-bordered table-hover table-bg mt-20">
        <thead>
        <tr class="text-c">
            <th width="25px">id</th>
            <th width="200px">主题</th>
            <th width="80px">单位</th>
            <th width="130px">地区</th>
            <th width="25px">人数</th>
            <th width="110px">开始时间</th>
            <th width="110px">结束时间</th>
            <th width="">活动状态</th>
            <th width="">详情页</th>
            <th width="">方案</th>
            <th width="240">操作</th>
        </tr>
        </thead>
        <tbody>
        <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $key=>$li): ?>
        <tr class="text-c">
            <td><?php echo $key+1; ?></td>       <!--id-->
            <td><?php echo $li['theme']; ?></td>    <!--主题-->
            <td><?php echo $li['unit']; ?></td>     <!--单位-->
            <td><?php echo $li['address']; ?></td>  <!--地区-->
            <td><?php echo $li['number']; ?></td>   <!--人数-->
            <td><?php echo date('Y-m-d',$li['start_time']); ?></td>                  <!--开始时间-->
            <td><?php echo date('Y-m-d',$li['over_time']); ?></td>                   <!--结束时间-->
            <td><?php if($li['status'] == 0): ?><button class="btn btn-warning">审核中</button><?php else: ?><button class="btn btn-success">已审核</button><?php endif; ?></td><!--活动状态-->
            <td><span class="glyphicon glyphicon-search" aria-hidden="true"></span><button class="btn btn-default" onclick="layer_open('详情页','table/id/<?php echo $li['id']; ?>','600px','600px')">查看</button></td>
            <td><a class="btn btn-default" href="<?php echo $li['project']; ?>">方案下载</a></td><!--活动方案-->
            <td class="f-14"><!--操作按钮-->


                <?php switch($li['status']): case "1": if($quanxian == 2): ?>
                        <button class="btn btn-default issue" onclick="issue(<?php echo $li['id']; ?>)">发布</button>
                    <?php else: ?>
                        <button class="btn btn-success" style="width: 92%">已通过</button>
                    <?php endif; break; case "2": if($quanxian == 2): ?>
                        <button class="btn btn-danger over" onclick="over(<?php echo $li['id']; ?>)">结束</button>
                        <button class="btn btn-success personnel" onclick="layer_open('申请人员','applications/id/<?php echo $li['id']; ?>','1200px','550px')">申请人员</button>
                        <button class="btn btn-success post" onclick="layer_open('岗位申请','jobs/id/<?php echo $li['id']; ?>','1200px','550px')">岗位申请</button>
                    <?php else: ?>
                        <button class="btn btn-success" style="width: 92%">已通过</button>
                    <?php endif; break; default: if($quanxian == 2): ?>
                    <button class="btn btn-danger" style="width: 100%;" onclick="chehui(<?php echo $li['id']; ?>)">撤回申请</button>
                    <?php elseif($quanxian == 1): ?>
                    <button class="btn btn-success" style="width: 45%;" onclick="audit(1,<?php echo $li['id']; ?>,'通过')">通过</button>
                    <button class="btn btn-danger" style="width: 45%;" onclick="audit(4,<?php echo $li['id']; ?>,'退回')">退回</button>
                    <?php elseif($quanxian == 0): ?>
                    <button class="btn btn-warning" style="width: 92%">审核中</button>
                    <?php endif; endswitch; ?>

            </td>
        </tr>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
    <div class="page-bootstrap"><?php echo $page; ?></div><!--分页-->


    <?php else: ?><!--判断是否有条数-->
    <h1 style="text-align: center;">暂无活动</h1>
    <?php endif; ?><!--判断是否有条数-->
</div>
<script>
    function sx() {
        location.reload()
    }
        //撤回申请
        function chehui(val) {
            $.ajax({
                'url':'<?php echo url("Pactivity/chehui"); ?>',
                'type':'post',
                'data':{id:val},
                'success':function(result){
                    if(result.code=='1'){
                        layer.msg('已撤回',function () {
                            location.reload();
                        });
                    }
                }
            });
        }

        //三级领导专用审批
        function audit(status,id,val){
        //判断是否退回
        if (status==4){
            layer.prompt({title: '退回原因', formType: 2}, function(pass, index){
                layer.close(index);
                $.ajax({
                    'url':'<?php echo url("Pactivity/audit"); ?>',
                    'type':'post',
                    'data':{reason:pass,status:status,id:id},
                    'success':function(result){
                        if(result.code=='1'){
                            layer.msg('已'+val,function () {
                                location.reload();
                            });
                        }
                    }
                });
            });
        }else{
            //通过不填原因
            $.ajax({
                'url':'<?php echo url("Pactivity/audit"); ?>',
                'type':'post',
                'data':{status:status,id:id},
                'success':function(result){
                    if(result.code=='1'){
                        layer.msg('已'+val,function () {
                            location.reload();
                        });
                    }
                }
            });
        }
    }

    //结束
    function over(val){
        $.ajax({
            'url':'<?php echo url("Pactivity/over"); ?>',
            'type':'post',
            'data':{id:val},
            'success':function(result){
                if(result.code=='1'){
                    layer.msg('已结束',function () {
                        location.reload();
                    });
                }
            }
        });
    }

    //发布
    function issue(val){
        $.ajax({
            'url':'<?php echo url("Pactivity/issue"); ?>',
            'type':'post',
            'data':{id:val},
            'success':function(result){
                if(result.code=='1'){
                    layer.msg('发布成功',function () {
                        location.reload();
                    });
                }
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