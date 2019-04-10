<?php
ini_set('display_errors', 'On');

require_once 'classes.php';

// Check if submit button has been clicked
if(isset($_POST['submit'])) {

    // Get user input
    $username = htmlspecialchars($_POST['inputName']);
    $password = htmlspecialchars($_POST['inputPassword']);

    // Login validation
    if($user->MentorLoginProcess($username, $password)) {
        return;
    } else {
        die("<script>alert('Er is iets foutgegeaan bij het inloggen!')</script>");
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