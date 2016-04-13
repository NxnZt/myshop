<?php
	/**
	 * 文件上传
	 * @param  string $name 表单name
	 * @param  string $dir  文件目录
	 * @param  array  $type 文件类型
	 * @return string       文件保存路径
	 */
	function upload($name,$dir='uploads',$type=array('jpg','gif','png','jpeg')){
		//判断错误
		if($_FILES[$name]['error']){
			die('上传错误');
			return false;
		}

		//获取后缀名
		$suffix=pathinfo($_FILES[$name]['name'],PATHINFO_EXTENSION);

		//判断文件类型
		if(!in_array($suffix,$type)){
			die('文件类型错误');
		}

		//文件名
		$filename = date('Ymd').uniqid().mt_rand(0,9999).'.'.$suffix;

		$upload_path=rtrim($dir,'/').'/'.date('Y/m/d');
		// echo $upload_path;
		//拼接路径
		$save_path=BASE_PATH.'public/'.$upload_path;

		if(!file_exists($save_path)){
			mkdir($save_path,777,true);
		}
		$path = $save_path.'/'.$filename;
		//判断文件是否合法
		if(!is_uploaded_file($_FILES[$name]['tmp_name'])){
			die('文件非法');
		}
		if(!move_uploaded_file($_FILES[$name]['tmp_name'],$path)){
			die('文件上传失败');
		}
		return '/'.$upload_path.'/'.$filename;
	}
 ?>