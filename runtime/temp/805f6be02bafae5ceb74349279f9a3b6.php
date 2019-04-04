<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"F:\phpStudy\WWW\lz\public/../application/admin\view\past_act\layer.html";i:1545739634;}*/ ?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script type="text/javascript" src="__STATIC__/h-ui.admin/js/H-ui.admin.js"></script>
<style>
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

    input{
        border: none;

    }
    /*表单固定长度*/
    /*input.form-control.chang {width: 300px;}*/

    /*选择表单固定长度*/
    /*select.form-control.chang {width: 300px;}*/
    /*.jieshi { margin-left: 100px;}*/

    /*input.btn.btn-danger { width: 300px;}*/
    /*.btns{margin: 0 0 30px 100px;width: 300px;}*/
    /*a:hover{text-decoration:none}*/

    /*其余*/
    span{color: #8C8C8C;width: 300px;float: left;}
    input[type="checkbox"] { float: left;}
    p {
        margin: 10px 0px;
        border-bottom: 1px solid #ddd;
    }
    p.gouxuan {width: 80%; margin-left: 100px;}

    label{
        position: relative;
    }
</style>
<body style="color:#7d7979;;background-color: #ddd;">
<div class="panel panel-default" style="margin-top: 38px;">
    <div class="panel-body">
        <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $key=>$li): ?>
        <form id="form1" class="form-inline" enctype="multipart/form-data">
            <!--活动主题-->
            <p><label>活动主题：</label><?php echo $li['theme']; ?></p>

            <!--活动简介-->
            <p><label style="width: 20%;float: left">活动简介：</label><label style="width:80%;text-align: left"><?php echo $li['intro']; ?></label></p>

            <!--活动单位-->
            <p><label>申请单位：</label><?php echo $li['unit']; ?></p>

            <!--活动地区-->
            <p><label>活动地区：</label><?php echo $li['address']; ?></p>

            <!--活动人数-->
            <p><label>需要人数：</label><?php echo $li['number']; ?></p>

            <!--开始时间-->
            <p><label>开始时间：</label><?php echo date('Y-m-d H:i:s',$li['start_time']); ?></p>

            <!--结束时间-->
            <p><label>结束时间：</label><?php echo date('Y-m-d H:i:s',$li['over_time']); ?></p>

            <!--发起人-->
            <p><label>活动状态：</label>
                <?php if($li['status'] == 0): ?>
                审核中
                <?php else: ?>
                已审核
                <?php endif; ?>
            </p>

            <!--发起人-->
            <p><label>审核人员：</label><?php echo $li['realname']; ?></p>

            <!--发起人-->
            <p><label>发布人员：</label><?php echo $li['realname1']; ?></p>

            <!--发起人-->
            <p><label>发起日期：</label><?php echo date('Y-m-d H:i:s',$li['initiator_time']); ?></p>

            <!--发起人-->
            <p><label>发起人：</label><?php echo $li['initiator']; ?></p>

            <!--活动方案-->
            <div style="float: left">
                <a class="btn btn-success" href="<?php echo $li['project']; ?>" target="download">下载文件</a>
            </div>
            <div>
                <button type="button" class="btn btn-default radius ml-20" style="float: right" onClick="layer_close();">&nbsp;&nbsp;关闭&nbsp;&nbsp;</button>
            </div>

        </form>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
</div>
</body>



