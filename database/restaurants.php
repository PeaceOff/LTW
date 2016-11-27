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

	function getRestaurantBySearch($search) {
    global $db;

		$stmt = $db->prepare(' SELECT * FROM restaurant WHERE upper(name) LIKE upper(?) ');
    $stmt->execute(array("%".$search."%"));

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
		$stmt = $db->prepare(' SELECT content, nome FROM viewUserAnswer WHERE review = :id ');
		$stmt->bindParam(':id',$id,PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetchAll();
	}

?>
