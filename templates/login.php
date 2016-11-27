<?php
  $logged = false;
  if($logged){
?>

<label> Logged in as: Batata Frita </label>

<?php }else{ ?>

<form action="/database/action_login.php" method="post">
  <label>Username: <input type="text" name="username"> </label>
  <label>Password: <input type="password" name="password"> </label>
  <input type="submit" value="Login">
</form>

<?php } ?>
