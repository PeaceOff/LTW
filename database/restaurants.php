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

	function insertRestaurant($name,$description,$ownerId,$typeId) {
		global $db;
		$stmt = $db->prepare('INSERT INTO restaurant (name,description,owner,type_id) VALUES(?,?,?,?)');
		$stmt->execute(array($name,$description,$ownerId,$typeId));

		return;
	}

?>
