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
    <header class="header">
        <section class="header__icon--hamburger"><section class="icon__hamburger--bars"></section></section>
        <nav class="header__nav">
            <article class="header__icon--cross"><div class="icon__cross--bars"></div></article>
            <ul class="header__ul">
                <!-- changes styles depening on the page -->
                <li class="header__li"><a href="index.php" class="<?php if($selectedLink == "index"){ echo $selectedLinkActive;} ?> header__anker">Homepagina</a></li>
                <li class="header__li"><a href="mentor.php" class="<?php if($selectedLink == "tijdschema"){ echo $selectedLinkActive;} ?> header__anker">Tijdschema</a></li>
                <li class="header__li"><a href="https://www.glr.nl/" class="header__anker">GLR website</a></li>
                <li class="header__li"><a href="mentorTijdschema.php" class="<?php if($selectedLink == "contact"){ echo $selectedLinkActive;} ?> header__anker">Contactpagina</a></li>
            </ul>
        </nav>
        <section class="header__user"><span class="header__user__login"><?php  if(isset($_SESSION['username'])) { echo $_SESSION['username']; } else { echo "Inloggen"; } ?></span></section>
        <section class="header__title">
            <h1 class="header__title__h1 title--1">Inschrijving</h1>
            <h1 class="header__title__h1 title--2">Ouderavond</h1>
        </section>
        <!-- school logo -->
        <figure class="header__logo"><a href="index.php"><img src="assets/img/school.jpg" alt="School-image" class="header__logo--img"></a></figure>
        <?php
            require "inlog.php";
        ?>
    </header>