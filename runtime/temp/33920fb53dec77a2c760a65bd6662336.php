<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:77:"D:\phpStudy\WWW\xlz\public/../application/admin\view\admin_article\index.html";i:1545743324;s:71:"D:\phpStudy\WWW\xlz\public/../application/admin\view\template\base.html";i:1545717426;s:82:"D:\phpStudy\WWW\xlz\public/../application/admin\view\template\javascript_vars.html";i:1545717426;s:76:"D:\phpStudy\WWW\xlz\public/../application/admin\view\admin_article\form.html";i:1545717423;s:74:"D:\phpStudy\WWW\xlz\public/../application/admin\view\admin_article\th.html";i:1545743324;s:74:"D:\phpStudy\WWW\xlz\public/../application/admin\view\admin_article\td.html";i:1545743324;}*/ ?>
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
    <form class="mb-20" method="get" action="<?php echo \think\Url::build(\think\Request::instance()->action()); ?>">
    <input type="text" class="input-text" style="width:250px" placeholder="标题" name="title" value="<?php echo \think\Request::instance()->param('title'); ?>" >
    <button type="submit" class="btn btn-success"><i class="Hui-iconfont">&#xe665;</i> 搜索</button>
</form>
    <div class="cl pd-5 bg-1 bk-gray">
        <span class="l">
            <?php if (\Rbac::AccessCheck('add')) : ?><a class="btn btn-primary radius mr-5" href="javascript:;" onclick="layer_open('添加','<?php echo \think\Url::build('add', []); ?>')"><i class="Hui-iconfont">&#xe600;</i> 添加</a><?php endif; if (\Rbac::AccessCheck('delete')) : ?><a href="javascript:;" onclick="del_all('<?php echo \think\Url::build('delete', []); ?>')" class="btn btn-danger radius mr-5"><i class="Hui-iconfont">&#xe6e2;</i> 删除</a><?php endif; if (\Rbac::AccessCheck('recyclebin')) : ?><a href="javascript:;" onclick="open_window('回收站','<?php echo \think\Url::build('recyclebin', []); ?>')" class="btn btn-secondary radius mr-5"><i class="Hui-iconfont">&#xe6b9;</i> 回收站</a><?php endif; ?>
        </span>
        <span class="r pt-5 pr-5">
            共有数据 ：<strong><?php if($count != null): ?><?php echo $count; else: ?>0<?php endif; ?></strong> 条
        </span>
    </div>
    <table class="table table-border table-bordered table-hover table-bg mt-20">
        <thead>
        <tr class="text-c">
            <th width="25"><input type="checkbox"></th>
<th width="">ID</th>
<th width="">标题</th>
<th width="">内容</th>
<th width="">附件</th>
<th width="">制定日期</th>
<th width="">发布人</th>
<th width="">学院</th>
<?php if($coll == 1 or $coll == 0): ?>
<th width="">成绩</th>
<th width="">审核人员</th>
<th width="">审核日期</th>
<?php endif; ?>
<th width="">状态</th>

            <th width="70">操作</th>
        </tr>
        </thead>
        <tbody>
        <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $key=>$vo): ?>
        <tr class="text-c">
            <td><input type="checkbox" name="id[]" value="<?php echo $vo['id']; ?>"></td>
