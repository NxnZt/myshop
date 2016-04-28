<?php
	require '../../init.php';
	require BASE_PATH.'function/mysql.php';
	if ($_POST) {
		$name = $_POST['username'];
		$pass = $_POST['pass'];
		$where = "username='{$name}' and password='{$pass}'";
		echo $where;
		if ($user= select('adminuser','*',array('where'=>$where))) {
			unset($user[0]['password']);
			$_SESSION['admin'] = $user[0];
			header('location:'.$url.'/admin');
		}

	}
	$cname = $_GET['cname'];
	switch ($cname) {
		case 'outlogin':
			unset($_SESSION['admin']);
			header('location:'.$url.'/admin');
		break;
	}
	require '../View/login.php';
