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

  $user = $info['id'];
  $review = $_POST['id'];
  $content = htmlentities($_POST['content'], ENT_QUOTES, "UTF-8");

  addComment($user, $review, $content);

?>
