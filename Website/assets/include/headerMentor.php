<?php
    // Start the session to get the logged in user details
    session_start();
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
    <header>
        <section><section></section></section>
        <nav>
            <article><div></div></article>
            <ul>
                <li><a href="index.php" class="<?php echo $selectedLink; ?>">Inloggen</a></li>
                <li><a href="tijdschema.php">Tijdschema</a></li>
                <li><a href="">GLR website</a></li>
                <li><a href="contact.html">Notities</a></li>
            </ul>
        </nav>
        <section>
            <h1>Inschrijving</h1>
            <h1>Ouderavond</h1>
        </section>
        <figure><a href="index.html"><img src="assets/img/school.jpg" alt="School-image"></a></figure>
    </header>