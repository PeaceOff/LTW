<?php
    session_start();

    include_once '../database/connect.php';
    include_once '../database/users.php';

    $username = htmlentities($_POST['username'], ENT_QUOTES, "UTF-8");
    $password = $_POST['password'];
    $name = htmlentities($_POST['name'], ENT_QUOTES, "UTF-8");
    $description = htmlentities($_POST['description'], ENT_QUOTES, "UTF-8");

    $params = array($username,$password,$name,$description);

    newUser($params);

    $_SESSION['username'] = $username;
    header('Location: ../pages/home.php#home');
    exit();
 ?>
