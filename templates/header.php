<!DOCTYPE html>
<html lang="en">
    <head>
        <title>RestaurantWizz</title>
        <meta charset="UTF-8">
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"> </script>
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <?php session_start() ?>
        <nav>
            <ul>
                <li><a id="home" href="../Pages/home.php#home">Home</a></li>
                <li><a id="news" href="#news">News</a></li>
                <li><a id="contact" href="../Pages/contacts.php#contact">Contact</a></li>
                <li><a id="about" href="../Pages/about.php#about">About</a></li>
                <li><?php include('login.php') ?></li>
            </ul>
        </nav>
