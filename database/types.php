<?php

  function getAllTypes() {
    global $db;
    $stmt = $db->prepare('SELECT * FROM type');
    $stmt->execute();
    return $stmt->fetchAll();
  }


?>
