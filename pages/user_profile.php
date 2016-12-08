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
<?php
  if($owner)
   echo '<h1 class="title"><span>' . 'Welcome ' . $info['nome'] . ' </span></h1>';
  else
   echo '<h1 class="title"><span>' . $info['nome']  . ' Profile </span></h1>'
?>

</h3>

<div  class="user_description">
<?php

  if($owner)
    echo "<h2> About yourself </h2>";
  else
    echo "<h2> About " . $info['nome'] . "</h2>";
?>
<p> <?php echo $info['description'] ?> </p>
</div>

<?php
  if($info['picture_id'] != null){
    $path = "../images/medium/". $info['picture_id'] . '.jpg';

    if(!file_exists($path))
      $path = '../images/error.jpg';
  ?>
  <img src="<?php echo $path ?>"/> </br>

<?php }
  if($owner){
?>
  <a href="../pages/edit_profile.php?id=<?php echo $_SESSION['id']?>">Edit Personal Info</a>
<?php
  }?>

<div class="userRestaurants">

<?php
  if($owner)
   echo '<h2>Restaurant(s)</h2>';
?>

<?php

if($owner){?>

<a href="../pages/manage_restaurant.php"> Add Restaurant </a>

<?php
}?>



<?php
$restaurants = getRestaurantByOwner($info['id']);
if($restaurants)
if(count($restaurants) > 0){ ?>

<?php
  if($owner)
   echo '<h2>Manage your Restaurant(s)</h2>';
  else
   echo '<h2>'. $info['nome'] . ' Restaurant(s)</h2>';
?>

<?php
foreach($restaurants as $restaurant){ ?>
    <ul>
      <li>
    <?php
      if($owner){?>
          <a href="../pages/show_restaurant.php?id=<?php echo $restaurant['id'] ?>" >
            <?php echo $restaurant['name'] ?>
          </a>

          <a href="../pages/manage_restaurant.php?id=<?php echo $restaurant['id'] ?>" >
            Edit Restaurant
          </a>

          <a href="../database/action_delete_restaurant.php?id=<?php echo $restaurant['id'] ?>" >
            Delete Restaurant
          </a>

<?php
      }else{?>
          <a id="ProfileRestaurant" href="../pages/show_restaurant.php?id=<?php echo $restaurant['id'] ?>" >
            <?php echo $restaurant['name'] ?>
          </a>
  <?php
    }?>
      </li>

    </ul>
<?php
}?>

<?php
  }
?>

  </div>
</div>





<?php
    include_once('../templates/footer.php');
?>
