<?php
include_once('../templates/header.php');
include_once('../database/connect.php');
include_once('../database/restaurants.php');
?>

<?php
$search=$_POST['search'];
$typeId=$_POST['type'];



$results = getRestaurantBySearch($search,$typeId,false);

foreach ($results as $result) {
  if($typeId == -1)
      $link = "../pages/show_restaurant.php?id=" . $result['id'];
  else
      $link = "../pages/show_restaurant.php?id=" . $result['restaurant_id'];

?>

<div class="page">
  <div id="restaurantList">
    <ul id="restaurants">
      <?php
      echo '<li> Name: ' . $result['name'] . '</br>';
      echo 'Description: ' . $result['description'];
      echo 'Type Id: ' . $result['type_id'] . '</li>';
      echo '<a href=' . $link . '> View Restaurant Info </a>';
      ?>
    </ul>
  </div>
</div>


<?php } ?>


?>

</br>
<form id="searchForm" action="../pages/home.php" method="post">
    <input type="submit" value="Back">
</form>

<?php
include_once('../templates/footer.php');
?>
