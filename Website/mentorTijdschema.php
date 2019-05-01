<?php
//page title
$pageTitle = "Inschrijving ouderavond | Grafisch Lyceum Rotterdam";
//selected navigation link
$selectedLink = "tijdschema";

// Start the session to get the logged in user details
session_start();

require_once 'assets/db/Controllers/TimeTableController.php';
$time = new TimeTableController();

// Header
if ($_SESSION['role'] == 1) {
    require 'assets/include/headerMentor.php';
} else {
    require 'assets/include/header.php';
}
?>
    <main class="mentorTijdschema">

        <form id="planningStudent" method="POST">
            <h2>Tijdschema</h2>
            <section id="planningGrid">
                <!--                <input type="radio" name="radio" class="planning__input--radio" id="radio--16">-->
                <!--                <label for="radio--16" class="planning__input--label">21:45 t/m 22:00</label>-->

                <?php
                $mentor_id = $_SESSION['id'];
                $time->GetDates($mentor_id);

                for ($x = 0; $x < count($time->dates); $x++) {
                    $current_hour = explode(":", $time->dates[$x]['tijd_start'])[0];
                    $next_hour = $current_hour + 1;

                    for ($y = 0; $y < 60; $y = $y + 15) {
                        $upcoming = $y + 15;
                        if($upcoming >= 60) {
                            echo '<input type="radio" name="radio" class="planning__input--radio" id="radio--' . $x . '--' . $y . '">';
                            echo '<label for="radio--' . $x . '--' . $y . '" class="planning__input--label">' . $current_hour . ':' . $y . ' t/m ' . $next_hour . ':00</label>';
                        } else if($y == 0) {
                            echo '<input type="radio" name="radio" class="planning__input--radio" id="radio--' . $x . '--' . $y . '">';
                            echo '<label for="radio--' . $x . '--' . $y . '" class="planning__input--label">' . $current_hour . ':00 t/m ' . $current_hour . ':' . $upcoming . ' </label>';
                        }else {
                            echo '<input type="radio" name="radio" class="planning__input--radio" id="radio--' . $x . '--' . $y . '">';
                            echo '<label for="radio--' . $x . '--' . $y . '" class="planning__input--label">' . $current_hour . ':' . $y . ' t/m ' . $current_hour . ':' . $upcoming . ' </label>';
                        }
                    }
                }
                ?>

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