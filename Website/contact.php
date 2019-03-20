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
                <label>Voornaam:</label>
                <input type="text" require>

                <label>Achternaam:</label>
                <input type="text" require>


                <label>E-mail:</label>
                <input type="text" require>

                
                <label>Telefoonummer:</label>
                <input type="number">


                <label>Betreft kind:</label>
                <input type="text" require>
                
                <label>Uw bericht</label>
                <textarea name="" id="" cols="30" rows="10"></textarea>
                
                <input type="submit">
            </form>
        </article>
    </main>
    <?php
        // footer
        require 'assets/include/footer.php';
    ?>