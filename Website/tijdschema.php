<?php 
        //page title
        $pageTitle = "Inschrijving ouderavond | Grafisch Lyceum Rotterdam";
        //selected navigation link
        $selectedLink = "tijdschema";
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
                <p><strong>Click</strong> de gewenste datum aan a.u.b</p>
            </section>
            <article id="timetable">
                <h2>Tijdschema</h2>
                <ul>
                    <li id="time-1"><p>18:00 - 19:00</p></li>
                    <li id="time-2"><p>19:00 - 20:00</p></li>
                    <li id="time-3"><p>20:00 - 21:00</p></li>
                    <li id="time-4"><p>21:00 - 22:00</p></li>
                </ul>
                <section id="timetable-info">
                    <section>   
                        <p id="available-1">Vrij</p>
                        <p id="available-2">Bijna vol</p>
                        <p id="available-3">Vol</p>
                    </section>
                </section>
            </article>
            <section id="number-of-persons">
                <h2>Aantal personen</h2>
                <ul>
                    <li id="person-1"><p>1 persoon</p></li>
                    <li id="person-2"><p>2 personen</p></li>
                    <li id="person-3"><p>3 personen</p></li>
                </ul>
                <p>Selecteer met hoeveel personen u wilt komen</p>
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