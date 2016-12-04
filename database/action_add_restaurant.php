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

    if(isset($_POST['types']))
      $types = $_POST['types'];
    else
      $types= array();

    $latitude = htmlentities($_POST['latitude'], ENT_QUOTES, "UTF-8");
    $longitude = htmlentities($_POST['longitude'], ENT_QUOTES, "UTF-8");


    insertRestaurant($name,$description,$ownerId,$types,$latitude,$longitude);

    header('Location: ../pages/home.php');
    exit();
 ?>
