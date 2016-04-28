<!--头部开始-->
		<div id="header">
			<div class="header_top">
				<div class="w top_nav">
					<div class="top_nav_left">
						<i class="icon house_img">&#xe640;</i>
						<span><a href="index.php">易购首页</a></span>
						<i class="icon line_img">&#xe628;</i>
						<a href="">网站导航<i class="new"></i></a>
						<i class="icon dowm">&#xe62e;</i>
					</div>
					<div class="toolbar_right">
					<ul>
						<li>
						<?php echo empty($_SESSION['user']['username'])?'<a href="web/Controller/loginController.php" class="lg_re">登录</a><a href="web/Controller/registerController.php" class="lg_re">注册</a>':(empty($_SESSION['user']['username'])?'<a href="person.php" class="lg_re">'.$_SESSION['user']['username'].'</a>':'<a href="person.php" class="lg_re">'.$_SESSION['user']['username'].'</a>').'<a href="web/Controller/loginController.php?cname=logout" class="lg_re">退出</a>'
						?>
						</li>
						<li><a href=<?php echo empty($_SESSION['user']['user_name'])?"login.php":"myorder.php"?>>我的订单</a><em class="icon dowm">&#xe62e;</em></li>
						<li><a>我的易购</a><em class="icon dowm">&#xe62e;</em></li>
						<li><em class="icon car">&#xe623;</em><a href="shoppingcar.php">购物车</a></li>
						<li><em class="icon phone">&#xe604;</em><a>手机苏宁</a><em class="icon dowm">&#xe62e;</em></li>
						<li><a>易付宝</a></li>
						<li><a>政企采购</a></li>
						<li><a>服务中心</a><em class="icon dowm">&#xe62e;</em></li>
					</ul>
					</div>
					<div class="clear"></div>
				</div>
			</div>
			<div class="header_bottom">

				<div class="w bottom_search">
					<div class="bottom_search_left">
						<img src="<?php echo __PUBLIC__.'/web/Image/img/snlogo.png'?>"/>
					</div>
					<div class="bottom_search_right">
						<div class="search_box">
							<i class="icon  boost_img">&#xe619;</i>
							<form>
								<input class="text" type="text" name="search" value=""/>
								<input class="sub" type="submit" name="sub" value="搜索"/>
								<div class="clear"></div>
							</form>
						</div>
						<div class="clear"></div>
						<ul>
							<li><a href="">荣耀7</a></li>
							<li><a href="">苹果6</a></li>
							<li><a href="">三星S6</a></li>
							<li><a href="">edge+</a></li>
							<li><a href="">三星A8</a></li>
							<li><a href="">魅族MX5</a></li>
							<li><a href="">华为P8</a></li>
							<li><a href="">华为麦芒4</a></li>
							<div class="clear"></div>
						</ul>
						<div class="clear"></div>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
		<!--头部结束-->