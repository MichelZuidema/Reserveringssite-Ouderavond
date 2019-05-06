<?php

require("database.class.php");
require("Controllers/UserController.php");
$user = new UserController();

if ($user->Logout()) {
    header("Location: ../../index.php");
} else {
    $_SESSION['errormsg'] = "Er is iets fout gegaan bij het uitloggen!";
    header("Location: ../../index.php");
}

?>