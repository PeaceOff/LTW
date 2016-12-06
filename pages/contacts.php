<?php
include_once('../templates/header.php');
?>

<div id="contactContainer">
    <form id="contactForm" action="../database/action_go_home.php" method="post">
        <h2>Contact Us</h2>
        <input type="text" name="name" placeholder="Your Name *" value="<?php if(isset($_SESSION['username'])) echo $_SESSION['name']; ?>" required/>
        <input type="email" name="email" placeholder="Email Address *" required/>
        <textarea name="description" type="text" placeholder="If you have any questions and/or bugs to the report or you just wanna say hi, send us a message! *" maxlength="300" rows="6" cols="50"/></textarea>
        <input class="especial" type="submit" value="Send" />
    </form>
</div>

<?php
include_once('../templates/footer.php');
?>
