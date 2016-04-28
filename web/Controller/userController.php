<?php
	require '../../init.php';
	require BASE_PATH.'function/mysql.php';
	$where = 'uid='.$_SESSION['user']['id'];
	$orderlist = select('order','*',array('where'=>$where));
	$detail = select('detail','*');
	foreach ($detail as $key=>$val) {
		foreach ($orderlist as $k=>$v) {
			if ($val['order_id'] == $v['id']) {
				$orderlist[$k]['goods'][] = $val;
			}
		}
	}
	// var_dump($orderlist);
	require '../View/myorder.php';
