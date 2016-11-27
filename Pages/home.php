<?php

include_once('/templates/header.php');
include_once('/database/connect.php');
include_once('/database/restaurants.php');
?>

<div class="searchBar">
<label> Search <input type= "text" value="Restaurant"/> </label>
<button name="SearchButton"> Search </button>
</div>


<div id="restaurantList">

<?php
$result = getAllRestaurants();

foreach( $result as $row) {
	echo '<div class="restaurant-item">';
	echo '<h3>' . $row['name'] . '</h3>';
	echo '<p>' . 'Description: ' . $row['description'] . '</p>';
  $link = "/Pages/show_restaurant.php?id=" . $row['id'];
  echo "<a href=$link> View Restaurant Info </a>";
	echo '</div>';
	}

?>

</div>



<?php
include_once('/templates/footer.php');
?>
