<?php

	include_once('../database/types.php');

	function getAllRestaurants() {
		global $db;
		$stmt = $db->prepare('SELECT * FROM restaurant');
		$stmt->execute();
		return $stmt->fetchAll();
	}

  function getRestaurant($id) {
    global $db;
    $stmt = $db->prepare(' SELECT * FROM restaurant WHERE id = :id ');
    $stmt->bindParam(':id',$id,PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch();
	}

	function getRestaurantBySearch($search,$typeId,$sugestion) {
    global $db;

		if($typeId != -1){
			if($sugestion)
				$stmt = $db->prepare(' SELECT * FROM viewRestauranType WHERE upper(name) LIKE upper(?) AND type_id = ? ORDER BY name ASC LIMIT 5');
			else
				$stmt = $db->prepare(' SELECT * FROM viewRestauranType WHERE upper(name) LIKE upper(?) AND type_id = ? ORDER BY name ASC');

			$stmt->execute(array("%".$search."%",$typeId));
		}else{
			if($sugestion)
				$stmt = $db->prepare(' SELECT * FROM restaurant WHERE upper(name) LIKE upper(?) ORDER BY name ASC LIMIT 5');
			else
				$stmt = $db->prepare(' SELECT * FROM restaurant WHERE upper(name) LIKE upper(?) ORDER BY name ASC ');

			$stmt->execute(array("%".$search."%"));
		}

  	return $stmt->fetchAll();
  }

	function getRestaurantByOwner($ownerID) {
		global $db;
		$stmt = $db->prepare(' SELECT * FROM restaurant WHERE owner = ? ');
		$stmt->execute(array($ownerID));
		return $stmt->fetchAll();
	}

	function getRestaurantPictures($id){

		global $db;
		$stmt = $db->prepare(' SELECT picture_id FROM restaurantPicture WHERE restaurant_id = :id ');
		$stmt->bindParam(':id',$id,PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetchAll();
	}

	function getReviews($id){
		global $db;
		$stmt = $db->prepare(' SELECT * FROM viewUserReview WHERE restaurant_id = :id ');
		$stmt->bindParam(':id', $id ,PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetchAll();
	}

	function getAnswers($id){
		global $db;
		$stmt = $db->prepare(' SELECT * FROM viewUserAnswer WHERE review = :id ');
		$stmt->bindParam(':id',$id,PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetchAll();
	}


	function insertRestaurant($name,$description,$ownerId,$types,$latitude,$longitude) {
		global $db;

		$stmt = $db->prepare('INSERT INTO restaurant (name,description,owner,latitude,longitude) VALUES(?,?,?,?,?)');
		$stmt->execute(array($name,$description,$ownerId,$latitude,$longitude));

		$restaurantId= $db->lastInsertId();
		removeTypesFromRestaurant($restaurantId);
		updateRestaurantTypes($types,$restaurantId);

		return $restaurantId;

	}

	function updateRestaurantTypes($types, $restaurant_id){
		global $db;
		foreach ($types as $type) {
			$stmt = $db->prepare('INSERT INTO restaurantType (id_restaurant,id_type) VALUES(?,?)');
			$typeSecure= htmlentities($type, ENT_QUOTES, "UTF-8");
			$type_id =getTypebyContent($typeSecure)['id'];
			$stmt->execute(array($restaurant_id,$type_id));
		}
	}

	function updateRestaurant($restaurant_id,$name,$description,$ownerId,$types,$latitude,$longitude) {
		global $db;
		$stmt = $db->prepare('UPDATE restaurant
													SET name = :name ,
													description = :description ,
													owner = :owner,
													latitude = :lat ,
													longitude = :long
													WHERE id = :rest_id');
		$stmt->bindParam(':name', $name, PDO::PARAM_STR);
		$stmt->bindParam(':description', $description, PDO::PARAM_STR);
		$stmt->bindParam(':owner', $ownerId, PDO::PARAM_INT);
		$stmt->bindParam(':lat', $latitude, PDO::PARAM_STR);
		$stmt->bindParam(':long', $longitude, PDO::PARAM_STR);
		$stmt->bindParam(':rest_id', $restaurant_id, PDO::PARAM_INT);
		$stmt->execute();
		removeTypesFromRestaurant($restaurant_id);
		updateRestaurantTypes($types, $restaurant_id);
	}

	function addReview($restaurant, $user_id, $rating, $comment){
		global $db;
		$stmt = $db->prepare('INSERT INTO review(rating, description, restaurant_id, reviewer_id)
													VALUES(:rating, :description, :restaurant_id, :reviewer_id)');

		$stmt->bindParam(':rating', $rating, PDO::PARAM_INT);
		$stmt->bindParam(':description', $comment, PDO::PARAM_STR);
		$stmt->bindParam(':restaurant_id', $restaurant, PDO::PARAM_STR);
		$stmt->bindParam(':reviewer_id', $user_id, PDO::PARAM_STR);
		$stmt->execute();
	}

	function addComment($user_id, $review_id, $comment){
		global $db;
		$stmt = $db->prepare('INSERT INTO awnser(content, review, user)
													VALUES(:content, :review, :user)');

		$stmt->bindParam(':user', $user_id, PDO::PARAM_INT);
		$stmt->bindParam(':review', $review_id, PDO::PARAM_INT);
		$stmt->bindParam(':content', $comment, PDO::PARAM_STR);
		$stmt->execute();
	}

	function deleteComment($id, $user_id){
		global $db;
		$stmt = $db->prepare('DELETE FROM awnser
													WHERE id = :id AND user = :user');
		$stmt->bindParam(':user', $user_id, PDO::PARAM_INT);
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
		$stmt->execute();
	}
	function deleteReview($id, $user_id){
		global $db;
		$stmt = $db->prepare('DELETE FROM review
													WHERE id = :id AND reviewer_id = :user');
		$stmt->bindParam(':user', $user_id, PDO::PARAM_INT);
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
		$stmt->execute();
	}

	function deleteRestaurant($id){
		global $db;
		$stmt = $db->prepare('DELETE FROM restaurant
													WHERE id = :id');
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
		$stmt->execute();
	}




?>
