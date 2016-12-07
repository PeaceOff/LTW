<?php
    include_once('../templates/header.php');
    include_once('../database/users.php');
    include_once('../database/restaurants.php');
    include_once('../database/connect.php');

    $username = $_GET['username'];
    $info = getUserInfo($username);
    $owner = false;
    if($info == null){
?>
  <h3> User doesn't exist! </h3>

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

<?php echo '<h1>' . 'Welcome ' . $info['nome'] . ' </h1>' ?>
</h3>

<h2> About yourself </h2>
<p> <?php echo $info['description'] ?> </p>


<?php
  if($info['picture_id'] != null){
    $path = "../images/medium/". $info['picture_id'] . '.jpg';

    if(!file_exists($path))
      $path = '../images/error.jpg';
  ?>

  <img src="<?php echo $path ?>"/> </br>
  
<a href="../pages/edit_profile.php?id=<?php echo $_SESSION['id']?>">Edit Personal Info</a>
<?php } ?>

<div class="userRestaurants">
<h2>Restaurant(s)</h2>
<?php

if($owner){?>

<a href="../pages/manage_restaurant.php"> Add Restaurant </a>

<?php
}?>



<?php
$restaurants = getRestaurantByOwner($info['id']);
if($restaurants)
if(count($restaurants) > 0){ ?>


<h2>Manage your Restaurant(s)</h2>
<?php
foreach($restaurants as $restaurant){ ?>
    <ul>
      <li>
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
    </li>
<?php
  }?>


    </ul>
<?php
}?>

  </div>
<?php
    }
    if(isset($_SESSION['username']))
    if($username == $_SESSION['username']){
?>

</div>





<?php
    }
    include_once('../templates/footer.php');
?>
