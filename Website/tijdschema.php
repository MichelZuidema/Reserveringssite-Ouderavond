<?php 
        //page title
        $pageTitle = "Inschrijving ouderavond | Grafisch Lyceum Rotterdam";
        //selected navigation link
        $selectedLink = "tijdschema";
        //header
        require 'assets/include/header.php';
    ?>
    <main class="timetable">
        <!-- form -->
        <form action="bestaatNogNoiet.php" method="POST" onsubmit="return false">
            <!-- Choose your date -->
            <section class="day-choosing">
                <h2>Kies een Datum</h2>
                <!-- checkbox + label -->
                <input type="checkbox" name="checkbox" class="day-choosing__checkbox" id="day__checkbox">
                <label class="checkbox__label" for="day__checkbox">28/04/2019</label>
                <!-- text -->
                <p class="day__text"><strong>Click</strong> de gewenste datum aan a.u.b</p>
            </section>
            <!-- timetable -->
            <article class="timetable">
                <!-- heading -->
                <h2>Tijdschema</h2>
                <!-- radio buttons -->
                <input type="radio" name="time" class="timetable__radio" id="time--1">
                <input type="radio" name="time" class="timetable__radio" id="time--2">
                <input type="radio" name="time" class="timetable__radio" id="time--3">
                <input type="radio" name="time" class="timetable__radio" id="time--4">
                <!-- labels -->
                <label class="radio__label" for="time--1">18:00 - 19:00</label>
                <label class="radio__label" for="time--2">19:00 - 20:00</label>   
                <label class="radio__label" for="time--3">20:00 - 21:00</label>                    
                <label class="radio__label" for="time--4">21:00 - 22:00</label>
                <!-- guideance how to use timeTable -->
                <section class="timetable-guidance">
                    <section class="guidance__container">   
                        <p class="guidance--free">Vrij</p>
                        <p class="guidance--almost">Bijna vol</p>
                        <p class="guidance--full">Vol</p>
                    </section>
                </section>
            </article>
            <!-- Select How many persons are coming -->
            <section class="persons">
                <!-- heading -->
                <h2>Aantal personen</h2>
                    <!-- radio buttons -->
                    <input type="radio" name="person" class="persons__radio" id="person--1" checked>
                    <input type="radio" name="person" class="persons__radio" id="person--2">
                    <input type="radio" name="person" class="persons__radio" id="person--3">
                    <!-- labels -->
                    <label class="checkbox__label" for="person--1">1 persoon</label>
                    <label class="checkbox__label" for="person--2">2 personen</label>
                    <label class="checkbox__label" for="person--3">3 personen</label>
                <!-- text -->
                <p class="persons--info">Selecteer met hoeveel personen u wilt komen</p>
            </section>
            <section class="popup">
                    <p class="popup__text">Bedankt voor uw aanmelding!</p>
                    <p class="popup__text">Wij hebben u een mail gestuurd met uw gegevens</p>
            </section>
            <!-- Add a qeustion to your registery -->
            <article class="question">
                <h2>Opmerking of vraag</h2>
                <textarea placeholder="Hier komt uw vraag/opmerking" class="question__textarea"></textarea>
                <input type="submit" class="question__button--send" value="Aanmelding versturen">
            </article>
        </form>
    </main>
    <?php
        // footer
        require 'assets/include/footer.php';
    ?>