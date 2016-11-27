<?php
  try {
     $db = new PDO('sqlite:/restaurantWizz.db');
  } catch (PDOException $e) {
     die($e->getMessage());
  }
?>
