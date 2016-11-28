<?php

include_once('../templates/header.php');
include_once('../database/connect.php');
include_once('../database/restaurants.php');

?>
<script type="text/javascript" src="../Javascript/search.js"></script>




<label>
  Type:
  <select name="type">
    <option value="none">None</option>
  </select>
</label>

<label>
  Search <input type= "text" name="search" />
</label>

<input type="submit" name="SearchButton">

<div id="restaurantList">
  <ul id="restaurants"></ul>
</div>

<?php
include_once('../templates/footer.php');
?>
