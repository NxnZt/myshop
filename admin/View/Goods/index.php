<?php
  include '../../init.php';
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>主要内容区main</title>
<link href="<?php echo __PUBLIC__.'/Admin/Css/css.css';?>" type="text/css" rel="stylesheet" />
<link href="<?php echo __PUBLIC__.'/Admin/Css/main.css';?>" type="text/css" rel="stylesheet" />
<link rel="shortcut icon" href="<?php echo __PUBLIC__.'/Admin/Image/main/favicon.ico'?>" />
<style>
body{
    overflow-x:hidden;
    background:#f2f0f5;
    padding:15px 0px 10px 5px;
}
#searchmain{
    font-size:12px;
}
#search{
    font-size:12px;
    background:#548fc9;
    margin:10px 10px 0 0;
    display:inline;
    width:100%;
    color:#FFF;
    float:left
}
#search form span{
    height:40px;
    line-height:40px;
    padding:0 0px 0 10px;
    float:left;
}
#search form input.text-word{
    height:24px;
    line-height:24px;
    width:180px;
    margin:8px 0 6px 0;
    padding:0 0px 0 10px;
    float:left;
    border:1px solid #FFF;
}
#search form input.text-but{
    height:24px;
    line-height:24px;
    width:55px;
    background:url(<?php echo __PUBLIC__.'/Admin/Image/main/list_input.jpg'?>) no-repeat left top;
    border:none; cursor:pointer;
    font-family:"Microsoft YaHei","Tahoma","Arial",'宋体';
    color:#666; float:left; margin:8px 0 0 6px;
    display:inline;
}
#search a.add{
    background:url(<?php echo __PUBLIC__.'/Admin/Image/main/add.jpg'?>) no-repeat -3px 7px #548fc9;
    padding:0 10px 0 26px; height:40px;
    line-height:40px; font-size:14px;
    font-weight:bold;
    color:#FFF;
    float:right
}
#search a:hover .add{
    text-decoration:underline;
    color:#d2e9ff;
}
#main-tab{
    border:1px solid #eaeaea;
    background:#FFF; font-size:12px;
}
#main-tab th{
    font-size:12px;
    background:url(<?php echo __PUBLIC__.'/Admin/Image/main/list_bg.jpg'?>) repeat-x;
    height:32px;
    line-height:32px;
}
#main-tab td{
    font-size:12px;
    line-height:40px;
}
#main-tab td a{
    font-size:12px;
    color:#548fc9;}
#main-tab td a:hover {
    color:#565656;
    text-decoration:underline;
}
.bordertop{
    border-top:1px solid #ebebeb;
}
.borderright{
    border-right:1px solid #ebebeb
}
.borderbottom{
    border-bottom:1px solid #ebebeb;
}
.borderleft{
    border-left:1px solid #ebebeb;
}
.gray{
    color:#dbdbdb;
}
td.fenye{
    padding:10px 0 0 0;
    text-align:right;
}
.bggray{
    background:#f9f9f9;
}
</style>
</head>
<body>
<!--main_top-->
<table width="99%" border="0" cellspacing="0" cellpadding="0" id="searchmain">
  <tr>
    <td width="99%" align="left" valign="top">您的位置：商品管理</td>
  </tr>
  <tr>
    <td align="left" valign="top">
        <table width="100%" border="0" cellspacing="0" cellpadding="0" id="search">
  		<tr>
   		 <td width="90%" align="left" valign="middle">
	         <form method="get" action="GoodsController.php">
	            <span>商品名：</span>
                <input type="hidden" name="cname" value="index">
                <input type="text" name="search" value="<?php echo $_GET['search']?>" class="text-word">
	            <input name="" type="submit" value="查询" class="text-but">
	         </form>
         </td>
         <td width="10%" align="center" valign="middle" style="text-align:right; width:150px;">
            <a href="GoodsController.php?cname=add" target="mainFrame" onFocus="this.blur()" class="add">新增商品</a>
         </td>
  		</tr>
	    </table>
    </td>
  </tr>
  <tr>
    <td align="left" valign="top">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" id="main-tab">
      <tr>
        <th align="center" valign="middle" class="borderright">商品名</th>
        <th align="center" valign="middle" class="borderright">商品图片</th>
        <th align="center" valign="middle" class="borderright">商品价格</th>
        <th align="center" valign="middle" class="borderright">商品库存</th>
        <th align="center" valign="middle" class="borderright">是否新品</th>
        <th align="center" valign="middle" class="borderright">是否精品</th>
        <th align="center" valign="middle" class="borderright">是否热销</th>
        <th align="center" valign="middle" class="borderright">添加时间</th>
        <th align="center" valign="middle">操作</th>
      </tr>
      <?php if($data):?>
      <?php foreach($data as $k=>$v):?>
      <tr class="bggray" onMouseOut="this.style.backgroundColor='#f9f9f9'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="center" valign="middle" class="borderright borderbottom"><?php echo $v['goods_name']?></td>
        <td align="center" valign="middle" class="borderright borderbottom"><img width="50" height="50" src="<?php echo __PUBLIC__.$v['goods_img']?>" alt=""></td>
        <td align="center" valign="middle" class="borderright borderbottom"><?php echo $v['price']?></td>
        <td align="center" valign="middle" class="borderright borderbottom"><?php echo $v['store']?></td>
        <td align="center" valign="middle" class="borderright borderbottom">
        <?php if($v['is_new']==0):?>
            <a href="GoodsController.php?cname=edit&id=<?php echo $v['id']?>&is_new=1">是</a>
        <?php else:?>
            <a href="GoodsController.php?cname=edit&id=<?php echo $v['id']?>&is_new=0">否</a>
        <?php endif;?>
        </td>
        <td align="center" valign="middle" class="borderright borderbottom">
        <?php if($v['is_best']==0):?>
            <a href="GoodsController.php?cname=edit&id=<?php echo $v['id']?>&is_best=1">是</a>
        <?php else:?>
            <a href="GoodsController.php?cname=edit&id=<?php echo $v['id']?>&is_best=0">否</a>
        <?php endif;?>
        </td>
        <td align="center" valign="middle" class="borderright borderbottom">
        <?php if($v['is_hot']==0):?>
            <a href="GoodsController.php?cname=edit&id=<?php echo $v['id']?>&is_hot=1">是</a>
        <?php else:?>
            <a href="GoodsController.php?cname=edit&id=<?php echo $v['id']?>&is_hot=0">否</a>
        <?php endif;?>
        </td>
        <td align="center" valign="middle" class="borderright borderbottom"><?php echo date('Y-m-d',$v['addtime'])?></td>
        <td align="center" valign="middle" class="borderbottom">
            <a href="GoodsController.php?cname=addimg&id=<?php echo $v['id']?>" target="mainFrame" onFocus="this.blur()" class="add">图片管理</a><span class="gray">&nbsp;|&nbsp;</span>
            <a href="GoodsController.php?cname=edit&id=<?php echo $v['id']?>" target="mainFrame" onFocus="this.blur()" class="add">编辑</a><span class="gray">&nbsp;|&nbsp;</span>
            <a href="GoodsController.php?cname=del&id=<?php echo $v['id']?>" target="mainFrame" onFocus="this.blur()" class="add">删除</a></td>
      </tr>
    <?php endforeach;?>
    <?php endif;?>
    </table></td>
    </tr>
  <tr>
  <td align="left" valign="top" class="fenye"><?php echo $page['html']?></tr>
</table>
</body>
</html>
