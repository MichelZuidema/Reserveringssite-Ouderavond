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