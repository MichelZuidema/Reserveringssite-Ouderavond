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
    <main class="mentorTijdschema">

        <form id="planningStudent" method="POST">
            <h2>Tijdschema</h2>
            <section id="planningGrid">

                <input type="radio" name="radio" class="planning__input--radio" id="radio--1">
                <label for="radio--1" class="planning__input--label">18:00 t/m 18:15</label>

                <input type="radio" name="radio" class="planning__input--radio" id="radio--2">
                <label for="radio--2" class="planning__input--label">18:15 t/m 18:30</label>

                <input type="radio" name="radio" class="planning__input--radio" id="radio--3">
                <label for="radio--3" class="planning__input--label">18:30 t/m 18:45</label>
                
                <input type="radio" name="radio" class="planning__input--radio" id="radio--4">
                <label for="radio--4" class="planning__input--label">18:45 t/m 19:00</label>

                <input type="radio" name="radio" class="planning__input--radio" id="radio--5">
                <label for="radio--5" class="planning__input--label">19:00 t/m 19:15</label>

                <input type="radio" name="radio" class="planning__input--radio" id="radio--6">
                <label for="radio--6" class="planning__input--label">19:15 t/m 19:30</label>

                <input type="radio" name="radio" class="planning__input--radio" id="radio--7">
                <label for="radio--7" class="planning__input--label">19:30 t/m 19:45</label>

                <input type="radio" name="radio" class="planning__input--radio" id="radio--8">
                <label for="radio--8" class="planning__input--label">19:45 t/m 20:00</label>
              
                <input type="radio" name="radio" class="planning__input--radio" id="radio--9">
                <label for="radio--9" class="planning__input--label">20:00 t/m 20:15</label>
                
                <input type="radio" name="radio" class="planning__input--radio" id="radio--10">
                <label for="radio--10" class="planning__input--label">20:15 t/m 20:30</label>
                
                <input type="radio" name="radio" class="planning__input--radio" id="radio--11">
                <label for="radio--11" class="planning__input--label">20:30 t/m 20:45</label>

                <input type="radio" name="radio" class="planning__input--radio" id="radio--12">
                <label for="radio--12" class="planning__input--label">20:45 t/m 21:00</label>

                <input type="radio" name="radio" class="planning__input--radio" id="radio--13">
                <label for="radio--13" class="planning__input--label">21:00 t/m 21:15</label>

                <input type="radio" name="radio" class="planning__input--radio" id="radio--14">
                <label for="radio--14" class="planning__input--label">21:15 t/m 21:30</label>

                <input type="radio" name="radio" class="planning__input--radio" id="radio--15">
                <label for="radio--15" class="planning__input--label">21:30 t/m 21:45</label>

                <input type="radio" name="radio" class="planning__input--radio" id="radio--16">
                <label for="radio--16" class="planning__input--label">21:45 t/m 22:00</label>

            </section>
            <section id="planningInfo">   
                    <p>vrij</p>
                    <p>vol</p>
            </section>
        </form>
        <form class="appointment__info">
            <h2>Afspraak:</h2>
            <p class="appointment__text">Naam:</p>
            <p class="appointment__text">Klas:</p>
            <p class="appointment__text">Ingeplande tijd:</p>
            <p class="appointment__text">Aantal personen:</p>
            <p class="appointment__text">Vraag/opmerking:</p>
            <textarea name="notities" class="appointment__question" disabled></textarea>
            <p class="appointment__text">Notities mentor:</p>
            <textarea name="notities" class="appointment__notities"></textarea>
            <input type="submit" value="Opslaan" class="appointment__submit">
        </form>
    </main>
    <?php
        // footer
        require 'assets/include/footer.php';
    ?>