<?php
    include_once '../database/connect.php';
    include_once '../database/users.php';

    $username = $_POST['username'];
    $username = strtolower($username);
    $pass = $_POST['password'];
    $result = "false";
    if(userExists($username,$pass,$pass)){
        $result = "true";
    };
    echo $result;
 ?>
