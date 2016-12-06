<?php
  session_start();
  include_once("../database/connect.php");
  include_once("../database/restaurants.php");
  include_once("../database/images.php");


  if(!isset($_SESSION['username']) || !isset($_POST['image_id'])){
      header('Location: ' . $_SERVER['HTTP_REFERER']);
      exit();
  }

  $image_id = htmlentities($_POST['image_id'], ENT_QUOTES, "UTF-8");

  deleteImage($image_id);


  header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
