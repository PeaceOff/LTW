<?php
    session_start();

    include_once '../database/connect.php';
    include_once '../database/users.php';

    if(!isset($_SESSION['username'])){
        header('Location: ../pages/home.php#home');
        exit();
    }

    $username = htmlentities($_SESSION['username'], ENT_QUOTES, "UTF-8");
    $username = strtolower($username);

    $password = $_POST['password'];
    $npassword = $_POST['npassword'];

    if($npassword == ""){
        $npassword = $password;
    }

    $name = htmlentities($_POST['name'], ENT_QUOTES, "UTF-8");
    $description = htmlentities($_POST['description'], ENT_QUOTES, "UTF-8");
    $description = trim($description);

    if(updateUser($_SESSION['id'],$username,$npassword,$name,$description)){
        $_SESSION['description'] = $description;
        $_SESSION['name'] = $name;
        header('Location: ../pages/home.php#home');
        exit();
    }

    header('Location: ../pages/edit_profile.php?id=' . $_SESSION['id']);
    exit();
 ?>
