<?php
    session_start();

    include_once '../database/connect.php';
    include_once '../database/users.php';

    $params = array($_POST['username'],$_POST['password'],$_POST['name'],$_POST['description']);
    newUser($params);
    $_SESSION['username'] = $_POST['username'];
    header('Location: ../pages/home.php#home');
    exit();
 ?>
