<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:65:"D:\wamp64\www\edu\public/../application/index\view\note\user.html";i:1478783456;s:59:"D:\wamp64\www\edu\public/../application/index\view\nav.html";i:1478760534;}*/ ?>
<!DOCTYPE html>
<!-- saved from url=(0038)http://www.imooc.com/u/4074002/courses -->
<html>

	<head>
		<script type="text/javascript" src="__PUBLIC__/js/jquery.js"></script>
		<script type="text/javascript" src="__PUBLIC__/js/jquery-1.8.3.js"></script>
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/muke.css">
		<script type="text/javascript" src="__PUBLIC__/js/jquery.SuperSlide.2.1.1.js"></script>

		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" href="__PUBLIC__/css/moco.min.css" type="text/css">
		<link rel="stylesheet" href="__PUBLIC__/css/layer.css">
		<link rel="stylesheet" href="__PUBLIC__/css/saved_resource.css" type="text/css">
		<link rel="stylesheet" href="__PUBLIC__/css/share_style0_16.css">
		<style type="text/css">
			.warn-info {
				font-size: 16px;
				line-height: 28px;
			}

			.warn-tip {
				color: #999;
				margin-top: 30px;
			}

			.warn-tip a {
				color: #08c !important;
			}
			#tuichu{
				margin-right:20px;
				color:#fff;
			}

			a:hover, a:active {
			    color: #ec1500;
			}
			#navname li a  {color: black;}
		#navname li a:hover{color: red;}
		</style>

	</head>

	<body>

		<!-- 顶部 -->
		<div class="width100 height80 ">
			<div class="width100 float_l height80 line_hei80">
		        <!-- 顶部左边 -->
		        <div class="float_l">
		            <div class="float_l margin_l20">
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
		            <div class="float_l margin_l20">
		                <img src="__PUBLIC__/img/uiz5.png">
		            </div>
		            <div class="float_l margin_l40">
		                <img src="__PUBLIC__/img/uiz3.png">
		            </div>
		            <div class="float_l margin_l35">
		                <img src="__PUBLIC__/img/uiz6.png">
		            </div>
		            <div class="float_l margin_l30 margin_r40">
	                    <a href="<?php echo url('course/index'); ?>"><img width="32px" height="32px" src="<?php if($user['picture']=='1.jpg'): ?>__PUBLIC__/images/1.jpg<?php else: ?>__IMG__/<?php echo $user['picture']; endif; ?>"></a>
	                </div>
	                 <a href="<?php echo url('login/logout'); ?>" class="btn btn-danger" role="button">退出</a>

		        </div>
			</div>
		</div>

		<!-- 头部信息展示 -->
		<div class="bg-other user-head-info">
			<div class="user-info">
			<h3 class="user-name clearfix">
            <span><?php echo $user['username']; ?></span>
       		 </h3>
				<!--25-->
				<p class="about-info">
					<span class="u-info-learn">
                        学习时长 <em>200小时24分</em>
                    </span>
					<span class="u-info-credit">
                       <a href="#">积分<em><?php echo $user['point']; ?></em></a>
       			    </span>
					<span class="u-info-mp">
                       <a href="#">等级<em><?php echo $user['level']; ?></em></a>
                    </span>
				</p>
				<p class="user-desc"><?php echo $user['introduce']; ?></p>

				<div class="study-info clearfix">
					<div class="item follows">
						<a href="#"><em>6</em></a>
						<span>关注</span>
					</div>
					<div class="item followers">
						<a href="#"><em>2</em></a>
						<span>粉丝</span>
					</div>
				</div>
				<!--.study-info end-->
			</div>
			<!-- .user-info end -->
		</div>
		<!-- .big-pic end -->

		<!-- 下半部分 -->
		<div class="wrap">
			<!-- 左侧导航 -->
			<div class="slider" style="position: absolute; left: 0px; top: 0px;">
				<div class="user-pic" data-is-fans="" data-is-follows="">
					<span class="glyphicon glyphicon-th"><div class="user-pic-bg"></div></span>
					<!--user-pic-big end-->
					<a href="<?php echo url('user/info'); ?>" target="blank_"><img class="img" src="<?php if($user['picture']=='1.jpg'): ?>__PUBLIC__/images/1.jpg<?php else: ?>__IMG__/<?php echo $user['picture']; endif; ?>" alt=""></a>
					<div class="set-btn">
						<a href="http://www.imooc.com/user/setprofile"><i class="icon-set"></i></a>
					</div>
				</div>

				<ul>

					<li>
						<a href="<?php echo url('course/index'); ?>" class="a" >
							<span class="glyphicon glyphicon-home"></span><span>&nbsp&nbsp&nbsp&nbsp主页&nbsp&nbsp&nbsp&nbsp</span><span class="glyphicon glyphicon-chevron-right"></span>
						</a>
					</li>

					<li>
						<a href="<?php echo url('course/user'); ?>" class="a">
							<span class="glyphicon glyphicon-tags"></span><span>&nbsp&nbsp&nbsp&nbsp课程&nbsp&nbsp&nbsp&nbsp</span><span class="glyphicon glyphicon-chevron-right"></span>
						</a>
					</li>

					<li>
						<a href="<?php echo url('ask/user'); ?>" class="a" >
							<span class="glyphicon glyphicon-question-sign"></span><span>&nbsp&nbsp&nbsp&nbsp提问&nbsp&nbsp&nbsp&nbsp</span><span class="glyphicon glyphicon-chevron-right"></span>
						</a>
					</li>

					<li>
						<a href="<?php echo url('note/user'); ?>" class="a" >
							<span class="glyphicon glyphicon-edit"></span><span>&nbsp&nbsp&nbsp&nbsp笔记&nbsp&nbsp&nbsp&nbsp</span><span class="glyphicon glyphicon-chevron-right"></span>
						</a>
					</li>
					<li>
						<a href="<?php echo url('user/info'); ?>" class="a" target="_blank">
							<span class="glyphicon glyphicon-cog"></span><span>&nbsp&nbsp&nbsp&nbsp设置&nbsp&nbsp&nbsp&nbsp</span><span class="glyphicon glyphicon-chevron-right"></span>
						</a>
					</li>

				</ul>
			</div>
			<!-- .slider end -->

			
