<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:72:"D:\phpStudy\WWW\xlz\public/../application/admin\view\jobclass\index.html";i:1545717425;s:71:"D:\phpStudy\WWW\xlz\public/../application/admin\view\template\base.html";i:1545717426;s:82:"D:\phpStudy\WWW\xlz\public/../application/admin\view\template\javascript_vars.html";i:1545717426;s:71:"D:\phpStudy\WWW\xlz\public/../application/admin\view\jobclass\form.html";i:1545717425;s:69:"D:\phpStudy\WWW\xlz\public/../application/admin\view\jobclass\th.html";i:1545717425;s:69:"D:\phpStudy\WWW\xlz\public/../application/admin\view\jobclass\td.html";i:1545717425;}*/ ?>
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
    <input type="text" class="input-text" style="width:250px" placeholder="岗位id" name="id" value="<?php echo \think\Request::instance()->param('id'); ?>" >
    <input type="text" class="input-text" style="width:250px" placeholder="岗位名称" name="pname" value="<?php echo \think\Request::instance()->param('pname'); ?>" >
    <input type="text" class="input-text" style="width:250px" placeholder="岗位描述" name="describe" value="<?php echo \think\Request::instance()->param('describe'); ?>" >
    <button type="submit" class="btn btn-success"><i class="Hui-iconfont">&#xe665;</i> 搜索</button>
</form>
    <div class="cl pd-5 bg-1 bk-gray">
        <span class="l">
            <?php if (\Rbac::AccessCheck('add')) : ?><a class="btn btn-primary radius mr-5" href="javascript:;" onclick="layer_open('添加','<?php echo \think\Url::build('add', []); ?>')"><i class="Hui-iconfont">&#xe600;</i> 添加</a><?php endif; if (\Rbac::AccessCheck('forbid')) : ?><a href="javascri pt:;" onclick="forbid_all('<?php echo \think\Url::build('forbid', []); ?>')" class="btn btn-warning radius mr-5"><i class="Hui-iconfont">&#xe631;</i> 禁用</a><?php endif; if (\Rbac::AccessCheck('resume')) : ?><a href="javascript:;" onclick="resume_all('<?php echo \think\Url::build('resume', []); ?>')" class="btn btn-success radius mr-5"><i class="Hui-iconfont">&#xe615;</i> 恢复</a><?php endif; if (\Rbac::AccessCheck('delete')) : ?><a href="javascript:;" onclick="del_all('<?php echo \think\Url::build('delete', []); ?>')" class="btn btn-danger radius mr-5"><i class="Hui-iconfont">&#xe6e2;</i> 删除</a><?php endif; if (\Rbac::AccessCheck('recyclebin')) : ?><a href="javascript:;" onclick="open_window('回收站','<?php echo \think\Url::build('recyclebin', []); ?>')" class="btn btn-secondary radius mr-5"><i class="Hui-iconfont">&#xe6b9;</i> 回收站</a><?php endif; ?>
        </span>
        <span class="r pt-5 pr-5">
            共有数据 ：<strong></strong> 条
        </span>
    </div>
    <table class="table table-border table-bordered table-hover table-bg mt-20">
        <thead>
        <tr class="text-c">
            <th width="25"><input type="checkbox"></th>
<th width="80"><?php echo sort_by('岗位编号','id'); ?></th>
<th width="">岗位名称</th>
<th width="">岗位描述</th>
<th width="">状态</th>
            <th width="120">操作</th>
        </tr>
        </thead>
        <tbody>
        <?php if(is_array($clist) || $clist instanceof \think\Collection || $clist instanceof \think\Paginator): $i = 0; $__LIST__ = $clist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <tr class="text-c" cid='<?php echo $vo['id']; ?>' fid='<?php echo $vo['pid']; ?>'>
            <!--<td><input type="checkbox" name="id[]" value="<?php echo $vo['id']; ?>"></td>
<td><?php echo high_light($vo['id'],\think\Request::instance()->param('id')); ?></td>
<td>
    <i class="Hui-iconfont x-show" status='true'>&#xe6a1;</i>
    &nbsp;&nbsp;&nbsp;<?php echo high_light($vo['pname'],\think\Request::instance()->param('pname')); ?>
</td>
<td><?php echo high_light($vo['describe'],\think\Request::instance()->param('describe')); ?></td>


