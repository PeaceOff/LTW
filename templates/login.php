<?php
    if(isset($_SESSION['username'])){
?>

<label> Logged in as: <?php echo $_SESSION['username'] ?> </label>
<a href="../database/action_logout.php">Logout</a>

<?php }else{ ?>

<form id="loginForm" action="../database/action_login.php" method="post">
  <label>Username: <input type="text" name="username"> </label>
  <label>Password: <input type="password" name="password"> </label>
  <input type="submit" value="Login">
  <a href="../pages/register.php">Register</a>
</form>

<script type="text/javascript">

    $( "form#loginForm" ).submit(function( event ) {
        var value = $("form#loginForm input[name='password']").val();
        var hash = new Hashes.SHA1().hex(value);
        $("form#loginForm input[name='password']").val(hash);
    });

</script>

<?php } ?>
