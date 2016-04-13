<?php include '../../init.php';?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>主要内容区main</title>
<link href="<?php echo __PUBLIC__.'/Admin/Css/css.css';?>" type="text/css" rel="stylesheet" />
<link href="<?php echo __PUBLIC__.'/Admin/Css/main.css';?>" type="text/css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="<?php echo __PUBLIC__.'/Admin/Css/default.css'?>" />
<link rel="shortcut icon" href="<?php echo __PUBLIC__.'/Admin/Image/main/favicon.ico'?>" />
<script charset="utf-8" src="<?php echo __PUBLIC__.'/Admin/Js/kindeditor-min.js'?>"></script>
<script charset="utf-8" src="<?php echo __PUBLIC__.'/Admin/Js/zh_CN.js'?>"></script>
<style>
body{overflow-x:hidden; background:#f2f0f5; padding:15px 0px 10px 5px;}
#searchmain{ font-size:12px;}
#search{ font-size:12px; background:#548fc9; margin:10px 10px 0 0; display:inline; width:100%; color:#FFF}
#search form span{height:40px; line-height:40px; padding:0 0px 0 10px; float:left;}
#search form input.text-word{height:24px; line-height:24px; width:180px; margin:8px 0 6px 0; padding:0 0px 0 10px; float:left; border:1px solid #FFF;}
#search form input.text-but{height:24px; line-height:24px; width:55px; background:url(<?php echo __PUBLIC__.'/Admin/Image/main/list_input.jpg'?>) no-repeat left top; border:none; cursor:pointer; font-family:"Microsoft YaHei","Tahoma","Arial",'宋体'; color:#666; float:left; margin:8px 0 0 6px; display:inline;}
#search a.add{ background:url(<?php echo __PUBLIC__.'/Admin/Image/main/add.jpg'?>) no-repeat 0px 6px; padding:0 10px 0 26px; height:40px; line-height:40px; font-size:14px; font-weight:bold; color:#FFF}
#search a:hover .add{ text-decoration:underline; color:#d2e9ff;}
#main-tab{ border:1px solid #eaeaea; background:#FFF; font-size:12px;}
#main-tab th{ font-size:12px; background:url(<?php echo __PUBLIC__.'/Admin/Image/main/list_bg.jpg'?>) repeat-x; height:32px; line-height:32px;}
#main-tab td{ font-size:12px; line-height:40px;}
#main-tab td a{ font-size:12px; color:#548fc9;}
#main-tab td a:hover {color:#565656; text-decoration:underline;}
.bordertop{ border-top:1px solid #ebebeb}
.borderright{ border-right:1px solid #ebebeb}
.borderbottom{ border-bottom:1px solid #ebebeb}
.borderleft{ border-left:1px solid #ebebeb}
.gray{ color:#dbdbdb;}
td.fenye{ padding:10px 0 0 0; text-align:right;}
.bggray{ background:#f9f9f9; font-size:14px; font-weight:bold; padding:10px 10px 10px 0; width:120px;}
.main-for{ padding:10px;}
.main-for input.text-word{ width:310px; height:36px; line-height:36px; border:#ebebeb 1px solid; background:#FFF; font-family:"Microsoft YaHei","Tahoma","Arial",'宋体'; padding:0 10px;}
.main-for select{ width:310px; height:36px; line-height:36px; border:#ebebeb 1px solid; background:#FFF; font-family:"Microsoft YaHei","Tahoma","Arial",'宋体'; color:#666;}
.main-for input.text-but{ width:100px; height:40px; line-height:30px; border: 1px solid #cdcdcd; background:#e6e6e6; font-family:"Microsoft YaHei","Tahoma","Arial",'宋体'; color:#969696; float:left; margin:0 10px 0 0; display:inline; cursor:pointer; font-size:14px; font-weight:bold;}
#addinfo a{ font-size:14px; font-weight:bold; background:url(<?php echo __PUBLIC__.'/Admin/Image/main/addinfoblack.jpg'?>) no-repeat 0 1px; padding:0px 0 0px 20px; line-height:45px;}
#addinfo a:hover { background:url(<?php echo __PUBLIC__.'/Admin/Image/main/addinfoblue.jpg'?>) no-repeat 0 1px;}
textarea {
        display: block;
      }
.ke-toolbar-icon-url {
  background-image: url(<?php echo __PUBLIC__.'/Admin/Image/main/default.png'?>);
}
</style>
<script>
      var editor;
      KindEditor.ready(function(K) {
        editor = K.create('textarea[name="goods_desc"]', {
          resizeType : 1,
          allowPreviewEmoticons : false,
          allowImageUpload : false,
          items : [
            'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
            'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
            'insertunorderedlist', '|', 'emoticons', 'image', 'link']
        });
      });
</script>
</head>
<body>
<!--main_top-->
<table width="99%" border="0" cellspacing="0" cellpadding="0" id="searchmain">
  <tr>
    <td width="99%" align="left" valign="top">您的位置：商品管理&nbsp;&nbsp;&nbsp;&nbsp;添加商品</td>
  </tr>
  <tr>
    <td align="left" valign="top" id="addinfo">
      <a href="GoodsController.php?cname=add" target="mainFrame" onFocus="this.blur()" class="add">新增商品</a>
    </td>
  </tr>
  <tr>
    <td align="left" valign="top">
      <form method="post" action="GoodsController.php?cname=add" enctype="multipart/form-data">
        <table width="100%" border="0" cellspacing="0" cellpadding="0" id="main-tab">
          <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
          <td align="right" valign="middle" class="borderright borderbottom bggray">商品名称：</td>
          <td align="left" valign="middle" class="borderright borderbottom main-for">
          <input type="text" name="goods_name" value="" class="text-word">
          </td>
          </tr>
          <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
            <td align="right" valign="middle" class="borderright borderbottom bggray">商品价格：</td>
            <td align="left" valign="middle" class="borderright borderbottom main-for">
              <input type="text" name="price" value="" class="text-word">
            </td>
          </tr>
          <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
            <td align="right" valign="middle" class="borderright borderbottom bggray">商品分类：</td>
            <td align="left" valign="middle" class="borderright borderbottom main-for">
              <select name="cate_id" id="">
              <?php foreach($data as $v):?>
                <option value="<?php echo $v['id']?>"><?php echo str_repeat('----',$v['space']).$v['catename']?></option>
              <?php endforeach;?>
              </select>
            </td>
          </tr>
          <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
            <td align="right" valign="middle" class="borderright borderbottom bggray">商品库存：</td>
            <td align="left" valign="middle" class="borderright borderbottom main-for">
              <input type="text" name="store" value="" class="text-word">
            </td>
          </tr>
          <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
            <td align="right" valign="middle" class="borderright borderbottom bggray">商品图片：</td>
            <td align="left" valign="middle" class="borderright borderbottom main-for">
              <input type="file" name="goods_img" value="" class="text-word" style="height:23px">
            </td>
          </tr>
          <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
            <td align="right" valign="middle" class="borderright borderbottom bggray">是否热销</td>
            <td align="left" valign="middle" class="borderright borderbottom main-for">
            <label><input type="radio" name="is_hot" value="0" checked>是</label>
            <label><input type="radio" name="is_hot" value="1">否</label>
            </td>
          </tr>
          <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
            <td align="right" valign="middle" class="borderright borderbottom bggray">是否新品</td>
            <td align="left" valign="middle" class="borderright borderbottom main-for">
            <label><input type="radio" name="is_new" value="0" checked>是</label>
            <label><input type="radio" name="is_new" value="1">否</label>
            </td>
          </tr>
          <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
            <td align="right" valign="middle" class="borderright borderbottom bggray">是否精品</td>
            <td align="left" valign="middle" class="borderright borderbottom main-for">
            <label><input type="radio" name="is_best" value="0" checked>是</label>
            <label><input type="radio" name="is_best" value="1">否</label>
            </td>
          </tr>
          <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
            <td align="right" valign="middle" class="borderright borderbottom bggray">商品描述：</td>
            <td align="left" valign="middle" class="borderright borderbottom main-for">
              <textarea name="goods_desc" style="width:700px;height:200px;visibility:hidden;">KindEditor</textarea>
            </td>
          </tr>
          <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
            <td align="right" valign="middle" class="borderright borderbottom bggray">&nbsp;</td>
            <td align="left" valign="middle" class="borderright borderbottom main-for">
              <input name="" type="submit" value="提交" class="text-but">
              <input name="" type="reset" value="重置" class="text-but">
            </td>
          </tr>
        </table>
      </form>
    </td>
  </tr>
</table>
</body>
</html>
