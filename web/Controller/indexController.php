<?php
	require './init.php';
	require BASE_PATH.'function/mysql.php';
	$catedata=select('categary','*',array('where'=>'pid=0'));
	$goodsdata=select('goods','*',array('where'=>'is_hot=0'));
	include './web/View/index.php';
 ?>