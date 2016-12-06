<?php
  include_once("../database/connect.php");

  function addSchedule($restaurant_id, $type_id, $begin, $end){
    global $db;
    $stmt = $db->prepare('INSERT INTO schedule (type_id,begin,end,restaurant_id) VALUES(?,?,?,?)');
    $stmt->execute(array( $type_id, $begin, $end,$restaurant_id));
  }

  function getSchedule($schedule_id){
    global $db;
    $stmt = $db->prepare('SELECT * FROM schedule WHERE id = ?');
    $stmt->execute(array($schedule_id));
    return $stmt->fetch();
  }

  function getSchedule2($restaurant_id, $type_id){
    global $db;
    $stmt = $db->prepare('SELECT * FROM schedule WHERE type_id = ? AND restaurant_id = ?');
    $stmt->execute(array( $type_id,$restaurant_id));
    return $stmt->fetch();
  }

  function getSchedules($restaurant_id){
    global $db;
    $stmt = $db->prepare('SELECT * FROM viewSchedule WHERE restaurant_id = ?');
    $stmt->execute(array($restaurant_id));
    return $stmt->fetchAll();
  }

  function updateSchedule($id, $type_id, $begin, $end){ //Se existir update!
    global $db;
    $stmt = $db->prepare("UPDATE schedule
                          SET
                          type_id = :type,
                          begin = :begin,
                          end = :end
                          WHERE id = :id");
    $stmt->bindParam(':type', $type_id, PDO::PARAM_INT);
    $stmt->bindParam(':begin', $begin, PDO::PARAM_STR);
    $stmt->bindParam(':end', $end, PDO::PARAM_STR);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
  }

  function removeSchedule($id){
    global $db;
    $stmt = $db->prepare('DELETE FROM schedule WHERE id = ?');
    $stmt->execute(array($id));
  }

  function removeSchedule2($restaurant_id, $type_id){
    global $db;
    $stmt = $db->prepare('DELETE FROM schedule WHERE restaurant_id = ? AND type_id = ?');
    $stmt->execute(array($restaurant_id, $type_id));
  }

  function getScheduleTypes(){
    global $db;
    $stmt = $db->prepare('SELECT * FROM scheduleType');
    $stmt->execute();
    return $stmt->fetchAll();
  }

?>
