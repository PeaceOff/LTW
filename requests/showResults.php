<?php

include_once('../database/connect.php');
include_once('../database/restaurants.php');
?>

<?php
$search=$_GET['search'];
$typeId=$_GET['typeId'];
$sugestion= $_GET['sugestion'] == 'true' ? true : false;


$results = getRestaurantBySearch($search,$typeId,$sugestion);

  foreach ($results as &$result) {
    $res = getRestaurantPictures($result['id']);

    if(count($res) != 0){
      $result['picture_path'] = "../images/icon/".  $res[0]['picture_id'] . '.jpg';
        if(!file_exists($result['picture_path'] ))
            $result['picture_path']  = "../images/icon/error.jpg";
    }
    else
      $result['picture_path'] = "../images/icon/error.jpg";
  }


echo json_encode($results);

?>
