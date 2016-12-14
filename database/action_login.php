<?php
    session_start();
    include_once '../database/connect.php';
    include_once '../database/users.php';

    $username = htmlentities($_POST['username'], ENT_QUOTES, "UTF-8");
    $username = trim($username);
    $username = strtolower($username);
    $password = $_POST['password'];

    if(userExists($username,$password,$password)){
        $info = getUserInfo($username);
        $_SESSION['username'] = $info['username'];
        $_SESSION['id'] = $info['id'];
        $_SESSION['description'] = $info['description'];
        $_SESSION['name'] = $info['nome'];
        $_SESSION['picture_id'] = $info['picture_id'];
    }

    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit();
 ?>
