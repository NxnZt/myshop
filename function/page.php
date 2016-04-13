<?php
	/**
	 * 获取根据条件查询的记录数
	 * @param  string $table 表名
	 * @param  string $where 查询条件
	 * @return string 返回的条数
	 */
	function countRow($table,$where=''){
		//根据搜索条件查询数据条数
		if(!empty($where)){
			$where='where '.$where;
		}else{
			$where='';
		}
		$sql="select count(*) from $table $where";

		$link=connect();
		$result=mysqli_query($link,$sql);
		$row=mysqli_fetch_row($result);
		return $row[0];
	}

	/**
	 * 生成分页字符串
	 * @param  int $count    数据总条数
	 * @param  int $pageSize 每页显示的条数
	 * @return array 		 返回的数组
	 */
	function page($count,$pageSize){
		//计算总页码数
		$totalPage=ceil($count/$pageSize);

		//获取当前页
		$page=empty($_GET['p'])?1:$_GET['p'];

		//判断当前页的好法性
		if($page<0){
			$page=1;
		}
		if($page>$totalPage){
			$page=$totalPage;
		}

		//偏移量=(页面-1)*每页显示数
		$offset =($page-1)*$num;

		//获取url
		$url=$_SERVER['PHP_SELF'];

		//获取搜索条件
		$params="";
		foreach($_GET as $key=>$val){
			if($key!='p'){
				$params.="&{$key}={$val}";
				//echo $params;
			}
		}

		//生成html代码
		$html="共有{$count}数据 ";
		$html.="第{$page}/{$totalPage}页 ";
		$html.="<a href='{$url}?p=1{$params}'>首页</a> ";
		$html.="<a href='{$url}?p=".($page-1)."{$params}'>上一页</a> ";
		$html.="<a href='{$url}?p=".($page+1)."{$params}'>下一页</a> ";
		$html.="<a href='{$url}?p={$totalPage}{$params}'>尾页</a> ";
		return $data=array(
				'startLimit'=>($page-1)*$pageSize,
				'endLimit'=>$pageSize,
				'html'=>$html,
			);
	}
 ?>