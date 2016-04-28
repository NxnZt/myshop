<html>
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="<?php echo __PUBLIC__.'/web/css/myorder.css'?>"/>
	<title>我的订单</title>
</head>
<body>
<!--头部开始-->
		<div id="header">
			<div class="header_top">
				<div class="w top_nav">
					<div class="top_nav_left">
						<i class="icon house_img">&#xe640;</i>
						<span><a href="index.php">返回易购首页</a></span>
						<i class="icon line_img">&#xe628;</i>
						<a href="">网站导航<i class="new"></i></a>
						<i class="icon dowm">&#xe62e;</i>
					</div>
					<div class="toolbar_right">
					<ul>
						<li><?php echo empty($_SESSION['user']['username'])?'<a href="web/Controller/loginController.php" class="lg_re">登录</a><a href="web/Controller/registerController.php" class="lg_re">注册</a>':(empty($_SESSION['user']['username'])?'<a href="person.php" class="lg_re">'.$_SESSION['user']['username'].'</a>':'<a href="person.php" class="lg_re">'.$_SESSION['user']['username'].'</a>').'<a href="loginController.php?cname=logout" class="lg_re">退出</a>'
						?></li>
						<li><a href="myorder.php" class="order">我的订单</a><em class="icon dowm">&#xe62e;</em></li>
						<li><a>我的易购</a><em class="icon dowm">&#xe62e;</em></li>
						<li><em class="icon car">&#xe623;</em><a class="order" href="shoppingcar.php">购物车</a></li>
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
<!--main start-->
	<div id="main">
		<div class="main_top">
			<div class="top_menu">
				<div class="ms_logo"></div>
				<ul class="ms_nav">
					<li><a href="index.php">首页</a></li>
					<li><a href="">账号管理</a></li>
					<li><a href="">消息</a></li>
				</ul>
				<div class="search">
					<input type="text" >
					<i class="seach_icon"></i>
				</div>
			</div>
			<div class="user_info">
				<div class="user_avatar">
					<a href="">
						<img width="60px" height="60px" src="<?php echo $img['user_face']==0?$img_old:$img_url?>" alt="">
					</a>
					<span class="name"><?php echo $_SESSION['user']['username']?></span>
				</div>
				<div class="name_info">
					<a href="person.php">我的资料</a>
					<a href="">新人会员</a>
					<a href="">我的积分：<i style="color:#000;font-size:12px;font-weight:bold"><?php echo $snuser['integral']?></i></a>
					<a href="">安全等级:安全</a>
				</div>
			</div>
		</div>
		<div class="user_form">
			<div class="form_list">
					<div class="list_in"><i></i></div>
					<div class="list_out">
						<dl>
							<dt>交易管理</dt>
							<dd><a href="shoppingcar.php"><span>·</span>我的购物车</a></dd>
							<dd style="border-bottom:1px solid #ddd"><a href=""><span>·</span>我的订单</a></dd>
						</dl>
						<dl>
							<dd><a href=""><span>·</span>我的优惠劵</a></dd>
							<dd><a href=""><span>·</span>我的云钻</a></dd>
							<dd><a href=""><span>·</span>我的苏宁卡</a></dd>
							<dd><a href=""><span>·</span>我的金融</a></dd>
							<dd><a href=""><span>·</span>我的收藏</a></dd>
							<dd><a href=""><span>·</span>我的足迹</a></dd>
							<dd style="border-bottom:1px solid #ddd"><a href=""><span>·</span>为你推荐</a></dd>
						</dl>
						<dl>
							<dd><a href=""><span>·</span>退换货</a></dd>
							<dd><a href=""><span>·</span>服务咨询/投诉</a></dd>
							<dd><a href=""><span>·</span>维修/保养</a></dd>
							<dd><a href=""><span>·</span>帮客预约</a></dd>
							<dd><a href=""><span>·</span>修改订单</a></dd>
							<dd style="border-bottom:1px solid #ddd"><a href=""><span>·</span>我的足迹</a></dd>
						</dl>
						<dl>
							<dd><a href=""><span>·</span>我的评价</a></dd>
							<dd><a href=""><span>·</span>我的咨询</a></dd>
						</dl>
						<a class="list_join"><i></i></a>
					</div>

			</div>
			<div class="form_main">
				<div class="order_nav">
					<h1>我的订单:</h1>
					<h2>网上订单</h2>
					<h3>其他订单</h3>
				</div>
				<div class="order_main">
					<div class="main_nav">
						<div class="tab">
							<ul class="ul">
								<li class="<?php echo $status==''?'on':''?>"><a href="myorder.php">全部订单</a></li>
								<li class="<?php echo $status==='0'?'on':''?>"><a href="myorder.php?status=0">待付款</a></li>
								<li class="<?php echo $status==3?'on':''?>"><a href="myorder.php?status=3">待收货</a></li>
								<li class="<?php echo $status==7?'on':''?>"><a href="myorder.php?status=7">待评价</a></li>
								<li class="<?php echo $status==15?'on':''?>"><a href="myorder.php?status=15">完成订单</a></li>
							</ul>
						</div>
						<div class="main_select">
							<div class="select_box">

								<form action="myorder.php" method="get">
									<p>
									<input class="text" name="name" type="text"  value="<?php echo $name?>" placeholder="订单号">
									<input class="sub"type="submit" value="搜索订单">
									</p>
								</form>

							</div>
						</div>
					</div>
					<div id="a" class="order_table">
						<ul class="title">
							<li class="sp"><h3>订单商品</h3></li>
							<li class="je"><h3>支付总金额</h3></li>
							<li class="zt"><h3>订单状态</h3></li>
							<li class="cz"><h3>操作</h3></li>
						</ul>
						<div class="table_list">
							<div class="table_box">
								<?php if(!empty($orderlist)){?>
								<?php foreach($orderlist as $val){?>
									<table cellSpacing=0>
										<tr class="table_title">
											<td colspan="4"><i>下单时间：<em><?php echo date('Y-m-d H:i:s',$val['addtime'])?></em></i><i>订单号：<em><?php echo $val['ordernum']?></em></i></td>
										</tr>
										<tr class="table_info">
											<td class="pic">
											<?php if(!empty($val['goods'])){?>
											<?php foreach($val['goods'] as $value){?>
												<a href="detail.php?gid=<?php echo $value['goods_id']?>"><img src="<?php echo __PUBLIC__.$value['goods_img'];?>"></a>
											<?php }}?>
												<h4><?php echo count($val['goods'])==1?$value['goods_name']:""?></h4>
											</td>
											<td class="price">
												<p class="num">￥<?php echo $val['total']?></p>
												<p>在线支付</p>
												<p class="view"><a href="view.php?order_id=<?php echo $val['id']?>" >订单详情</a></p>
											</td>
											<td class="actuality">
												<p><a><?php
												switch($val['statu']){
													case '0':
													echo '待支付';
													break;
													case '1':
													echo '已付款';
													break;
													case '3':
													echo '待评价';
													break;
													case '15':
													echo '已评论';
													break;

												}

												?></a></p>
											</td>
											<td class="touch">
												<p id="<?php echo $val['statu']==0?'':'on'?>" ><a href="OrderController.php?cname=edit&stno=1&id=<?php echo $val['id']?>" class="button">马上支付</a>
												</p>
												<p id="<?php echo $val['statu']==0?'':'on'?>" class="del"><a href="action.php?a=del_order&id=<?php echo $val['id']?>">取消订单</a>
												</p>
												<p id="<?php echo $val['statu']==7?'':'on'?>" class="del"><a href="action.php?a=del_order&id=<?php echo $val['id']?>">删除订单</a>
												</p>
												<p id="<?php echo $val['statu']==1?'':'on'?>"><a>等待店家发货</a></p>
												<p id="<?php echo $val['statu']==2?'':'on'?>"><a href="OrderController.php?cname=edit&stno=3&id=<?php echo $val['id']?>">确认收货</a>
												</p>
												<p id="<?php echo $val['statu']==3?'':'on'?>"><a href="detailview.php?order_id=<?php echo $val['id']?>&statu=<?php echo $val['statu']?>">评价</a>
												</p>
												<p id="<?php echo $val['statu']==15?'':'on'?>"><a>订单已完成</a>
												</p>
											</td>
										</tr>
									</table>
									<?php }}else{?>
											<div class="nullorder">
												<p class="img"><img src="<?php echo __PUBLIC__.'/Web/Image/img/load-3.png'?>"></p>
												<p class="p1">嗷~暂时没有您想要的订单~</p>
												<p class="p2">推荐您去：
													<a href="index.php">首页</a>逛逛
												</p>
											</div>
									<?php }?>
							</div>
							<div class="pagin">
								<a href="myorder.php?page=1&status=<?php echo $status.$url?>#a" class="pagin_name">首页</a>
								<a href="myorder.php?page=<?php echo $prve.$url?>&status=<?php echo $status?>#a" class="pagin_name">上一页</a>
								<a href="myorder.php?page=<?php echo $next.$url?>&status=<?php echo $status?>#a" class="pagin_name">下一页</a>
								<a href="myorder.php?page=<?php echo $amount.$url?>&status=<?php echo $status?>#a" class="pagin_name">尾页</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="clear"></div>
			<div class="like_goods">
				<a class="left_arrow"></a>
				<ul class="mid_goods">
					<li>
						<span class="mid_goods_img">
							<a><img src="<?php echo __PUBLIC__.'/Web/Image/img/like_goods_img.jpg'?>"/></a>
						</span>
						<h4 class="mid_goods_discribie">YOCY 华为荣耀6钢化玻璃膜 钢化贴膜 荣耀6高清防刮防指纹保护膜 防爆膜 手机贴膜</h4>
						<p class="mid_goods_price">
							<em><i>￥</i>19.00</em>
						</p>
						<div class="mid_goods_join"><a>加入购物车</a></div>
					</li>
					<li>
						<span class="mid_goods_img">
							<a><img src="<?php echo __PUBLIC__.'/Web/Image/img/like_goods_img.jpg'?>"/></a>
						</span>
						<h4 class="mid_goods_discribie">YOCY 华为荣耀6钢化玻璃膜 钢化贴膜 荣耀6高清防刮防指纹保护膜 防爆膜 手机贴膜</h4>
						<p class="mid_goods_price">
							<em><i>￥</i>19.00</em>
						</p>
						<div class="mid_goods_join"><a>加入购物车</a></div>
					</li>
					<li>
						<span class="mid_goods_img">
							<a><img src="<?php echo __PUBLIC__.'/Web/Image/img/like_goods_img.jpg'?>"/></a>
						</span>
						<h4 class="mid_goods_discribie">YOCY 华为荣耀6钢化玻璃膜 钢化贴膜 荣耀6高清防刮防指纹保护膜 防爆膜 手机贴膜</h4>
						<p class="mid_goods_price">
							<em><i>￥</i>19.00</em>
						</p>
						<div class="mid_goods_join"><a>加入购物车</a></div>
					</li>
					<li>
						<span class="mid_goods_img">
							<a><img src="<?php echo __PUBLIC__.'/Web/Image/img/like_goods_img.jpg'?>"/></a>
						</span>
						<h4 class="mid_goods_discribie">YOCY 华为荣耀6钢化玻璃膜 钢化贴膜 荣耀6高清防刮防指纹保护膜 防爆膜 手机贴膜</h4>
						<p class="mid_goods_price">
							<em><i>￥</i>19.00</em>
						</p>
						<div class="mid_goods_join"><a>加入购物车</a></div>
					</li>
					<li>
						<span class="mid_goods_img">
							<a><img src="<?php echo __PUBLIC__.'/Web/Image/img/like_goods_img.jpg'?>"/></a>
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
<!--main end-->
<!--底部开始-->
<?php include '../View/regfooter.php';?>
<!--底部结束-->

</body>