<?php
	include '../init.php';
	// var_dump($_SESSION);
    if(empty($_SESSION['admin'])){
        header('location:Controller/logincontroller.php');
    }
	require './Controller/indexController.php';

 ?>