<?php
//page title
$pageTitle = "Inschrijving ouderavond | Grafisch Lyceum Rotterdam";
//selected navigation link
$selectedLink = "contact";

// Start the session to get the logged in user details
session_start();

require_once 'classes.php';

// Header
if ($_SESSION['role'] == 1) {
    require 'assets/include/headerMentor.php';
} else {
    require 'assets/include/header.php';
}

if (isset($_POST['btnSubmit'])) {
    if ($_POST['voornaam'] == "") {
        echo "<script>alert('U heeft geen voornaam ingevuld!')</script>";
        unset($_POST);
        header("refresh:0;url=contact.php");
        die();
    } else {
        $voornaam = $_POST['voornaam'];
    }

    if ($_POST['achternaam'] == "") {
        echo "<script>alert('U heeft geen achternaam ingevuld!')</script>";
        unset($_POST);
        header("refresh:0;url=contact.php");
        die();
    } else {
        $achternaam = $_POST['achternaam'];
    }

    if ($_POST['email'] == "") {
        echo "<script>alert('U heeft geen email ingevuld!')</script>";
        unset($_POST);
        header("refresh:0;url=contact.php");
        die();
    } else {
        $email = $_POST['email'];
    }

    if ($_POST['telefoon'] == "") {
        echo "<script>alert('U heeft geen telefoon ingevuld!')</script>";
        unset($_POST);
        header("refresh:0;url=contact.php");
        die();
    } else {
        $telefoon = $_POST['telefoon'];
    }

    if ($_POST['kind'] == "") {
        echo "<script>alert('U heeft geen kind ingevuld!')</script>";
        unset($_POST);
        header("refresh:0;url=contact.php");
        die();
    } else {
        $kind = $_POST['kind'];
    }

    if ($_POST['bericht'] == "") {
        echo "<script>alert('U heeft geen bericht ingevuld!')</script>";
        unset($_POST);
        header("refresh:0;url=contact.php");
        die();
    } else {
        $bericht = $_POST['bericht'];
    }

    if (!new ContactController($voornaam, $achternaam, $email, $telefoon, $kind, $bericht)) {
        echo "<h1>Error: " . $_SESSION['errormsg'] . "</h1>";
    } else {
        echo "<h1>" . $_SESSION['succmsg'] . "</h1>";
    }
}
?>
    <script src="assets/js/form.js"></script>
    <main class="contact">
        <!-- popup to inform the user about his email -->
        <section class="questionPopup">

                <!-- Good submit -->
                <p class="popup__good">Bedankt voor uw mail!<p>
                <p class="popup__good">Wij zullen zo spoedig mogelijk contact met u opnemen!</p>

                <!-- firstname errors -->
                <p class="error__form--message">Het voornaam veld mag niet leeg zijn of beginnen met een getal!</p>
            </div>
        </section>
        <!-- contact form -->
        <article class="contact__article">
            <h2 class="contact__article--heading">Neem contact op</h2>
            <form action="" method="post" class="contact__form" onsubmit="return validate();">
                
                <p class="contact__obligated">Verplichte velden beginnen met een: <span>*<span></p>

                <!-- inputfield + label voornaam -->
                <label class="form__label--voornaam">Voornaam:*</label>
                <input type="text" class="form__input--voornaam" name="voornaam" maxlength="40" autofocus require>
                
                
                <!-- inputfield + label achternaam -->
                <label class="form__label--achternaam">Achternaam:*</label>
                <input type="text" name="achternaam" class="form__input--achternaam" maxlength="40" require>
                
                
                <!-- inputfield + label email -->
                <label class="form__label--email">E-mail:*</label>
                <input type="email" name="email" class="form__input--email" maxlength="100" require>
                
                <!-- inputfield + label telefoon -->
                <label class="form__label--telefoon">Telefoonummer:</label>
                <input type="number" name="telefoon" class="form__input--telefoon" maxlength="12">
                
                <!-- inputfield + label kind -->
                <label class="form__label--kind">Betreft kind:*</label>
                <input type="text" name="kind" class="form__input--kind" maxlength="40" require>
                
                
                <!-- inputfield + label uw bericht -->
                <label class="form__label--bericht">Uw bericht:*</label>
                
                <!-- textarea voor een bericht -->
                <textarea class="form_textarea--bericht" name="bericht" maxlength="400" ></textarea>
                
                <!-- submit button -->
                <input type="submit" value="Verzenden" class="form__button--send" name="btnSubmit">
            </form>
        </article>
    </main>
<?php
// footer
require 'assets/include/footer.php';
?>
<script src="assets/js/form.js"></script>
