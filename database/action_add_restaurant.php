<?php
    session_start();

    include_once('../database/connect.php');
    include_once('../database/restaurants.php');
    include_once('../database/users.php');
    include_once('../database/types.php');
    include_once('../database/schedule.php');

    if(!isset($_SESSION['username'])){
      header('Location: ../pages/home.php#home');
      exit();
    }

    $ownerId = getUserInfo($_SESSION['username'])['id'];
    $name = htmlentities($_POST['name'], ENT_QUOTES, "UTF-8");
    $description = htmlentities($_POST['description'], ENT_QUOTES, "UTF-8");

    if(isset($_POST['types']))
      $types = $_POST['types'];
    else
      $types= array();

    $latitude = htmlentities($_POST['latitude'], ENT_QUOTES, "UTF-8");
    $longitude = htmlentities($_POST['longitude'], ENT_QUOTES, "UTF-8");


    $restaurant_id = insertRestaurant($name,$description,$ownerId,$types,$latitude,$longitude);

    $sch_type = htmlentities($_POST['sch_type'], ENT_QUOTES, "UTF-8");
    $sch_open = htmlentities($_POST['sch_open'], ENT_QUOTES, "UTF-8");
    $sch_close = htmlentities($_POST['sch_close'], ENT_QUOTES, "UTF-8");

    if($sch_type != "week"){
      header('Location: ../pages/home.php#home');
      exit();
    }

    $sch_type=9;
    addSchedule($restaurant_id, $sch_type, $sch_open, $sch_close);

//images
     $imageId = addRestaurantImage($restaurant_id);

     $originalFilePath= '../images/original/' . $imageId . '.jpg';
     $mediumFilePath= '../images/medium/' . $imageId . '.jpg';
     $iconFilePath= '../images/icon/' . $imageId . '.jpg';


     move_uploaded_file($_FILES['image']['tmp_name'],$originalFilePath);

     $original=imagecreatefromjpeg($originalFilePath);

     $width = imagesx($original);
     $height = imagesy($original);
     $square = min($width, $height);


     $icon = imagecreatetruecolor(50, 50);
     imagecopyresized($icon, $original, 0, 0, ($width>$square)?($width-$square)/2:0, ($height>$square)?($height-$square)/2:0, 50, 50, $square, $square);
     imagejpeg($icon, $iconFilePath);

     $mediumwidth = $width;
     $mediumheight = $height;

     if ($mediumwidth > 400) {
       $mediumwidth = 400;
       $mediumheight = $mediumheight * ( $mediumwidth / $width );
     }

     $medium = imagecreatetruecolor($mediumwidth, $mediumheight);
     imagecopyresized($medium, $original, 0, 0, 0, 0, $mediumwidth, $mediumheight, $width, $height);
     imagejpeg($medium, $mediumFilePath);



    header('Location: ../pages/home.php#home');
    exit();
 ?>
