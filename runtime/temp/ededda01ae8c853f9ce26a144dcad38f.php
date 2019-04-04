<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"D:\phpStudy\WWW\xlz\public/../application/home\view\news\apply.html";i:1545896131;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>活动信息</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <!-- Bootstrap styles -->
    <link rel="stylesheet" href="__STATIC__/home/news/css/bootstrap.min.css">
    <!-- Font-Awesome -->
    <link rel="stylesheet" href="__STATIC__/home/news/css/font-awesome/css/font-awesome.min.css">
    <!-- Styles -->
    <link rel="stylesheet" href="__STATIC__/home/news/css/loginout.css" id="theme-styles">
    <link rel="stylesheet" href="__STATIC__/home/news/css/style.css" id="theme-styles">
    <link rel="stylesheet" href="__STATIC__/home/news/css/style2.css" id="theme-styles">
    <link rel="stylesheet" href="__STATIC__/home/news/css/admin.css" id="theme-styles">
    <link rel="stylesheet" href="__STATIC__/home/news/css/layui.css" id="theme-styles">
    <link rel="stylesheet" href="__STATIC__/home/news/css/layer.css" id="theme-styles">
    <script type="text/javascript" src="__STATIC__/home/news/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="__STATIC__/home/news/js/modernizr.js"></script>
    <script type="text/javascript" src="__STATIC__/home/news/js/layerjs.js"></script>
    <script src="__STATIC__/home/news/js/jquery2.min.js"></script>
    <!-- <script type="text/javascript" src="https://cdn.bootcss.com/layer/2.3/layer.js"></script>
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script> -->

</head>

