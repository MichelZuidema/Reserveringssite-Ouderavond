<?php 
        //page title
        $pageTitle = "Inschrijving ouderavond | Grafisch Lyceum Rotterdam";
        //selected navigation link
        $selectedLink = "contact";
        //header

        require 'assets/include/header.php';
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
            <form action="">
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
                <textarea></textarea>
                
                <input type="submit" onclick="validate()" value="Verzenden" class="sendButton">
            </form>
        </article>
    </main>
    <?php
        // footer
        require 'assets/include/footer.php';
    ?>