<?php
    include_once('../templates/header.php');
?>

<div class="restaurantForm">
    <form  action="../database/action_add_restaurant.php" method="post">
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
        <input type="submit" value="Add"/>
    </form>
</div>

<?php
    include_once('../templates/footer.php');
 ?>
