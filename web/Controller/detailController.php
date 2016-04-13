<?php
	require '../../init.php';
	require BASE_PATH.'function/mysql.php';
	$goods=select('goods','*',array('where'=>'id='.$_GET['gid']));
	require '../View/detail.php';