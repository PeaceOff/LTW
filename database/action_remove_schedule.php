<?php
  session_start();
  include_once("../database/connect.php");
  include_once("../database/restaurants.php");
  include_once("../database/schedule.php");

  if(!isset($_POST['sch_id'])){
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit();
  }
  $schedule_id = htmlentities($_POST['sch_id'], ENT_QUOTES, "UTF-8");

  $schedule = getSchedule($schedule_id);

  if($schedule){
    $restaurant = getRestaurant($schedule['restaurant_id']);
    if($restaurant)
      if($restaurant['owner'] === $_SESSION['id'])
        removeSchedule($schedule['id']);
  }
  header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
