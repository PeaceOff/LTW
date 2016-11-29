<?php
    include_once '../database/connect.php';
    include_once '../database/users.php';

    $username = $_POST['username'];
    $pass = $_POST['password'];
    $result = "false";
    if(userExists($username,$pass)){
        $result = "true";
    };
    echo $result;
 ?>
