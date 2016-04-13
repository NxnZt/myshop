<?php
	/**
	 * 递归无限级分类
	 */
	function getTree($data,$pid=0,$space=0){
		// var_dump($data);
		static $ret=array();
		foreach($data as $k=>$v){
			// var_dump($v);
			if($v['pid']==$pid){
				$v['space']=$space;
				$ret[]=$v;
				getTree($data,$v['id'],$space+1);
			}
		}
		return $ret;
	}

 ?>