<?php
    include_once('../templates/header.php');

    if(!isset($_SESSION['username'])){
      header('Location: ../pages/home.php');
      exit();
    }
?>


<form id="restaurantForm" action="../database/action_add_restaurant.php" method="post">
    <h1> Add a restaurant </h1>
    <label>Restaurant name</label>
    <input name="name" required="required" type="text"/>
    </br>
    <label>Description </label>
    <input name="description" required="required" type="text"/>
    </br>
    <label>Type </label>
    <input name="type" required="required" type="text"/>
    </br>
    <input type="hidden" name="latitude"  >
    <input type="hidden" name="longitude" >

    <input type="submit" value="Add"/>
</form>



<script type="text/javascript" src="../javascript/add_restaurant.js"></script>
<input type="text" id= "mapSearch"/>


<div id="map"></div>

<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCd_TJ2rVJLyGH5vRRWATUOKvlrloJ9F8k&libraries=places&callback=initMap">
</script>

<?php
    include_once('../templates/footer.php');
?>
