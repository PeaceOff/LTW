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

  <div class="page">
    <h1 class="title">
      <?php echo "<span>" . $result['name'] . "</span>" ?>
    </h1>
  </div>

  <div class="page">
    <h2 class="average">
      <?php echo getAVG($id) ?>
    </h2>
    <i class="fa fa-star" aria-hidden="true"></i>
  </div>

  <div class="page">
    <div id="restaurant_types">


    <ul >

<?php
$restaurantTypes = getTypesbyID($id);
if(count($restaurantTypes) == 0 )
  echo "<p> This restaurant doesn't have types at the moment </p>";
foreach($restaurantTypes as $rest_type){?>

      <li>
        <?php echo $rest_type['content'] ?>
      </li>

<?php
}?>

    </ul>
  </div>
  </div>

<div class="page">
  <div id = "restaurant_description">
  <h2> Description</h2>
  <p >
    <?php echo $result['description']?>
  </p>
</div>
</div>
<div class="page">
  <div class="galleryAndLocation">
    <h2> Gallery</h2>
    <h2> Location </h2>
  </div>
</div>
<div class="page">
  <div class="restaurantIteraction">

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
  </label>

  <div id="map" lat="<?php echo $result['latitude'] ?>" lng="<?php echo $result['longitude'] ?>"></div>

  </div>
</div>

<div class="page">
<div class="schedules">
  <h2> Schedules: </h2>
  <ul>

<?php
  $schedules = getSchedules($id);

  if(count($schedules) == 0)
    echo "<h3> There are no schedules available for this restaurant at the moment</h3>";

  foreach($schedules as $schedule){?>
      <li>
        <h3>
          <?php echo ucfirst($schedule['name']) ?>
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
</div>


<?php
  $reviews = getReviews($id);

  if(isset($_SESSION['username']) && $_SESSION['id'] != $result['owner']){

  $alreadyMadeReview=false;
  foreach ($reviews as $review) {
    if($review['user_id'] == $_SESSION['id']){
      $alreadyMadeReview=true;
      break;
    }
  }
  if(!$alreadyMadeReview){
?>

<div class="page">
<div id="makeReview">
  <h2>Make a review</h2>
  <form action="../database/action_review.php" class="review" method="post">
    <input type="hidden" name="id" value= <?php echo '"'.$id.'"' ?> > </input>
    <span class="rating">
      <input class="rating-input" type="radio" name="rating" value="5"/>
      <label class="rating-star"> </label>
      <input class="rating-input" type="radio" name="rating" value="4"/>
      <label class="rating-star"> </label>
      <input class="rating-input" type="radio" name="rating" value="3"/>
      <label class="rating-star"> </label>
      <input class="rating-input" type="radio" name="rating" value="2" checked/>
      <label class="rating-star"> </label>
      <input class="rating-input" type="radio" name="rating" value="1"/>
      <label class="rating-star"> </label>
      <input class="rating-input" type="radio" name="rating" value="0"/>
      <label class="rating-star"> </label>
    </span>
    <br>
      <textarea rows="4" cols="50" name="message"></textarea>
    <button class="PostButton"> Post </button>
  </form>
</div>
</div>



<?php }}
?>
<div class="page">
<h2> Current Reviews: </h2>
</div>

<div class="page">
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
      <h6 class="average"> <?php echo $review['rating'] ?> </h6>
      <p> <?php echo $review['description']?> </p>
<?php
  if(isset($_SESSION['username'])){
?>
      <a class="reply" reviewID=<?php echo '"'.$review['id'].'"' ?> ;> Reply </a>
<?php
  if(isset($_SESSION['id']))
    if($_SESSION['id']== $review['user_id']) { ?>
      <a class="delete-review" reviewID=<?php echo '"' . $review['id'] . '"' ?> ;> Delete </a>
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
</div>
</div>


<?php include_once('../templates/footer.php'); ?>
