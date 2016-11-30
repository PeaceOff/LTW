<?php
    session_start();
    include_once '../database/connect.php';
    include_once '../database/users.php';

    $username = htmlentities($_POST['username'], ENT_QUOTES, "UTF-8");
    $password = $_POST['password'];

    if(userExists($username,$password)){
        $_SESSION['username'] = $username;
        $_SESSION['id'] = getUserInfo($username)['id'];
    }

    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit();
 ?>
