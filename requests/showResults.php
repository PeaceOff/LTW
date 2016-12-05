<?php

include_once('../database/connect.php');
include_once('../database/restaurants.php');
?>

<?php
$search=$_GET['search'];
$typeId=$_GET['typeId'];
$sugestion= $_GET['sugestion'] == 'true' ? true : false;


$result = getRestaurantBySearch($search,$typeId,$sugestion);
echo json_encode($result);

?>
