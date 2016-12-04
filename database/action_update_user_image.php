<?php
  session_start();
  include_once("../database/connect.php");
  include_once("../database/restaurants.php");
  include_once("../database/images.php");


  if(!isset($_SESSION['username'])){
      header('Location: ' . $_SERVER['HTTP_REFERER']);
      exit();
  }


  $user_id=$_SESSION['id'];
  $old_picture_id=$_SESSION['picture_id'];
  $new_image=$_FILES['image']['tmp_name'];

  $_SESSION['picture_id'] =   updateUserImage($old_picture_id,$new_image,$user_id);

  header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
