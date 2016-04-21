<?php
	require '../../init.php';
	require BASE_PATH.'function/mysql.php';
	$cname=$_GET['cname'];
	if ($_POST) {
				$receiver = $_POST['receiver'];
				$info=check($receiver,'require','请输入收货人');
				if($info!==true){
					die($info);
				}
				$phone = $_POST['phone'];
				$info=check($phone,'require','请输入手机号');
				if($info!==true){
					die($info);
				}
				$address = $_POST['address'];
				$info=check($address,'require','请输入地址');
				if($info!==true){
					die($info);
				}
				$data['uid'] = $_SESSION['user']['id'];
				$data['receiver'] = $_POST['receiver'];
				$data['phone'] = $_POST['phone'];
				$data['address'] = $_POST['address'];
				if (add('address',$data) > 0) {
					header('location:OrderController.php');
				} else {
					die('注册失败');
				}
			}
	switch ($cname) {
		case 'is_set':
			$data['is_add'] = 0;
			if(save('address',$data)!==false){
					$data['is_add'] = 1;
					$data['id'] = $_GET['id'];
					if (save('address',$data) !== false) {
						header('location:OrderController.php');
					} else {
						die('修改失败');
					}
			} else {
					die('修改失败');
				}
			break;
		case 'is_del':
			if(del('address',$_GET['id'])){
					header('location:OrderController.php');
				}else{
					die('删除失败');
				};
			break;

		default:
			# code...
			break;
	}
