<?php
include_once('../templates/header.php');
include_once('../database/users.php');
include_once('../database/restaurants.php');
include_once('../database/connect.php');

$username = $_GET['username'];
$info = getUserInfo($username);
$owner = false;


if($info == null){ ?>
  <h3> User don't exist! </h3>

<?php
  include_once('../templates/footer.php');
  exit();
}else{
  if(array_key_exists("username", $info))
    if(array_key_exists("username", $_SESSION))
      $owner = $info['username'] == $_SESSION['username'];
}
?>

<div class="userInfo">
<h3>

<?php echo $info['nome']; ?>
</h3>

<?php
if($owner){?>

<a href="../pages/edit_profile.php?username=<?php echo $_SESSION['username']?>"> Edit Profile </a>
<a href="../pages/manage_restaurant.php"> Add Restaurant </a>

<?php
}?>


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
          <a href="../pages/show_restaurant.php?id=<?php echo $restaurant['id'] ?>" >
            <?php echo $restaurant['name'] ?>
          </a>
<?php
  if($owner){?>
    <a href="../pages/manage_restaurant.php?id=<?php echo $restaurant['id'] ?>" >
      Edit Restaurant
    </a>
    <a href="../database/action_delete_restaurant.php?id=<?php echo $restaurant['id'] ?>" >
      Delete Restaurant
    </a>
<?php
  }?>
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
