<html>
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="<?php echo __PUBLIC__.'/web/css/detail.css';?>"/>
	<title>商品详情</title>
</head>
<body>
<!--头部开始-->
<?php include '../View/grouptop.php';?>
<!--头部结束-->
<!--主体开始-->
<div id="main">
	<!--主体导航开始-->
		<div class="nav">
			<div class="w main_nav">
				<div class="main_nav_left">
					<a>全部商品分类</a>
					<i class="icon arrow_img">&#xe62e;</i>
				</div>
				<ul>
					<li><a href="">首页</a></li>
					<li><a href="">电器城</a></li>
					<li><a href="">红孩儿母婴</a></li>
					<li><a href="">苏宁超市</a></li>
					<li><a href="">服装城</a></li>
					<li><a href="">大聚惠</a></li>
					<li><a href="">全球闪购</a></li>
					<li><a href="">苏宁金融</a></li>
					<div class="clear"></div>
				</ul>
				<div class="clear"></div>
			</div>
		</div>
	<!--主体导航结束-->
	<!--breadnav开始-->
		<div class="breadnav">
			<div class="w text_breadnav">
				<ul>
					<li><a href="">首页</a><a>></a></li>
					<li><a href="grouplist.php?id=<? echo $row['gcate_id']?>">手机/数码/配件</a><a>></a></li>
					<li><a href="">手机</a><a>></a></li>
					<li><a href=""><?php echo $row['gname'];?></a></li>
					<div class="clear"></div>
				</ul>
			</div>
		</div>
	<!--breadnav结束-->
	<!--商品详情开始-->
	<div class="goods_details">
		<div class="w phone_details">
			<div class="details_img">
				<div class="big_img">
					<a><img id="big_img" src="<?php echo __PUBLIC__.$goods[0]['goods_img'];?>"></a>
				</div>
				<div class="small_img">
					<a class="left_arrow"></a>
					<ul class="mid_goods">
					<?php if(!empty($imglist)){?>
					<?php foreach ($imglist as $val){?>
						<?php
							$img_url=URL.'uploads/';
							$img_url.=substr($val['name'],0,4).'/';
							$img_url.=substr($val['name'],4,2).'/';
							$img_url.=substr($val['name'],6,2).'/';
							$img_url.='60_'.$val['name'];
						?>
						<li><a><img onmouseover="change(this)" src="<?php echo $img_url?>"></a></li>
					<?php }}?>
					</ul>
					<a class="right_arrow"></a>
				</div>
				<div class="number">
						<a class="goodsnum"><i>商品编号:</i><em>132661550</em></a>
						<a class="show"><em>分享到</em></a>
						<a class="share_icon1"></a>
						<a class="share_icon2"></a>
						<a class="share_icon3"></a>
				</div>
			</div>
			<div class="details_info">
				<p class="name"><?php echo $goods[0]['goods_name']?></p>
				<p class="phone_status"><?php echo $goods[0]['goods_desc']?></p>
				<div class="buy_detals">
					<div class="detals_main">
						<div class="price">
							<dl class="price-sn">
								<dt>浏览次数:</dt>
								<dd><i><?php echo $row['gcount'];?>123</i><em>次</em></dd>
							</dl>
							<dl class="price-promo">
								<dt>易 购 价</dt>
								<dd><i>￥</i><em><?php echo $goods[0]['price']?></em></dd>
							</dl>
							<dl class="price-start">
								<dd>
									<span class="start"><em></em></span>
									<span>4.7分</span>
									<a>共有14826条评价</a>
								</dd>
							</dl>
							<div class="erwei">
								<img src="<?php echo __PUBLIC__.'/web/Image/goodsimg/erwei.png'?>">
								<p>客户端扫扫更便捷</p>
							</div>
						</div>
						<div class="cuxiao">
							<p>正在促销</p>
							<ul>
								<li><a class="zuan">云钻</a></li>
								<li><a class="fanhui">购买返回149云钻</a></li>
								<li><a class="huang">看看能换啥</a></li>
							</ul>
						</div>
						<div class="deliver">
							<dl>
								<dt><span>送 至</span></dt>
								<dd>
									<div class="address">
										<span>上海 闸北区</span>
									</div>
									<div class="status">
										<strong>现货</strong>
										<span>23:59前完成下单，预计明天送达</span>
									</div>
								</dd>
							</dl>
						</div>
						<dl class="o2o">
							<dt>门店服务</dt>
							<dd>
								<a class="icon"></a>
								<a>免费贴膜</a>
								<span>·门店专业贴膜师将免费为您的设备贴膜</span>
							</dd>
						</dl>
						<dl class="serve">
							<dt>服 务</dt>
							<dd>
								<a>由"苏宁"销售和发货，并享受售后服务</a>
								<a class="online"><img src="<?php echo __PUBLIC__.'/web/Image/goodsimg/online.gif'?>"></a>
							</dd>
						</dl>
						<div class="proinfo_ser">
							<a class="rxf"><i></i>任性付</a>
							<a class="rxf fq"><i></i>分期付款</a>
							<a class="rxf myf"><i></i>免运费</a>
							<a class="rxf zt"><i></i>自提</a>
							<a class="rxf th"><i></i>7天内无条件退货</a>
						</div>
						<dl class="color">
							<dt>颜 色</dt>
							<dd>
								<a class="online"><img src="<?php echo __PUBLIC__.'/Web/Image/goodsimg/color1.jpg'?>"></a>
								<a class="online"><img src="<?php echo __PUBLIC__.'/Web/Image/goodsimg/color2.jpg'?>"></a>
								<a class="online"><img src="<?php echo __PUBLIC__.'/Web/Image/goodsimg/color3.jpg'?>"></a>
								<a class="online"><img src="<?php echo __PUBLIC__.'/Web/Image/goodsimg/color4.jpg'?>"></a>
							</dd>
						</dl>
						<dl class="way">
							<dt>购买方式</dt>
							<dd>
								<a class="way1">裸机</a>
								<a class="way2">互联赠费版</a>
							</dd>
						</dl>
						<form action="cartController.php?store=<?php echo $goods[0]['store']?>&gid=<?php echo $goods[0]['id'];?>" method="post">
							<dl class="num">
								<dt>购买数量</dt>
								<dd>
									<a id="minus" onclick="minus()" class="minus"></a>
									<a class="count">
										<input id="qty" class="<?php echo$goods[0]['store'];?>" type="text" name="qty" value="1">
									</a>
									<a id="plus" onclick="plus()" class="plus"></a>
								</dd>
							</dl>
							<dl class="yanbao">
								<dt>库 存</dt>
								<dd>
									<a class="yan"><?php echo $goods[0]['store']?>件</a>
								</dd>
							</dl>
							<div class="line"></div>
							<?php if($goods[0]['store']!=0){?>
							<div class="btns">
								<input type="submit" name="submit" value="btns_buy" style="text-indent:-9999px;" class="btns_buy">
								<input type="submit" name="submit"value="btns_addcar" style="text-indent:-9999px;" class="btns_addcar">
								<input type="submit" value="" class="btns_collect">
							</div>
							<?php }else{?>
								<p  class="dowm">商品已下架</p>
							<?php }?>
						</form>
					</div>
					<div class="seller">
						<div class="sell_self">
							<div class="flag">
								<img src="<?php echo __PUBLIC__.'/web/image/goodsimg/si-flag-zy.png'?>">
							</div>
							<h1>
								<span>商家:</span>
								<span><a>苏宁自营</a><i class="ie"></i></span>
							</h1>
							<div class="compare">
								<dl class="assess_list">
									<dt><i>商家满意度</i><span>与同行业相比</span></dt>
									<dd>
										<span><i>商品评分：</i><em>4.85</em>分</span>
										<span><i class="icon"></i><b>16.33%</b></span>
									</dd>
									<dd>
										<span><i>服务态度：</i><em>4.85</em>分</span>
										<span><i class="icon"></i><b>7.45%</b></span>
									</dd>
									<dd>
										<span><i>物流速度：</i><em>4.84</em>分</span>
										<span><i class="icon"></i><b>15.64%</b></span>
									</dd>
								</dl>
								<div class="buttom">
									<a class="icon">进入店铺</a>
								</div>
							</div>
						</div>
						<div class="more_seller">
							<h3>
								<i>更多商家</i>
								<span><a>19家</a></span>
							</h3>
							<ul class="cslbox">
								<li>
									<p class="title">苏宁自营</p>
									<p class="price"><b>￥</b><i>2999.0</i><em>免运费</em></p>
								</li>
								<li>
									<p class="title">华科手机专营店</p>
									<p class="price"><b>￥</b><i>2999.0</i><em>免运费</em></p>
								</li>
								<li>
									<p class="title">乐酷商城专营店</p>
									<p class="price"><b>￥</b><i>2999.0</i><em>免运费</em></p>
								</li>
								<li>
									<p class="title">锐奇网信数码专营店</p>
									<p class="price"><b>￥</b><i>2999.0</i><em>免运费</em></p>
								</li>
								<li>
									<p class="title">云帆数码专营店</p>
									<p class="price"><b>￥</b><i>2999.0</i><em>免运费</em></p>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--商品详情结束-->
	<!--商品评论开始-->
	<div class="comment">
		<div class="w c_content">
			<div class="com_left">
				<div class="left_bottom_all">
					<div class="phone_title">
						<a href="">云台热卖</a>
					</div>
					<ul class="phone_info">
						<li>
							<i class="rec_img"></i>
							<img src="<?php echo __PUBLIC__.'/Web/Image/img/phone1.jpg'?>"/>
							<div class="price">
								<a href="">【超值套装】vivo X5Max+ 32GB版香槟金移动4G手机vivo</a>
								<b>￥5000.00</b>
							</div>
						</li>
						<li>
							<i class="rec_img"></i>
							<img src="<?php echo __PUBLIC__.'/Web/Image/img/phone1.jpg'?>"/>
							<div class="price">
								<a href="">【超值套装】vivo X5Max+ 32GB版香槟金移动4G手机vivo</a>
								<b>￥5000.00</b>
							</div>
						</li>
						<li>
							<i class="rec_img"></i>
							<img src="<?php echo __PUBLIC__.'/Web/Image/img/phone1.jpg'?>"/>
							<div class="price">
								<a href="">【超值套装】vivo X5Max+ 32GB版香槟金移动4G手机vivo</a>
								<b>￥5000.00</b>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="com_right">
				<p class="title">商品评价</p>
				<div class="clear"></div>
				<div class="com_text">
				<?php if(!empty($commentlist)){?>
				<?php foreach($commentlist as $com){?>
					<div class="user">
					<?php
						$img_url=URL.'uploads/';
						$img_url.=substr($com['suser_face'],0,4).'/';
						$img_url.=substr($com['suser_face'],4,2).'/';
						$img_url.=substr($com['suser_face'],6,2).'/';
						$img_url.='120_'.$com['suser_face'];

					?>
						<div class="user_img">
							<img src="<?php echo $com['suser_face']?$img_url:URL.'/img/portrait.jpg'?>" alt="">
						</div>
						<div class="user_content">
							<p class="username">用户名：<?php echo $com['suser_name']?></p>
							<p class="time"><?php echo date('Y-m-d H:i:s',$com['ctime'])?></p>
							<div class="clear"></div>
							<p class="content"><?php echo $com['ctext']?></p>
						</div>
					</div>
					<?php }}?>
					<p class="page">
						<!--a href="">上一页</a>
						<a href="">下一页</a-->
					</p>
				</div>
			</div>
		</div>
	</div>
	<!--商品评论结束-->
