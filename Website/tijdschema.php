<?php
ini_set('display_errors', 'On');
//page title
$pageTitle = "Inschrijving ouderavond | Grafisch Lyceum Rotterdam";
//selected navigation link
$selectedLink = "tijdschema";

require_once 'assets/db/database.class.php';
require_once 'assets/db/Controllers/ContactController.php';
require_once 'assets/db/Controllers/TimeTableController.php';

$time = new TimeTableController();
$contact = new ContactController();

if (empty($_SESSION['username'])) {
    die("<script>
            alert('U moet ingelogd zijn om op deze pagina te komen!');
            location=\"index.php\";
        </script>");
}

// Header
if ($_SESSION['role'] == 1) {
    Header("Location: index.php");
} else {
    require 'assets/include/header.php';
}


if (isset($_POST['formSubmit'])) {
    if ($time->CreateReservation()) {
        if($contact->SendMailConfirmation()) {
            $user_id = $_SESSION['student_id'];
            header('Location: confirmed.php?id='. $user_id);
        }
    }
}
?>
<script src="assets/js/tijdschema.js"></script>

    <main class="timetable">

        <!--popup  -->
        <section class="popup">
            <p class="popup__title">error title</p>
            <p class="popup__body">error body</p>
        </section>

        <!-- form -->
        <form action="?" method="POST" onsubmit="return tijdschema();">
            <!-- Choose your date -->
            <section class="day-choosing">
                <h2>Kies een Datum</h2>
                <!-- checkbox + label -->
                <?php
                $mentor_id = $_SESSION['mentor_id'];
                $query = "SELECT DISTINCT datum FROM tijdstip WHERE mentor_id = $mentor_id";
                $result = mysqli_query($time->mysqli, $query);
                $row = mysqli_fetch_array($result);

                for ($x = 1; $x < count($row); $x++) {
                    echo '<input type="checkbox" name="checkbox" class="day-choosing__checkbox" id="day__checkbox">';
                    //echo "<input type='checkbox' name='inputDate' class='checkbox__label' id='day__checkbox' value='" . $row['datum'] . "'>";
                    echo "<label class='checkbox__label' for='day__checkbox'>" . $row['datum'] . "</label>\n";
                }
                ?>
                <!-- text -->
                <p class="day__text"><strong>Click</strong> de gewenste datum aan a.u.b</p>
            </section>
            <!-- timetable -->
            <article class="timetable">
                <!-- heading -->
                <h2>Tijdschema</h2>
                <?php
                $mentor_id = $_SESSION['mentor_id'];
                $query = "SELECT bezet FROM tijdstip WHERE mentor_id = $mentor_id";
                $result = mysqli_query($time->mysqli, $query);

                $time->GetDates($_SESSION['mentor_id']);

                while ($row = mysqli_fetch_array($result)) {
                    for ($x = 0; $x < count($time->dates); $x++) {
                        if ($time->dates[$x]['bezet'] == 4) {
                            echo "<input type='radio' name='inputTime' class='timetable__radio' id='time--" . $x . "' value='" . $time->dates[$x]['id'] . "' disabled>\n";
                        } else if ($time->dates[$x]['bezet'] == 3) {
                            echo "<input type='radio' name='inputTime' class='timetable__radio' id='time--" . $x . "' value='" . $time->dates[$x]['id'] . "'>\n";
                        } else {
                            echo "<input type='radio' name='inputTime' class='timetable__radio' id='time--" . $x . "' value='" . $time->dates[$x]['id'] . "'>\n";
                        }
                    }
                }

                for ($x = 0; $x < count($time->dates); $x++) {
                    if ($time->dates[$x]['bezet'] == 4) {
                        echo "<label style='cursor: not-allowed;' class='radio__label' for='time--" . $x . "'>" . $time->dates[$x]['tijd_start'] . " - " . $time->dates[$x]['tijd_einde'] . "</label>\n";
                    } else if ($time->dates[$x]['bezet'] == 3) {
                        echo "<label style='border: 2px solid red;' class='radio__label' for='time--" . $x . "'>" . $time->dates[$x]['tijd_start'] . " - " . $time->dates[$x]['tijd_einde'] . "</label>\n";
                    } else {
                        echo "<label style='border: 2px solid green;' class='radio__label' for='time--" . $x . "'>" . $time->dates[$x]['tijd_start'] . " - " . $time->dates[$x]['tijd_einde'] . "</label>\n";
                    }
                }
                ?>
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
                <input type="radio" name="inputPerson" class="persons__radio" id="person--1" checked value="1">
                <input type="radio" name="inputPerson" class="persons__radio" id="person--2" value="2">
                <input type="radio" name="inputPerson" class="persons__radio" id="person--3" value="3">
                <!-- labels -->
                <label class="checkbox__label checkbox__label--1" for="person--1">1 persoon</label>
                <label class="checkbox__label checkbox__label--1" for="person--2">2 personen</label>
                <label class="checkbox__label checkbox__label--1" for="person--3">3 personen</label>
                <!-- text -->
                <p class="persons--info">Selecteer met hoeveel personen u wilt komen</p>
            </section>
                <?php

                if (!empty($_SESSION['errormsg'])) {
                    $error = $_SESSION['errormsg'];
                    echo "<script>showPopup('Er is een fout opgetreden!', '" . $error . "');</script>";
                    unset($_SESSION['errormsg']);
                }
                ?>
            <!-- Add a qeustion to your registery -->
            <article class="question">
                <h2>Opmerking of vraag</h2>
                <textarea placeholder="Hier komt uw vraag/opmerking" class="question__textarea" name="inputRemark"></textarea>
                <input type="submit" class="question__button--send" value="Aanmelding versturen" name="formSubmit">
            </article>
        </form>
    </main>
<?php
// footer
require 'assets/include/footer.php';
?>
<script src="assets/js/scrolling.js"></script>
