<?php
    function userExists($user,$pass){
        global $db;
        $stmt = $db->prepare('SELECT * FROM user WHERE username = :user');
        $stmt->bindParam(':user', $user, PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetch();

        if( $result['password'] == hash('sha256',$pass)){
            return true;
        }
        return false;
    }

    function isUser($user){
        global $db;
        $stmt = $db->prepare('SELECT * FROM user WHERE username = :user');
        $stmt->bindParam(':user', $user, PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetch();

        return $result['username'];
    }

    function getUserInfo($user) {
        global $db;
        $stmt = $db->prepare('SELECT * FROM user WHERE username = :user');
        $stmt->bindParam(':user', $user, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch();
    }

    function newUser($props){

        global $db;
        $stmt = $db->prepare('INSERT INTO user (nome, id, picture_id, password, username, description) VALUES (:name,NULL,NULL,:password,:username,:description);');
        $stmt->bindParam(':name', $props[2], PDO::PARAM_STR);
        $pass = hash('sha256',$props[1]);
        $stmt->bindParam(':password', $pass, PDO::PARAM_STR);
        $stmt->bindParam(':username', $props[0], PDO::PARAM_STR);
        $stmt->bindParam(':description', $props[3], PDO::PARAM_STR);
        $stmt->execute();

        return;
    }

    
 ?>
