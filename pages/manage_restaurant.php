<?php
    include_once('../templates/header.php');
    include_once('../database/connect.php');
    include_once('../database/types.php');
    include_once('../database/restaurants.php');
    include_once('../database/schedule.php');

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
<form name="RestaurantEdit" id="restaurantForm" action="<?php echo $redirect ?>" method="post" enctype="multipart/form-data">
    <h2> <?php echo $intro ?></h2>
    <input name="name" required="required" placeholder="Restaurant Name *" type="text" value="<?php echo $name ?>"/>
    <textarea name="description" type="text" placeholder="Description *" maxlength="300" rows="6" cols="50" style="resize: none;" required/><?php echo $description ?></textarea>
    <div id="checkBoxes">
        <h3>Choose your Restaurant types</h3>
        </br>
<?php
foreach ($types as $t) {
  $checked = "";
  foreach($rest_types as $temp)
    if($temp['content'] == $t['content']){
      $checked = "checked";
      break;
    }
?>
        <div class="checkBoxDiv">
            <input type="checkbox" name="types[]" value="<?php echo $t['content'] ?>" <?php echo $checked ?>/>
            <label><?php echo $t['content'] ?></label>
        </div>
<?php
} ?>
    </div>
<?php
if($add){?>
    </br>
    <label class="restImage">Upload a picture</label>
    <input class="special" type="file" name="image">
    </br>
    </br>
    <h3>Weekly Schedule</h3>
    <input type="hidden" name="sch_type" value="week"/>
    <label>Open</label>
    <input type="time" name="sch_open" placeholder="hrs:mins" class="inputs time" value="08:30" required>
    <label>Close</label>
    <input type="time" name="sch_close" placeholder="hrs:mins" class="inputs time" value="20:30" required>
    </br>
<?php
} ?>
    <input type="hidden" name="latitude"  value="<?php echo $latitude ?>">
    <input type="hidden" name="longitude" value="<?php echo $longitude ?>">
    <input type="hidden" >
    </br>
    <div id="mapaGoogle">
        <script type="text/javascript" src="../javascript/manage_restaurant.js"></script>
        <input type="text" placeholder="Introduza a localização do seu restaurante" id="mapSearch"/>
        <div id="map"></div>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCd_TJ2rVJLyGH5vRRWATUOKvlrloJ9F8k&libraries=places&callback=initMap"></script>
    </div>
    <input id="special" type="submit" value="<?php echo $btnValue ?>"/>
</form>

<?php
if(!$add){ ?>

<div id="restaurantForm">
    <form action="../database/action_update_schedule.php" method="post">
        <h2> Update/Add a Schedule </h2>
        <label>Type</label>
        <select name="sch_type">

<?php
  $schedule_types = getScheduleTypes();
  foreach ($schedule_types as $schedule_type) {?>
            <option value="<?php echo $schedule_type['id']?>"><?php echo $schedule_type['name'] ?></option>
<?php } ?>

        </select>
        <label>Open</label>
        <input type="time" name="sch_open" pattern="([01]?[0-9]|2[0-3]):[0-5][0-9]" placeholder="hrs:mins" class="inputs time" value="08:30" required>
        <label>Close</label>
        <input type="time" name="sch_close" pattern="([01]?[0-9]|2[0-3]):[0-5][0-9]" placeholder="hrs:mins" class="inputs time" value="20:30" required>
        <input type="hidden" name="restaurant_id" value="<?php echo $restaurant['id'] ?>" />
        <input type="submit" value="Update/Add"/>
    </form>
</div>

<div id="schedules">
    <h2>Schedules</h2>
    <ul>
<?php
  $schedules = getSchedules($restaurant['id']);
  foreach($schedules as $schedule){?>
        <li class="contentSchedule">
            <label><?php echo ucfirst($schedule['name']) ?> Open: <?php echo $schedule['begin'] ?> Close: <?php echo $schedule['end'] ?></label>
            <form id="removeScheduleBtn" action="../database/action_remove_schedule.php" method="post">
                <input type="hidden" name="sch_id" value="<?php echo $schedule['id'] ?>" />
                <input class="special" type="submit" value="Remove"/>
            </form>
        </li>
<?php
  }?>
    </ul>
</div>

<div id="images">
    <h2> Delete/Add images </h2>
<?php
    $pictures = getRestaurantPictures($restaurant['id']);
    foreach( $pictures as $picture ) {
        $path = "../images/medium/". $picture['picture_id'] . '.jpg';
        if(!file_exists($path))
        $path = '../images/error.jpg';?>
    <form id="delete_image" action="../database/action_delete_image.php" method="post">
        <div id="containerI">
            <img src="<?php echo $path ?>"/>
            <input type="hidden" name="image_id" value="<?php echo $picture['picture_id'] ?>" />
            <input id="special" type="submit" value="Remove"/>
        </div>
    </form>
<?php  } ?>
    <form id="add_image" action="../database/action_add_image.php" method="post"  enctype="multipart/form-data">
        <label>Upload a picture</label>
        <input type="file" name="image"/>
        <input type="hidden" name="restaurant_id" value="<?php echo $restaurant['id'] ?>" />
        </br>
        <input type="submit" value="Add Image"/>
    </form>
</div>

<?php
}
    include_once('../templates/footer.php');
?>
