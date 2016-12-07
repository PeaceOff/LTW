<?php
    if(isset($_SESSION['username'])){

      if($_SESSION['picture_id'] != null){
        $path = "../images/icon/". $_SESSION['picture_id'] . '.jpg';

        if(!file_exists($path))
          $path = '../images/error.jpg';
?>
<li id=loginNav>
<a class="usrImg" href="../pages/user_profile.php?username=<?php echo $_SESSION['username']?>"> <img src="<?php echo $path ?>"/> </a>
<?php } ?>
<label>Logged in as:<a id="loggedUser" href="../pages/user_profile.php?username=<?php echo $_SESSION['username']?>"><?php echo $_SESSION['username'] ?></a></label>
<a class="logoutBtn" href="../database/action_logout.php">Logout</a>

<?php }else{ ?>
<li>
<a id="register" class="registerBtn" href="../pages/register.php#register">Register</a>
</li>
<li id=loginNav>
<form id="loginForm" action="../database/action_login.php" method="post">
  <input type="text" placeholder="Username" name="username">
  <input type="password" placeholder="Password" name="password">
  <input class="special" type="submit" value="Login">
</form>
<?php } ?>
</li>
