<?php
	require '../init.php';
	require '../Model/mysql.php';
	require '../Model/page.php';
	require '../Model/CateModel.php';
	require '../Model/GoodsModel.php';
	$v=$_GET['cname'];
	switch($v){
		case 'index':
			//生成查询的条件
			$search=$_GET['search'];
			if(!empty($search)){
				$where="goods_name like '%{$search}%'";
			}else{
				$where='';
			}
			//查询数据条数
			$count=countRow('goods',$where);

			//生成分页
			$page=page($count,1);

			//查询数据
			$data=select('goods','*',array('limit'=>$page['startLimit'].','.$page['endLimit'],'where'=>$where));
			include '../View/Goods/index.php';
		break;

		//添加操作
		case 'add':
			if($_POST){
				//验证函数
				// check($value,$type,$rule[,$length])
				$info=check($_POST['goods_name'],'require','商品名不能为空');
				if($info!==true){
					die($info);
				}

				$info=check($_POST['price'],'require','价格格式不正确');
				if($info!==true){
					die($info);
				}

				$info=check($_POST['store'],'number','库存必须为数字');
				if($info!==true){
					die($info);
				}

				//图片的上传
				if($_FILES){
					$goods_img=upload('goods_img');
					if($goods_img){
						$_POST['goods_img']=$goods_img;
						$_POST['addtime']=time();
						//表名adminuser
						if(add('goods',$_POST)>0){
							header('location:GoodsController.php?cname=index');
						}else{
							die('添加失败');
						};
					}
				}
			}
			$data=select('categary','*');
			$data=getTree($data);
			include '../View/Goods/add.php';
		break;

		//修改
		case 'edit':
			//查询分类信息
			$data=select('categary','*');
			$data=getTree($data);

			//根据id查询数据
			$id=$_GET['id'];
			$gData=select('goods','*',array('where'=>'id='.$id));
			$gData=$gData[0];
			//修改状态
			// if($_SESSION['user']['rank']==0){
			if(isset($_GET['is_hot'])){
				if(save('goods',$_GET)!==false){
					header('location:GoodsController.php?cname=index');
				}else{
					die('修改失败');
				}
				exit;
			}
			if(isset($_GET['is_new'])){
				if(save('goods',$_GET)!==false){
					header('location:GoodsController.php?cname=index');
				}else{
					die('修改失败');
				}
				exit;
			}
			if(isset($_GET['is_best'])){
				if(save('goods',$_GET)!==false){
					header('location:GoodsController.php?cname=index');
				}else{
					die('修改失败');
				}
				exit;
			}
			if($_POST){
				//修改图片
				if(!empty($_FILES['goods_img']['name'])){
					//查询数据
					$data=select('goods','goods_img',array('where'=>'id='.$_POST['id']));
					$path=PATH.'public/'.ltrim($data[0]['goods_img'],'/');
					if(file_exists($path)){
						if(@unlink($path)===true){
							$goods_img=upload('goods_img');
							$_POST['goods_img']=$goods_img;
						}else{
							die('图片修改失败');
						}
					}
				}
				//修改数据
				if(save('goods',$_POST)!==false){
					header('location:GoodsController.php?cname=index');
				}else{
					die('信息修改失败');
				}
				exit;
			}
			include '../View/Goods/edit.php';
		break;

		//删除操作
		case 'del':
			$id=$_GET['id'];

			//查询数据
			$data=select('goods','goods_img',array('where'=>'id='.$id));
			$imagedata=select('goods_img','image_url',array('where'=>'goods_id='.$id));
			$imagedata[]['image_url']=$data[0]['goods_img'];

			//删除信息，并且删除所有的图片和图片的信息
			if(del('goods',$id)>0){
				if(delimg('goods_img',$id)>0){
					foreach($imagedata as $v){
						$path=PATH.'public/'.ltrim($v['image_url'],'/');
						if(file_exists($path)){
							@unlink($path);
						}else{
							die('删除失败');
						}
					}
					header('location:GoodsController.php?cname=index');
				}
			}else{
				die('删除失败');
			}

		break;

		//添加图片
		case 'addimg':
		$imagedata=select('goods_img','*',array('where'=>'goods_id='.$_GET['id']));
		if(isset($_POST['goods_id'])){
			if($_FILES['pic']['name']){
				$image_url=upload('pic');
				$_POST['image_url']=$image_url;
				if(add('goods_img',$_POST)>0){
					header('location:GoodsController.php?cname=addimg&id='.$_POST['goods_id']);
				}else{
					die('添加失败');
				}
			}
		}
		include '../View/Goods/image.php';
		break;

		//删除图片管理中的图片
		case 'delimg':
		$imgdata=select('goods_img','*',array('where'=>'id='.$_GET['id']));
		$imagepath=PATH.'public/'.ltrim($imgdata[0]['image_url'],'/');
		if(file_exists($imagepath)){
			echo '111';
			if(unlink($imagepath)){
				if(del('goods_img',$_GET['id'])){
					header('location:GoodsController.php?cname=addimg&id='.$_GET['gid']);
				}else{
					die('删除失败');
				};
			};
		}
		break;
	}
 ?>