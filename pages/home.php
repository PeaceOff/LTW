<?php

include_once('../templates/header.php');
include_once('../database/connect.php');
include_once('../database/restaurants.php');




?>
<script type="text/javascript" src="../javascript/search.js"></script>




<div id = "searchArea">


<label>
  Type:
  <select class = "typeDropDown" name="type">
    <option value="none">None</option>
  </select>
</label>


<label class="labelSearch">
  Search <input id="searchBox" autocomplete="off" type= "text" name="search" placeholder="search ..."/>
  <input id="searchBtn" type="button" value="submit">

  <ul id = "sugestions">
  </ul>
</label>





</div>


<div id="restaurantList">
  <ul id="restaurants"></ul>
</div>



<?php
include_once('../templates/footer.php');
?>
