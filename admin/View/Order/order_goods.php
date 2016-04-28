<?php
    include '../init.php';
    //error_reporting(E_ALL^E_NOTICE);
    $id=$_GET['id'];  
    $sql="SELECT id,goods_name,goods_img,price,qty FROM ".PRE."order_goods WHERE order_id='{$id}'";
    //echo $sql;
    $result=mysql_query($sql);
   //var_dump($result);
    if($result && mysql_num_rows($result)>0){
        $orderlist=array();
        while($row=mysql_fetch_assoc($result)){
            $orderlist[]=$row;
        }
    }
    //var_dump($orderlist);
    
?>  
    
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>主要内容区main</title>
<link href="css/css.css" type="text/css" rel="stylesheet" />
<link href="css/main.css" type="text/css" rel="stylesheet" />
<link rel="shortcut icon" href="images/main/favicon.ico" />
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
    background:url(images/main/list_input.jpg) no-repeat left top; 
    border:none; cursor:pointer; 
    font-family:"Microsoft YaHei","Tahoma","Arial",'宋体'; 
    color:#666; float:left; margin:8px 0 0 6px; 
    display:inline;
}
#search a.add{ 
    background:url(images/main/add.jpg) no-repeat -3px 7px #548fc9; 
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
    background:url(images/main/list_bg.jpg) repeat-x; 
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
		<td width="99%" align="left" valign="top">你的位置：订单详情</td>
	</tr>
    <tr>
        <td align="left" valign="top">
            <table width="100%" border="0" cellspacing="0" cellpadding="0" id="search">
                <tr>
                    <td width="90%" align="left" valign="middle">
                        <form method="post" action="action.php?a=addimg" enctype="multipart/form-data">
                            <span></span>                            
                        </form>
                    </td>
                    <td width="10%" align="center" valign="middle" style="text-align:right; width:150px;">
                    </td>
                </tr>
            </table>
        </td>
    </tr>
	<tr>
		<td align="left" valign="top">
			<table width="100%" border="0" cellspacing="0" cellpadding="0" id="main-tab">
				<tr>
					<th align="center" valign="middle" class="borderright">编号</th>
                    <th align="center" valign="middle" class="borderright">商品名称</th>
                    <th align="center" valign="middle" class="borderright">商品图片</th>
					<th align="center" valign="middle" class="borderright">商品单价</th>
					<th align="center" valign="middle">数量</th>
				</tr>
				<?php if(!empty($orderlist)){?>
				<?php foreach($orderlist as $val){?>
				<tr class="bggray" onMouseOut="this.style.backgroundColor='#f9f9f9'" onMouseOver="this.style.backgroundColor='#edf5ff'">
					<td align="center" valign="middle" class="borderright borderbottom"><?php echo $val['id']?></td>
					<td align="center" valign="middle" class="borderright borderbottom"></a><?php echo $val['goods_name']?></td>
                    <td align="center" valign="middle" class="borderright borderbottom">
						<?php
							//拼接路径
							$img_path=URL."uploads/";
							$img_path.=substr($val['goods_img'],0,4).'/';
							$img_path.=substr($val['goods_img'],4,2).'/';
							$img_path.=substr($val['goods_img'],6,2).'/';
							$img_path.='60_'.$val['goods_img']; 
						?>
						<img src="<?php echo $img_path; ?>"/>
					</td>
                    <td align="center" valign="middle" class="borderright borderbottom"><?php echo $val['price']?>
                    </td>
					<td align="center" valign="middle" class="borderright borderbottom"><?php echo $val['qty']?>
					</td>
				</tr>
				<?php }}else{?>
				<tr>
					<td>数据查询失败</td>
				</tr>
				<?php } ?>
			</table>
		</td>
    </tr>
</table>
</body>
</html>
