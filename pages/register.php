<?php

    include_once('../templates/header.php');

    if(isset($_SESSION['username'])){
        header('Location: ../pages/home.php#home');
        exit();
    }
?>

<script type="text/javascript" src="../javascript/register.js"></script>
<div id="register" class="animate form" >
    <form id="registerForm" action="../database/action_register.php" method="post" enctype="multipart/form-data">
        <h1>Sign up it's free!</h1>
        <label>Your username</label>
        <input name="username" required="required" type="text"/>
        </br>
        <label>Your password </label>
        <input name="password" required="required" pattern=".{8,}" title="Password must be at least 8 characters long!" type="password"/>
        </br>
        <label>Confirm Password </label>
        <input name="rpassword" required="required" type="password"/>
        </br>
        <label> Your Name</label>
        <input name="name" required="required" type="text"/>
        </br>
        <label> About Yourself</label>
        <textarea name="description" type="text" maxlength="300" rows="6" cols="50"/></textarea>
        </br>
        <label>Upload a picture</label>
        <input class="special" type="file" name="image">
        </br>
        </br>
        <input class="special" type="submit" value="Register"/>
    </form>
</div>


<?php
    include_once('../templates/footer.php');
 ?>
