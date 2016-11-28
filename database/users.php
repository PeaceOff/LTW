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
        $stmt->bindParam(':name', $props['name'], PDO::PARAM_STR);
        $pass = hash('sha256',$props['password']);
        $stmt->bindParam(':password', $pass, PDO::PARAM_STR);
        $stmt->bindParam(':username', $props['username'], PDO::PARAM_STR);
        $stmt->bindParam(':description', $props['description'], PDO::PARAM_STR);
        $stmt->execute();

        return;
    }

    
 ?>
