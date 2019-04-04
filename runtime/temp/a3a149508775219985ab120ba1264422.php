<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:71:"D:\phpStudy\WWW\xlz\public/../application/admin\view\index\welcome.html";i:1545783972;s:72:"D:\phpStudy\WWW\xlz\public/../application/admin\view\template\bases.html";i:1545717426;s:82:"D:\phpStudy\WWW\xlz\public/../application/admin\view\template\javascript_vars.html";i:1545717426;}*/ ?>
<!DOCTYPE HTML>
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
   <!-- <a class="btn btn-success radius r btn-refresh" style="line-height:1.6em;margin-top:3px" href="javascript:;" title="刷新"><i class="Hui-iconfont"></i></a>-->
</nav>


<!--<link href="https://cdn.bootcss.com/layer/2.3/skin/layer.css" rel="stylesheet">-->
<!--<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">-->
<!--<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>-->
<!--<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
<script src="__STATIC__/welcome/js/3.3.7/bootstrap.min.js"></script>
<script src="__STATIC__/welcome/js/2.1.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="__STATIC__/welcome/css/bootstrap.min.css" />
<!--<link rel="stylesheet" type="text/css" href="__STATIC__/welcome/css/layer.css" />-->
<link rel="stylesheet" type="text/css" href="__STATIC__/welcome/css/welcomes.css" />
<div class="container">
	<div class="row" id="">
		<!--左侧头像-->
		<div class="col-md-6 wel-cont-frame frame-user">
			<div class="panel-body">
				<form class="form form-horizontal" id="form" method="post" action="<?php echo url('update'); ?>">
					<input type="hidden" id="id" name="id" value="<?php echo $info['id']; ?>" />
					<div class="row box-body box-profile">
						<div class="col-md-3 profile-avatar-container">
							<p id="uploadimg">
								<img class="profile-user-img img-responsive img-circle plupload" src="<?php echo $info['photo']; ?>" alt="" id="photoimg">
								<input type="hidden" name="photo" id="photos" />
								<!--<div class="profile-avatar-text img-circle">点击编辑</div>-->
							</p>
							<h3 class="profile-username text-center"><?php echo $info['realname']; ?></h3>
			
						</div>
						<div class="col-md-9">
							<div class="row actives">
								<div class="form-group col-md-6">
									<label for="username" class="control-label">用户名:</label>
									<input type="text" class="form-control" id="username" name="account" value="<?php echo $info['account']; ?>" disabled/>
								</div>
								<div class="form-group col-md-6">
									<label for="realname" class="control-label">真实姓名:</label>
									<input type="text" class="form-control " value="<?php echo isset($info['realname']) ? $info['realname'] :  ''; ?>" placeholder="" name="realname">
								
								</div>
							</div>
							<div class="row">
								<div class="form-group col-md-6">
									<label for="realname" class="control-label">手机号:</label>
									<input type="text" class="form-control" value="<?php echo isset($info['mobile']) ? $info['mobile'] :  ''; ?>" placeholder="" name="mobile" datatype="m" ignore="ignore" errormsg="手机格式错误">
								</div>
								<div class="form-group col-md-6">
									<label for="pwds" class="control-label">修改密码:</label>
									<div>
										<a title="修改密码" href="javascript:;" onclick="layer_open('修改密码','/admin/admin_user/password/id/<?php echo $info['id']; ?>')" class="form-control pwd" id="pwds">不修改密码请勿点击</a>
									</div>
								</div>
							</div>
							<div class="row submits">
								<div class="form-group col-md-12">
									<button type="submit" class="btn btn-success">提交</button>
									<button type="reset" class="btn btn-default">重置</button>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<!--新闻-->
		<div class="wel-cont-frame wel-new">
			<div class="row">
				<div class="col-md-12">
					<div class="row con">
						<div class="col-md-5">
							<a class="navbar-brand" href="#">公告</a>
						</div>
						<div class="col-md-7 wel-nav-fam">						
							<ul id="wel-nav">
								<li class="active">往期新闻</li>	
								<li> 最新活动</li>							
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-12" id="contentBox">
					<div class="newcont on" data-always-visible="1" data-rail-visible="0">
						<ul class="feeds">
							<?php if(is_array($nelist) || $nelist instanceof \think\Collection || $nelist instanceof \think\Paginator): if( count($nelist)==0 ) : echo "" ;else: foreach($nelist as $key=>$no): ?>
							<li>
								<a href="javascript:;" onclick="layer_open('活动详情','/admin/past_act/lay?id=<?php echo $no['aid']; ?>','700px','650px')" data-id="<?php echo $no['id']; ?>" style="color: #000;">
									<div class="row">
										<div class="col-xs-1 cont-col1">
											<div class="label label-success">
												<i class="Hui-iconfont icon-bell">&#xe62f;</i>
											</div>
										</div>
										<div class="col-xs-8 cont-col2">
											<div class="desc">
												<?php echo $no['tit']; ?>
											</div>
										</div>
										<div class="col-xs-3 col2">
											<div class="date"><?php echo date("Y-m-d",$no['times']); ?></div>
										</div>
									</div>
								</a>													
							</li>
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
						<div class=" text-center"></div>
					</div>
					<div class="newcont" data-always-visible="1" data-rail-visible="0">
						<ul class="feeds">
							<?php if(is_array($newlist) || $newlist instanceof \think\Collection || $newlist instanceof \think\Paginator): if( count($newlist)==0 ) : echo "" ;else: foreach($newlist as $key=>$n): ?>
							<li>								
								<a href="javascript:;" onclick="layer_open('详情页','/admin/activity/table/id/<?php echo $n['id']; ?>','700px','650px')" data-id="<?php echo $n['id']; ?>" style="color: #000;">
									<div class="row">
										<div class="col-xs-1 cont-col1">
											<div class="label label-success">
												<i class="Hui-iconfont icon-bell">&#xe62f;</i>
											</div>
										</div>
										<div class="col-xs-8 cont-col2">
											<div class="desc">
												<?php echo $n['tit']; ?>
											</div>
										</div>
										<div class="col-xs-3 col2">
											<div class="date"><?php echo date("Y-m-d",$n['times']); ?></div>
										</div>
									</div>
								</a>															
							</li>
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
						<div class="text-center"></div>
					</div>
				</div>
				
			</div>

		</div>
	</div>
	<div class="row check-list">
		<!--活动-->
		<div class="col-md-11 wel-cont-frames">
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-3 col-md-offset-1">
							<a class="navbar-brand" href="#">待审核</a>
						</div>
						<div class="col-md-5 col-md-offset-3">
							<ul class="nav nav-pills">
								<?php if(($m == 22) OR ($m == 33)): ?>
								<li class="">
									<a href="<?php echo url('welcome',['tab'=>'stu_apply','bm'=>'1']); ?>">注册申请</a>
								</li>
								
								<li>
									<a href="<?php echo url('welcome',['tab'=>'applications','bm'=>'2']); ?>">参加活动申请</a>
								</li>
								<li>
									<a href="<?php echo url('welcome',['tab'=>'post_apply','bm'=>'3']); ?>">岗位申请</a>
								</li>
								<?php endif; ?>
								<li>
									<a href="<?php echo url('welcome',['tab'=>'stu_act_info','bm'=>'4']); ?>">审批成绩</a>
								</li>
								<?php if(($m == 22) OR ($m == 11)): ?>
								<li>
									<a href="<?php echo url('welcome',['tab'=>'activity','bm'=>'5']); ?>">活动实施方案</a>
								</li>
								<?php endif; ?>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="col-md-2 tabbable-custom">
						<div class="row iconimg">
							<div class="col-md-12 apply_counts">
								<div id="" class="counts col-md-offset-3">总数</div>
								<div class="counts col-md-offset-3"><?php echo $c; ?></div>
					
							</div>
						</div>
						<div class="row">
							<div class="col-md-7 apply_img">
								<img src="__STATIC__/images/tj.jpg" style="width: 180px; height: 100px;" />
							</div>
						</div>
					</div>
					<div class="col-md-10 tab-content">
						<?php if(($bm == 1) OR ($bm == 2) OR ($bm == 3)): ?>
						<table id="data_table" class="table table-border table-bordered table-hover table-bg mt-20" style="width:100%">
							<thead>
								<tr class="text-c">
									<th>编号</th>
									<th>姓名</th>
									<th>学院</th>
									<th>性别</th>
									<th>联系方式</th>
									<th>详情</th>
								</tr>
							</thead>
							<tbody>
								<?php if(is_array($colist) || $colist instanceof \think\Collection || $colist instanceof \think\Paginator): if( count($colist)==0 ) : echo "" ;else: foreach($colist as $key=>$co): ?>
								<tr class="text-c">
									<td><?php echo $key+1; ?></td>
									<td><?php echo $co['name']; ?></td>
									<td><?php echo $co['catname3']; ?></td>
									<td><?php echo !empty($co['sex'])?'女':'男'; ?></td>
									<td><?php echo $co['phone']; ?></td>
									<td>
										<?php if($bm == 1): ?>
										<a href="javascript:;" onclick="layer_open('活动详情','/admin/stu_apply/show?id=<?php echo $co['id']; ?>','900px','700px')" data-id="<?php echo $co['id']; ?>">详情</a>
										<?php elseif($bm == 2): ?>
										<a href="javascript:;" onclick="layer_open('申请人员','/admin/pactivity/applications/id/<?php echo $co['aid']; ?>','1200px','600px')" data-id="<?php echo $co['id']; ?>">详情</a>
										<?php elseif($bm == 3): ?>
										<a href="javascript:;" onclick="layer_open('岗位申请','/admin/pactivity/jobs/id/<?php echo $co['aid']; ?>','800px','600px')" data-id="<?php echo $co['id']; ?>">详情</a>
										<?php endif; ?>
									</td>
								</tr>
								<?php endforeach; endif; else: echo "" ;endif; ?>
							</tbody>
						</table>
						<?php elseif($bm == 5): ?>
						<table id="data_table" class="table table-border table-bordered table-hover table-bg mt-20" style="width:100%">
							<thead>
								<tr class="">
									<th>编号</th>
									<th>标题</th>
									<th>学院</th>
									<th>发起人</th>
									<th>活动简介</th>
									<th>详情</th>
								</tr>
							</thead>
							<tbody>
								<?php if(is_array($colist) || $colist instanceof \think\Collection || $colist instanceof \think\Paginator): if( count($colist)==0 ) : echo "" ;else: foreach($colist as $key=>$co): ?>
								<tr class="text-c">
									<td><?php echo $key+1; ?></td>
									<td><?php echo $co['theme']; ?></td>
									<td><?php echo $co['college']; ?></td>
									<td><?php echo $co['initiator']; ?></td>
									<td><?php echo $co['intro']; ?></td>
									<td>									
										<a href="javascript:;" onclick="layer_open('详情页','/admin/pactivity/table/id/<?php echo $co['id']; ?>','600px','700px')" data-id="<?php echo $co['id']; ?>">详情</a>
									</td>
								</tr>
								<?php endforeach; endif; else: echo "" ;endif; ?>
							</tbody>
						</table>
						<?php elseif($bm == 4): ?>
						<table id="data_table" class="table table-border table-bordered table-hover table-bg mt-20" style="width:100%">
							<thead>
								<tr class="text-c">
									<th>编号</th>
									<th>姓名</th>
									<th>学院</th>
									<th>活动标题</th>
									<th>内容</th>
									<th>详情</th>
								</tr>
							</thead>
							<tbody>
								<?php if(is_array($colist) || $colist instanceof \think\Collection || $colist instanceof \think\Paginator): if( count($colist)==0 ) : echo "" ;else: foreach($colist as $key=>$co): ?>
								<tr class="text-c">
									<td><?php echo $key+1; ?></td>
								<!-- 	<td><?php echo $co['id']; ?></td> -->
									<td><?php echo $co['name']; ?></td>
									<td><?php echo $co['catname']; ?></td>
									<td><?php echo $co['theme']; ?></td>
									<td style="max-width:20px;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;"><?php echo $co['content']; ?></td>
									<td>									
										<a href="javascript:;" onclick="layer_open('活动详情','/admin/stu_act_info/lay?id=<?php echo $co['id']; ?>','1100px','700px')" data-id="<?php echo $co['id']; ?>">详情</a>
									</td>
								</tr>
								<?php endforeach; endif; else: echo "" ;endif; ?>
							</tbody>
						</table>
						<?php endif; ?>
					</div>
					<div class="col-md-9 col-md-offset-2 text-center" id="pageBar"></div>
				</div>

			</div>
		</div>

	</div>
	<div class="row text-center">
		<footer>
			<div class="col-md-12 foot">
     Copyright &copy;2016 <?php echo \think\Config::get('site.name'); ?> <?php echo \think\Config::get('site.version'); ?> All Rights Reserved.<br> 本后台系统由
				<a href="http://www.linyidz.cn/" target="_blank" rel="nofollow" title="临沂大智科技有限公司">临沂大智科技有限公司</a>提供技术支持
			</div>
		</footer>
	</div>

