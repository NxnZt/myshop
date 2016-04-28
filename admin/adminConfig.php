<?php
	var_dump($_SERVER);
    if(empty($_SESSION['admin']['name'])){
        header('location:logincontroller.php');
    }
