<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>购物车</title>
	<link rel="stylesheet" href="<?php echo __PUBLIC__.'/web/css/shopcar.css';?>">
</head>
<body>
<!--头部开始-->
<div id="header">
		<div class="header_top">
			<div class="w top_nav">
				<div class="top_nav_left">
					<a class="icon house_img">&#xe640;</a>
					<a href="index.php">返回易购首页</a>
					<a class="icon line_img">&#xe628;</a>
					<a href="">网站导航<i class="new"></i></a>
					<a class="icon dowm">&#xe62e;</a>
				</div>
				<div class="toolbar_right">
					<ul>
						<li>
							<?php
								echo empty($_SESSION['user']['user_name'])?
								'<a href="loginController.php" class="lg_re">登录</a><a href="registerController.php" class="lg_re">注册</a>':
								(empty($_SESSION['user']['nick_name'])?'<a href="person.php" class="lg_re">'.$_SESSION['user']['user_name'].'</a>':'<a href="person.php" class="lg_re">'.$_SESSION['user']['nick_name'].'</a>').'<a href="./action.php?a=outlogin" class="lg_re">退出</a>'?>
						</li>
						<li><a class="order" href=<?php echo empty($_SESSION['user']['id'])?"login.php":"myorder.php"?>>我的订单</a><em class="icon dowm">&#xe62e;</em></li>
						<li><a>我的易购</a><em class="icon dowm">&#xe62e;</em></li>
						<li><em class="icon car">&#xe623;</em><a class="order" href="">购物车</a><!--span class="zero">0</span--></li>
						<li><em class="icon phone">&#xe604;</em><a>手机苏宁</a><em class="icon dowm">&#xe62e;</em></li>
						<li><a>易付宝</a></li>
						<li><a>政企采购</a></li>
						<li><a>服务中心</a><em class="icon dowm">&#xe62e;</em></li>
					</ul>
				</div>
				<div class="clear"></div>
			</div>
		</div>
