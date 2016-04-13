<?php
	//字符集
	header('Content-type:text/html;charset=utf-8');

	//时区
	date_default_timezone_set('PRC');

	//错误级别
	error_reporting(E_ALL^E_NOTICE);
	//网站根目录
	$len=strrpos(dirname(__FILE__),'\\')+1;
	define('PATH',str_replace('\\','/',substr(dirname(__FILE__), 0,$len)));

	//引入数据库配置文件
	include PATH.'Conf/config.php';

	//公共目录路径
	define('__PUBLIC__','http://localhost/myshop/public');
 ?>