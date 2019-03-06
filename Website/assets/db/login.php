<?php
// Start session
session_start();

// Check if submit button has been clicked 
if(isset($_POST['submit'])) {
    // Require database class
    require("database.class.php");
    // Make new db object
    $db = new Database();

    // Get user input
    $username = $_POST['inputName'];
    $password = $_POST['inputPassword'];

    if($db->MentorLoginProcess($username, $password)) {
        echo "Ingelogd als " . $_SESSION['username'] . "!";
    } else {
        echo $_SESSION['errormsg'];
    }
}
?>
<form method="post" action="">
    <table>
        <tr>
            <td>Username: </td>
            <td><input type="text" name="inputName" required value="Gitte van Wijk"></td>
        </tr>
        <tr>
            <td>Password: </td>
            <td><input type="password" name="inputPassword" required value="geheim"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="submit"></td>
        </tr>
    </table>
</form>