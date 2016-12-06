<?php
session_start();
include_once("../database/connect.php");
include_once("../database/restaurants.php");
include_once("../database/images.php");

$restaurantID = $_GET['id'];

$restaurant = getRestaurant($restaurantID);

if($restaurant['owner'] === $_SESSION['id'])
  $pictures = getRestaurantPictures($restaurantID);
  foreach( $pictures as $picture ) {
    deleteImage($picture['picture_id']);
  }
  deleteRestaurant($restaurantID);

header('Location: ' . $_SERVER['HTTP_REFERER']);

?>