-->
            <td><input type="checkbox" name="id[]" value="<?php echo $vo['id']; ?>"></td>         
            <td><?php echo high_light($vo['id'],\think\Request::instance()->param('id')); ?></td>
            <td style="width: 180px;text-align: left;padding-left: 20px;">
                <i style="cursor:pointer;" class="Hui-iconfont x-show" status='true'>&#xe6a1;</i>
                &nbsp;&nbsp;&nbsp;<?php echo high_light($vo['pname'],\think\Request::instance()->param('pname')); ?>
            </td>
            <td style="text-align: left;"><?php echo high_light($vo['describe'],\think\Request::instance()->param('describe')); ?></td>     
            <td style="width:30px;"><?php echo get_status($vo['status']); ?></td>
            <td class="f-14"> 
            <?php echo show_status($vo['status'],$vo['id']); if (\Rbac::AccessCheck('edit')) : ?> <a title="编辑" href="javascript:;" onclick="layer_open('编辑','<?php echo \think\Url::build('edit', ['id' => $vo["id"], ]); ?>')" style="text-decoration:none" class="ml-5"><i class="Hui-iconfont">&#xe6df;</i></a><?php endif; ?>
                <a title="删除" href="javascript:;" onclick="ldel(this,'<?php echo $vo['id']; ?>')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a>
                <!-- <?php if (\Rbac::AccessCheck('delete')) : ?> <a title="删除" href="javascript:;" onclick="del(this,'<?php echo $vo['id']; ?>','<?php echo \think\Url::build('delete', []); ?>')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a><?php endif; ?> -->
            </td>
        </tr>
        <?php if(is_array($vo['secondlist']) || $vo['secondlist'] instanceof \think\Collection || $vo['secondlist'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['secondlist'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sec): $mod = ($i % 2 );++$i;?>
        <tr class="text-c" cid='<?php echo $sec['id']; ?>' fid='<?php echo $sec['pid']; ?>'>
            <td><input type="checkbox" name="id[]" value="<?php echo $sec['id']; ?>"></td>           
            <td><?php echo high_light($sec['id'],\think\Request::instance()->param('id')); ?></td>
            <td style="width: 180px;text-align: left;padding-left: 20px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <i style="cursor:pointer;" class="Hui-iconfont x-show" status='true'>&#xe6a1;</i>
                &nbsp;&nbsp;&nbsp;<?php echo high_light($sec['pname'],\think\Request::instance()->param('pname')); ?>
            </td>
            <td style="text-align:left;"><?php echo high_light($sec['describe'],\think\Request::instance()->param('describe')); ?></td>
            <td style="width:30px;"><?php echo get_status($sec['status']); ?></td>
            <td class="f-14"> 
                <?php echo show_status($sec['status'],$sec['id']); ?>               
                <a title="编辑" href="javascript:;" onclick="layer_open('编辑','<?php echo \think\Url::build('edit',['id'=>$sec['id']]); ?>')" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a>
                 <a title="删除" href="javascript:;" onclick="ldel(this,'<?php echo $sec['id']; ?>')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a>
            
              <!--   <?php if (\Rbac::AccessCheck('delete')) : ?> <a title="删除" href="javascript:;" onclick="del(this,'<?php echo $sec['id']; ?>','<?php echo \think\Url::build('delete', []); ?>')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a><?php endif; ?> -->
            </td>
        </tr>
        <?php if(is_array($sec['thirdlist']) || $sec['thirdlist'] instanceof \think\Collection || $sec['thirdlist'] instanceof \think\Paginator): $i = 0; $__LIST__ = $sec['thirdlist'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$thr): $mod = ($i % 2 );++$i;?>
        <tr class="text-c" cid='<?php echo $thr['id']; ?>' fid='<?php echo $thr['pid']; ?>' ppid='<?php echo $vo['id']; ?>'>
            <td><input type="checkbox" name="id[]" value="<?php echo $thr['id']; ?>"></td>       
            <td><?php echo high_light($thr['id'],\think\Request::instance()->param('id')); ?></td>
            <td style="width: 180px;text-align:left;padding-left: 20px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 |----<?php echo high_light($thr['pname'],\think\Request::instance()->param('pname')); ?></td>
            <td style="text-align: left;"><?php echo high_light($thr['describe'],\think\Request::instance()->param('describe')); ?></td>
            <td style="width:30px;"><?php echo get_status($thr['status']); ?></td>
            <td class="f-14">  
                <?php echo show_status($thr['status'],$thr['id']); ?>          
                 <a title="编辑" href="javascript:;" onclick="layer_open('编辑','<?php echo \think\Url::build('edit',['id'=>$thr['id']]); ?>')" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a>
                <?php if (\Rbac::AccessCheck('delete')) : ?> <a title="删除" href="javascript:;" onclick="del(this,'<?php echo $thr['id']; ?>','<?php echo \think\Url::build('delete', []); ?>')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a><?php endif; ?>
            </td>
        </tr>
        <?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
    <div class="page-bootstrap"> </div>

<script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="__STATIC__/js/levellink.js"></script>
    <script type="text/javascript">
    /**
 * 假性删除操作项
 * @param obj this
 * @param id 对象id
 * @param url 删除地址，一般为 <?php echo url('delete'); ?>
 * @param fn 回调函数
 */
function ldel(obj, id) {
    // _del(obj, id, url, '您确定要把此条数据放入回收站？', fn);

          // alert(id);
          layer.confirm('确认删除"'+id+'"吗?',function (index) {
              $.ajax({
                 url:"<?php echo url('ldel'); ?>",
                 type:'get',
                 data:{id:id,flag:1},
                 success:function (res) {
                    // alert(res);
                     if (res.code==2){
                          $(obj).parent('tr').remove();
                         layer.msg('已删除',{icon: 1,time:1000});
                     } else {
                         layer.confirm('该分类下尚有子分类,确定全部删除吗',function (index) {
                             $.ajax({
                                 url:"<?php echo url('ldel'); ?>",
                                 type: 'get',
                                 data:{id:id,flag: 2},
                                 success:function (res) {
                                  $(obj).parent("tr").remove();
                                     $('tr').each(function (i,v) {
                                         for (var i=0;i<res.childid.length;i++){
                                             if ($(this).attr('cid')==res.childid[i] || $(this).attr('fid')==res.childid[i]){
                                                 $(this).remove();
                                             }
                                         }
                                     })
                                     layer.msg('已删除!',{icon:1,time:1000});
                                 }
                             })
                         })
                     }
                 }
              });
          })

      }


    </script>
</div>

<script type="text/javascript" src="__LIB__/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="__LIB__/layer/2.4/layer.js"></script>
<script type="text/javascript" src="__STATIC__/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="__STATIC__/h-ui.admin/js/H-ui.admin.js"></script>
<script type="text/javascript" src="__STATIC__/js/app.js"></script>
<script type="text/javascript" src="__LIB__/icheck/jquery.icheck.min.js"></script>

</body>
</html>