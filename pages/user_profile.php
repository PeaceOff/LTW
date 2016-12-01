<?php
include_once('../templates/header.php');
include_once('../database/users.php');
include_once('../database/restaurants.php');
include_once('../database/connect.php');

$username = $_GET['username'];
$info = getUserInfo($username);
if($info == null){ ?>
  <h3> User don't exist! </h3>

<?php
  include_once('../templates/footer.php');
  exit();
}
?>

<div class="userInfo">
<h3> <?php echo $info['nome'] ?> </h3>
<p> <?php echo $info['description'] ?> </p>
</div>



<?php
$restaurants = getRestaurantByOwner($info['id']);
if($restaurants)
if(count($restaurants) > 0){ ?>
  <div class="restaurantList">
    <h4>User's Restaurant(s)</h4>
    <ul>
<?php
foreach($restaurants as $restaurant){ ?>
      <li>
        <h5>
          <a href="../pages/show_restaurant.php?id= <?php echo $restaurant['id'] ?>" >
            <?php echo $restaurant['name'] ?>
          </a>
        </h5>
      </li>
<?php
}?>
    </ul>
  </div>
<?php
}?>


<?php
include_once('../templates/footer.php');
?>
