<?php
  include '../init.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>左侧导航menu</title>
<link href="<?php echo __PUBLIC__.'/Admin/Css/css.css';?>" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="<?php echo __PUBLIC__.'/Admin/Js/sdmenu.js'?>"></script>
<script type="text/javascript">
	// <![CDATA[
	var myMenu;
	window.onload = function() {
		myMenu = new SDMenu("my_menu");
		myMenu.init();
	};
	// ]]>
</script>
<style type=text/css>
html{ SCROLLBAR-FACE-COLOR: #538ec6; SCROLLBAR-HIGHLIGHT-COLOR: #dce5f0; SCROLLBAR-SHADOW-COLOR: #2c6daa; SCROLLBAR-3DLIGHT-COLOR: #dce5f0; SCROLLBAR-ARROW-COLOR: #2c6daa;  SCROLLBAR-TRACK-COLOR: #dce5f0;  SCROLLBAR-DARKSHADOW-COLOR: #dce5f0; overflow-x:hidden;}
body{overflow-x:hidden; background:url(<?php echo __PUBLIC__.'/Admin/Image/main/leftbg.jpg';?>) left top repeat-y #f2f0f5; width:194px;}
</style>
</head>
<body onselectstart="return false;" ondragstart="return false;" oncontextmenu="return false;">
<div id="left-top">
	<div><img src="<?php echo __PUBLIC__.'/Admin/Image/main/member.gif';?>" width="44" height="44" /></div>
    <span>用户：<br>角色：超级管理员</span>
</div>
    <div style="float: left" id="my_menu" class="sdmenu">
      <div class="collapsed">
        <span>用户管理</span>
        <a href="UserController.php?cname=index" target="mainFrame" onFocus="this.blur()">用户列表</a>
        <a href="UserController.php?cname=add" target="mainFrame" onFocus="this.blur()">添加用户</a>
      </div>
      <div class="collapsed">
        <span>前台用户管理</span>
        <a href="./snuser/index.php" target="mainFrame" onFocus="this.blur()">苏宁用户列表</a>
      </div>
      <div>
        <span>分类管理</span>
        <a href="CategaryController.php?cname=index" target="mainFrame" onFocus="this.blur()">分类列表</a>
        <a href="CategaryController.php?cname=add" target="mainFrame" onFocus="this.blur()">添加分类列表</a>
      </div>
      <div class="collapsed">
        <span>评论管理</span>
        <a href="./comment/index.php" target="mainFrame" onFocus="this.blur()">评论列表</a>
      </div>
      <div>
        <span>商品管理</span>
        <a href="GoodsController.php?cname=index" target="mainFrame" onFocus="this.blur()">商品列表</a>
        <a href="GoodsController.php?cname=add" target="mainFrame" onFocus="this.blur()">添加商品</a>
      </div>
      <div>
        <span>订单管理</span>
        <a href="./order/index.php" target="mainFrame" onFocus="this.blur()">订单列表</a>
      </div>
      <div>
        <span>地址管理</span>
        <a href="./address/index.php" target="mainFrame" onFocus="this.blur()">地址列表</a>
      </div>
      <div>
        <span>统计管理</span>
        <a href="./census/index.php" target="mainFrame" onFocus="this.blur()">统计列表</a>
      </div>
    </div>
</body>
</html>
