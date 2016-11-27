<?php
    session_start();
    include_once '../database/connection.php';
    include_once '../database/users.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    if(userExists($username,sha1($password))
        $_SESSION['username'] = $username;

    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit();
 ?>
