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

?>
