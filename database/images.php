<?php

function addImage($restaurant_id,$file){

  if($restaurant_id == -1)//it´s a user image
    $imageId = addUserImage();
  else
    $imageId = addRestaurantImage($restaurant_id);

  $originalFilePath= '../images/original/' . $imageId . '.jpg';
  move_uploaded_file($file,$originalFilePath);
  $original=imagecreatefromjpeg($originalFilePath);


  $mediumFilePath= '../images/medium/' . $imageId . '.jpg';
  $iconFilePath= '../images/icon/' . $imageId . '.jpg';

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

  return $imageId;

}
function addRestaurantImage($restaurantId){
  global $db;

  $stmt = $db->prepare('INSERT INTO picture DEFAULT VALUES');
  $stmt->execute();

  $pictureId=$db->lastInsertId();

  $stmt = $db->prepare('INSERT INTO restaurantPicture (picture_id,restaurant_id) VALUES(?,?)');
  $stmt->execute(array($pictureId,$restaurantId));

  return $pictureId;
}

function deleteImage($image_id){
  $originalFilePath= '../images/original/' . $image_id . '.jpg';
  $mediumFilePath= '../images/medium/' . $image_id . '.jpg';
  $iconFilePath= '../images/icon/' . $image_id . '.jpg';

  unlink($originalFilePath);
  unlink($mediumFilePath);
  unlink($iconFilePath);

  global $db;

  $stmt = $db->prepare('DELETE FROM picture WHERE id = ?');
  $stmt->execute(array($image_id));

  $stmt = $db->prepare('DELETE FROM restaurantPicture WHERE picture_id = ?');
  $stmt->execute(array($image_id));
}

function addUserImage(){
  global $db;

  $stmt = $db->prepare('INSERT INTO picture DEFAULT VALUES');
  $stmt->execute();

  return $db->lastInsertId();
}


?>
