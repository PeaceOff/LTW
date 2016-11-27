<?php

    include_once('../templates/header.php');

    if(isset($_SESSION['username'])){
        header('Location: ../Pages/home.php');
        exit();
    }
?>

<div id="register" class="animate form">
    <form  action="../database/action_register.php" method="post">
        <h1> Sign up </h1>
        <label>Your username</label>
        <input name="username" required="required" type="text"/>
        </br>
        <label>Your password </label>
        <input name="password" required="required" type="password"/>
        </br>
        <label> Your Name</label>
        <input name="name" required="required" type="text"/>
        </br>
        <label> About Yourself</label>
        <input name="description" type="textarea"/>
        </br>
        <input type="submit" value="Register"/>
    </form>
</div>
<?php
    include_once('../templates/footer.php');
 ?>
