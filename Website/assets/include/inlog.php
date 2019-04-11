<?php
ini_set('display_errors', 'On');

require_once($_SERVER['DOCUMENT_ROOT'] . "/Ouderavond/Website/assets/db/database.class.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/Ouderavond/Website/assets/db/Controllers/UserController.php");

// Check if submit button has been clicked
if (isset($_POST['submit'])) {

    // Get user input
    $username = htmlspecialchars($_POST['inputName']);
    $password = htmlspecialchars($_POST['inputPassword']);

    $user = new UserController();

    // Login validation
    if ($user->MentorLoginProcess($username, $password)) {
        echo $_SESSION['succmsg'];
    } else {
        echo $_SESSION['errormsg'];
    }
}
?>
<form class="header__login" method="POST" onsubmit="return inlogValidatie()" action="?">
    <h2>Inloggen</h2>
    <label for="login--username" class="inlog__label--username">Gebruikersnaam:</label>
    <input type="text" id="login--username" name="inputName">
    <p class="inlog__error--cijfer">Je gebruikersnaam mag niet beginnen met een cijfer!</p>
    <p class="inlog__error--empty">Je gebruikersnaam mag niet leeg zijn!</p>
    <label for="login--password" class="inlog__label--password">Wachtwoord:</label>
    <input type="password" id="login--password" name="inputPassword">
    <p class="inlog__error--password">Je wachtwoord mag niet leeg zijn!</p>
    <input type="submit" class="login__submit" value="Inloggen" name="submit">
</form>