<!DOCTYPE html>
<!-- saved from url=(0039)http://www.imooc.com/u/2125817/articles -->
<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

		<title><?php echo $user['username']; ?>的笔记</title>

		<style type="text/css">
			.warn-info {
				font-size: 16px;
				line-height: 28px;
			}
			.warn-tip {
				color: #999;
				margin-top: 30px;
			}
			.warn-tip a {
				color: #08c !important;
			}
		</style>

		<link rel="stylesheet" href="__PUBLIC__/css/savedb_resource.css" type="text/css">

		<body>

			<div class="u-container">

				<div id="articleMain" class="article-main">

					<ul class="clearfix toptab">
						<li class="tabactive">
							<a href="#">我的手记</a>
						</li>
						<div class="left_warp">
							<span class="glyphicon glyphicon-th-list"></span> 全部手记
						</div>
					</ul>

					<div id="articlesList" class="articles-list">
					<?php if($result): if(is_array($result) || $result instanceof \think\Collection): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?>
						<div class="list-item article-item ">
						<h3 class="item-title">
               			 	<a target="_blank" href="#" class="title-detail"><?php echo $data['title']; ?></a>
               			 </h3>
							<!-- text -->
							<div class="">
								<!-- <p class="item-bd">取值： 当对一个对象的不存在的属性进行&ldquo;取值&rdquo;的时候，就会自动调用内部方法：__GET() 其中，该方法可以带一个形参，表示这个要对之取值的不存在的属性名（字符串）； 赋值： 当对一个对象的不存在的属性进行&ldquo;赋值&rdquo;的时候，就会自动调用内部方法：__SET() 它有2个形参，分别代表要对不存在的属性进行赋值的时候的&ldquo;属性名&rdquo;和&ldquo;属性值...<a class="read-more" target="_blank" href="/article/13644">[查看全文]</a></p> -->
								<p class="item-bd"><?php echo $data['content']; ?></p>

							</div>
							<div class="item-btm clearfix">
								<ul class="l left-info">
								</ul>

								<div class="r right-info">

									<div class=" l">
										<i class="icon sns-comment"></i><em><?php echo date("Y-m-d H:i:s",$data['create_time']); ?> 原创</em>
									</div>

								</div>

							</div>
						</div>
						<?php endforeach; endif; else: echo "" ;endif; else: ?>
							<div class="nodata">
					            你还没有任何手记，快去 <a href="#">发表手记</a> 吧。
					        </div>
						<?php endif; ?>
					</div>
					<!-- 分页 -->
					<div class="fenye">
						<?php echo $result->render(); ?>
					</div>

				</div>
			</div>
			<!-- .container end -->

			

		<!-- .wrap end-->
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

	<script>

		window.onload = function(){
			var	oA = document.getElementsByClassName('a');
			for(var i = 0; i < oA.length; i++){
				oA[i].index = i;
				oA[i].onclick = function(){
					for(var j = 0; j < oA.length; j++){
						oA.className = '';
					};
					oA[this.index].className = 'active';
				}
			};
		}

	</script>

	</body>

</html>