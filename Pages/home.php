<?php

include_once('../templates/header.php');
include_once('../database/connect.php');
include_once('../database/restaurants.php');

?>
<script type="text/javascript" src="../Javascript/search.js"></script>


<div class="searchBar">

<label> Search <input type= "text" name="search" value="restaurant"/> </label>
<input type="submit" name="SearchButton"> Search </button>


<div id="restaurantList">

<ul id="restaurants"></ul>

</div>

<?php
include_once('../templates/footer.php');
?>
