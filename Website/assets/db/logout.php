<?php

require("Controllers/UserController.php");
$user = new UserController();

try {
    $user->Logout();
    return true;
} catch (Exception $e) {
    $_SESSION['errormsg'] = $e;
    return false;
}

?>