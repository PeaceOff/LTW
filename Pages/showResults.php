<?php

include_once('../database/connect.php');
include_once('../database/restaurants.php');
?>



<?php
$search=$_GET['search'];
$result = getRestaurantBySearch($search);
echo json_encode($result);
?>
