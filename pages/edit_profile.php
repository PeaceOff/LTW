<?php
    include_once('../templates/header.php');
    include_once('../database/connect.php');
    include_once('../database/users.php');

    $id = $_GET['id'];

    if($id != $_SESSION['id']){
        header('Location: ../pages/home.php#home');
        exit();
    }
?>

<script type="text/javascript" src="../javascript/edit.js"></script>
<div id="user_info" class="animate form">
    <form id="userProfileForm" action="../database/action_update_user.php" method="post">
        <h1> Edit your profile WIN BIG! @russianHacks.com </h1>
        <label>Your username is </label>
        <input name="username" type="text" value="<?php echo $_SESSION['username']?>" disabled/>
        </br>
        <label>Current Password </label>
        <input name="password" type="password"/>
        </br>
        <label>New Password </label>
        <input name="npassword" pattern=".{8,}" title="Password must be at least 8 characters long!" type="password" value=""/>
        </br>
        <label>Confirm Password </label>
        <input name="rpassword" type="password" value=""/>
        </br>
        <label> Your Name</label>
        <input name="name" type="text" value="<?php echo $_SESSION['name']?>"/>
        </br>
        <label> About Yourself</label>
        <textarea name="description" type="text" maxlength="300" rows="6" cols="50" style="resize: none;"/><?php echo $_SESSION['description'] ?></textarea>
        </br>
        <input type="submit" value="Edit"/>
    </form>
</div>
<?php
    include_once('../templates/footer.php');
?>
