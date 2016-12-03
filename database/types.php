<?php

  function getAllTypes() {
    global $db;
    $stmt = $db->prepare('SELECT * FROM type');
    $stmt->execute();
    return $stmt->fetchAll();
  }

  function getTypebyID($id) {
    global $db;
    $stmt = $db->prepare('SELECT * FROM type WHERE id = :id');
    $stmt->execute(array($id));
    return $stmt->fetch()['content'];
  }

  function getTypebyContent($content) {
    global $db;
    $stmt = $db->prepare('SELECT * FROM type WHERE content = ?');
    $stmt->execute(array($content));
    return $stmt->fetch();
  }

  function insertType($content) {
    global $db;
    $stmt = $db->prepare('INSERT INTO type (content) VALUES(?)');
    $stmt->execute(array($content));

    return;
  }


?>
