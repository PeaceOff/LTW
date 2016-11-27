<?php
    if(isset($_SESSION['username'])){
?>

<label> Logged in as: <?php echo $_SESSION['username'] ?> </label>
<a href="../database/action_logout.php">Logout</a>

<?php }else{ ?>

<form action="../database/action_login.php" method="post">
  <label>Username: <input type="text" name="username"> </label>
  <label>Password: <input type="password" name="password"> </label>
  <input type="submit" value="Login">
  <a href="../Pages/register.php">Register</a>
</form>

<?php } ?>
