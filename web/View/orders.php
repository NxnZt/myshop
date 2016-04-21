<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>确认订单</title>
	<link rel="stylesheet" href="<?php echo __PUBLIC__.'/web/css/orders.css'?>">
	<script src="<?php echo __PUBLIC__.'/web/js/jquery.min.js'?>"></script>
	<link rel="stylesheet" href="<?php echo __PUBLIC__.'/web/css/lanrenzhijia.css'?>" media="all">
	<script>
		jQuery(document).ready(function($) {
			$('.theme-login').click(function(){
				$('.theme-popover-mask').fadeIn(100);
				$('.theme-popover').slideDown(200);
			})
			$('.theme-poptit .close').click(function(){
				$('.theme-popover-mask').fadeOut(100);
				$('.theme-popover').slideUp(200);
			})

		})
	</script>
</head>
<body>
<div class="mian">
	<div class="w car_logo">
			<div class="snlogo">
				<a href="index.php"><img src="<?php echo __PUBLIC__.'/Web/Image/img/sergiter_logo.png'?>"></a>
			</div>
			<div class="cart_progress">
				<ul>
					<li class="finish">
						<i>1</i>
						<span>我的购物车</span>
					</li>
					<li class="finish_2">
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
	<form class="list_main" action="OrderController.php?cname=order" method="post">
	<div class="w form">
		<p class="dispatching">配送信息</p>
		<div class="form_main">
			<div class="formlist">
				<p class="list_title">配送</p>
				<?php if(!empty($address)){?>
					<?php foreach($address as $addr){?>
					<p class="name">
						<label>
						<input class="check" name="add_id" type="radio"  value="<?php echo $addr['id']?>" <?php echo $addr['is_add']==1?'checked':''?>>
						<em><?php echo $addr['receiver'].'&nbsp;'.substr_replace($addr['phone'],'****',3,4).'&nbsp;&nbsp;'.$addr['address']?></em>
						</label>
						<a href="addressController.php?cname=is_del&id=<?php echo $addr['id']?>" class="del_a">删除地址</a>
						<a href="addressController.php?cname=is_set&id=<?php echo $addr['id']?>" class="del_a">设置为默认地址</a>
					</p>
				<?php }}?>

					<a class="link btn btn-primary btn-large theme-login">新增地址</a>

			</div>
		</div>
	</div>
	<div class="w paymathod">
		<p class="payfor">支付方式</p>
		<p class="content">在线支付</p>
	</div>
	<div class="w fuwu">
		<p class="title">商品信息及服务信息</p>
		<table class="fuwu_main" cellspacing="0">
			<tr class="thead">
				<td class="name">商品名称</td>
				<td class="price">商品价格</td>
				<td>数量</td>
				<td>服务信息</td>
			</tr>
			<?php if(!empty($_SESSION['cart'])):?>
			<?php foreach($_SESSION['cart'] as $key=>$val):?>
			<tr class="tbody">
				<td class="td1">
					<img src="<?php echo __PUBLIC__.$val['goods_img'];?>">
					<a><?php echo $val['goods_name']?></a>
				</td>
				<td>￥<?php echo $val['price']?></td>
				<td><?php echo $val['qty']?></td>
				<td class="td4">支付完成后尽快为您发货如有疑问请联系 <a href="#">83837070</a></td>
			</tr>
			<?php endforeach;?>
			<?php endif;?>
		</table>
	</div>
	<div class="w sub">
		<p class="price">应付金额：<i>￥<?php echo number_format($_SESSION['total'],2)?></i></p>
		<!--p class="address">收货地址：<i>上海 上海市 闸北区全区万荣路1188弄</i></p>
		<p>收货人：<i>张韬</i></p-->
		<input type="submit" value="" class="buttom"/>
	</div>
	</form>
	<div class="theme-popover">
		<div class="theme-poptit">
	       	<a href="javascript:;" title="关闭" class="close">×</a>
		    <div class="title">添加新地址</div>
		    <form action="addressController.php" method="post">
		    <div class="massage">
		    	<p><span>收货人：</span><input name="receiver" type="text"></p>
		    	<p><span>电话：</span><input name="phone" type="text"></p>
		    	<p><span>收货地址：</span><input name="address" type="text"></p>
		    </div>
		    <div class="buttom">
			    <input class="sub" type="submit" value="保存新地址">
		    </div>
		    </form>
	    </div>
	</div>
	<div class="theme-popover-mask"></div>
</div>
<!--底部开始-->
<?php include '../View/regfooter.php';?>
<!--底部结束-->

</body>