<body style="background:#f1f1f1" onload="a()">
    <header>
        <div class="widewrapper masthead">
            <div class="container">
                <a href="<?php echo url('index/index'); ?>" id="logo">
                    <img src="__STATIC__/home/news/img/logo.jpg" style="width: 100px;height: 100px;" stalt="clean Blog">
                    <span>临沂职业学院志愿者管理服务系统
                    </span>
                </a>
                <div id="mobile-nav-toggle" class="pull-right">
                    <a href="#" data-toggle="collapse" data-target=".clean-nav .navbar-collapse">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>
                <nav class="pull-right clean-nav">
                    <div class="collapse navbar-collapse">
                        <ul class="nav nav-pills navbar-nav">
                            <li>
                                <input type="hidden" value="<?php echo \think\Session::get('id'); ?>" />
                                <a href="<?php echo url('Index/index'); ?>">首页</a>
                            </li>
                            <li>
                                <a id="active" style="display:none" href="<?php echo url('News/news'); ?>">志愿者活动申请</a>
                            </li>
                            <li>
                                <a href="<?php echo url('News/apply'); ?>" class="userinfo">个人中心</a>


                            </li>
                            <li>
                                <a href="<?php echo url('admin/pub/login'); ?>">后台入口</a>
                            </li>
                            <li>
                                <a href="javascript:;" onclick="logout()">退出</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="widewrapper subheader">
            <div class="container">
                <div class="clean-breadcrumb">
                    <a href="#">个人中心</a>
                </div>
            </div>
        </div>
    </header>
    <div class="container" style="margin-top:20px;">
        <div class='navleft'>
            <div class="larryms-left-nav" style="width: 240px;float: left;">
                <ul class="layui-nav layui-nav-tree layui-inline" lay-filter="user" id="larryms-user-nav-url">
                    <li class="layui-nav-item">
                        <a href="#" id="tb_1" onClick="x:hoverli(1);">
                            <i class="fa fa-user" title="个人信息"></i>
                            <cite>个人信息</cite>
                        </a>
                    </li>
                    <li class="layui-nav-item">
                        <a href="#" id="tb_2" onClick="x:hoverli(2);">
                            <i class="fa fa-history" title="工作经历"></i>
                            <cite>工作经历</cite>
                        </a>
                    </li>
                    <li class="layui-nav-item">
                        <a href="#" id="tb_3" onClick="x:hoverli(3);">
                            <i class="fa fa-bookmark-o"></i>
                            <cite>所获荣誉</cite>
                        </a>
                    </li>
                    <li class="layui-nav-item">
                        <a href="#" id="tb_4" onClick="x:hoverli(4);">
                            <i class="fa fa-database"></i>
                            <cite>活动项目</cite>
                        </a>
                    </li>
                    <li class="layui-nav-item">
                        <a href="#" id="tb_5" onClick="x:hoverli(5);">
                            <i class="fa fa-archive"></i>
                            <cite>活动信息</cite>
                        </a>
                    </li>
                    <li class="layui-nav-item">
                        <a href="#" id="tb_6" onClick="x:hoverli(6);">
                            <i class="fa fa-book"></i>
                            <cite>往期活动感悟</cite>
                        </a>
                    </li>
                    <li class="layui-nav-item">
                        <a href="#" id="tb_7" onClick="x:hoverli(7);">
                            <i class="fa fa-diamond"></i>
                            <cite>兑换中心</cite>
                        </a>
                    </li>
                    <li class="layui-nav-item">
                        <a href="#" id="tb_8" onClick="x:hoverli(8);">
                            <i class="fa fa-graduation-cap"></i>
                            <cite>岗位申请</cite>
                        </a>
                    </li>
                    <li class="layui-nav-item">
                        <a href="#" id="tb_9" onClick="x:hoverli(9);">
                            <i class="fa fa-graduation-cap"></i>
                            <cite>岗位列表</cite>
                        </a>
                    </li>
                    <span class="layui-nav-bar" style="top: 352.5px; height: 0px; opacity: 0;"></span>
                </ul>
            </div>
            <div class="layui-col-md12" style="width:930px;">
                <div class="layui-card" class="dis" id="tbc_01">
                    <div class="layui-card-header">设置我的个人信息</div>
                    <div class="layui-card-body" pad15>
                        <form id='edituser' method="POST" action="<?php echo url('News/do_useredit'); ?>">
                            <div class="layui-form" lay-filter="">
                                <div class="layui-form-item">
                                    <label class="layui-form-label txbox">头像</label>

                                    <div class="layui-input-inline2 tx">
                                        <input id="photos" type="hidden" name="photo" lay-verify="nickname"
                                            autocomplete="off" class="layui-input" value="<?php echo $userlist['photo']; ?>" />
                                        <br />
                                        <?php if(empty($userlist['photo']) || (($userlist['photo'] instanceof \think\Collection || $userlist['photo'] instanceof \think\Paginator ) && $userlist['photo']->isEmpty())): ?>
                                        <img id="photoimg" style="width:100px" src="__STATIC__/home/news/img/admin.jpg" />
                                        <?php else: ?>
                                        <img id="photoimg" style="width:100px" src="<?php echo $userlist['photo']; ?>" />
                                        <?php endif; ?>


                                    </div>
                                    <span id="uploadimg" class="uploadimg">上传图片</span>
                                </div>
                                <div class="layui-form-item">
                                    <label class="layui-form-label">姓名</label>
                                    <div class="layui-input-inline">
                                        <input type="hidden" name="id" lay-verify="id" value="<?php echo $userlist['id']; ?>"
                                            autocomplete="id" class="layui-input">
                                        <input type="text" name="name" lay-verify="name" value="<?php echo $userlist['name']; ?>"
                                            autocomplete="name" class="layui-input">

                                    </div>
                                </div>
                                <div class="layui-form-item">
                                    <div>
                                        <span style="margin-left:75px">性别&nbsp;&nbsp;&nbsp;</span>
                                        <label class="demo--label">
                                            <input class="demo--radio" type="radio" name="sex" value="1" <?php if($userlist['sex'] == 1): ?>checked <?php endif; ?>> <span class="demo--radioInput"></span>男
                                        </label>
                                        <label class="demo--label">
                                            <input class="demo--radio" type="radio" name="sex" value="0" <?php if($userlist['sex'] == 0): ?>checked <?php endif; ?>> <span class="demo--radioInput"></span>女
                                        </label>
                                    </div>

                                </div>
                                <div class="layui-form-item">
                                    <label class="layui-form-label">手机</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="phone" value="<?php echo $userlist['phone']; ?>" lay-verify="phone"
                                            autocomplete="off" class="layui-input">
                                    </div>
                                </div>
                                <div class="layui-form-item">
                                    <label class="layui-form-label">职务</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="post" value="<?php echo $userlist['post']; ?>" lay-verify="post"
                                            autocomplete="off" class="layui-input">
                                    </div>
                                </div>
                                <div class="layui-form-item">
                                    <label class="layui-form-label">特长</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="speciality" value="<?php echo $userlist['speciality']; ?>" lay-verify="speciality"
                                            autocomplete="off" class="layui-input">
                                    </div>
                                </div>
                                <div class="layui-form-item">
                                    <label class="layui-form-label">家庭住址</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="house" value="<?php echo $userlist['house']; ?>" lay-verify="house"
                                            autocomplete="off" class="layui-input">
                                    </div>
                                </div>
                                <div class="layui-form-item">
                                    <div class="layui-input-block">
                                        <div>
                                            <button class="layui-btn" lay-submit="" lay-filter="setmyinfo" class="edituser">确认修改</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div id="tbc_02" class="undis" style="height:600px">
                    <div class="layui-card-header">设置我的工作经历</div>

                    <button class="add">添加工作经历</button>
                    <table id="rounded-corner">
                        <thead>
                            <tr id="status">
                                <th scope="col" class="rounded-company">工作地区</th>
                                <th scope="col" class="rounded-q1">公司名称</th>
                                <th scope="col" class="rounded-q2">工作职务</th>
                                <th scope="col" class="rounded-q3">开始时间</th>
                                <th scope="col" class="rounded-q4">结束时间</th>
                                <th scope="col" class="rounded-q4">操作</th>
                            </tr>
                        </thead>

                        <!--添加工作经历-->
                        <!--<tbody id='worlapply'>-->
                        <?php if(empty($exlist) || (($exlist instanceof \think\Collection || $exlist instanceof \think\Paginator ) && $exlist->isEmpty())): ?>
                        <tr>
                            <td colspan="6">暂无工作经历</td>
                        </tr>
                        <?php endif; if(is_array($exlist) || $exlist instanceof \think\Collection || $exlist instanceof \think\Paginator): if( count($exlist)==0 ) : echo "" ;else: foreach($exlist as $key=>$exlist): ?>
                        <tr id="<?php echo $exlist['eid']; ?>" class='a=work<?php echo $exlist['eid']; ?>?work<?php echo $exlist['eid']; ?>:0'>
                            <td style="display:none" id="idd"><?php echo $exlist['eid']; ?></td>
                            <td><?php echo $exlist['area']; ?></td>
                            <td><?php echo $exlist['company']; ?></td>
                            <td><?php echo $exlist['Jobduties']; ?></td>
                            <td><?php echo $exlist['starttime']; ?></td>
                            <td><?php echo $exlist['endtime']; ?></td>
                            <td>
                                <a href="#">
                                        <a onclick="updates('修改','<?php echo $exlist['eid']; ?>',800,600)" href="javascript:;">
                                                <i class="fa fa-edit updates" aria-hidden="true"></i>
                                        </a>
                                    
                                    <a onclick="experience_del('刪除','<?php echo $exlist['eid']; ?>',800,600)" href="javascript:;">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </a>
                                </a>
                            </td>
                        </tr>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>


                </div>
                <div id="tbc_03" class="undis" style="height:600px">
                    <div class="layui-card-header">设置我的所获荣誉</div>
                    <button class="inserthonor">添加荣誉</button>
                    <table id="rounded-corner">
                        <thead>
                            <tr id="honor">
                                <th scope="col" class="rounded-company">奖项名称</th>
                                <th scope="col" class="rounded-q1">颁奖单位</th>
                                <th scope="col" class="rounded-q2">获奖日期</th>
                                <th scope="col" class="rounded-q4">操作</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php if(empty($honorlist) || (($honorlist instanceof \think\Collection || $honorlist instanceof \think\Paginator ) && $honorlist->isEmpty())): ?>
                            <tr>
                                <td colspan="4">暂无获奖信息</td>
                            </tr>
                            <?php endif; if(is_array($honorlist) || $honorlist instanceof \think\Collection || $honorlist instanceof \think\Paginator): if( count($honorlist)==0 ) : echo "" ;else: foreach($honorlist as $key=>$honorlist): ?>
                            <tr id="<?php echo $honorlist['hid']; ?>" class='b=honor<?php echo $honorlist['hid']; ?>?honor<?php echo $honorlist['hid']; ?>:0'>
                                <td><?php echo $honorlist['award_name']; ?></td>
                                <td><?php echo $honorlist['award_unit']; ?></td>
                                <td><?php echo $honorlist['award_date']; ?></td>
                                <td>
                                    <a href="#">
                                            <a onclick="edithonor('修改','<?php echo $honorlist['hid']; ?>',800,600)" href="javascript:;">
                                                    <i class="fa fa-edit text-success edithonor"></i>
                                            </a>
                                       
                                        <a onclick="honor_del('刪除','<?php echo $honorlist['hid']; ?>',800,600)" href="javascript:;">
                                            <i class="fa fa-times" aria-hidden="true"></i>
                                        </a>
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>
                </div>
                <div id="tbc_04" class="undis" style="height:600px">
                    <div class="layui-card-header">活动项目</div>
                    <table id="rounded-corner" summary="2007 Major IT Companies' Profit">
                        <thead>
                            <tr>
                                <th scope="col" class="rounded-company">项目名称</th>
                                <th scope="col" class="rounded-q1">审核状态</th>
                                <th scope="col" class="rounded-q1">撤销</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php if(empty($projectlist) || (($projectlist instanceof \think\Collection || $projectlist instanceof \think\Paginator ) && $projectlist->isEmpty())): ?>
                            <tr>
                                <td colspan="3">暂无活动项目</td>
                            </tr>
                            <?php endif; if(is_array($projectlist) || $projectlist instanceof \think\Collection || $projectlist instanceof \think\Paginator): if( count($projectlist)==0 ) : echo "" ;else: foreach($projectlist as $key=>$projectlist): ?>
                            <tr class="c=pro<?php echo $projectlist['aid']; ?>?pro<?php echo $projectlist['aid']; ?>:0">
                                <td><?php echo $projectlist['theme']; ?></td>
                                <td>
                                    <?php switch($projectlist['status']): case "'0'": ?>待审核<?php break; case "1": ?>审核通过<?php break; case "2": ?>审核未通过<?php break; endswitch; ?>
                                </td>
                                <td>
                                    <a onclick="projectlist('撤销','<?php echo $projectlist['aid']; ?>',800,600)" href="javascript:;"
                                        class="colors">
                                        确认撤销
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>
                </div>
                <div id="tbc_05" class="undis" style="height:600px">
                    <div class="layui-card-header">提交我的活动信息</div>
                    <div class="layui-card-body" pad15>
                        <form id="insertmessage" method="post">
                            <div class="layui-form" lay-filter="">

                                <div class="layui-form-item">
                                    <label class="layui-form-label">姓名</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="name" value="<?php echo $messagelist3['name']; ?>" readonly='readonly'
                                            lay-verify="nickname" autocomplete="off" class="layui-input" style="width:300px">
                                    </div>
                                </div>
                                <div class="layui-form-item">
                                    <label class="layui-form-label">申请活动</label>
                                    <div class="layui-input-inline">
                                        <select style='display: block' class='se' name='aid'>
                                            <?php if(is_array($messagelist) || $messagelist instanceof \think\Collection || $messagelist instanceof \think\Paginator): if( count($messagelist)==0 ) : echo "" ;else: foreach($messagelist as $key=>$messagelist): ?>
                                            <option value='<?php echo $messagelist['id']; ?>'><?php echo $messagelist['theme']; ?></option>
                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                        </select>

                                    </div>
                                </div>
                                <input type="hidden" name="secschool" value="<?php echo $messname['id']; ?>" />
                                <input type="hidden" name="aid" value="<?php echo $messname['aid']; ?>" />

                                <div class="layui-form-item layui-form-text">
                                    <label class="layui-form-label">感悟内容</label>
                                    <div class="layui-input-block">
                                        <textarea name="content" placeholder="请输入内容" class="layui-textarea" style="width:300px;height:200px"></textarea>
                                    </div>
                                </div>
                                <div class="layui-form-item">
                                    <label class="layui-form-label">活动图像</label>
                                    <div class="layui-input-inline">
                                        <input id="imagess" type="hidden" name="images" lay-verify="nickname"
                                            autocomplete="off" class="layui-input" value="<?php echo $messname['images']; ?>" style="width:300px" />
                                        <img id="photoimgs" style="width:100px" src="" />
                                        <span id="uploadimg2">上传图片</span>
                                        <br />
                                    </div>
                                </div>

                                <div class="layui-form-item">
                                    <div class="layui-input-block">
                                        <input type="button" class="button2 subs" value="上传" id="form1" />
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div id="tbc_06" class="undis" style="height:600px">
                    <div class="layui-card-header">往期活动感悟</div>
                    <table id="rounded-corner" summary="2007 Major IT Companies' Profit">
                        <thead>
                            <tr>
                                <th scope="col" class="rounded-company">活动标题</th>
                                <th scope="col" class="rounded-company">感悟内容</th>
                                <th scope="col" class="rounded-q1" style="width:80px">成绩</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php if(empty($oldlist) || (($oldlist instanceof \think\Collection || $oldlist instanceof \think\Paginator ) && $oldlist->isEmpty())): ?>
                            <tr>
                                <td colspan="3">暂无活动感悟</td>
                            </tr>
                            <?php endif; if(is_array($oldlist) || $oldlist instanceof \think\Collection || $oldlist instanceof \think\Paginator): if( count($oldlist)==0 ) : echo "" ;else: foreach($oldlist as $key=>$oldlist): ?>
                            <tr>
                                <td><?php echo $oldlist['theme']; ?></td>
                                <td><?php echo $oldlist['content']; ?></td>

                                <td> <?php if($oldlist['grade'] == null): ?>未审核<?php endif; if($oldlist['grade'] != null): ?><?php echo $oldlist['grade']; endif; ?></td>
                            </tr>

                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>

                    </table>
                </div>
                <div id="tbc_07" class="undis" style="height:600px">
                    <div class="layui-card-header">兑换中心：30小时兑换1.5学分</div>
                    <table id="rounded-corner" summary="2007 Major IT Companies' Profit">
                        <thead>
                            <tr>
                                <th scope="col" class="rounded-company">工作总时长</th>
                                <th scope="col" class="rounded-q1">参与活动</th>
                                <th scope="col" class="rounded-q1">兑换时长</th>
                                <th scope="col" class="rounded-q1">兑换学分</th>
                                <th scope="col" class="rounded-q1">当前剩余时长</th>
                                <th scope="col" class="rounded-q1">现有学分</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php if(empty($integral) || (($integral instanceof \think\Collection || $integral instanceof \think\Paginator ) && $integral->isEmpty())): ?>
                            <tr>
                                <td colspan="6">暂无兑换信息</td>
                            </tr>
                            <?php endif; ?>
                            <tr>
                                <td><?php echo $integral['long_time']; ?></td>

                                <td>
                                    <?php if(is_array($integra2) || $integra2 instanceof \think\Collection || $integra2 instanceof \think\Paginator): if( count($integra2)==0 ) : echo "" ;else: foreach($integra2 as $key=>$integra2): ?>
                                    <?php echo $integra2['theme']; ?>
                                    <br />
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </td>

                                <td><?php echo $integral['exchange_time']; ?></td>
                                <td><?php echo $integral['do_redeem']; ?></td>
                                <td><?php echo $integral['remaining_time']; ?></td>
                                <td><?php echo $integral['credits']; ?></td>

                            </tr>


                        </tbody>

                    </table>
                </div>
                <div id="tbc_08" class="undis" style="height:600px">
                    <div class="layui-card-header">岗位申请</div>
                    <form id="applywork" method="post">
                        <div class="layui-form-item">
                            <label class="layui-form-label nametop">参加活动</label>
                            <div class="layui-input-inline">
                                <select style='display: block' class='se nametop' name='aid'>
                                    <?php if(is_array($work) || $work instanceof \think\Collection || $work instanceof \think\Paginator): if( count($work)==0 ) : echo "" ;else: foreach($work as $key=>$work): ?>
                                    <option value='<?php echo $work['aid']; ?>'><?php echo $work['theme']; ?></option>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>

                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">岗位申请</label>
                            <div class="layui-input-inline">
                                <select style='display: block' class='se' name='poid'>
                                    <?php if(is_array($worklist) || $worklist instanceof \think\Collection || $worklist instanceof \think\Paginator): if( count($worklist)==0 ) : echo "" ;else: foreach($worklist as $key=>$worklist): ?>
                                    <option value='<?php echo $worklist['id']; ?>'><?php echo $worklist['pname']; ?></option>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>

                            </div>
                        </div>
                        <div class="layui-form-item">
                            <div class="layui-input-block">
                                <input type="button" class="button2 applywork" value="申请" id="applywork" />
                            </div>
                        </div>
                    </form>
                </div>
                <div id="tbc_09" class="undis" style="height:600px">
                    <div class="layui-card-header">岗位列表</div>
                    <table id="rounded-corner" summary="2007 Major IT Companies' Profit">
                        <thead>
                            <tr>
                                <th scope="col" class="rounded-company">申请活动</th>
                                <th scope="col" class="rounded-q1">申请岗位</th>
                                <th scope="col" class="rounded-q1">审核状态</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php if(empty($postapply) || (($postapply instanceof \think\Collection || $postapply instanceof \think\Paginator ) && $postapply->isEmpty())): ?>
                            <tr>
                                <td colspan="3">暂无岗位申请</td>
                            </tr>
                            <?php endif; if(is_array($postapply) || $postapply instanceof \think\Collection || $postapply instanceof \think\Paginator): if( count($postapply)==0 ) : echo "" ;else: foreach($postapply as $key=>$postapply): ?>
                            <tr>
                                <td><?php echo $postapply['theme']; ?></td>
                                <td><?php echo $postapply['pname']; ?></td>
                                <td>
                                    <?php switch($postapply['status']): case "'0'": ?>待审核<?php break; case "1": ?>审核通过<?php break; case "2": ?>审核未通过<?php break; endswitch; ?>
                                </td>

                            </tr>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>

    <footer>
        <div class="widewrapper footer" style="clear:both;">

        </div>
        <div class="widewrapper copyright">
            <span>临沂职业学院志愿者管理服务系统</span>
            <span>鲁ICP备：09033875号-2</span>
            <span>0539-2872077</span>
            <span>邮编：276017</span>
            <span>地址：山东省临沂市罗庄区湖东路63号</span>

        </div>
    </footer>
    <!-- <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/layer/2.3/layer.js"></script>
    <script src="https://cdn.bootcss.com/jquery.form/4.2.2/jquery.form.min.js"></script> -->
    <script src="__STATIC__/home/news/js/jquery3.min.js"></script>
    <script src="__STATIC__/home/news/js/layer2.js"></script>
    <script src="__STATIC__/home/news/js/jqform.js"></script>
    <script>
       
        //添加工作经历
        $('.add').click(function () {
            layer.open({
                type: 2,
                title: '工作经历修改页面',
                shadeClose: true,
                shade: 0.8,
                area: ['600px', '80%'],
                content: 'insertwork.html'

            });
        })
        //修改工作经历数据
        function updates(obj, id) {
            
            var v = '';
            v = $(this).attr('title');
            layer.open({
                type: 2,
                title: '工作经历修改页面',
                shadeClose: true,
                shade: 0.8,
                area: ['600px', '80%'],
                content: 'editwork.html?id=' + id,

            });
        };
        //添加荣誉
        $('.inserthonor').click(function () {
            layer.open({
                type: 2,
                title: '所获荣誉修改页面',
                shadeClose: true,
                shade: 0.8,
                area: ['600px', '80%'],
                content: 'inserthonor.html',

            });
        })
        //修改我的荣誉
            function edithonor(obj, id) {
            var v = '';
            v = $(this).attr('title');
            // alert (v);exit;
            layer.open({
                type: 2,
                title: '工作经历修改页面',
                shadeClose: true,
                shade: 0.8,
                area: ['600px', '80%'],
                content: 'edithonor.html?id=' + id,

            });
        };

        //个人信息修改

        $(function () {
            $('#edituser').ajaxForm({
                success: complete, //成功之後的
                dataType: 'json'
            });

            function complete(res) {

                var result = JSON.parse(res);
                layer.msg('修改成功');
                parent.location.reload();
                var index = parent.layer.getFrameIndex(window.name);

            }
            return false;
        });
    </script>
    <script>
        $('#uploadimg').click(function () {
            layer.open({
                type: 2,
                title: false,
                shadeClose: true,
                shade: 0.8,
                area: ['90%', '90%'],
                content: '<?php echo url("modal_upload_img"); ?>'
            });
        });
        $('#uploadimg2').click(function () {
            layer.open({
                type: 2,
                title: false,
                shadeClose: true,
                shade: 0.8,
                area: ['90%', '90%'],
                content: '<?php echo url("modal_upload_img2"); ?>'
            });
        });
        //学生活动信息添加
        $('.button').click(function () {
            var val = new FormData($('#form1')[0]);
            $.ajax({
                url: '<?php echo url("add"); ?>',
                type: 'post',
                data: val,
                async: false,
                contentType: false,
                processData: false,
                success: function (res) {
                    if (res == 1) {
                        layer.msg('添加成功');
                        parent.location.reload();
                        var index = parent.layer.getFrameIndex(
                            window.name);
                        parent.layer.close(index);
                    } else {
                        alert(0);
                        layer.msg('添加失败');
                    }
                }

            })
        })
        //添加学生活动信息
        $('.subs').click(function () {
            // alert('aa');
            // exit;
            var val = new FormData($('#insertmessage')[0]);
            //alert(11);
            $.ajax({
                url: '<?php echo url("insertmessage"); ?>',
                type: 'post',
                data: val,
                async: false,
                contentType: false,
                processData: false,
                success: function (res) {
                    // alert(res);
                    // exit;
                    if (res) {
                        layer.msg('添加成功', {
                            time: 3000
                        });
                        parent.location.reload();
                        var index = parent.layer.getFrameIndex(window.name);
                        parent.layer.close(apply);
                    } else {
                        layer.msg('此信息只能提交一次或数据异常');
                    }
                }

            })
        })

        //删除工作经历数据
        function experience_del(obj, id) {
            layer.confirm('确定删除吗？', {
                btn: ['确定', '取消'] //按钮
            }, function () {
                $.ajax({
                    url: "<?php echo url('experience_del'); ?>",
                    type: 'get',
                    data: {
                        eid: id
                    },
                    success: function (rel) {
                        if (rel) {
                            layer.msg('已删除!', {
                                icon: 1,
                                time: 1000
                            }, function () {
                                $(".a").remove();

                            });

                        } else {
                            layer.msg('删除失败!', {
                                icon: 2,
                                time: 1000
                            });
                        }
                    }
                });
            }, function () {
                layer.msg('操作已取消');
            });

        }
        //删除所获荣誉数据
        function honor_del(obj, id) {
            layer.confirm('确定删除吗？', {
                btn: ['确定', '取消'] //按钮
            }, function () {
                $.ajax({
                    url: "<?php echo url('honor_del'); ?>",
                    type: 'get',
                    data: {
                        hid: id
                    },
                    success: function (rel) {
                        if (rel) {
                            layer.msg('已删除!', {
                                icon: 1,
                                time: 1000
                            }, function () {
                                $(".b").remove();

                            });

                        } else {
                            layer.msg('删除失败!', {
                                icon: 2,
                                time: 1000
                            });
                        }
                    }
                });
            }, function () {
                layer.msg('操作已取消');
            });

        }
        //撤销活动申请
        function projectlist(obj, id) {
            layer.confirm('确定撤销吗？', {
                btn: ['确定', '取消'] //按钮
            }, function () {
                $.ajax({
                    url: "<?php echo url('News/projectlist'); ?>",
                    type: 'post',
                    data: {
                        aid: id
                    },
                    success: function (rel) {
                        var result = JSON.parse(rel);
                        if (result.code == 0) {
                            layer.msg(result.msg);
                            $(".c").remove();


                        }
                        if (result.code == 1) {
                            layer.msg(result.msg);
                        }
                        if (result.code == 2) {
                            layer.msg(result.msg);
                        }
                    }
                });
            }, function () {
                layer.msg('操作已取消');
            });

        }
        //岗位申请
        $('.applywork').click(function () {
            var val = new FormData($('#applywork')[0]);
            $.ajax({
                url: '<?php echo url("applywork"); ?>',
                type: 'post',
                data: val,
                async: false,
                contentType: false,
                processData: false,
                success: function (rel) {
                    var result = JSON.parse(rel);
                    if (result.code == 0) {
                        layer.msg(result.msg);
                    }
                    if (result.code == 1) {
                        layer.msg(result.msg);
                    }
                    if (result.code == 2) {
                        layer.msg(result.msg);
                    }
                }

            })
        })

        function logout() {
            layer.confirm('您确定要退出登录？', {
                title: '退出提醒'
            }, function (index) {
                layer.msg('退出成功');
                location.href = '<?php echo Url("News/logout"); ?>'
            })
        }
    </script>
</body>

</html>
<script>
    function a() {
        var a = {
            $a
        };
        if (a == 1) {
            $('#active').show();
        } else {
            $('#active').hide();
        }

    }
</script>