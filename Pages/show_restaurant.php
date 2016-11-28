<?php

include_once('../templates/header.php');
include_once('../database/connect.php');
include_once('../database/restaurants.php');

$id=$_GET['id'];
$result = getRestaurant($id);
$pictures = getRestaurantPictures($id);
?>
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
<?php } ?>
<?php
    if(isset($_SESSION['username'])){
?>

<form action="">
  <label> Rate: [
    0:<input type="radio" name="Rating" value="0">
    1:<input type="radio" name="Rating" value="1">
    2:<input type="radio" name="Rating" value="2">
    3:<input type="radio" name="Rating" value="3">
    4:<input type="radio" name="Rating" value="4">
    5:<input type="radio" name="Rating" value="5"> ]
  </label> <br>
  <textarea rows="4" cols="50">
    Review:
  </textarea>

  <button class="PostButton"> Post </button>

</form>

<?php }
$reviews = getReviews($id);
?>

<div class="reviews">

  <ul>
<?php foreach ($reviews as $review) { ?>
    <li>
      <h4> <?php echo $review['nome'] ?> </h4>
      <p> <?php echo $review['description']?> </p>

      <ul>
<?php $answers = getAnswers($review['id']);
foreach($answers as $answer){ ?>
        <li>
          <h5> <?php echo $answer['nome'] ?> </h5>
          <p> <?php echo $answer['content'] ?> </p>
        </li>
<?php }?>
      </ul>

    </li>
<?php } ?>
  </ul>

</div>

<?php include_once('../templates/footer.php'); ?>
