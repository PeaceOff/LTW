
<div class="portrait">
  <h1> RestaurantWizz </h1>

</div>

<?php

include_once('../templates/header.php');
include_once('../database/connect.php');
include_once('../database/restaurants.php');
include_once('../database/types.php');



?>

<script type="text/javascript" src="../javascript/portrait.js"> </script>
<script type="text/javascript" src="../javascript/search.js"></script>



<div class="page">
  <form id="searchForm" action="../database/action_search.php" method="post">
  <div id = "searchArea">
    <label>
      <select class = "typeDropDown" name="type">
        <option value=-1> All types </option>
        <?php
        $types = getAllTypes();
          foreach ($types as $type) {
            echo '<option value=' . $type['id'] . '>' . $type['content'] . '</option>';
          }
        ?>
      </select>
    </label>
    <label class="labelSearch">
      <input id="searchBox" autocomplete="off" type= "text" name="search" placeholder="search ..."/>
      <input id="searchBtn" type="submit" value="search">
      <ul id = "sugestions">
      </ul>
    </label>
  </div>
  </form>
</div>



    <ul class="restaurantList">

    </ul>




<?php
include_once('../templates/footer.php');
?>
