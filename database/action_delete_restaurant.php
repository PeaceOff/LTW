<?php
session_start();
include_once("../database/connect.php");
include_once("../database/restaurants.php");

$restaurantID = $_GET['id'];

$restaurant = getRestaurant($restaurantID);

if($restaurant['owner'] === $_SESSION['id'])
  deleteRestaurant($restaurantID);

header('Location: ' . $_SERVER['HTTP_REFERER']);

?>
