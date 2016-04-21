<?php
	require '../../init.php';
	require BASE_PATH.'function/mysql.php';
	$cname = $_GET['cname'];
	//判断进行的是那个操作
	switch ($cname) {
		case 'login':
			if ($_POST) {
				$username = $_POST['username'];
				$info=check($username,'require','请输入用户名');
				if($info!==true){
					die($info);
				}
				$pass = $_POST['pass'];
				$info=check($pass,'require','请输入密码');
				if($info!==true){
					die($info);
				}
				$where = "username='{$username}' and pass='".md5($pass)."'";
				$user=select('user','*',array('where'=>$where));
				if ($user) {
					unset($user[0]['pass']);
					$_SESSION['user'] = $user[0];
					header('location:'.$url);
				} else {
					die('登录失败');
				}
			}
		break;
		case 'logout':
			unset($_SESSION['user']);
			header('location:'.$url);
		break;
		default:
		require '../View/login.php';
	}