</div>

<!--主体结束-->
<!--底部开始-->
<?php include '../View/groupfooter.php';?>
<!--底部结束-->
</body>
<script>
    function change(obj){
        document.getElementById('big_img').src = obj.src.replace('60_','');
    }

    var input = document.getElementById('qty');
    function plus(){
        var maxQyt = parseInt(input.className);
        if(input.value<0){
        	input.value=1;
        }
        input.value = parseInt(input.value)+1;

        if(input.value>maxQyt){
            input.value=maxQyt;
        }
    }

    function minus(){
        input.value = parseInt(input.value)-1;

        if(input.value<1){
            input.value=1;
        }
    }

    // 当用户用键盘输入购买数量的时候，要检查写入数量是否大小库存或小于1
    function check(obj){
        var maxQyt = parseInt(input.className);

        if(obj.value>maxQyt){
            obj.value=maxQyt;
        }

        if(obj.value<1){
            obj.value=1;
        }


    }
    function getId(id){
        return document.getElementById(id);
    }
    var oldValue = '';
    getId('qty').onkeyup = function(){
        if(!!this.value && this.value.trim().match(/^(\d+(\.\d*)?)?$/)){    //非法字符回退
            oldValue = this.value.trim();
        }else {
            this.value = oldValue;
        }
    }

    getId('qty').onblur = function(){
        var match = oldValue.match(/^(\d+(\.\d+)?)?$/);
        this.value = !!match ? match[0] : '1';    //不是数字则清空
    }
</script>
</html>