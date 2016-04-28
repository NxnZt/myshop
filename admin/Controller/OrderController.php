<?php
	require '../../init.php';
	require BASE_PATH.'function/mysql.php';
	require BASE_PATH.'function/page.php';
	$val = $_GET['cname'];
	switch ($val) {
		case 'index':
			//生成查询的条件
			$search=$_GET['ordernum'];
			if(!empty($search)){
				$where="ordernum like '%{$search}%'";
			}else{
				$where='';
			}
			//查询数据条数
			$count=countRow('order',$where);
			//生成分页
			$page=page($count,1);
			//查询数据
			$orderdata=select('order','*',array('limit'=>$page['startLimit'].','.$page['endLimit'],'where'=>$where));
			require '../View/Order/index.php';
		break;
		case 'edit':
			$stno = $_GET['stno'];
			$data['id'] = $_GET['id'];
			$data['statu']=$stno;
			if (save('order',$data)!==false) {
				header('location:OrderController.php');
			}
		break;
	}

