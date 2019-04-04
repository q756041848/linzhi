<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:73:"D:\phpStudy\WWW\xlz\public/../application/admin\view\stu_apply\index.html";i:1545719933;s:71:"D:\phpStudy\WWW\xlz\public/../application/admin\view\template\base.html";i:1545717426;s:82:"D:\phpStudy\WWW\xlz\public/../application/admin\view\template\javascript_vars.html";i:1545717426;s:72:"D:\phpStudy\WWW\xlz\public/../application/admin\view\stu_apply\form.html";i:1545719933;s:70:"D:\phpStudy\WWW\xlz\public/../application/admin\view\stu_apply\th.html";i:1545719933;s:70:"D:\phpStudy\WWW\xlz\public/../application/admin\view\stu_apply\td.html";i:1545880715;}*/ ?>
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
    <input type="text" class="input-text" style="width:174px" placeholder="请输入学生姓名"
           name="name" value="<?php echo \think\Request::instance()->param('name'); ?>" >
   

     <input type="text" class="input-text" style="width:174px" placeholder="请输入班级"
           name="class" value="<?php echo \think\Request::instance()->param('class'); ?>" >

           <input type="text" class="input-text" style="width:174px" placeholder="请输入联系方式"
           name="phone" value="<?php echo \think\Request::instance()->param('phone'); ?>" >

            <button type="submit" class="btn btn-success"><i class="Hui-iconfont">&#xe665;</i> 搜索</button>
</form>


    <div class="cl pd-5 bg-1 bk-gray">
        <span class="l">
            <?php if (\Rbac::AccessCheck('delete')) : ?><a href="javascript:;" onclick="del_all('<?php echo \think\Url::build('delete', []); ?>')" class="btn btn-danger radius mr-5"><i class="Hui-iconfont">&#xe6e2;</i> 删除</a><?php endif; if (\Rbac::AccessCheck('recyclebin')) : ?><a href="javascript:;" onclick="open_window('回收站','<?php echo \think\Url::build('recyclebin', []); ?>')" class="btn btn-secondary radius mr-5"><i class="Hui-iconfont">&#xe6b9;</i> 回收站</a><?php endif; ?>
        </span>
        <span class="r pt-5 pr-5">
            共有数据 ：<strong><?php echo isset($count) ? $count :  '0'; ?></strong> 条
        </span>
    </div>
    <table class="table table-border table-bordered table-hover table-bg mt-20">
        <thead>
        <tr class="text-c">
            <th width="25"><input type="checkbox"></th>
<th width="50">编号</th>
<th width="50">学生姓名</th>
<th width="">性别</th>
<th width="80">学院</th>
<th width="">所在系</th>
<th width="50">班级</th>
<th width="">职务</th>
<th width="90">联系方式</th>
<th width="">户口所在地</th>
<th width="">特长</th>
<th width="">审核状态</th>

             <th width="70">审核</th>
            <th width="70">操作</th>

        </tr>

        </thead>
        <tbody>
        <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <tr class="text-c" >
            <td><input type="checkbox" name="id[]" value="<?php echo $vo['id']; ?>"></td>
<td><?php echo $vo['id']; ?></td>
<td><?php echo high_light($vo['name'],\think\Request::instance()->param('name')); ?></td>
<td><?php echo !empty($vo['sex'])?'男':'女'; ?></td>
<td><?php echo $vo['catname1']; ?></td>
<td><?php echo $vo['catname2']; ?></td>
<td><?php echo high_light($vo['catname3'],\think\Request::instance()->param('class')); ?></td>
<td><?php echo $vo['post']; ?></td>
<td><?php echo high_light($vo['phone'],\think\Request::instance()->param('phone')); ?></td>
<td><?php echo $vo['house']; ?></td>
<td><?php echo $vo['speciality']; ?></td>
<td><?php echo !empty($vo['status'])?'已审核':'<span class="label label-danger radius">未审核</span>'; ?></td>




                <td>
                      <a class="label label-success radius btn-success"
                   href="javascript:; "onclick="audit_stu(<?php echo $vo['id']; ?>,1),'$vo.serialnumber'" >
                通过
                </a>

                <a class="label label-danger radius  btn-danger"
                   href="javascript:; "onclick="audit_stu(<?php echo $vo['id']; ?>,2)">退回</a>
                </td>
            <td class="f-14">

                <a class="Hui-iconfont Hui-iconfont-tuwenxiangqing"  
                    style="text-decoration: none;" 
                 title="详情" href="javascript:;" onclick="layer_open('待审核详情','/admin/stu_apply/show?id=<?php echo $vo['id']; ?>')"><i class="Hui-iconfont"></i> </a>
              

                <?php if (\Rbac::AccessCheck('edit')) : ?> <a title="编辑" href="javascript:;" onclick="layer_open('编辑','<?php echo \think\Url::build('edit', ['id' => $vo["id"], ]); ?>')" style="text-decoration:none" class="ml-5"><i class="Hui-iconfont">&#xe6df;</i></a><?php endif; if (\Rbac::AccessCheck('delete')) : ?> <a title="删除" href="javascript:;" onclick="del(this,'<?php echo $vo['id']; ?>','<?php echo \think\Url::build('delete', []); ?>')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a><?php endif; ?>
            </td>

        </tr>

        <?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>

    <div class="page-bootstrap"><?php echo isset($page) ? $page :  ''; ?></div>
</div>
<script>
    /**
     * 审核状态
     * @param val  通过 未通过
     * @param id   当前 用户的id
     */
    function audit_stu(id,val){
        var str=val==1?'通过':'退回';
        $.ajax({
            url:'status',
            type:'post',
            data:{id:id,status:val},
            success:function () {
                layer.msg('已'+str,function () {
                    location.reload();
                })
            }
        })
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