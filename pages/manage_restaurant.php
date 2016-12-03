<?php
    include_once('../templates/header.php');
    include_once('../database/connect.php');
    include_once('../database/types.php');
    include_once('../database/restaurants.php');

    if(!isset($_SESSION['username'])){
      header('Location: ../pages/home.php');
      exit();
    }
    $btnValue = "Add";

    $redirect = "../database/action_add_restaurant.php";
    $intro = "Add a restaurant";
    $longitude = $latitude = $name = $description = $type = "";

    if(array_key_exists("id", $_GET)){
      $restaurant = getRestaurant($_GET['id']);
      if($_SESSION['id'] != $restaurant['owner']){
        header('Location: ../pages/home.php');
        exit();
      }

      $redirect = "../database/action_update_restaurant.php?id=".$restaurant['id'];
      $intro = "Edit the restaurant";
      $name = $restaurant['name'];
      $description = $restaurant['description'];
      $type = getTypebyID($restaurant['type_id']);
      $latitude = $restaurant['latitude'];
      $longitude = $restaurant['longitude'];
      $btnValue = "Update";
    }
?>


<form id="restaurantForm" action="<?php echo $redirect ?>" method="post">
    <h1> <?php echo $intro ?></h1>
    <label>Restaurant name</label>
    <input name="name" required="required" type="text" value="<?php echo $name ?>"/>
    </br>
    <label>Description </label>
    <input name="description" required="required" type="text" value="<?php echo $description ?>"/>
    </br>
    <label>Type </label>
    <input name="type" required="required" type="text" value="<?php echo $type ?>"/>
    </br>
    <input type="hidden" name="latitude"  value="<?php echo $latitude ?>">
    <input type="hidden" name="longitude" value="<?php echo $longitude ?>">

    <input type="submit" value="<?php echo $btnValue ?>"/>
</form>



<script type="text/javascript" src="../javascript/manage_restaurant.js"></script>
<input type="text" id= "mapSearch"/>


<div id="map"></div>

<script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCd_TJ2rVJLyGH5vRRWATUOKvlrloJ9F8k&libraries=places&callback=initMap">
</script>

<?php
    include_once('../templates/footer.php');
?>
