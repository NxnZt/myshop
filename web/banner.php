<div class="banner-box">
	<div class="bd">
        <ul>
            <li style="background:#000000;">
                <div class="m-width">
                <a href="javascript:void(0);"><img src="<?php echo __PUBLIC__.'/web/Image/images/banner1.jpg"'?> /></a>
                </div>
            </li>
            <li style="background:#0683F1">
                <div class="m-width">
                <a href="javascript:void(0);"><img src="<?php echo __PUBLIC__.'/web/Image/images/banner2.jpg"'?> /></a>
                </div>
            </li>
            <li style="background:#B460FF;">
                <div class="m-width">
                <a href="javascript:void(0);"><img src="<?php echo __PUBLIC__.'/web/Image/images/banner3.jpg"'?> /></a>
                </div>
            </li>
            <li style="background:#D23900">
                <div class="m-width">
                <a href="javascript:void(0);"><img src="<?php echo __PUBLIC__.'/web/Image/images/banner4.jpg"'?> /></a>
                </div>
            </li>

        </ul>
    </div>
    <div class="banner-btn">
        <a class="prev" href="javascript:void(0);"></a>
        <a class="next" href="javascript:void(0);"></a>
        <div class="hd">
            <ul>
            </ul>
        </div>
    </div>
</div>

<script type="text/javascript">
$(document).ready(function(){

	$(".prev,.next").hover(function(){
		$(this).stop(true,false).fadeTo("show",0.9);
	},function(){
		$(this).stop(true,false).fadeTo("show",0.4);
	});

	$(".banner-box").slide({
		titCell:".hd ul",//导航元素对象(鼠标触元素对象)
		mainCell:".bd ul",//切换元素的包裹层对象
		effect:"fold",//动画效果[v1.0] fade：渐显； || top：上滚动；|| left：左滚动；|| topLoop：上循环滚动；|| leftLoop：左循环滚动；|| topMarquee：上无缝循环滚动；|| leftMarquee：左无缝循环滚动；[v2.0] fold：淡入淡出[v2.1] slideDown：下拉效果
		interTime:2500,
		delayTime:500,
		autoPlay:true,
		autoPage:true,
		trigger:"click"
	});

});
</script>
