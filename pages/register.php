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
        <h2>Sign up it's free!</h2>
        <input name="username" required="required" pattern="[a-zA-Z0-1]{4,}" placeholder="Username *" type="text"/>
        <input name="password" required="required" placeholder="Password *" pattern=".{8,}" title="Password must be at least 8 characters long!" type="password"/>
        <input name="rpassword" placeholder="Confirm Password *" required="required" type="password"/>
        <input name="name" required="required" placeholder="Your Name *" type="text"/>
        <textarea name="description" type="text" placeholder="Tell us a bit about yourself!" maxlength="300" rows="6" cols="50"/></textarea>
        </br>
        </br>
        <label>Upload a picture</label>
        <input class="special" type="file" name="image">
        </br>
        <input class="special" type="submit" value="Register"/>
    </form>
</div>


<?php
    include_once('../templates/footer.php');
 ?>
