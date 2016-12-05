<?php

include_once('../templates/header.php');
include_once('../database/connect.php');
include_once('../database/restaurants.php');
include_once('../database/schedule.php');
include_once('../database/types.php');

$id=$_GET['id'];
$result = getRestaurant($id);
$pictures = getRestaurantPictures($id);

if(!$result){
?><h3> Restaurant Doesn't Exist! </h3> <?php

  include_once('../templates/footer.php');
  exit();
}

?>
<script src="../javascript/reply.js"> </script>
<script src="../javascript/show_restaurant.js"> </script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCd_TJ2rVJLyGH5vRRWATUOKvlrloJ9F8k&libraries=places&callback=initMap">
</script>


<div class="restaurantInfo">
  <h3>
    <?php echo $result['name'] ?>
  </h3>

  <ul> Type:

<?php
$restaurantTypes = getTypesbyID($id);
foreach($restaurantTypes as $rest_type){?>

  <li>
    <?php echo $rest_type['content'] ?>
  </li>

<?php
}?>

  </ul>

  <p>
    <?php echo $result['description']?>
  </p>
</div>

<?php
if(count($pictures) > 0 ){ ?>

<div class="flexslider">
  <ul  class="slides">

<?php
  foreach( $pictures as $picture ) {
    $path = "../images/medium/". $picture['picture_id'] . '.jpg';

    if(!file_exists($path))
      $path = '../images/error.jpg'; ?>

    <li>
      <img src="<?php echo $path ?>"/>
    </li>

<?php
  }?>

  </ul>
</div>

<?php
}else{?>

  <div class="flexslider">
    <ul class="slides">
      <li>
        <img src="../images/error.jpg"/>
      </li>
    </ul>
  </div>

<?php
}?>

<div id="map" lat="<?php echo $result['latitude'] ?>" lng="<?php echo $result['longitude'] ?>"></div>

<div id="schedules">
  <h3> Schedules: </h3>
  <ul>

<?php
  $schedules = getSchedules($id);
  foreach($schedules as $schedule){?>

    <li>
      <h3>
        <?php echo $schedule['name'] ?>
      </h3>
      <div> Open:
        <?php echo $schedule['begin'] ?>
      </div>
      <div> Close:
        <?php echo $schedule['end'] ?>
      </div>
    </li>

<?php
  }?>

</div>

<?php
  if(isset($_SESSION['username'])){
?>

<form action="../database/action_review.php" class="review" method="post">
  <input type="hidden" name="id" value= <?php echo '"'.$id.'"' ?> > </input>
  <label>Rate: [
    0:<input type="radio" name="rating" value="0"></input>
    1:<input type="radio" name="rating" value="1"></input>
    2:<input type="radio" name="rating" value="2"></input>
    3:<input type="radio" name="rating" value="3" checked></input>
    4:<input type="radio" name="rating" value="4"></input>
    5:<input type="radio" name="rating" value="5"></input> ]
  </label>
  <br>
  <label>
    Review:
    <textarea rows="4" cols="50" name="message"></textarea>
  </label>
  <button class="PostButton"> Post </button>
</form>

<?php }
$reviews = getReviews($id);
?>


<div class="reviews">

  <ul>
<?php
foreach ($reviews as $review) {?>
    <li>
      <h4>
        <a href="../pages/user_profile.php?username=<?php echo $review['username']?>" ?>
        <?php echo $review['nome'] ?>
        </a>
      </h4>
      <h6> <?php echo $review['rating'] ."/5" ?> </h6>
      <p> <?php echo $review['description']?> </p>
<?php
  if(isset($_SESSION['username'])){
?>
      <a class="reply" reviewID=<?php echo '"'.$review['id'].'"' ?> ;> Reply </a>
<?php
  if(isset($_SESSION['id']))
    if($_SESSION['id']== $review['user_id']) { ?>
      <a class="delete-review" reviewID=<?php echo '"'.$review['id'].'"' ?> ;> Delete </a>
<?php
      }
  }
?>
      <ul>
<?php
$answers = getAnswers($review['id']);
  foreach($answers as $answer){?>
        <li>
          <h5>
            <a href="../pages/user_profile.php?username=<?php echo $answer['username']?>" ?>
              <?php echo $answer['nome'] ?>
            </a>
          </h5>
          <p>
            <?php echo $answer['content'] ?>
          </p>
<?php
    if(isset($_SESSION['id']))
      if($_SESSION['id'] == $answer['user_id']) { ?>
          <a class="delete-comment" commentID=<?php echo '"'.$answer['id'].'"' ?> ;> Delete </a>
<?php }?>
        </li>
<?php
  }?>
      </ul>
    </li>
<?php
}?>
  </ul>

</div>

<?php include_once('../templates/footer.php'); ?>
