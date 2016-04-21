<?php
	require '../../init.php';
	require BASE_PATH.'function/mysql.php';
	$uid = $_SESSION['user']['id'];
	$address=select('address','*',array('where'=>'uid='.$uid));
	$cname = $_GET['cname'];
	switch ($cname) {
		case 'order':
		$where = 'id='.$_POST['add_id'];
		$address=select('address','*',array('where'=>$where));
		$data['uid'] =(int) $_SESSION['user']['id'];
		$data['ordernum'] = time().rand(1,999);
		$data['linkname'] = $address[0]['receiver'];
		$data['address'] = $address[0]['address'];
		$data['phone'] = $address[0]['phone'];
		$data['addtime'] = time();
		$data['total'] = $_SESSION['total'];

		//添加订单
		if (($orderid = add('order',$data))>0) {
			foreach ($_SESSION['cart'] as $key=>$val) {
				$goodsdata['order_id'] = $orderid;
				$goodsdata['goods_id'] = $val['id'];
				$goodsdata['goods_name'] = $val['goods_name'];
				$goodsdata['goods_price'] = $val['price'];
				$goodsdata['goods_num'] = $val['qty'];
				$goodsdata['goods_img'] = $val['goods_img'];
				//订单详情
				if (add('detail',$goodsdata)>0) {
					echo '添加成功';
				} else {
					echo '添加失败';
				}
			}
		} else {
			echo '添加失败';
		}
		exit;
	}
	require '../View/orders.php';