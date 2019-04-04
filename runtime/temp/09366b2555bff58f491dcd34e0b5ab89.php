<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:72:"D:\phpStudy\WWW\xlz\public/../application/admin\view\activity\index.html";i:1545783243;s:71:"D:\phpStudy\WWW\xlz\public/../application/admin\view\template\base.html";i:1545717426;s:82:"D:\phpStudy\WWW\xlz\public/../application/admin\view\template\javascript_vars.html";i:1545717426;s:71:"D:\phpStudy\WWW\xlz\public/../application/admin\view\activity\form.html";i:1545717423;s:69:"D:\phpStudy\WWW\xlz\public/../application/admin\view\activity\th.html";i:1545742602;s:69:"D:\phpStudy\WWW\xlz\public/../application/admin\view\activity\td.html";i:1545717423;}*/ ?>
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
    #form {
        margin-top: 50px;
    }
</style>
<div class="page-container">
    <form class="mb-20" id="form" method="get" action="<?php echo \think\Url::build(\think\Request::instance()->action()); ?>">
    <input type="text" class="input-text" style="width:250px" placeholder="活动主题" name="theme" value="<?php echo \think\Request::instance()->param('theme'); ?>" >
    <button type="submit" class="btn btn-success"><i class="Hui-iconfont">&#xe665;</i> 搜索</button>
</form>
    <div class="cl pd-5 bg-1 bk-gray">
        <span class="l">
            <?php if($quanxian == 2): if (\Rbac::AccessCheck('delete')) : ?><a href="javascript:;" onclick="del_all('<?php echo \think\Url::build('delete', []); ?>')" class="btn btn-danger radius mr-5"><i class="Hui-iconfont">&#xe6e2;</i> 删除</a><?php endif; if (\Rbac::AccessCheck('recyclebin')) : ?><a href="javascript:;" onclick="open_window('回收站','<?php echo \think\Url::build('recyclebin', []); ?>')" class="btn btn-secondary radius mr-5"><i class="Hui-iconfont">&#xe6b9;</i> 回收站</a><?php endif; endif; ?>
        </span>
        <span class="r pt-5 pr-5">
            共有数据 ：<strong><?php echo isset($count) ? $count :  '0'; ?></strong> 条
        </span>
    </div>
    <?php if($count > 0): ?>
    <table class="table table-border table-bordered table-hover table-bg mt-20">
        <thead>
        <tr class="text-c">
            <th width="25"><input type="checkbox"></th>
<th width="25px">id</th>
<th width="290px">活动主题</th>
<th width="90px">活动单位</th>
<th width="255px">活动地区</th>
<th width="120px">开始时间</th>
<th width="120px">结束时间</th>
<th width="70px">状态</th>
<th width="60px">详情</th>

            <?php if($quanxian == 2): ?><th width="70">操作</th><?php endif; ?>
        </tr>
        </thead>
        <tbody>
        <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <tr class="text-c" id="<?php echo $vo['id']; ?>">
            <td><input type="checkbox" name="id[]" value="<?php echo $vo['id']; ?>"></td>
<td><?php echo $key+1; ?></td>
<td><?php echo high_light($vo['theme'],\think\Request::instance()->param('theme')); ?></td>
<td><?php echo $vo['unit']; ?></td>
<td><?php echo $vo['address']; ?></td>
<td><?php echo date('Y-m-d H:i:s',$vo['start_time']); ?></td>
<td><?php echo date('Y-m-d H:i:s',$vo['over_time']); ?></td>
<td>
    <?php switch($vo['status']): case "'0'": ?>审核中<?php break; case "1": ?>审核通过<?php break; case "2": ?>已发布<?php break; case "3": if($quanxian == 1): ?>
    <button class="btn btn-default" onclick="layer_open('评分','pingfen/id/<?php echo $vo['id']; ?>','600px','200px')">点击评分</button>
    <?php else: ?>
    活动已结束
    <?php endif; break; case "4": ?>审核未通过<?php break; case "5": ?>已撤回<?php break; endswitch; ?>
</td>

<td><button class="btn btn-default" onclick="layer_open('详情页','table/id/<?php echo $vo['id']; ?>','600px','600px')">查看</button></td>

            <td class="f-14">
                <?php if($quanxian == 2): ?>
                    <!--被删除则显示恢复，未被删除显示删除-->
                    <?php if($stu == 0): ?>
                    <a title="删除" href="javascript:;" onclick="ldel(this,'<?php echo $vo['id']; ?>')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a>
                    <?php else: ?>
                    <!--<a title="恢复" href="javascript:;" onclick="huifu(this,'<?php echo $vo['id']; ?>')"  class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a>-->
                    <?php echo show_status($vo['isdelete'],$vo['id']); endif; endif; ?>
            </td>
        </tr>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
    <div class="page-bootstrap"><?php echo isset($page) ? $page :  ''; ?></div>
    <?php else: ?>
    <h1 style="text-align: center;">暂无活动</h1>
    <?php endif; ?>
</div>
<script>
    function ldel(obj, id) {
        layer.confirm('确认删除当前数据吗?',function (index) {
            $.ajax({
                url:"<?php echo url('ldel'); ?>",
                type:'post',
                data:{id:id},
                success:function (res) {
                    layer.msg('已删除!', {icon: 1, time: 1000});
                    // $("#id").remove();
                    location.reload()
                }
                });
    });
    };
</script>

<script type="text/javascript" src="__LIB__/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="__LIB__/layer/2.4/layer.js"></script>
<script type="text/javascript" src="__STATIC__/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="__STATIC__/h-ui.admin/js/H-ui.admin.js"></script>
<script type="text/javascript" src="__STATIC__/js/app.js"></script>
<script type="text/javascript" src="__LIB__/icheck/jquery.icheck.min.js"></script>

</body>
</html>