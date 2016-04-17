<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title> 注册页面</title>
	<link rel="stylesheet" href="<?php echo __PUBLIC__.'/web/css/register.css'?>">
</head>
<body>
	<div class="wrapper">
	<!--注册页面的logo图片-->
		<div id="register_top">
			<div class="top_main">
				<div class="main_logo">
					<div class="logo_left">
						<img src="<?php echo __PUBLIC__.'/web/Image/img/sergiter_logo.png'?>" alt="">
					</div>
					<div class="logo_right"></div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
		<div id="register_main">
				<ul class="main_list">
					<li class="list_one"><a href="">个人注册</a></li>
					<li class="list_two"><a href="">企业注册</a></li>
				</ul>
				<p class="main_notice">我已经注册，马上<a href="login.php">登录 </a></p>
				<div class="main_form">
					<div class="form_body">
						<div class="form_left">
							<form class="form_box" action="registerController.php" method="post">
								<p><span>用户名:</span><input type="text" name="username" placeholder="长度8-16位的数字字母下划线组合">
								</p>
								<p><span>设置密码:</span><input type="password" name="pass" placeholder="长度8-16位的数字、字母组合"></p>
								<p><span>确认密码:</span><input type="password" name="repass" placeholder="长度8-16位的数字、字母组合"></p>
								<!--<p><span>验证码:</span><input class="yzm" type="text"></p-->
								<p><span>验证码:</span><input class="yzm" type="text" name="yzm"></p>
								<div class="sub"><img src="<?php echo $url.'/function/yzm.php'?>" title="点击切换" onclick="this.src='<?php echo $url.'/function/yzm.php?'?>'+(new Date()).getTime();"></div>
								<p><input class="submit" type="submit" value="" ></p>
							</form>
							<div class="protocol">
								<a href="">《苏宁易购会员章程》</a>
								<a href="">《易付宝协议》</a>及
								<a href="">《苏宁广告联盟在线协议》</a>
							</div>
						</div>

						<div class="form_right">
							<div class="right_top"></div>
							<div class="right_bottom"></div>
						</div>

					</div>

				</div>
		</div>
	</div>
	<div id="footer">
		<div class="login_footer">
			<div class="foot_main">
				<P>
					<a>苏宁云商</a>
					<span>|</span>
					<a>苏宁互联</a>
					<span>|</span>
					<a>苏宁金融</a>
					<span>|</span>
					<a> 易付宝</a>
					<span>|</span>
					<a>满座网</a>
					<span>|</span>
					<a> PPTV</a>
					<span>|</span>
					<a>红孩子</a>
					<span>|</span>
					<a>缤购</a>
					<span>|</span>
					<a> 乐购仕</a>
					<span>|</span>
					<a>缤购</a>
					<span>|</span>
					<a>红孩子</a>
					<span>|</span>
					<a>缤购</a>
				</P>
				<p>
					<a> 苏宁物流</a>
					<span>|</span>
					<a>苏宁美国</a>
					<span>|</span>
					<a>红孩子</a>
					<span>|</span>
					<a>缤购</a>
					<span>|</span>
					<a>红孩子</a>
					<span>|</span>
					<a>缤购</a>
					<span>|</span>
					<a>红孩子</a>
					<span>|</span>
					<a>缤购</a>
					<span>|</span>
					<a>缤购</a>
				</p>
				<p class="copyright">Copyright 2002-2015 ，苏宁版权所有 苏ICP备10207551号 苏B1-20130131 苏sB2-20130376 出版物经营许可证新出发苏批字第A-243号</p>
				<div class="foot_img">
					<a href=""><img src="<?php echo __PUBLIC__.'/web/Image/img/kexin.png'?>" alt=""></a>
					<a href=""><img src="<?php echo __PUBLIC__.'/web/Image/img/chengxin.png'?>" alt=""></a>
					<a href=""><img src="<?php echo __PUBLIC__.'/web/Image/img/unicom.png'?>" alt=""></a>
					<a href=""><img src="<?php echo __PUBLIC__.'/web/Image/img/dianxin.jpg'?>" alt=""></a>
					<a href=""><img src="<?php echo __PUBLIC__.'/web/Image/img/dianzi.png'?>" alt=""></a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>