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

    $restaurant_id = $_GET['id'];

    $restaurant = getRestaurant($restaurant_id);

    if(!$restaurant){
      header('Location: ../pages/home.php');
      exit();
    }

    if($restaurant['owner'] != $_SESSION['id']){
      header('Location: ../pages/home.php');
      exit();
    }

    $ownerId = $_SESSION['id'];
    $name = htmlentities($_POST['name'], ENT_QUOTES, "UTF-8");
    $description = htmlentities($_POST['description'], ENT_QUOTES, "UTF-8");
    $latitude = htmlentities($_POST['latitude'], ENT_QUOTES, "UTF-8");
    $longitude = htmlentities($_POST['longitude'], ENT_QUOTES, "UTF-8");

    if(isset($_POST['types']))
      $types = $_POST['types'];
    else
      $types= array();

    updateRestaurant($restaurant_id,$name,$description,$ownerId,$types,$latitude,$longitude);

    header('Location: ../pages/show_restaurant.php?id='.$restaurant_id);
    exit();
 ?>
