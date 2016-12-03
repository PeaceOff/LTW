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
    $name = htmlentities($_POST['name'], ENT_QUOTES, "UTF-8");
    $description = htmlentities($_POST['description'], ENT_QUOTES, "UTF-8");
    $typeContent = htmlentities($_POST['type'], ENT_QUOTES, "UTF-8");
    $latitude = htmlentities($_POST['latitude'], ENT_QUOTES, "UTF-8");
    $longitude = htmlentities($_POST['longitude'], ENT_QUOTES, "UTF-8");
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
