<?php
    session_start();

    include_once '../database/connect.php';
    include_once '../database/users.php';
    include_once '../database/images.php';

    $username = htmlentities($_POST['username'], ENT_QUOTES, "UTF-8");
    $username = strtolower($username);

    if(isUser($username)){
        header('Location: ../pages/home.php#home');
        exit();
    }

    $password = $_POST['password'];
    $rpassword = $_POST['rpassword'];
    if($password != $rpassword){
        header('Location: ../pages/register.php');
        exit();
    }

    $name = htmlentities($_POST['name'], ENT_QUOTES, "UTF-8");
    $description = htmlentities($_POST['description'], ENT_QUOTES, "UTF-8");
    $description = trim($description);

    $imageId = addImage(-1,$_FILES['image']['tmp_name']);

    $params = array($username,$password,$name,$description,$imageId);

    newUser($params);

    $info = getUserInfo($username);
    $_SESSION['username'] = $info['username'];
    $_SESSION['id'] = $info['id'];
    $_SESSION['description'] = $info['description'];
    $_SESSION['name'] = $info['nome'];
    $_SESSION['picture_id'] = $info['picture_id'];
    header('Location: ../pages/home.php#home');
    exit();
 ?>
