<?php
	require '../../init.php';
	require BASE_PATH.'function/mysql.php';
	require BASE_PATH.'function/page.php';
	$var=$_GET['cname'];
	switch ($var) {
		case 'index':

			//生成查询的条件
			$search=$_GET['search'];
			if(!empty($search)){
				$where="username like '%{$search}%'";
			}else{
				$where='';
			}
			//查询数据条数
			$count=countRow('user',$where);

			//生成分页
			$page=page($count,1);

			//查询数据
			$data=select('user','*',array('limit'=>$page['startLimit'].','.$page['endLimit'],'where'=>$where));
			include '../View/Web/index.php';

			break;
		case 'edit':
			$id=$_GET['id'];
			$data=select('user','*',array('where'=>'id='.$id));
			$data=$data[0];
			if($_POST){
				$_POST['password']=md5($_POST['password']);

				if(save('user',$_POST)!==false){
					header('location:WebUserController.php?cname=index');
				}else{
					die('修改失败');
				}
				exit;
			}
			include '../View/Web/edit.php';
			break;

		case 'del':
			$id=$_GET['id'];
			if(del('user',$id)>0){
				header('location:WebUserController.php?cname=index');
			}else{
				die('删除失败');
			};
			break;
		default:
			# code...
			break;
	}
 ?>