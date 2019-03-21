<?php 
        //page title
        $pageTitle = "Inschrijving ouderavond | Grafisch Lyceum Rotterdam";
        //selected navigation link
        $selectedLink = "contact";
        //header

        require 'assets/include/header.php';
    ?>
    <main id="contact">
        <article>
            <h2>Neem contact op</h2>
            <form action="">
                <label id="contact-voornaam">Voornaam:</label>
                <input type="text" name="voornaam" require>

                <label id="contact-achternaam">Achternaam:</label>
                <input type="text" name="achternaam" require>


                <label id="contact-email">E-mail:</label>
                <input type="text" name="email" require>

                
                <label id="contact-telefoon">Telefoonummer:</label>
                <input type="number" name="telefoon">


                <label id="contact-kind">Betreft kind:</label>
                <input type="text" name="kind" require>
                
                <label id="contact-bericht">Uw bericht</label>
                <textarea></textarea>
                
                <input type="submit">
            </form>
        </article>
    </main>
    <?php
        // footer
        require 'assets/include/footer.php';
    ?>