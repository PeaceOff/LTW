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
    $add = true;
    $redirect = "../database/action_add_restaurant.php";
    $intro = "Add a restaurant";
    $longitude = $latitude = $name = $description = $type = "";
    $types = getAllTypes();
    $rest_types = [];
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
      $rest_types = getTypesbyID($restaurant['id']);
      $latitude = $restaurant['latitude'];
      $longitude = $restaurant['longitude'];
      $btnValue = "Update";
      $add=false;
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
    <label>Type </br>

<?php
foreach ($types as $t) {
  $checked = "";
  foreach($rest_types as $temp)
    if($temp['content'] == $t['content']){
      $checked = "checked";
      break;
    }
?>
        <label>
          <input type="checkbox"  name="types[]" value="<?php echo $t['content'] ?>" <?php echo $checked ?>>
            <?php echo $t['content'] ?>
          </input>
        </label><br>
<?php
}?>
    </label>
<?php
if($add){?>
    <label> Weekly Schedule
      <input type="hidden" name="sch_type" value="week"/>
    </label>
    <label> Open
      <input type="time" name="sch_open" placeholder="hrs:mins" class="inputs time" required>
    </label>
    <label> Close
      <input type="time" name="sch_close" placeholder="hrs:mins" class="inputs time" required>
    </label>
<?php
} ?>
    <input type="hidden" name="latitude"  value="<?php echo $latitude ?>">
    <input type="hidden" name="longitude" value="<?php echo $longitude ?>">
    <input type="hidden" >
    <input type="submit" value="<?php echo $btnValue ?>"/>
</form>

<script type="text/javascript" src="../javascript/manage_restaurant.js"></script>
<input type="text" id= "mapSearch"/>


<div id="map"></div>

<script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCd_TJ2rVJLyGH5vRRWATUOKvlrloJ9F8k&libraries=places&callback=initMap">
</script>
<?php
if(!$add){ ?>
<h2> Schedules </h2>
<?php
} ?>

<?php
    include_once('../templates/footer.php');
?>