</div>
<!--头部结束-->
<!--主体内容开始-->
<div id="main">
		<div class="w car_logo">
			<div class="snlogo"><img src="<?php echo __PUBLIC__.'/web/Image/img/sergiter_logo.png'?>"/></div>
			<div class="cart_progress">
				<ul>
					<li class="finish">
						<i>1</i>
						<span>我的购物车</span>
					</li>
					<li class="">
						<i>2</i>
						<span>确认订单</span>
					</li>
					<li class="">
						<i>3</i>
						<span>付款</span>
					</li>
					<li class="">
						<i>4</i>
						<span>支付成功</span>
					</li>
				</ul>
			</div>
		</div>
		<div class="w car_tip">
				<i></i>
				购物车
		</div>
		<div class="w instruction">
			<div class="text">
				运费说明：苏宁自营商品满69元免运费；商家商品运费按商家规则计算
			</div>
			<a href="<?php echo $url?>"> < 返回继续购物</a>
		</div>
		<?php if(!empty($_SESSION['cart'])):?>
		<div class="w shoplist">
			<div class="attice-head">
				<ul class="ul_list_attice">
					<li class="li_list1"><label><input type="checkbox">全选</label></li>
					<li class="li_list2">商品信息</li>
					<li class="li_list3">单价</li>
					<li class="li_list5">数量</li>
					<li class="li_list6">小计(元)</li>
					<li class="li_list7">操作</li>
				</ul>
				<?php foreach($_SESSION['cart'] as $key=>$val):?>
				<div class="sell">
					<input type="checkbox">
					<i class="sell_ico"></i>
					<strong>苏宁自营</strong>
					<a href="">
						<span>产品咨询</span>
					</a>
				</div>
				<div class="snshop">
					<div class="goods_list">
						<ul class="ul_list_goods">
							<li class="checkbox"><input type="checkbox"></li>
							<li class="liimg">
								<a href=""><img src="<?php echo __PUBLIC__.$val['goods_img']?>" alt=""></a>
								<span><?php echo $val['goods_name']?></span>
							</li>
							<li class="price"><em>￥<?php echo $val['price']?></em></li>
							<li class="num">
								<a class="minus" href="cartController.php?cname=minus&gid=<?php echo $key?>"></a>
								<input type="text" id="qty" value="<?php echo $val['qty']?>">
								<a class="plus" href="cartController.php?cname=plus&gid=<?php echo $key?>"></a>
							</li>
							<li class="total"><em>￥<?php echo number_format($val['qty']*$val['price'],2);?></em></li>
							<li class="del"><a href="cartController.php?cname=del&gid=<?php echo $key?>">删除</a></li>
						</ul>
					</div>
				</div>
				<?php endforeach;?>
			</div>
		</div>
		<div class="w integral">
			<p>商品总额：<i>¥<?php echo number_format($total,2)?></i></p>
			<?php if(!empty($_SESSION['user']['user_name'])):?>
			<p>可用积分：<i><?php echo $snuser['integral'];?></i></p>
			<?php endif; ?>
		</div>
		<div class="w sum">
			<div class="del_all">
				<a href="cartController.php?cname=delete">清空购物车</a>
			</div>
			<div class="tolprice">商品应付金额：
				<i>¥<?php echo number_format($total,2);?></i>
			</div>
			<div class="count">
				<form action="action.php?a=settlement" method="post">
					<input type="hidden" name="surplus" value="<?php echo $surplus_convert?>">
					<input type="hidden" name="total" value="<?php echo $amount_payable?>">
					<input class="sub" type="submit" value="">
				</form>
			</div>
		</div>
		<?php else:?>
		<div class="w null">
			<div class="null_img"></div>
			<h3 class="null_info">您的购物车还是空的，快去购物吧 <a href="index.php">马上去首页</a></h3>
		</div>
		<?php endif;?>
		<div class="w like">
			<div class="like_title">
				<p>猜你喜欢的</p>
				<p class="the_num">
					<span class="one">1</span>
					<span class="two">2</span>
					<span class="three">3</span>
				</p>
			</div>
			<div class="like_goods">
				<a class="left_arrow"></a>
				<ul class="mid_goods">
					<li>
						<span class="mid_goods_img">
							<a><img src="<?php echo __PUBLIC__.'/web/Image/img/like_goods_img.jpg'?>"/></a>
						</span>
						<h4 class="mid_goods_discribie">YOCY 华为荣耀6钢化玻璃膜 钢化贴膜 荣耀6高清防刮防指纹保护膜 防爆膜 手机贴膜</h4>
						<p class="mid_goods_price">
							<em><i>￥</i>19.00</em>
						</p>
						<div class="mid_goods_join"><a>加入购物车</a></div>
					</li>
					<li>
						<span class="mid_goods_img">
							<a><img src="<?php echo __PUBLIC__.'/web/Image/img/like_goods_img.jpg'?>"/></a>
						</span>
						<h4 class="mid_goods_discribie">YOCY 华为荣耀6钢化玻璃膜 钢化贴膜 荣耀6高清防刮防指纹保护膜 防爆膜 手机贴膜</h4>
						<p class="mid_goods_price">
							<em><i>￥</i>19.00</em>
						</p>
						<div class="mid_goods_join"><a>加入购物车</a></div>
					</li>
					<li>
						<span class="mid_goods_img">
							<a><img src="<?php echo __PUBLIC__.'/web/Image/img/like_goods_img.jpg'?>"/></a>
						</span>
						<h4 class="mid_goods_discribie">YOCY 华为荣耀6钢化玻璃膜 钢化贴膜 荣耀6高清防刮防指纹保护膜 防爆膜 手机贴膜</h4>
						<p class="mid_goods_price">
							<em><i>￥</i>19.00</em>
						</p>
						<div class="mid_goods_join"><a>加入购物车</a></div>
					</li>
					<li>
						<span class="mid_goods_img">
							<a><img src="<?php echo __PUBLIC__.'/web/Image/img/like_goods_img.jpg'?>"/></a>
						</span>
						<h4 class="mid_goods_discribie">YOCY 华为荣耀6钢化玻璃膜 钢化贴膜 荣耀6高清防刮防指纹保护膜 防爆膜 手机贴膜</h4>
						<p class="mid_goods_price">
							<em><i>￥</i>19.00</em>
						</p>
						<div class="mid_goods_join"><a>加入购物车</a></div>
					</li>
					<li>
						<span class="mid_goods_img">
							<a><img src="<?php echo __PUBLIC__.'/web/Image/img/like_goods_img.jpg'?>"/></a>
						</span>
						<h4 class="mid_goods_discribie">YOCY 华为荣耀6钢化玻璃膜 钢化贴膜 荣耀6高清防刮防指纹保护膜 防爆膜 手机贴膜</h4>
						<p class="mid_goods_price">
							<em><i>￥</i>19.00</em>
						</p>
						<div class="mid_goods_join"><a>加入购物车</a></div>
					</li>
				</ul>
				<a class="right_arrow"></a>
			</div>
		</div>
</div>
<!--主体内容结束-->
<!--底部开始-->
<?php include '../View/regfooter.php';?>
<!--底部结束-->
</body>

<html>