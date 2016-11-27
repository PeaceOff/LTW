<?php

include_once('/templates/header.php');
include_once('/database/connect.php');
include_once('/database/restaurants.php');

$id=$_GET['id'];
$result = getRestaurant($id);

echo '<div class="restaurantInfo">';

echo "<h3>" . $result['name'] . "</h3>";
echo "<p>"  . $result['description'] . "</p>";

echo '</div>';

include_once('/templates/footer.php');

?>
