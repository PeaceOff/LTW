<?php
  session_start();
  include_once('../database/connect.php');
  include_once('../database/restaurants.php');
  include_once('../database/schedule.php');

  if(!isset($_SESSION['username']) || !isset($_POST['restaurant_id'])){
      header('Location: ' . $_SERVER['HTTP_REFERER']);
      exit();
  }

  $restaurant_id = htmlentities($_POST['restaurant_id'], ENT_QUOTES, "UTF-8");
  $sch_type = htmlentities($_POST['sch_type'], ENT_QUOTES, "UTF-8");
  $sch_open = htmlentities($_POST['sch_open'], ENT_QUOTES, "UTF-8");
  $sch_close = htmlentities($_POST['sch_close'], ENT_QUOTES, "UTF-8");

  $schedule = getSchedule2($restaurant_id,$sch_type);

  if($schedule){
    $restaurant = getRestaurant($schedule['restaurant_id']);
    if($restaurant)
      if($restaurant['owner'] === $_SESSION['id'])
        updateSchedule($schedule['id'], $sch_type, $sch_open, $sch_close);

  }else{
    $restaurant = getRestaurant($restaurant_id);
    if($restaurant)
      if($restaurant['owner'] === $_SESSION['id'])
        addSchedule($restaurant_id, $sch_type, $sch_open, $sch_close);

  }

  header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
