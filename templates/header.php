<!DOCTYPE html>
<html lang="en">
    <head>
        <title>RestaurantWizz</title>
        <meta charset="UTF-8">
        <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/1/14/%D9%85%D8%B7%D8%A7%D8%B9%D9%85.png">
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"> </script>
        <script type="text/javascript" src="../javascript/login.js"></script>
        <script type="text/javascript" src="../javascript/jquery.flexslider-min.js"></script>
        <script type="text/javascript" src="../javascript/portrait.js"> </script>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/flexslider.css">
        <link rel="stylesheet" href="../css/forms.css">
    </head>
    <body>
      <div class="portrait">
        <div class="background"> </div>
        <h1 class="intro"> RestaurantWizz </h1>
        <div class="foreground"> </div>
      </div>

      <?php session_start() ?>
      <nav>
          <ul>
              <li><a id="home" href="../pages/home.php#home">Home</a></li>
              <li><a id="contact" href="../pages/contacts.php#contact">Contact</a></li>
              <li><a id="about" href="../pages/about.php#about">About</a></li>
              <li id="loginNav"><?php include('login.php') ?></li>
          </ul>
      </nav>
