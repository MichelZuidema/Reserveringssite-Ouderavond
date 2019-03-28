<?php 
        //page title
        $pageTitle = "Inschrijving ouderavond | Grafisch Lyceum Rotterdam";
        //selected navigation link
        $selectedLink = "contact";

        // Start the session to get the logged in user details
        session_start();

        // Header
        if($_SESSION['role'] == 1) {
            require 'assets/include/headerMentor.php';
        } else {
            require 'assets/include/header.php';
        }

        require("assets/db/Controllers/ContactController.php");

        if(isset($_POST['btnSubmit'])) {
            if($_POST['voornaam'] == "") {
                echo "<script>alert('U heeft geen voornaam ingevuld!')</script>";
                unset($_POST);
                header( "refresh:0;url=contact.php" );
                die();
            } else {
                $voornaam = $_POST['voornaam'];
            }

            if($_POST['achternaam'] == "") {
                echo "<script>alert('U heeft geen achternaam ingevuld!')</script>";
                unset($_POST);
                header( "refresh:0;url=contact.php" );
                die();
            } else {
                $achternaam = $_POST['achternaam'];
            }

            if($_POST['email'] == "") {
                echo "<script>alert('U heeft geen email ingevuld!')</script>";
                unset($_POST);
                header( "refresh:0;url=contact.php" );
                die();
            } else {
                $email = $_POST['email'];
            }

            if($_POST['telefoon'] == "") {
                echo "<script>alert('U heeft geen telefoon ingevuld!')</script>";
                unset($_POST);
                header( "refresh:0;url=contact.php" );
                die();
            } else {
                $telefoon = $_POST['telefoon'];
            }

            if($_POST['kind'] == "") {
                echo "<script>alert('U heeft geen kind ingevuld!')</script>";
                unset($_POST);
                header( "refresh:0;url=contact.php" );
                die();
            } else {
                $kind = $_POST['kind'];
            }

            if($_POST['bericht'] == "") {
                echo "<script>alert('U heeft geen bericht ingevuld!')</script>";
                unset($_POST);
                header( "refresh:0;url=contact.php" );
                die();
            } else {
                $bericht = $_POST['bericht'];
            }

            if(!new ContactController($voornaam, $achternaam, $email, $telefoon, $kind, $bericht)) {
                echo "<h1>Error: " . $_SESSION['errormsg'] . "</h1>";
            }
        }
    ?>
    <script src="assets/js/form.js"></script>
    <main id="contact">
            <section class="questionPopup">
                <div>
                    <p>Bedankt voor uw mail.<p>
                    <p>Wij zullen zo spoedig mogelijk contact opnemen!</p>
                </div>
            </section>
        <article>
            <h2>Neem contact op</h2>
            <form action="" method="POST">
                <label id="contact-voornaam">Voornaam:</label>
                <input type="text" id="voornaam" name="voornaam" require>

                <label id="contact-achternaam">Achternaam:</label>
                <input type="text" name="achternaam" require>


                <label id="contact-email">E-mail:</label>
                <input type="text" name="email" require>

                
                <label id="contact-telefoon">Telefoonummer:</label>
                <input type="number" name="telefoon">


                <label id="contact-kind">Betreft kind:</label>
                <input type="text" name="kind" require>
                
                <label id="contact-bericht">Uw bericht</label>
                <textarea name="bericht"></textarea>
                
                <input type="submit" value="Verzenden" onclick="validate()" class="sendButton" name="btnSubmit">
            </form>
        </article>
    </main>
    <?php
        // footer
        require 'assets/include/footer.php';
    ?>