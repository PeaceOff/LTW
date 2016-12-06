<?php

  function getAllTypes() {
    global $db;
    $stmt = $db->prepare('SELECT * FROM type ORDER BY content ASC');
    $stmt->execute();
    return $stmt->fetchAll();
  }

  function getTypesbyID($id) {
    global $db;
    $stmt = $db->prepare('SELECT type_id, content FROM viewRestauranType WHERE id = :id');
    $stmt->execute(array($id));
    return $stmt->fetchAll();
  }

  function getTypebyContent($content) {
    global $db;
    $stmt = $db->prepare('SELECT * FROM type WHERE content = ?');
    $stmt->execute(array($content));
    return $stmt->fetch();
  }

  function removeTypesFromRestaurant($restaurant_id) {
    global $db;
    $stmt = $db->prepare('DELETE FROM restaurantType WHERE id_restaurant = ?');
    $stmt->execute(array($restaurant_id));
  }

  function insertType($content) {
    global $db;
    $stmt = $db->prepare('INSERT INTO type (content) VALUES(?)');
    $stmt->execute(array($content));

    return;
  }


?>
