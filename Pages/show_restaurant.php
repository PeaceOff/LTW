<?php

include_once('../templates/header.php');
include_once('../database/connect.php');
include_once('../database/restaurants.php');

$id=$_GET['id'];
$result = getRestaurant($id);
$pictures = getRestaurantPictures($id);
?>
<script src="../Javascript/reply.js"> </script>
<div class="restaurantInfo">

<h3> <?php echo  $result['name'] ?> </h3>
<p> <?php echo $result['description'] ?> </p>
</div>

<?php if(count($pictures) > 0 ){ ?>
<div class="image-slide">
  <ul>

<?php
foreach( $pictures as $picture ) {
  $path = "../images/". $picture['picture_id'];
  if(!file_exists($path))
    $path = '../images/error.jpg';
?>
    <li> <img src= <?php echo $path ?> > </li>
<?php } ?>
  </ul>
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
<?php
  }
?>

<?php }
$reviews = getReviews($id);
?>

<div class="reviews">

  <ul>
<?php foreach ($reviews as $review) {?>
    <li>
      <h4> <?php echo $review['nome'] ?> </h4>
      <h6> <?php echo $review['rating'] ."/5" ?> </h6>
      <p> <?php echo $review['description']?> </p>
<?php
    if(isset($_SESSION['username'])){
?>
      <a class="reply" reviewID=<?php echo '"'.$review['id'].'"' ?> ;> Reply </a>
  <?php if(isset($_SESSION['id']))
          if($_SESSION['id']== $review['user_id']) { ?>
      <a class="delete-review" reviewID=<?php echo '"'.$review['id'].'"' ?> ;> Delete </a>
  <?php   }?>
<?php
    }
?>
      <ul>
<?php $answers = getAnswers($review['id']);
foreach($answers as $answer){?>
        <li>
          <h5> <?php echo $answer['nome'] ?> </h5>
          <p> <?php echo $answer['content'] ?> </p>
    <?php if(isset($_SESSION['id']))
            if($_SESSION['id'] == $answer['user_id']) { ?>
          <a class="delete-comment" commentID=<?php echo '"'.$answer['id'].'"' ?> ;> Delete </a>
    <?php }?>
        </li>
<?php }?>
      </ul>

    </li>
<?php } ?>
  </ul>

</div>

<?php include_once('../templates/footer.php'); ?>
