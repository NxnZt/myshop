<?php
	require '../init.php';
	require '../Model/mysql.php';
	require '../Model/page.php';
	require '../Model/CateModel.php';
	$var=$_GET['cname'];
	//根据不同的名加载不同的视图
	switch($var){
		case 'index':
		//生成查询的条件
		// $search=$_GET['search'];
		// if(!empty($search)){
		// 	$where="categary like '%{$search}%'";
		// }else{
		// 	$where='';
		// }
		//查询数据条数
		// $count=countRow('categary',$where);

		//生成分页
		// $page=page($count,1);

		//查询数据
		$data=select('categary','*');
		$data=getTree($data);
		include '../View/Cate/index.php';
		break;

		case 'add':
		$data=select('categary','*');
		$data=getTree($data);
		if($_POST){
				//验证函数
				// check($value,$type,$rule[,$length])
				$info=check($_POST['catename'],'require','用户名不能为空');

				if($info!==true){
					die($info);
				}

				//表名adminuser
				if(add('categary',$_POST)>0){
					header('location:CategaryController.php?cname=index');
				}else{
					die('添加失败');
				};

				exit;
			}
		include '../View/Cate/add.php';
		break;

		case 'edit':
		$id=$_GET['id'];
		$data=select('categary','*',array('where'=>'id='.$id));
		$catedata=select('categary','*');
		$catedata=getTree($catedata);
		if($_POST){
			$id=$_POST['id'];
			$data=select('categary','*',array('where'=>'pid='.$id));
			if($data){
				die('有子类不能修改');
			}else{
			//验证函数
			// check($value,$type,$rule[,$length])
				$info=check($_POST['catename'],'require','用户名不能为空');

				if($info!==true){
					die($info);
				}

				if(save('categary',$_POST)!==false){
					header('location:CategaryController.php?cname=index');
				}else{
					die('修改失败');
				}
			}
			exit;
		}
		include '../View/Cate/edit.php';
		break;

		case 'del':
		$id=$_GET['id'];
		$data=select('categary','*',array('where'=>'pid='.$id));
		if($data){
			die('有子类不能删除');
		}else{
			if(del('categary',$id)>0){
				header('location:CategaryController.php?cname=index');
			}else{
				die('删除失败');
			};
		}
		break;
	}
 ?>