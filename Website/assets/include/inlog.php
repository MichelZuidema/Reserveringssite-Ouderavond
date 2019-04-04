<?php

?>
<form class="header__login" method="POST" onsubmit="return inlogValidatie()" action="?">
        <h2>Inloggen</h2>
        <label for="login--username" class="inlog__label--username">Gebruikersnaam:</label>
        <input type="text" id="login--username">
        <p class="inlog__error--cijfer">Je gebruikersnaam mag niet beginnen met een cijfer!</p>
        <p class="inlog__error--empty">Je gebruikersnaam mag niet leeg zijn!</p>
        <label for="login--password" class="inlog__label--password">Wachtwoord:</label>
        <input type="text" id="login--password">
        <p class="inlog__error--password">Je wachtwoord mag niet leeg zijn!</p>
        <input type="submit" class="login__submit" value="Inloggen">
</form>