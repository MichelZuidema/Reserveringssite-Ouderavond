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
    <main class="mentorpage">
        <section class="select--student">
            <h2 class="student__heading">Kies een student</h2>
            <section class="student__img__container">
                <img src="assets/img/GLRlogo_RGB.png" alt="GLR-logo" class="student__img">
            </section>
            <section class="class">
                <select class="class__container">
                    <option value="" class="select--option">Kies een klas</option>
                    <option value="" class="select--option">i1a</option>
                    <option value="" class="select--option">i1b</option>
                    <option value="" class="select--option">i1c</option>
                    <option value="" class="select--option">i1d</option>
                    <option value="" class="select--option">i1d</option>
                </select>
            </section>
            <section class="student">
                <select class="student__container">
                    <option value="" class="select--option">Kies een student</option>
                    <option value="" class="select--option">piet</option>
                    <option value="" class="select--option">klaas</option>
                    <option value="" class="select--option">henk</option>
                    <option value="" class="select--option">bob</option>
                    <option value="" class="select--option">kevin</option>
                    <option value="" class="select--option">jan</option>
                    <option value="" class="select--option">dirk</option>
                    <option value="" class="select--option">tom</option>
                    <option value="" class="select--option">kees</option>
                    <option value="" class="select--option">stefan</option>
                </select>
            </section>
        </section>
        <form class="studentInfo">
            <h2>Inschrijvings info</h2>
            <section class="studentInfo__section">
                <label class="studentInfo__label">Naam:</label>
                <p class="studentInfo__text">klaas</p>
            </section>
            <section class="studentInfo__section">
                <label class="studentInfo__label">Aantal personen:</label>
                <p class="studentInfo__text">3</p>
            </section>
            <section class="studentInfo__section">
                <label class="studentInfo__label">Gewenste tijd:</label>
                <p class="studentInfo__text">18:00 t/m 19:00</p>
            </section>
            <section class="studentInfo__section">
                <label class="studentInfo__label">Ingeschreven tijd:</label>
                <button class="studentIno__button">18:00 t/m 18:15</button>
                <button class="studentIno__button">18:00 t/m 18:15</button>
                <button class="studentIno__button">18:00 t/m 18:15</button>
                <button class="studentIno__button">18:00 t/m 18:15</button>
            </section>
            <section class="studentInfo__section">
                <label class="studentInfo__label">Opmerking of vraag:</label>
                <p class="studentInfo__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime corporis dignissimos nostrum accusamus dolor iste accusantium repellendus? Unde</p>
            </section>
            <section class="studentInfo__section">
                <label class="studentInfo__label">Notities mentor:</label>
                <textarea id="mentor-notities"></textarea>
                <input type="submit" class="studentInfo__button--send" value="Opslaan">
            </section>
        </form>
    </main>
    <?php
        // footer
        require 'assets/include/footer.php';
    ?>