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
			$count=countRow('adminuser',$where);

			//生成分页
			$page=page($count,1);

			//查询数据
			$data=select('adminuser','*',array('limit'=>$page['startLimit'].','.$page['endLimit'],'where'=>$where));
			include '../View/User/index.php';

			break;

		case 'add':
			if($_POST){

				//验证函数
				// check($value,$type,$rule[,$length])
				$info=check($_POST['username'],'require','用户名不能为空');
				// //验证密码
				$infopwd=identical($_POST['password'],$_POST['repassword']);

				if($info!==true){
					die($info);
				}
				if($infopwd!==true){
					die($infopwd);
				}
				$_POST['password']=md5($_POST['password']);
				//表名adminuser
				if(add('adminuser',$_POST)>0){
					header('location:UserController.php?cname=index');
				}else{
					die('添加失败');
				};

				exit;
			}
			include '../View/User/add.php';
			break;

		case 'edit':
			$id=$_GET['id'];
			$data=select('adminuser','*',array('where'=>'id='.$id));
			$data=$data[0];
			//修改状态
			// if($_SESSION['user']['rank']==0){
				if(isset($_GET['status'])){
					if(save('adminuser',$_GET)!==false){
						header('location:UserController.php?cname=index');
					}else{
						die('修改失败');
					}
					exit;
				}
			// }else{
			// 	echo "<script>alert('没有权限修改')</script>";
			// 	exit;
			// }
			if($_POST){
				//验证函数
				// check($value,$type,$rule[,$length])
				$info=check($_POST['username'],'require','用户名不能为空');

				if($info!==true){
					die($info);
				}

				$_POST['password']=md5($_POST['password']);

				if(save('adminuser',$_POST)!==false){
					header('location:UserController.php?cname=index');
				}else{
					die('修改失败');
				}
				exit;
			}
			include '../View/User/edit.php';
			break;

		case 'del':
			$id=$_GET['id'];
			if(del('adminuser',$id)>0){
				header('location:UserController.php?cname=index');
			}else{
				die('删除失败');
			};
			break;
		default:
			# code...
			break;
	}
 ?>