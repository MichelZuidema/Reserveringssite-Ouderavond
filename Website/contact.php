<?php 
        //page title
        $pageTitle = "Inschrijving ouderavond | Grafisch Lyceum Rotterdam";
        //selected navigation link
        $selectedLink = "contact";
        //header

        require 'assets/include/header.php';
    ?>
    <script src="assets/js/form.js"></script>
    <main class="contact">
            <section class="questionPopup">
                <div>
                    <p>Bedankt voor uw mail.<p>
                    <p>Wij zullen zo spoedig mogelijk contact opnemen!</p>
                </div>
            </section>
        <article class="contact__article">
            <h2 class="contact__article--heading">Neem contact op</h2>
            <form action="" method="post" class="contact__form">
                <!-- inputfield + label voornaam -->
                <label class="form__label--voornaam">Voornaam:</label>
                <input type="text" class="form__input--voornaam" name="voornaam" require>
                <!-- inputfield + label achternaam -->
                <label class="form__label--achternaam">Achternaam:</label>
                <input type="text" name="achternaam" class="form__input--achternaam" require>
                <!-- inputfield + label email -->
                <label class="form__label--email">E-mail:</label>
                <input type="text" name="email" class="form__input--email" require>
                <!-- inputfield + label telefoon -->
                <label class="form__label--telefoon">Telefoonummer:</label>
                <input type="number" name="telefoon" class="form__input--telefoon">
                <!-- inputfield + label kind -->
                <label class="form__label--kind">Betreft kind:</label>
                <input type="text" name="kind" class="form__input--kind" require>
                <!-- inputfield + label uw bericht -->                
                <label class="form__label--bericht">Uw bericht</label>
                <!-- textarea voor een bericht -->
                <textarea class="form_textarea--bericht"></textarea>
                <!-- submit button -->                
                <input type="submit" onclick="validate()" value="Verzenden" class="form__button--send">
            </form>
        </article>
    </main>
    <?php
        // footer
        require 'assets/include/footer.php';
    ?>