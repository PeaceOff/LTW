<?php

  function getAllTypes() {
    global $db;
    $stmt = $db->prepare('SELECT * FROM type');
    $stmt->execute();
    return $stmt->fetchAll();
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
