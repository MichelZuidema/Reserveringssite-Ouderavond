<?php 
        //page title
        $pageTitle = "Inschrijving ouderavond | Grafisch Lyceum Rotterdam";
        //selected navigation link
        $selectedLink = "tijdschema";
        // Start the session to get the logged in user details
        session_start();

        // Header
        if($_SESSION['role'] == 1) {
            require 'assets/include/headerMentor.php';
        } else {
            require 'assets/include/header.php';
        }
    ?>
<<<<<<< HEAD
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
=======
    <main id="tijdschema">
        <form action="bestaatNogNoiet.php" method="POST" onsubmit="return false">
            <section id="choose-time">
                <h2>Kies een Datum</h2>
                    <input type="checkbox">
                    <section id="checkbox-text">
                        <p>Donderdag</p>
                        <p>28/04/2019</p>
                    </section>
                <p><strong>Click</strong> de gewenste datum aan a.u.b</p>
>>>>>>> 118995e75918c8442b9ab21a47d8c70f047a8176
            </section>
            <!-- timetable -->
            <article class="timetable">
                <!-- heading -->
                <h2>Tijdschema</h2>
<<<<<<< HEAD
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
=======
                <ul>
                    <input type="checkbox" id="time-1">
                    <p>18:00 - 19:00</p>
                    <input type="checkbox" id="time-2">
                    <p>19:00 - 20:00</p>   
                    <input type="checkbox" id="time-3">
                    <p>20:00 - 21:00</p>
                    <input type="checkbox" id="time-4">
                    <p>21:00 - 22:00</p>
                </ul>
                <section id="timetable-info">
                    <section>   
                        <p id="available-1">Vrij</p>
                        <p id="available-2">Bijna vol</p>
                        <p id="available-3">Vol</p>
>>>>>>> 118995e75918c8442b9ab21a47d8c70f047a8176
                    </section>
                </section>
            </article>
            <!-- Select How many persons are coming -->
            <section class="persons">
                <!-- heading -->
                <h2>Aantal personen</h2>
<<<<<<< HEAD
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
=======
                <ul>
                    <input type="checkbox" id="person-1"><p>1 persoon</p>
                    <input type="checkbox" id="person-2"><p>2 personen</p>
                    <input type="checkbox" id="person-3"><p>3 personen</p>
                </ul>
                <p>Selecteer met hoeveel personen u wilt komen</p>
>>>>>>> 118995e75918c8442b9ab21a47d8c70f047a8176
            </section>
            <section class="popup">
                    <p class="popup__text">Bedankt voor uw aanmelding!</p>
                    <p class="popup__text">Wij hebben u een mail gestuurd met uw gegevens</p>
            </section>
            <!-- Add a qeustion to your registery -->
            <article class="question">
                <h2>Opmerking of vraag</h2>
<<<<<<< HEAD
                <textarea placeholder="Hier komt uw vraag/opmerking" class="question__textarea"></textarea>
                <input type="submit" class="question__button--send" value="Aanmelding versturen">
=======
                <textarea cols="30" rows="10" placeholder="Hier komt uw vraag/opmerking"></textarea>
                <input type="submit" class="sendButton" value="Aanmelding versturen">
                <input type="button" id="showButton" value="Bekijk mijn huidige aanmelding">
            </article>
            <article id="summary">
                <section>
                    <h2>Gegevens van uw aanmelding</h2>
                    <ul>
                        <li>Datum: <span>28/4/2020</span></li>
                        <li>gewenste tijd: <span>18:00 t/m 19:00</span></li>
                        <li>Uw opmerking bericht:<blockquote></blockquote></li>
                    </ul>
                    <p>Wij hebben u ook een mail gestuurd met uw gegevens</p>
                </section>
>>>>>>> 118995e75918c8442b9ab21a47d8c70f047a8176
            </article>
        </form>
    </main>
    <?php
        // footer
        require 'assets/include/footer.php';
    ?>