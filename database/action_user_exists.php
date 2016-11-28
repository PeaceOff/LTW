<?php
    include_once '../database/connect.php';
    include_once '../database/users.php';

    $username = $_POST['username'];
    $result = isUser($username);

    echo $result;
 ?>
