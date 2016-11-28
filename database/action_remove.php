<?php
  session_start();

  include_once('../database/connect.php');
  include_once('../database/users.php');
  include_once('../database/restaurants.php');
  header('Location: ' . $_SERVER['HTTP_REFERER']);
  if(!isset($_SESSION['username'])){
    exit();
  }
  $info = getUserInfo($_SESSION['username']);

  $type = $_POST['type'];

  if($type == '1'){
    $rev = $_POST['id'];
    deleteReview($rev, $info['id']);
  }else if($type == '2'){
    $rev = $_POST['id'];
    deleteComment($rev, $info['id']);
  }


?>
