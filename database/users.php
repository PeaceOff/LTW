<?php
    function userExists($user,$pass,$rpass){

        if($pass != $rpass){
            return;
        }

        global $db;
        $stmt = $db->prepare('SELECT * FROM user WHERE username = :user');
        $user = strtolower($user);
        $stmt->bindParam(':user', $user, PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetch();

        if(password_verify($pass , $result['password'])){
            return true;
        }
        return false;
    }

    function isUser($user){

        global $db;
        $user = strtolower($user);
        $stmt = $db->prepare('SELECT * FROM user WHERE username = :user');
        $stmt->bindParam(':user', $user, PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetch();

        return $result['username'];
    }

    function getUserInfo($user) {

        global $db;
        $user = strtolower($user);
        $stmt = $db->prepare('SELECT * FROM user WHERE username = :user');
        $stmt->bindParam(':user', $user, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch();
    }

    function newUser($props){

        global $db;
        $stmt = $db->prepare('INSERT INTO user (nome, id, picture_id, password, username, description) VALUES (:name,NULL,NULL,:password,:username,:description);');
        $stmt->bindParam(':name', $props[2], PDO::PARAM_STR);
        $pass = password_hash($props[1] , PASSWORD_DEFAULT);
        $stmt->bindParam(':password', $pass, PDO::PARAM_STR);
        $user = strtolower($props[0]);
        $stmt->bindParam(':username', $user, PDO::PARAM_STR);
        $stmt->bindParam(':description', $props[3], PDO::PARAM_STR);
        $stmt->execute();

        return;
    }

    function updateUser($username,$password,$newpass,$rnewpass,$name,$description){

        if($newpass != $rnewpass || !userExists($username,$password,$password)){
            return;
        }
        global $db;
        $user = strtolower($username);
        $stmt = $db->prepare('UPDATE user SET password = :pass, name = :name, description = :description WHERE username = :user');
        $newpass =  password_hash($newpass , PASSWORD_DEFAULT);
        $stmt->bindParam(':pass',$newpass,PDO::PARAM_STR);
        $stmt->bindParam(':name',$name,PDO::PARAM_STR);
        $stmt->bindParam(':description',$description,PDO::PARAM_STR);
        $stmt->bindParam(':user',$username,PDO::PARAM_STR);
        $stmt->execute();

        return;
    }

 ?>
