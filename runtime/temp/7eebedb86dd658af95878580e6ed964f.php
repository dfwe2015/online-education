<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:69:"D:\wamp64\www\edu\public/../application/index\view\user\password.html";i:1478783724;s:60:"D:\wamp64\www\edu\public/../application/index\view\base.html";i:1478760512;}*/ ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<script type="text/javascript" src="__PUBLIC__/js/jquery.js"></script>
<link rel="stylesheet" type="text/css" href="__PUBLIC__/bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/muke.css">
<script type="text/javascript" src="__PUBLIC__/js/jquery.SuperSlide.2.1.1.js"></script>
<style>
 #navname li a  {color: black;}
#navname li a:hover{color: red;}

</style>
</head>

<body class="backg_huibai">

<!-- 顶部 -->
<div class="width100 height80 ">
	<div class="width100 float_l height80 line_hei80">
        <!-- 顶部左边 -->
        <div class="float_l">
            <div class="float_l margin_l20">
            <!--logo-->
                 <img width="160" height="60" src="__IMGL__/uploads/20161108/7a528089aac176c8d3fcb8f6b70d043a.jpg">
            </div>
            <div class="float_l">
                <ul class="ul_li fon_siz16" id = "navname">
                    <li><a href="<?php echo url('index/index'); ?>">首页</a></li>
					<li><a href="<?php echo url('ask/index'); ?>">问答</a></li>
                    <li><a href="<?php echo url('exam/index'); ?>">考试系统</a></li>
					 <li><a href="<?php echo url('About/index'); ?>" target="_blank">关于我们</a></li>

                </ul>
            </div>
        </div>

        <!-- 顶部右边 -->
         <div class="float_r">
            <div class="float_l top_input">
                 <form action="<?php echo url('Video/search'); ?>" method="post">
                    <input class="posi_relative" type="text" name="keywords" id="" placeholder="请输入想搜索的内容...">
                    <button type="button" class="btn btn-default btn-xs"> 搜索</button>
                </form>
            </div>
            <?php if(empty(session('username'))): ?>
            <div class="float_l margin_l20">
                <a href="<?php echo url('login/index'); ?>" class="btn btn-info" role="button">登录</a>
                <a href="<?php echo url('login/index'); ?>" class="btn btn-warning" role="button">注册</a>
            </div>
            <?php else: ?>
                <div class="float_l margin_l40">
                    <img src="__PUBLIC__/img/uiz3.png">
                </div>
                <div class="float_l margin_l35">
                    <img src="__PUBLIC__/img/uiz6.png">
                </div>
                <div class="float_l margin_l30 margin_r40">
                    <a href="<?php echo url('course/index'); ?>"><img width="32px" height="32px" src="<?php if($user['picture'] == '1.jpg'): ?>__PUBLIC__/images/1.jpg<?php else: ?>__IMG__/<?php echo $user['picture']; endif; ?>"></a>
                </div>
                 <a href="<?php echo url('login/logout'); ?>" class="btn btn-danger" role="button">退出</a>
            <?php endif; ?>
        </div>
	</div>
</div>



<!DOCTYPE html>
<!-- saved from url=(0036)http://www.imooc.com/user/setprofile -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>修改密码</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<meta name="renderer" content="webkit">
<meta property="qc:admins" content="77103107776157736375">
<meta property="wb:webmaster" content="c4f857219bfae3cb">
<meta http-equiv="Access-Control-Allow-Origin" content="*">
<meta http-equiv="Cache-Control" content="no-transform ">


<link rel="stylesheet" href="__PUBLIC__/css/base.css" type="text/css">
<link rel="stylesheet" href="__PUBLIC__/css/common-less.css" type="text/css">
<link rel="stylesheet" href="__PUBLIC__/css/moco.min.css" type="text/css">
<link rel="stylesheet" href="__PUBLIC__/css/common-less(1).css" type="text/css">
<link rel="stylesheet" href="__PUBLIC__/css/profile-less.css" type="text/css">

<style type="text/css">
    .warn-info{
        font-size: 16px;
        line-height: 28px;
    }
    .warn-tip{
        color: #999;
        margin-top: 30px;
    }
    .warn-tip a{
        color: #08c !important;
    }
</style>
</head>
<body>



<div id="main">

<div class="page-settings">
    <div class="top">
        <div class="w960 mauto top_title">
            <p>个人设置</p>
        </div>
    </div>
    <div class="setting pb10">
        <div class="nav-tabs pa">
            <a href="<?php echo url('info'); ?>"><div class="baseinfo fl  ">基本信息</div></a>
            <a href="<?php echo url('password'); ?>"><div class="baseinfo fl active ">修改密码</div></a>
        </div>
        <div class="contentBox">
            <div class="formBox">
                <div id="setting-profile" class="setting-wrap setting-profile">


                        <form id="profile" action="<?php echo url('updatePwd'); ?>" method="post">

                        <div class="wlfg-wrap clearfix">
                            <label class="label-name" for="nick">原密码：</label>
                            <div class="rlf-group">

                                <input type="password" name="org_password" value="" id="nick" autocomplete="off" data-validate="require-nick" class="moco-form-control" value="" placeholder="请输入原密码.">
                                <p class="rlf-tip-wrap errorHint color-red"></p>
                            </div>
                        </div>

                        <div class="wlfg-wrap clearfix">
                            <label class="label-name" for="nick">新密码：</label>
                            <div class="rlf-group">

                                <input type="password" name="password" value="" id="nick" autocomplete="off" data-validate="require-nick" class="moco-form-control" value="" placeholder="请输入新密码.">
                                <p class="rlf-tip-wrap errorHint color-red"></p>
                            </div>
                        </div>

                        <div class="wlfg-wrap clearfix">
                            <label class="label-name" for=""></label>
                            <div class="rlf-group">
                                <button id="profile-submit" hidefocus="true" class="rlf-btn-green btn-block profile-btn">保 存</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>


</div>



</div>





<!-- 页脚 -->
<div class="width100 float_l padding_t30 height193">
    <div class="width_1200 margin_auto">
        <div class="width100 float_l text_c yejiao color_gray">
        <?php if(is_array($flink) || $flink instanceof \think\Collection): $i = 0; $__LIST__ = $flink;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <a href = "<?php echo $vo['url']; ?>"><?php echo $vo['webname']; ?></a>
        <?php endforeach; endif; else: echo "" ;endif; ?>

        </div>
        <div class="width100 float_l text_c border_t margin_t20 padding_t20 color_gray fon_siz12">
            <span>© 2016 chensenlin.cn 渝ICP备16010775号-1</span>
        </div>
    </div>
</div>

</body>
</html>
