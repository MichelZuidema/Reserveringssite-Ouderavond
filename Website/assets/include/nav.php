<nav class="header__nav">
    <article class="header__icon--cross"><div class="icon__cross--bars"></div></article>
    <ul class="header__ul">
        <!-- changes styles depening on the page -->
        <li class="header__li"><a href="index.php" class="<?php if($selectedLink == "index"){ echo $selectedLinkActive;} ?> header__anker">Homepagina</a></li>
        <li class="header__li"><a href="tijdschema.php" class="<?php if($selectedLink == "tijdschema"){ echo $selectedLinkActive;} ?> header__anker">Tijdschema</a></li>
        <li class="header__li"><a href="https://www.glr.nl/" class="header__anker">GLR website</a></li>
        <li class="header__li"><a href="contact.php" class="<?php if($selectedLink == "contact"){ echo $selectedLinkActive;} ?> header__anker">Contactpagina</a></li>
    </ul>
</nav>