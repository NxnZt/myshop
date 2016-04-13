<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="<?php echo __PUBLIC__.'/web/css/index.css'?>"/>
	<script type="text/javascript" src="<?php echo __PUBLIC__.'/web/Js/jquery-1.7.2.min.js'?>"></script>
	<script type="text/javascript" src="<?php echo __PUBLIC__.'/web/Js/jquery.SuperSlide.2.1.1.js'?>"></script>
	<link href="<?php echo __PUBLIC__.'/web/css/style.css'?>" rel="stylesheet" type="text/css">
	<title>苏宁首页</title>
</head>
<body>
	<div id="header">
		<!--toolbar star-->
		<div class="header_up">
			<div class="toolbar w">
				<div class="toolbar_left">
					<span>网站导航<i class="new"></i>
					</span>
					<em class="icon dowm">&#xe62e;</em>
				</div>
				<div class="toolbar_right">
					<ul>
						<li>
						<?php echo empty($_SESSION['user']['user_name'])?'<a href="./login.php" class="lg_re">登录</a><a href="web/Controller/registerController.php" class="lg_re">注册</a>':(empty($_SESSION['user']['nick_name'])?'<a href="person.php" class="lg_re">'.$_SESSION['user']['user_name'].'</a>':'<a href="person.php" class="lg_re">'.$_SESSION['user']['nick_name'].'</a>').'<a href="./action.php?a=outlogin" class="lg_re">退出</a>'
						?>
						</li>
						<li><a class="lg_re" href="">我的订单</a><em class="icon dowm">&#xe62e;</em></li>
						<li><a>我的易购</a><em class="icon dowm">&#xe62e;</em></li>
						<li><em class="icon car">&#xe623;</em><a class="shopcar" href="shoppingcar.php">购物车</a></li>
						<li><em class="icon phone">&#xe604;</em><a>手机苏宁</a><em class="icon dowm">&#xe62e;</em></li>
						<li><a>易付宝</a></li>
						<li><a>政企采购</a></li>
						<li><a>服务中心</a><em class="icon dowm">&#xe62e;</em></li>
					</ul>
				</div>

			</div>
		</div>
		<!--toolbar end-->
		<div class="header_logo">
			<div class="logo_content w">
				<div class="content_left">
					<a href="" class="logo"></a>
					<a class="chuxiao"><img src="<?php echo __PUBLIC__.'/web/Image/img/chuxiao.gif'?>"></a>
				</div>
				<div class="content_middle">
					<div class="middle">
						<form class="search_box">
							<div class="box_left">
								<i class="icon search">&#xe619;</i>
								<input class="text" type="text" />
							</div>
							<input class="sub" type="submit" value="搜 索"/>
						</form>
						<ul class="search_keywors">
							<li><a href="">PPTV手机</a></li>
							<li><a href="">月饼</a></li>
							<li><a href="">iPad mini4</a></li>
							<li><a href="">沐浴露</a></li>
							<li><a href=""净水器</a></li>
							<li><a href="">洗衣机</a></li>
							<li><a href="">牙膏</a></li>
							<li><a href="">洗衣液</a></li>
							<li><a href="">单反</a></li>
							<li><a href="">南头制造</a></li>
						</ul>
					</div>
				</div>
				<div class="content_right">
					<img src="<?php echo __PUBLIC__.'/web/Image/img/erwei.jpg'?>"/>
				</div>
			</div>
		</div>
		<div class="header_nav">
				<div class="nav_bar w">
					<div class="category">
						<a href="" class="cate_title">
							<i class="icon">&#xe621;</i>
							<span>全部商品分类</span>
						</a>
						<div class="cate_list">
							<ul>
								<li><em class="icon">&#xe611;</em><a href="">母婴</a><a href="">玩具</a><a href="">童装童鞋</a></li>
								<li><em class="icon">&#xe604;</em><a href="">手机</a><a href="">数码</a><a href="">苏宁互联</a></li>
								<li><em class="icon">&#xe606;</em><a href="">电脑</a><a href="">设备</a><a href="">电脑DIY</a></li>
								<li><em class="icon">&#xe607;</em><a href="">电视</a><a href="">冰箱</a><a href="">洗衣机</a></li>
								<li><em class="icon">&#xe61b;</em><a href="">厨卫电器</a><a href="">小家电</a><a href="">个护</a></li>
								<li><em class="icon">&#xe610;</em><a href="">美妆个护</a><a href="">面膜</a><a href="">洗护</a></li>
								<li><em class="icon">&#xe60e;</em><a href="">运动户外</a><a href="">汽车用品</a></li>
								<li><em class="icon">&#xe613;</em><a href="">男装 女装 内衣鞋靴</a></li>
								<li><em class="icon">&#xe617;</em><a href="">箱包皮具</a><a href="">钟表饰品</a></li>
								<li><em class="icon">&#xe614;</em><a href="">食品粮油 酒水冲调</a></li>
								<li><em class="icon">&#xe625;</em><a href="">居家家纺</a><a href="">家装建材</a></li>
								<li><em class="icon">&#xe61a;</em><a href="">图书</a><a href="">免费书城</a><a href="">童书</a></li>
								<li><em class="icon">&#xe648;</em><a href="">金融</a><a href="">理财</a><a href="">众筹</a><a href="">团购</a></li>
							</ul>
						</div>
					</div>
					<ul class="cate_nav">
						<?php foreach($catedata as $v):?>
						<li><a href=""><?php echo $v['catename']?></a></li>
						<?php endforeach;?>
					</ul>
					<div class="cate_nav_text"><a>【新人福利】10元红包免费领</a></div>
				</div>
		</div>
	</div>
	<div id="main">
		 <?php include'./web/banner.php'; ?>
			<div class="show_case">
				<div class="title"><i></i><em>公告</em></div>
				<div class="notice">
					<ul class="list">
						<li><a><i>【公告】</i><em>支持学员直通鸟巢</em></a></li>
						<li><a><i>【公告】</i><em>法海躲在螃蟹壳里</em></a></li>
						<li><a><i>【公告】</i><em>谨防假冒客服诈骗</em></a></li>
						<li><a><i>【公告】</i><em>森林音乐节攻略泄密</em></a></li>
						<li><a><i>【公告】</i><em>森林音乐节攻略泄密</em></a></li>
					</ul>
				</div>
				<div class="title"><em>生活助手</em></div>
				<div class="life">
					<ul class="list">
						<li><a><i class="icon">&#xe641;</i><em>充值</em></a></li>
						<li><a><i class="icon">&#xe641;</i><em>火车票</em></a></li>
						<li><a><i class="icon">&#xe641;</i><em>机票</em></a></li>
						<li><a><i class="icon">&#xe641;</i><em>水电煤</em></a></li>
						<li><a><i class="icon">&#xe641;</i><em>理财</em></a></li>
						<li><a><i class="icon">&#xe641;</i><em>免费书城</em></a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="especial">
			<div class="especial_item w">
				<div class="title">
					<h3>特色馆</h3>
					<h4>CHARACTERISTIC</h4>
				</div>
				<div class="item1">
					<img src="<?php echo __PUBLIC__.'/web/Image/img/item_1.jpg'?>"/>
				</div>
				<ul class="item2">
					<li class="img0"></li>
					<li class="img1"><a><img src="<?php echo __PUBLIC__.'/web/Image/img/item_2.jpg'?>"></a></li>
					<li class="img2"><a><img src="<?php echo __PUBLIC__.'/web/Image/img/item_3.jpg'?>"/></a></li>
				</ul>
				<div class="item3">
					<span class="line1"></span>
					<span class="line2"></span>
					<ul>
						<li class="img1"><a><img src="<?php echo __PUBLIC__.'/web/Image/img/item_4.jpg'?>"/></a></li>
						<li class="img2"><a><img src="<?php echo __PUBLIC__.'/web/Image/img/item_5.jpg'?>"/></a></li>
						<li class="img3"><a><img src="<?php echo __PUBLIC__.'/web/Image/img/item_6.jpg'?>"/></a></li>
						<li class="img4"><a><img src="<?php echo __PUBLIC__.'/web/Image/img/item_7.jpg'?>"/></a></li>
					</ul>
				</div>
				<div class="item4">
					<ul>
						<li><a><img src="<?php echo __PUBLIC__.'/web/Image/img/item_8.jpg'?>"></a></li>
						<li><a><img src="<?php echo __PUBLIC__.'/web/Image/img/item_9.jpg'?>"></a></li>
						<li><a><img src="<?php echo __PUBLIC__.'/web/Image/img/item_10.jpg'?>"></a></li>
						<li><a><img src="<?php echo __PUBLIC__.'/web/Image/img/item_11.jpg'?>"></a></li>

					</ul>
				</div>
			</div>
		</div>
		<div class="finance">
			<div class="finance_itrem w">
				<div class="title">
					<h3>苏宁金融</h3>
					<h4>SUNING FINANCE</h4>
				</div>
				<div class="fiance_main">
					<div class="col1">
						<a><img src="<?php echo __PUBLIC__.'/web/Image/img/finance_1.jpg'?>"></a>
					</div>
					<div class="col2">
						<a><img src="<?php echo __PUBLIC__.'/web/Image/img/finance_2.jpg'?>"></a>
					</div>
					<ul class="col3">
						<li class="col3_left">
							<a><img src="<?php echo __PUBLIC__.'/web/Image/img/finance_3.jpg'?>"></a>
						</li>
						<li class="col3_right">
							<a><img src="<?php echo __PUBLIC__.'/web/Image/img/finance_4.jpg'?>"></a>
						</li>
					</ul>
					<ul class="col4">
						<li class="col4_top">
							<a><img src="<?php echo __PUBLIC__.'/web/Image/img/finance_5.jpg'?>"></a>
						</li>
						<li class="col4_doum">
							<a><img src="<?php echo __PUBLIC__.'/web/Image/img/finance_6.jpg'?>"></a>
						</li>
					</ul>

				</div>
			</div>

		</div>
		<div class="floor1 w">
			<div class="floor1_header">
				<div class="title">
					<h3>1F</h3>
					<h3>手机通讯</h3>
				</div>
				<div class="tab">
					<ul>
						<li><a>热门活动</a></li>
						<li class="like"><a>猜你喜欢</a></li>
					</ul>
				</div>
				<div class="link">
					<ul>

					</ul>
				</div>
			</div>
			<div class="floor1_main">
				<div class="main_left">
					<a>
						<img src="<?php echo __PUBLIC__.'/web/Image/img/floor2_1.jpg'?>"/>
					</a>
					<div class="entrances">
						<a>
							<i class="icon"></i>
							<em>数说手机</em>
						</a>
						<a>
							<i class="icon"></i>
							<em>手机配件</em>
						</a>
						<a>
							<i class="icon"></i>
							<em>智能手环</em>
						</a>
						<a>
							<i class="icon"></i>
							<em>营业厅</em>
						</a>
					</div>
					<ul class="brands">
						<li class="item1"><a><img src="<?php echo __PUBLIC__.'/web/Image/img/meizu.jpg'?>"></a></li>
						<li class="item2"><a><img src="<?php echo __PUBLIC__.'/web/Image/img/honor.jpg'?>"></a></li>
						<li class="item3"><a><img src="<?php echo __PUBLIC__.'/web/Image/img/sumsung.jpg'?>"></a></li>
						<li class="item4"><a><img src="<?php echo __PUBLIC__.'/web/Image/img/xiaomi.jpg'?>"></a></li>
						<li class="item5"><a><img src="<?php echo __PUBLIC__.'/web/Image/img/oppo.jpg'?>"></a></li>
						<li class="item6"><a><img src="<?php echo __PUBLIC__.'/web/Image/img/vivo.jpg'?>"></a></li>
					</ul>
				</div>
				<div class="main_right">
					<ul class="top_ul">
						<?php if(!empty($goodsdata)):?>
						<?php foreach($goodsdata as $v):?>
						<li class="item1">
							<p class="face"><a href="web/Controller/detailController.php?gid=<?php echo $v['id']?>"><img src="<?php echo __PUBLIC__.$v['goods_img']?>"></a></p>
							<p class="name"><a><?php echo $v['name']?></a></p>
							<p class="price">
								<i>￥</i>
								<span><b><?php echo $v['price']?></b></span>
							</p>
						</li>
						<?php endforeach;?>
						<?php endif;?>
					</ul>
					<div class="ulline"></div>
				</div>
			</div>
		</div>
		<div class="guanggao w">
			<img src="<?php echo __PUBLIC__.'/web/Image/img/guanggao1.jpg'?>">
		</div>
		<div class="community w">
			<div class="com_title">
				<h3>苏宁社区</h3>
			</div>
			<div class="com_main">
				<div class="main_left">
					<div class="left_title">
						<a><span>进入社区</span><i>></i></a>
					</div>
					<ul class="left_main">
						<li><a><i class="icon"></i>全部板块</a></li>
						<li><a><i class="icon"></i>官方专区</a></li>
						<li><a><i class="icon"></i>母婴美妆</a></li>
						<li><a><i class="icon"></i>享易购</a></li>
						<li><a><i class="icon"></i>酷玩专区</a></li>
						<li><a><i class="icon"></i>版务大厅</a></li>
					</ul>
				</div>
				<div class="main_right">
					<div class="hots">
						<div class="left_hots">
							<a><img src="<?php echo __PUBLIC__.'/web/Image/img/community1.jpg'?>"></a>
						</div>
						<div class="right_hots">
							<h3>最热度</h3>
							<ul>
								<li><span>【beta】</span><a>柠檬俱乐部真的啥都有</a></li>
								<li><span>【beta】</span><a>柠檬俱乐部真的啥都有</a></li>
								<li><span>【beta】</span><a>柠檬俱乐部真的啥都有</a></li>
								<li><span>【beta】</span><a>柠檬俱乐部真的啥都有</a></li>
								<li><span>【beta】</span><a>柠檬俱乐部真的啥都有</a></li>
								<li><span>【beta】</span><a>柠檬俱乐部真的啥都有</a></li>
								<li><span>【beta】</span><a>柠檬俱乐部真的啥都有</a></li>
							</ul>
						</div>
					</div>
					<div class="show_order">
						<h4>晒单</h4>
						<ul>
							<li>
								<div class="face">
									<a><img src="<?php echo __PUBLIC__.'/web/Image/img/face1.jpg'?>"></a>
								</div>
								<div class="detal">
									<dt>
										<img src="<?php echo __PUBLIC__.'/web/Image/img/detal1.jpg'?>">
										<span>|***********</span>
									</dt>
									<dd><a>北方到了寒冷干燥的气候了。因此，需要一份保湿的护肤品。正好在苏宁试用看见这款套装，根据调查灰常灰常的适合、给力。</a></dd>
								</div>
							</li>
							<li>
								<div class="face">
									<a><img src="<?php echo __PUBLIC__.'/web/Image/img/face2.jpg'?>"></a>
								</div>
								<div class="detal">
									<dt>
										<img src="<?php echo __PUBLIC__.'/web/Image/img/detal2.jpg'?>">
										<span>孟***********</span>
									</dt>
									<dd><a>北方到了寒冷干燥的气候了。因此，需要一份保湿的护肤品。正好在苏宁试用看见这款套装，根据调查灰常灰常的适合、给力。</a></dd>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--底部开始-->
	<div id="footer">
			<div class="w footer_top">
				<div class="foot_top_title">
					<dl>
						<dt class="dt1"></dt>
						<dd>
							<p class="p1">正品保障<p>
							<p class="p2">正品保障，提供发票<p>
						</dd>
					</dl>
					<dl>
						<dt class="dt2"></dt>
						<dd>
							<p class="p1">急速物流<p>
							<p class="p2">急速物流，急速送到<p>
						</dd>
					</dl>
					<dl>
						<dt class="dt3"></dt>
						<dd>
							<p class="p1">无忧售后<p>
							<p class="p2">7天无理由退货<p>
						</dd>
					</dl>
					<dl>
						<dt class="dt4"></dt>
						<dd>
							<p class="p1">特色服务<p>
							<p class="p2">私人定制家电套餐<p>
						</dd>
					</dl>
					<dl>
						<dt class="dt5"></dt>
						<dd>
							<p class="p1">帮助中心<p>
							<p class="p2">你的购物指南<p>
						</dd>
					</dl>
				</div>
				<div class="foot_top_content">
					<dl>
						<dt>购物指南</dt>
						<dd>导购演示</dd>
						<dd>免费注册</dd>
						<dd>会员等级</dd>
						<dd>常见问题</dd>
						<dd>品牌大全</dd>
					</dl>
					<dl>
						<dt>支付方式</dt>
						<dd>易付宝支付</dd>
						<dd>网银支付</dd>
						<dd>快捷支付</dd>
						<dd>分期付款</dd>
						<dd>货到付款</dd>
						<dd>任性付支付</dd>
					</dl>
					<dl>
						<dt>物流配送</dt>
						<dd>免运费政策</dd>
						<dd>配送服务承诺</dd>
						<dd>签收验货</dd>
						<dd>物流查询</dd>
					</dl>
					<dl>
						<dt>售后服务</dt>
						<dd>退换货政策</dd>
						<dd>退换货流程</dd>
						<dd>购买延保服务</dd>
						<dd>退款说明</dd>
						<dd>退换货申请</dd>
						<dd>维修/保养</dd>
					</dl>
					<dl>
						<dt>商家服务</dt>
						<dd>商家入驻</dd>
						<dd>培训中心</dd>
						<dd>信息公告</dd>
						<dd>广告服务</dd>
						<dd>商家帮助</dd>
						<dd>服务市场</dd>
					</dl>
					<dl>
						<dt>易购客户端</dt>
						<dd class="dd1">
							<img src="<?php echo __PUBLIC__.'/web/Image/img/ewm.png'?>"/>
						</dd>
					</dl>
				</div>
			</div>
			<div class="footer_middle">
				<div class=" middle_content">
					<dl style="border-right:1px dotted #999">
						<dt class="dt1"></dt>
						<dd>
							<p class="p1">政企采购<p>
							<p class="p2">为企业用户量身定做的采购平台，优选苏宁易购全站商品，为企业采购提供专业化的一站式采购解决方案。
							<p>
						</dd>
					</dl>
					<dl style="border-right:1px dotted #999">
						<dt class="dt2"></dt>
						<dd>
							<p class="p1">苏宁众包<p>
							<p class="p2">以苏宁全渠道包销为主要特点，整合全社会众包资源，扶持创新企业，推广创新产品。<p>
						</dd>
					</dl>
					<dl>
						<dt class="dt3"></dt>
						<dd>
							<p class="p1">身边苏宁<p>
							<p class="p2">全国300个城市1600家门店3000个服务点为您提供最贴心的服务！<p>
							<p class="p3"><p>
						</dd>
					</dl>
				</div>
			</div>
			<div class="footer_bottom">
				<p><a href="">苏宁云商</a>| <a href="">苏宁互联</a>| <a href="">苏宁金融</a>| <a href="">易付宝</a>| <a href="">苏宁满座网</a>| <a href="">PPTV</a>| <a href="">红孩子</a>| <a href="">缤购</a>| <a href="">乐购仕</a>| <a href="">苏宁物流</a>| <a href="">苏宁美国</a>| <a href="">苏宁香港</a></p>
				<p><a href="">关于苏宁易购</a>| <a href="">联系我们</a>| <a href="">诚聘英才</a>| <a href="">供应商入驻</a>| <a href="">苏宁联盟</a>| <a href="">苏宁招标</a>| <a href="">友情链接</a>| <a href="">法律申明</a>| <a href="">用户体验提升计划</a>| <a href="">股东会员认证</a></p>
				<span>Copyright© 2002-2015 ，江苏苏宁易购电子商务有限公司版权所有 苏ICP备10207551号 苏B1-20130131 苏B2-20130376 出版物经营许可证新出发苏批字第A-243号</soan>
				<div class="foot_img"><a><img src="<?php echo __PUBLIC__.'/web/Image/img/chengxin.png'?>"/></a><a><img src="<?php echo __PUBLIC__.'/web/Image/img/unicom.png'?>"/></a><a><img src="<?php echo __PUBLIC__.'/web/Image/img/dianxin.jpg'?>"/></a><a><img src="<?php echo __PUBLIC__.'/web/Image/img/dianzi.png'?>"/></a></div>
			</div>
		</div>
		<!--底部结束-->
	<!--底部结束-->
</body>
</html>