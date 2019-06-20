<?php
    // Start the session to get the logged in user details
    session_start();

    //stores string for toggling classes
    $selectedLinkActive = "selectedLinkActive";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- legacy html5 support voor IE -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="assets/css-import/all.css">    
</head>
<body>
        <?php
            require "inlog.php";
        ?>
    <?php require "cmsModel.php"; ?>
    
    <section class="blurring">
    <header class="header">
        <section class="header__icon--hamburger"><section class="icon__hamburger--bars"></section></section>
        <?php
            require "navMentor.php";
        ?>

        <!-- And this is the user who is logged in -->
        <p class="header__login__name"><?php  if(isset($_SESSION['username'])) { echo $_SESSION['username']; } ?></p>

        <!-- this is the login button -->
        <a href='assets/db/logout.php'><section class="header__user"><span class="header__user__login"><?php  if(isset($_SESSION['username'])) { echo "Logout"; }else { echo "Login";}?></span></section></a>


        <section class="header__title">
            <h1 class="header__title__h1 title--1">Inschrijving</h1>
            <h1 class="header__title__h1 title--2">Ouderavond</h1>
        </section>
        <!-- school logo -->
        <figure class="header__logo"><a href="index.php"><img src="assets/img/school.jpg" alt="School-image" class="header__logo--img"></a></figure>
    </header>