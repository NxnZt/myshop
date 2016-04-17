<?php
	require '../../init.php';
	require BASE_PATH.'function/mysql.php';
	require '../Model/UserModel.php';
	if ($_POST) {
		session_start();
		//判断用户名
		$username = $_POST['username'];
		$info=check($username,'reg','用户名格式不正确');
		if($info!==true){
			die($info);
		}
		//判断密码
		$pass = $_POST['pass'];
		$repass = $_POST['repass'];
		$info=check($pass,'reg','密码格式不正确');
		if($info!==true){
			die($info);
		}
		//判断密码是否一致
		$info = identical($pass, $repass);
		if($info!==true){
			die($info);
		}
		$data['username'] = $username;
		$data['pass'] = md5($pass);
		$data['addtime'] = time();
		//判断验证码
		if ($_POST['yzm'] == $_SESSION['vcode']) {
			//判断用户是否注册
			$where = "username='{$username}'";
			if (!select('user','*',array('where'=>$where))) {
				if (add('user',$data) > 0) {
					header('location:loginController.php');
				} else {
					die('注册失败');
				}
			} else {
				die('用户名已存在');
			}
		} else {
			die('验证码错误');
		}
		header('location:loginController.php');
	}
	require '../View/register.php';
