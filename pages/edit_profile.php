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
<div id="userProfileForm" class="animate form">
    <form action="../database/action_update_user.php" method="post">
        <h2>Edit your profile</h2>
        <input name="username" type="text" placeholder="Username" value="<?php echo $_SESSION['username']?>" disabled/>
        </br>
        <input name="password" placeholder="Password *" type="password" required/>
        </br>
        <input name="npassword" placeholder="New Password" pattern=".{8,}" title="Password must be at least 8 characters long!" type="password" value=""/>
        </br>
        <input name="rpassword" placeholder="Confirm New Password" type="password" value=""/>
        </br>
        <input name="name" type="text" placeholder="New Name" value="<?php echo $_SESSION['name']?>"/>
        </br>
        <textarea name="description" type="text" placeholder="Change your description" maxlength="300" rows="6" cols="50" style="resize: none;"/><?php echo $_SESSION['description'] ?></textarea>
        </br>

        <input class="special" type="submit" value="Edit"/>
    </form>

    <form action="../database/action_update_user_image.php" method="post"  enctype="multipart/form-data">
      <?php
        if($_SESSION['picture_id'] != null){
          $path = "../images/medium/". $_SESSION['picture_id'] . '.jpg';

          if(!file_exists($path))
            $path = '../images/error.jpg';
        ?>

        <img src="<?php echo $path ?>"/> </br>

      <?php } ?>
        <input type="file" name="image" > </br>
        <input type="submit" value="Update Image"/>
    </form>
</div>
<?php
    include_once('../templates/footer.php');
?>
