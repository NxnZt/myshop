<?php
    if(empty($_SESSION['user'])){
        header('location:logincontroller.php');
    }