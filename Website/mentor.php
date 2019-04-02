<?php 
        //page title
        $pageTitle = "Inschrijving ouderavond | Grafisch Lyceum Rotterdam";
        //selected navigation link
        $selectedLink = "tijdschema";

        // Header
        if($_SESSION['role'] == 1) {
            require 'assets/include/headerMentor.php';
        } else {
            require 'assets/include/header.php';
        }

        require("assets/db/Controllers/TimeTableController.php");
        $time = new TimeTableController();

        if(isset($_POST['inputClass'])) {
            $class_id = $_POST['inputClass'];
            $query = "SELECT * FROM student WHERE klas_id = $class_id";
            $class_result = mysqli_query($time->mysqli, $query);
        }
    ?>
    <main class="mentorpage">
        <section class="select--student">
            <h2 class="student__heading">Kies een student</h2>
            <section class="student__img__container">
                <img src="assets/img/GLRlogo_RGB.png" alt="GLR-logo" class="student__img">
            </section>
            <section class="class">
                <form action="?" method="POST">
                    <select class="class__container" name="inputClass" onchange="this.form.submit()">
                        <option value="" class="select--option">Kies een klas</option>
                        <?php
                            $query = "SELECT * FROM klas";
                            $result = mysqli_query($time->mysqli, $query);

                            while($row = mysqli_fetch_array($result)) {
                                echo "<option value='" . $row['id'] . "' class='select--option'>" . $row['naam'] ."</option>";
                            }
                        ?>
                    </select>
                </form>
            </section>
            <section class="student">
                <select class="student__container">
                    <option value="" class="select--option">Geen klas geselecteerd!</option>
                </select>
                <select class="student__container">
                    <option value="" class="select--option">Geen klas geselecteerd!</option>
                    <?php
                        while($class_row = mysqli_fetch_array($class_result)) {
                            echo "<option value='" . $class_row['id'] . "' class='select--option'>" . $class_row['naam'] . "</option>";
                        }
                    ?>
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