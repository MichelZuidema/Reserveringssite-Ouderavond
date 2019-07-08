<?php

require_once($_SERVER['DOCUMENT_ROOT'] . "/Ouderavond/Website/assets/db/database.class.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/Ouderavond/Website/assets/db/Controllers/UserController.php");


if (isset($_POST['submit'])) {
    $user = new UserController();

    $username = $_POST['username'];
    $password = $_POST['password'];

    if($user->MentorLoginProcess($username, $password)) {
        echo "OK";
    } else {
        echo "ERROR";
    }
} else {
    echo "ERROR";
}
?>