<?php
// Start session
session_start();
// Error Display
ini_set('display_errors', 'On');

// Required files
require("Controllers/UserController.php");

$user = new UserController();

// Check if submit button has been clicked 
if(isset($_POST['submit'])) {

    // Get user input
    $username = htmlspecialchars($_POST['inputName']);
    $password = htmlspecialchars($_POST['inputPassword']);

    // Login validation
    if($user->MentorLoginProcess($username, $password)) {
        echo "Ingelogd als " . $_SESSION['username'] . "!";
    } else {
        echo $_SESSION['errormsg'];
    }
}
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
    <table>
        <tr>
            <td>Username: </td>
            <td><input type="text" name="inputName" required value="Gitte van Wijk"></td>
        </tr>
        <tr>
            <td>Password: </td>
            <td><input type="password" name="inputPassword" required required value="geheim"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="submit"></td>
        </tr>
        <tr>
            <td>Unique Link Gen:</td>
            <td><?php echo $user->UniqueLinkGenerator(3000); ?></td>
        </tr>
    </table>
</form>