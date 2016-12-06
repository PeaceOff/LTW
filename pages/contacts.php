<?php
include_once('../templates/header.php');
?>

<div class="form-style-6">
    <h1>Contact Us</h1>
    <form id="contactForm" action="../database/action_go_home.php" method="post">
        <input type="text" name="field1" placeholder="Your Name" value="<?php if(isset($_SESSION['username'])) echo $_SESSION['name']; ?>" required/>
        <input type="email" name="field2" placeholder="Email Address" required/>
        <textarea name="field3" placeholder="Type your Message" required></textarea>
        <input type="submit" value="Send" />
    </form>
</div>

<?php
include_once('../templates/footer.php');
?>
