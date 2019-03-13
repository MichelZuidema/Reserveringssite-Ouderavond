<?php 
        //page title
        $pageTitle = "Inschrijving ouderavond | Grafisch Lyceum Rotterdam";
        //selected navigation link
        $selectedLink = "selectedLink";
        //header
        require 'assets/include/header.php';
    ?>
    <main id="tijdschema">
        <form action="#" method="POST">
            <section id="choose-time">
                <h2>Kies een tijd</h2>
                <div>
                    <p>Donderdag</p>
                    <p>28/04/2019</p>
                </div>
            </section>
            <article id="timetable">
                <h2>Tijdschema</h2>
                <ul>
                    <li>18:00 - 19:00</li>
                    <li>19:00 - 20:00</li>
                    <li>20:00 - 21:00</li>
                    <li>21:00 - 22:00</li>
                </ul>
                <section id="timetable-info">
                    <p>Vol</p>
                    <p>Bijna vol</p>
                    <p>vol</p>
                </section>
            </article>
            <section id="number-of-persons">
                <h2>Aantal personen</h2>
                <ul>
                    <li>1 persoon</li>
                    <li>2 personen</li>
                    <li>3 personen</li>
                </ul>
            </section>
            <article id="ask-question">
                <h2>Opmerking of vraag</h2>
                <textarea cols="30" rows="10" placeholder="Hier komt uw vraag/opmerking"></textarea>
                <input type="submit" value="Aanmelding versturen">
            </article>
        </form>
    </main>
    <?php
        // footer
        require 'assets/include/footer.php';
    ?>