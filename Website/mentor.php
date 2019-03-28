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
    <main id="mentor">
        <section id="selectStudent">
            <h2>Kies uw klas</h2>
            <section id="foto">
                <img src="assets/img/GLRlogo_RGB.png" alt="">
            </section>
            <section id="klas">
                <select>
                    <option value="">Kies een klas</option>
                    <option value="">i1a</option>
                    <option value="">i1b</option>
                    <option value="">i1c</option>
                    <option value="">i1d</option>
                    <option value="">i1d</option>
                </select>
            </section>
            <section id="student">
                <select id="">
                    <option value="">Kies een student</option>
                    <option value="">piet</option>
                    <option value="">klaas</option>
                    <option value="">henk</option>
                    <option value="">bob</option>
                    <option value="">kevin</option>
                    <option value="">jan</option>
                    <option value="">dirk</option>
                    <option value="">tom</option>
                    <option value="">kees</option>
                    <option value="">stefan</option>
                </select>
            </section>
        </section>
        <form id="studentInfo">
            <h2>Inschrijvings info</h2>
            <section>
                <label>Naam:</label>
                <p>klaas</p>
            </section>
            <section>
                <label>Aantal personen:</label>
                <p>3</p>
            </section>
            <section>
                <label>Gewenste tijd:</label>
                <p>18:00 t/m 19:00</p>
            </section>
            <section>
                <label>Ingeschreven tijd:</label>
                <button>18:00 t/m 18:15</button>
                <button>18:00 t/m 18:15</button>
                <button>18:00 t/m 18:15</button>
                <button>18:00 t/m 18:15</button>
            </section>
            <section>
                <label>Opmerking of vraag:</label>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime corporis dignissimos nostrum accusamus dolor iste accusantium repellendus? Unde</p>
            </section>
            <section>
                <label>Notities mentor:</label>
                <textarea id="mentor-notities"></textarea>
                <input type="submit" id="mentor-wijzig" value="Opslaan">
            </section>
        </form>
        <form id="planningStudent" method="POST">
            <h2>Tijdschema</h2>
            <section id="planningGrid">
                <ul>
                    <li><p>18:00 t/m 18:15</p></li>
                    <li><p>18:15 t/m 18:30</p></li>
                    <li><p>18:30 t/m 18:45</p></li>
                    <li><p>18:45 t/m 19:00</p></li>
                    <li><p>19:00 t/m 19:15</p></li>
                    <li><p>19:15 t/m 19:30</p></li>
                    <li><p>19:30 t/m 19:45</p></li>
                    <li><p>19:45 t/m 20:00</p></li>
                    <li><p>20:00 t/m 20:15</p></li>
                    <li><p>20:15 t/m 20:30</p></li>
                    <li><p>20:30 t/m 20:45</p></li>
                    <li><p>20:45 t/m 21:00</p></li>
                    <li><p>21:00 t/m 21:15</p></li>
                    <li><p>21:15 t/m 21:30</p></li>
                    <li><p>21:30 t/m 21:45</p></li>
                    <li><p>21:45 t/m 22:00</p></li>
                </ul>
            </section>
            <section id="planningInfo">   
                    <p>vrij</p>
                    <p>vol</p>
            </section>
        </form>
    </main>
    <?php
        // footer
        require 'assets/include/footer.php';
    ?>