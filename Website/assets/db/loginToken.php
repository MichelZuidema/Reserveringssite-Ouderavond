<?php

require("UserController.php");
$user = new UserController();

ini_set('display_errors', 'On');

if (isset($_GET["token"])) {
    if($user->UniqueLinkValidation($_GET['token'])) {
        echo "Ingelogd als " . $_SESSION['username'] . " van klas: " . $_SESSION['class_id'];
    } else {
        echo $_SESSION['errormsg'];
    }
}
else {
    echo "U heeft geen token ingevoerd.";
}

// Michel - c5b312884352253d711492452af163832ae777a9
// Sebas - b7978eba62455e47dee77ec010b7027de4b8aba2

?>