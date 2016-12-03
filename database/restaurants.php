<?php


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

	function getRestaurantBySearch($search,$typeId) {
    global $db;

		if($typeId != -1){
			$stmt = $db->prepare(' SELECT * FROM restaurant WHERE upper(name) LIKE upper(?) AND type_id = ? ');
			$stmt->execute(array("%".$search."%",$typeId));
		}else{
			$stmt = $db->prepare(' SELECT * FROM restaurant WHERE upper(name) LIKE upper(?)');
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


	function insertRestaurant($name,$description,$ownerId,$typeId,$latitude,$longitude) {
		global $db;
		$stmt = $db->prepare('INSERT INTO restaurant (name,description,owner,type_id,latitude,longitude) VALUES(?,?,?,?,?,?)');
		$stmt->execute(array($name,$description,$ownerId,$typeId,$latitude,$longitude));

		return;
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
