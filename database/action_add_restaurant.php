<?php
    session_start();

    include_once('../database/connect.php');
    include_once('../database/restaurants.php');
    include_once('../database/users.php');
    include_once('../database/types.php');

    if(!isset($_SESSION['username'])){
      header('Location: ../pages/home.php');
      exit();
    }

    $ownerId = getUserInfo($_SESSION['username'])['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $typeContent = $_POST['type'];
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];
    $type = getTypebyContent($typeContent);



    $typeId;

    if($type==null){
      insertType($typeContent);
      $typeId = getTypebyContent($typeContent)['id'];
    }else{
      $typeId = $type['id'];
    }


    insertRestaurant($name,$description,$ownerId,$typeId,$latitude,$longitude);

    header('Location: ../pages/home.php');
    exit();
 ?>