</div>

<script type="text/javascript" src="__LIB__/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="__LIB__/layer/2.4/layer.js"></script>
<script type="text/javascript" src="__STATIC__/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="__STATIC__/h-ui.admin/js/H-ui.admin.js"></script>
<script type="text/javascript" src="__STATIC__/js/app.js"></script>
<script type="text/javascript" src="__LIB__/icheck/jquery.icheck.min.js"></script>

<!--<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.js"></script>-->
<script src="__STATIC__/welcome/js/jquery.js"></script>
<!--<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>-->
<script src="__STATIC__/welcome/js/3.3.1/jquery.min.js"></script>
<!--<script src="https://cdn.bootcss.com/layer/2.3/layer.js"></script>-->
<script src="__STATIC__/welcome/js/layer.js"></script>

<script type="text/javascript" src="__LIB__/Validform/5.3.2/Validform.min.js"></script>
<script src="__STATIC__/js/jquery.min.js"></script>
<script type="text/javascript" src="__STATIC__/lib/Validform/5.3.2/Validform.min.js"></script>

<script type="text/javascript">
	//tab切换
	$(document).ready(function() {		
		$("#wel-nav li").click(function() {
			var ins = $(this).index();
			$(this).addClass("active").end();
			$(this).siblings().removeClass("active");
			$("#contentBox .newcont").eq(ins).addClass("on").siblings().removeClass("on");
		});
	});

	//图片上传
	$('#uploadimg').click(function() {
		layer.open({
			type: 2,
			title: false,
			shadeClose: true,
			shade: 0.8,
			area: ['90%', '90%'],
			content: '<?php echo url("AdminUser/modal_upload_img"); ?>'
		});
	});
	//表单的提交
	$(function() {
		$("#form").Validform({
			tiptype: 2,
			ajaxPost: true,
			//	          showAllError:true,
			callback: function(ret) {
				if(ret) {
					layer.msg('修改成功！！', {
						time: 4000
					});
					parent.location.reload(); // 父页面刷新
					var index = parent.layer.getFrameIndex(window.name); //获取窗口索引serialize()
					parent.layer.close(index);
				} else {
					layer.msg('修改异常！！');
				}
			}
		});
	});
</script>
 
</body>
</html>