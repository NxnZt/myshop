<?php
	require '../../init.php';
	require BASE_PATH.'function/mysql.php';
	require BASE_PATH.'function/page.php';
	$cname = $_GET['cname'];
	switch ($cname) {
		case 'index':
		//生成查询的条件
			$search=$_GET['search'];
			if(!empty($search)){
				$where="receiver like '%{$search}%'";
			}else{
				$where='';
			}
			//查询数据条数
			$count=countRow('address',$where);

			//生成分页
			$page=page($count,1);

			//查询数据
			$AddressData=select('address','*',array('limit'=>$page['startLimit'].','.$page['endLimit'],'where'=>$where));
			require '../View/Address/index.php';
			break;
		case 'del':
			$id=$_GET['id'];
			if(del('address',$id)>0){
				header('location:AddressController.php?cname=index');
			}else{
				die('删除失败');
			};
			break;
	}