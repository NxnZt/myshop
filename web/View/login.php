<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>用户登录</title>
	<link rel="stylesheet" href="<?php echo __PUBLIC__.'/web/css/login.css'?>">
</head>
<body>
<!--注册部分-->
	<div id="login">
		<div class="login_top">
			<!--头部图片-->
			<div class="login_logo">
				<img src="<?php echo __PUBLIC__.'/web/Image/img/Logo_img.gif'?>"/>
			</div>
			<!--登录表单-->
			<div class="login_form">
				<!--二维码登录-->
				<div class="login_qr">
					<span>二维码安全登陆</span>
					<i></i>
				</div>
				<!--登录输入框-->
				<form action="action.php?a=login&url=<?php echo $url?>" method="post">
					<div class="login_body">
						<i class="user_img"></i>
						<input type="text" name="username" />
					</div>
					<div class="login_body">
						<i class="pow_img"></i>
						<input type="password" name="password"/>
					</div>
					<!--登陆按钮	-->
					<div class="auto_login">
						<label><input type="radio" <span>自动登陆</span></label>
					</div>
					<div class="submit">
						<input type="submit"value="登 录"/>
					</div>
				</form>
				<!--其他信息-->
				<div class="login_link">
					<a>忘记密码</a>
					<span></span>
					<a href="register.php">免费注册</a>
					<a class="link_right"><i></i>会员卡首次注册</a>
				</div>
				<div class="cooperation">
					<p class="coop_title"><span>用合作网站账号登录</span></p>
					<p class="coop_img">
						<a href="" class="icon weixin">
							<i></i>
							<b>微信</b>
						</a>
						<a href="" class="icon qq">
							<i></i>
							<b>QQ</b>
						</a>
						<a href="" class="icon yifubao">
							<i></i>
							<b>易付宝</b>
						</a>
						<a href="" class="icon suning">
							<i></i>
							<b>苏宁互联</b>
						</a>
						<a href="" class="icon pptv">
							<i></i>
							<b>PPTV</b>
						</a>
						<a href="" class="icon manzuo">
							<i></i>
							<b>满座</b>
						</a>
						<a href="" class="icon tianyi">
							<i></i>
							<b>天翼</b>
						</a>
					</p>
				</div>
			</div>
		</div>
	</div>
<!--注册底部开始-->
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
<!--注册底部结束-->
</body>
</html>