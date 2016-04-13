<?php
	require '../../init.php';
	if ($_POST) {
		echo 'aaa';
		header('location:loginController.php');
	}
	require '../View/register.php';