<td><?php echo $key+1; ?></td>
<td style="max-width: 110px;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;"><?php echo high_light($vo['title'],\think\Request::instance()->param('title')); ?></td>
<td class="original" style="display: none;"><?php echo $vo['content']; ?></td>
<td class="duplicate" style="max-width: 110px;max-height:20px;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;"></td>
<td><a class="btn btn-success" href="__STATIC__/uploads/<?php echo $vo['adjunct']; ?>" target="download">附件下载</a></td>
<td><?php echo date('Y-m-d',$vo['date']); ?></td>
<td><?php echo $vo['realname']; ?></td>
<td><?php echo $vo['catname']; ?></td>
<?php if($coll == 1 or $coll == 0): ?>
<td><?php echo $vo['grade']; ?></td>
<td><?php if(is_array($user) || $user instanceof \think\Collection || $user instanceof \think\Paginator): if( count($user)==0 ) : echo "" ;else: foreach($user as $key=>$zhi): if($vo['staff_check'] == $zhi['id']): ?><?php echo $zhi['realname']; else: endif; endforeach; endif; else: echo "" ;endif; ?></td>
<td><?php if($vo['check_date']): ?><?php echo date('Y-m-d',$vo['check_date']); else: ?>待审核<?php endif; ?></td>
<?php endif; ?>
<td>
    <?php if($vo['status'] == 2): ?>
    <button type="button" class="btn btn-success">已通过</button>
    <?php endif; if($vo['status'] == 1): if($coll == 1 or $coll == 0): ?>
    <button type="button" class="btn btn-warning audit" data-id="<?php echo $vo['id']; ?>" onclick="check(this,'<?php echo $vo['id']; ?>','<?php echo $issuer; ?>')">待审核</button>
    <?php else: ?>
    <button type="button" class="btn btn-warning audit">待审核</button>
    <?php endif; endif; ?>
</td>
            <td class="f-14" width="150px">
                <?php if($coll != 1 or $coll == 0): if (\Rbac::AccessCheck('edit')) : ?> <a title="编辑" href="javascript:;" onclick="layer_open('编辑','<?php echo \think\Url::build('edit', ['id' => $vo["id"], ]); ?>')" style="text-decoration:none" class="ml-5"><i class="Hui-iconfont">&#xe6df;</i></a><?php endif; if (\Rbac::AccessCheck('delete')) : ?> <a title="删除" href="javascript:;" onclick="del(this,'<?php echo $vo['id']; ?>','<?php echo \think\Url::build('delete', []); ?>')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a><?php endif; endif; ?>
                <a title="查看详情" href="javascript:;" style="text-decoration: none;" class="ml-5 details" onclick="layer.open({type: 2,title:'文章详情',skin:'layui-layer-rim',area: ['70%','80%'],content:['<?php echo url('AdminArticle/details',['id'=>$vo['id']]); ?>']})"><i class="Hui-iconfont Hui-iconfont-tuwenxiangqing"></i></a>
                <?php if($coll == 1 or $coll == 0): ?>
                <a title="评分" href="javascript:;" style="text-decoration: none;" class="ml-5" onclick="layer.open({type: 2,title:'评分',skin:'layui-layer-rim',area: ['30%','25%'],content:['<?php echo url('AdminArticle/grade',['id'=>$vo['id']]); ?>']})"><i class="Hui-iconfont Hui-iconfont-star-halfempty" ></i></a>
                <?php endif; ?>
            </td>
        </tr>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
    <div class="page-bootstrap"><?php echo isset($page) ? $page :  ''; ?></div>
</div>

<script type="text/javascript" src="__LIB__/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="__LIB__/layer/2.4/layer.js"></script>
<script type="text/javascript" src="__STATIC__/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="__STATIC__/h-ui.admin/js/H-ui.admin.js"></script>
<script type="text/javascript" src="__STATIC__/js/app.js"></script>
<script type="text/javascript" src="__LIB__/icheck/jquery.icheck.min.js"></script>

<script type="text/javascript" src="__STATIC__/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="__STATIC__/lib/layer/2.4/layer.js"></script>
<script>
    function check(obj,id,se){
        layer.confirm('是否通过？',function(){
            $.ajax({
                url:'<?php echo url("AdminArticle/check"); ?>',
                type:'post',
                data:{id:id,status:2,staff_check:se},
                success:function(res){
                    //console.log(res);
                    $(obj).addClass('btn-success').html('已通过');
                    $(obj).removeClass('btn-warning');
                    layer.msg('已通过!',{icon: 1,time:1000},function () {
                        location.reload();
                    });
                }
            });
        })}
    var s=document.getElementsByClassName('original');
    var d=document.getElementsByClassName('duplicate');
    for(var i=0;i<s.length;i++){
        for(var j=0;j<d.length;j++){
            if(i==j){
                d[j].innerHTML=s[i].innerText;
            }
        }
    }
</script>

</body>
</html>