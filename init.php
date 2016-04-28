<?php
	//字符集
	header('Content-type:text/html;charset=utf-8');
	//开启session
	session_start();
	//时区
	date_default_timezone_set('PRC');

	//错误级别
	error_reporting(E_ALL^E_NOTICE);

	//网站根目录
	define('BASE_PATH',str_replace('\\','/',realpath(dirname(__FILE__).'/'))."/");
	// echo BASE_PATH;
	//网站的url地址
	$PHP_SELF=$_SERVER['PHP_SELF'];
	$url='http://'.$_SERVER['HTTP_HOST'].'/myshop';
	// echo $url;
	//引入数据库配置文件
	include BASE_PATH.'Conf/config.php';
	//公共目录路径
	define('__PUBLIC__',$url.'/public');