<?php
	//连接数据库函数
	function connect(){
		//链接数据库
		$link=mysqli_connect(HOST,USER,PWD);

		//判断错误
		if (! $link ) {
			die('Connect Error('.mysqli_connect_errno().'):'.mysqli_connect_error ());
		}

		//选择数据库
		mysqli_select_db($link,DB);

		//设置字符集
		mysqli_set_charset($link,CHAR);

		return $link;
	}


	/**
	 * 自动验证
	 * @param string $value 	//验证数据
	 * @param string $rule 		//验证规则
	 * @return [type] [description]
	 */
	function check($value,$type,$rule,$length='8,16'){
		$type=strtolower(trim($type));
		switch($type){
			//字段必须
			case 'require':
			return !empty($value)?true:$rule;
			break;

			//邮箱验证
			case 'email':
			$pattern='/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/';
			return preg_match($pattern,$value)===1?true:$rule;
			break;

			//货币格式
			case 'currency':
			$pattern='/^\d+(\.\d+)?$/';
			return preg_match($pattern,$value)===1?true:$rule;
			break;

			//数字格式
			case 'number':
			$pattern='/^\d+$/';
			return  preg_match($pattern,$value)===1?true:$rule;
			break;

			//验证长度
			case 'length':
			$value_len=mb_strlen($value,'utf8');
			return ($length[0]<=$value_len)&&($value_len>=$length[2])?true:'长度必须在'.$length.'之间';
			break;

			default:
		}
	}

	//验证是否一致
	function identical($pwd,$repwd){
		return md5($pwd)===md5($repwd)?true:'密码不一致';
	}

	//获取字段
	function getFields($table){
		//根据表面查出表中的字段
		$link=connect();
		$sql="select COLUMN_NAME from information_schema.COLUMNS where table_name ='{$table}' and table_schema ='".DB."'";
		// echo $sql;
		$result=mysqli_query($link,$sql);
		if($result && mysqli_num_rows($result)>0){
			while($row=mysqli_fetch_assoc($result)){
				$column_name[]=$row['COLUMN_NAME'];
			};
		}
		return $column_name;
	}

	/**
	 * 新增数据
	 * @param string $table 数据表名
	 * @param array $post 表单提交的数据
	 * @return id 返回数据插入成功后的id
	 */
	function add($table,$post){
		//根据表面查出表中的字段
		$link=connect();
		$column_name=getFields($table);
		// var_dump($post);
		// var_dump($column_name);

		//获取字段名
		$_fields=array_keys($post);
		// var_dump($_fields);
		//判段表单提交的字段名，是否在表中
		foreach($_fields as $v){
			if(in_array($v,$column_name)){
				$data[$v]=$post[$v];
			}
		}

		//获取键组成字符串
		$keys=array_keys($data);
		$keys_str=implode($keys, ',');

		//获取值组成字符串
		$values=array_values($data);
		$values_str=implode('\',\'',$values);

		//组成插入的sql语句
		$insertsql="insert into $table($keys_str) values('{$values_str}')";
		$result=mysqli_query($link,$insertsql);

		//返回的值
		if($result){
			return mysqli_insert_id($link)?mysqli_insert_id($link):mysqli_affected_rows($link);
		}
	}

	/**
	 * 查询数据
	 * @param  string $table 查询的表
	 * @param  array $arr   要查询的字段
	 * @param  array $term  子查询
	 * @return array $data 	返回的数据
	 *
	 */
	function select($table,$arr='*',$term=array()){
		$link=connect();
		//要查询的字段
		if(is_array($arr)){
			$fields=implode(',',$arr);
		}else{
			$fields=$arr;
		}

		//子查询
		$where=empty($term['where'])?'':'where '.$term['where'];
		$order=empty($term['order'])?'':'order by'.$term['order'];
		$limit=empty($term['limit'])?'':'limit '.$term['limit'];
		$group=empty($term['group'])?'':'group by '.$term['group'];
		$having=empty($term['group'])?'':'having '.$term['having'];

		$sql="SELECT {$fields} FROM {$table} {$where} {$order} {$limit} {$group} {$having}";
		//查询的数据
		$result=mysqli_query($link,$sql);
		if($result && mysqli_num_rows($result)>0){
			while($row=mysqli_fetch_assoc($result)){
				$data[]=$row;
			};
		}
		return $data;
	}

	/**
	 * 删除操作
	 *@param string $table 表名
	 *@param string $id 数据的id
	 */
	function del($table,$id){
		$link=connect();
		$sql="delete from {$table} where id={$id}";
		$result=mysqli_query($link,$sql);
		if($result){
			return mysqli_affected_rows($link);
		}
	}

	/**
	 * 修改操作
	 *@param string $table 表名
	 *@param array $data 需要修改的数据
	 *@return string 影响的条数
	 */
	function save($table,$data){

		//获取字段
		$column_name=getFields($table);
		$data=array_intersect_key($data,array_flip($column_name));

		//去除数据表中没有字段
		foreach($data as $k=>$v){
			if($k!='id'){
				$set[]="$k='{$v}'";
			}else{
				$id=$v;
			}
		}
		$setStr=implode(',',$set);
		$link=connect();
		$sql="update $table set {$setStr} where id=$id";
		$result=mysqli_query($link,$sql);
		return $result;
	}

 ?>