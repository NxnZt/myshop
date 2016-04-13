<?php
	require 'upload.php';

	//删除图片
	function delimg($table,$id){
		$link=connect();
		$sql="delete from {$table} where goods_id={$id}";
		$result=mysqli_query($link,$sql);
		if($result){
			return mysqli_affected_rows($link);
		}
	}
 ?>