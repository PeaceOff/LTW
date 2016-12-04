<?php
  session_start();
  include_once("../database/connect.php");
  include_once("../database/restaurants.php");
  include_once("../database/images.php");


  if(!isset($_SESSION['username']) || !isset($_POST['restaurant_id'])){
      header('Location: ' . $_SERVER['HTTP_REFERER']);
      exit();
  }

  $restaurant_id = htmlentities($_POST['restaurant_id'], ENT_QUOTES, "UTF-8");
  addImage($restaurant_id,$_FILES['image']['tmp_name']);


  header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
