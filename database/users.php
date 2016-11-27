<?php
    function userExists($user,$pass){
        global $db;
        $stmt = $db->prepare('SELECT * FROM user WHERE username = :user');
        $stmt->bindParam(':user', $user, PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetch();

        if( $result['password'] == hash('sha256',$pass){
            return true;
        }
        return false;
    }
 ?>
