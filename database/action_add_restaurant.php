<?php
    session_start();

    include_once('../database/connect.php');
    include_once('../database/restaurants.php');
    include_once('../database/users.php');
    include_once('../database/types.php');

    $ownerId = getUserInfo($_SESSION['username'])['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $typeContent = $_POST['type'];
    $type = getTypebyContent($typeContent);

    $typeId;

    if($type==null){
      insertType($typeContent);
      $typeId = getTypebyContent($typeContent)['id'];
    }else{
      $typeId = $type['id'];
    }


    insertRestaurant($name,$description,$ownerId,$typeId);

    header('Location: ../Pages/home.php');
    exit();
 ?>
