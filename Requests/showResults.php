<?php

include_once('../database/connect.php');
include_once('../database/restaurants.php');
?>

<?php
$search=$_GET['search'];
$typeId=$_GET['typeId'];

$result = getRestaurantBySearch($search,$typeId);
echo json_encode($result);

?>
