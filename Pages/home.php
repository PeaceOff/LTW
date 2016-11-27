<?php

include_once('../templates/header.php');
include_once('../database/connect.php');
include_once('../database/restaurants.php');

$result = getAllRestaurants();

foreach( $result as $row) {
	echo '<div class="restaurant-item">';
	echo '<h3>' . $row['name'] . '</h3>';
	echo '<p>' . 'Description: ' . $row['description'] . '</p>';
	echo '</div>';
	}


include_once('../templates/footer.php');


?>
