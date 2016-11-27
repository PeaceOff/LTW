<?php
    session_start();
    
    include_once '../database/connect.php';
    include_once '../database/users.php';

    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $description = $_POST['description'];


    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit();
 ?>
