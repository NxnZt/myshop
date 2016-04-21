<?php
	require '../../init.php';
	require BASE_PATH.'function/mysql.php';
	require '../Model/CarModel.php';
	// var_dump($_POST);
	// var_dump($_GET);
	$submit = $_POST['submit'];
	switch ($submit) {
		//添加购物车
		case 'btns_addcar':
		$gid = $_GET['gid'];
		$where = 'id='.$gid;
		$store=$_GET['store'];
		//购买的数量
		$qty=$_POST['qty'];
		if ($qty<0) {
			$qty = 1;
		}
		if ($qty >= $store) {
			$qty = $store;
		}
		//将商品的信息存在session中
		if (!empty($_SESSION['cart'][$gid])) {
			if ($_SESSION['cart'][$gid]['qty'] < $store) {
				$_SESSION['cart'][$gid]['qty']+=$qty;
			} else {
				$_SESSION['cart'][$gid]['qty'] = $store;
			}
		} else {
			$data = select('goods','*',array('where'=>$where));
			$data[0]['qty'] = $_POST['qty'];
			$_SESSION['cart'][$gid]=$data[0];
		}
		$total = total($_SESSION['cart']);
		$_SESSION['total'] = $total;
		require '../View/car.php';
		break;
		//直接购买
		case 'btns_buy':
		break;
	}

	$cname = $_GET['cname'];
	switch ($cname) {
		case 'plus':
			$gid=$_GET['gid'];
			$_SESSION['cart'][$gid]['qty']+=1;
			if($_SESSION['cart'][$gid]['qty']>=$_SESSION['cart'][$gid]['store']){
				$_SESSION['cart'][$gid]['qty']=$_SESSION['cart'][$gid]['store'];
			}
			$total = total($_SESSION['cart']);
			$_SESSION['total'] = $total;
			require '../View/car.php';
		break;
		case 'minus':
			$gid=$_GET['gid'];
			$_SESSION['cart'][$gid]['qty']-=1;
			if($_SESSION['cart'][$gid]['qty']<1){
				$_SESSION['cart'][$gid]['qty']=1;
			}
			$total = total($_SESSION['cart']);
			$_SESSION['total'] = $total;
			require '../View/car.php';
			break;
		case 'del':
			$gid=$_GET['gid'];
			$total = total($_SESSION['cart']);
			$_SESSION['total'] = $total;
			unset($_SESSION['cart'][$gid]);
			require '../View/car.php';
			break;
		case 'delete':
			unset($_SESSION['cart']);
			require '../View/car.php';
	}
