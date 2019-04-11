<?php
ini_set('display_errors', 1);

require_once 'database.class.php';
require_once 'Controllers/UserController.php';
$user = new UserController();

if (isset($_GET["token"]) && preg_match('/\b([a-f0-9]{40})\b/', $_GET['token'])) {
    if ($user->UniqueLinkValidation($_GET['token'])) {
        echo "Ingelogd als " . $_SESSION['username'] . " van klas: " . $_SESSION['class_id'];
    } else {
        echo $_SESSION['errormsg'];
    }
} else {
    echo "U heeft geen geldige token ingevoerd!";
}

// Michel - c5b312884352253d711492452af163832ae777a9
// Sebas - b7978eba62455e47dee77ec010b7027de4b8aba2

?>