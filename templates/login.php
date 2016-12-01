<?php
    if(isset($_SESSION['username'])){
?>

<label> Logged in as:<a href="../pages/user_profile.php?username=<?php echo $_SESSION['username']?>"><?php echo $_SESSION['username'] ?></a></label>
<a href="../database/action_logout.php">Logout</a>

<?php }else{ ?>

<form id="loginForm" action="../database/action_login.php" method="post">
  <label>Username: <input type="text" name="username"> </label>
  <label>Password: <input type="password" name="password"> </label>
  <input type="submit" value="Login">
  <a href="../pages/register.php">Register</a>
</form>
<?php } ?>
