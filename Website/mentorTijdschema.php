<?php
error_reporting(0);
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

if (isset($_POST['radio'])) {
    $specific_time = explode('--', $_POST['radio'])[1];
    $mentor_id = $_SESSION['id'];

    $queryReservering = "SELECT * FROM reservering WHERE mentor_id = '$mentor_id' AND specific_time LIKE '$specific_time%'";
    $queryResult = mysqli_query($time->mysqli, $queryReservering);
    $reserveringInfo = mysqli_fetch_array($queryResult);
}

if (isset($_POST['btnUpdate'])) {
    $time = new TimeTableController();
    $student_id = $_POST['student_id'];
    $notities = $_POST['notities'];

    $query = "UPDATE reservering SET mentor_opmerking = '$notities' WHERE student_id = '$student_id'";

    if(mysqli_query($time->mysqli, $query)) {
        $_SESSION['succmsg'] = "Reservering is aangepast!";
    } else {
        $_SESSION['errormsg'] = "Er is iets foutgegaan!";
    }
}

function GetStudentInfo($student_id)
{
    $time = new TimeTableController();
    $query = "SELECT * FROM student WHERE id = '$student_id'";
    $result = mysqli_query($time->mysqli, $query);

    return mysqli_fetch_array($result);
}

function GetStudentClass($student_id)
{
    $time = new TimeTableController();
    $class_id = GetStudentInfo($student_id)['klas_id'];
    $query = "SELECT naam FROM klas WHERE id = '$class_id'";
    $result = mysqli_query($time->mysqli, $query);

    return mysqli_fetch_array($result);
}

?>
    <main class="mentorTijdschema">
        <form id="planningStudent" method="POST">
            <h2>Tijdschema</h2>
            <section id="planningGrid">
                <form action="?" method="POST">
                    <?php
                    $mentor_id = $_SESSION['id'];
                    $time->GetDates($mentor_id);

                    for ($x = 0; $x < count($time->dates); $x++) {
                        $current_hour = explode(":", $time->dates[$x]['tijd_start'])[0];
                        $next_hour = $current_hour + 1;

                        for ($y = 0; $y < 60; $y = $y + 15) {
                            $upcoming = $y + 15;
                            if ($upcoming >= 60) {
                                echo '<input type="radio" value="' . $x . '--' . $current_hour . ':' . $y . '" onchange="this.form.submit()" name="radio" class="planning__input--radio" id="radio--' . $x . '--' . $y . '">';
                                echo '<label for="radio--' . $x . '--' . $y . '" class="planning__input--label">' . $current_hour . ':' . $y . ' t/m ' . $next_hour . ':00</label>';
                            } else if ($y == 0) {
                                echo '<input type="radio" value="' . $x . '--' . $current_hour . ':' . $y . '" onchange="this.form.submit()" name="radio" class="planning__input--radio" id="radio--' . $x . '--' . $y . '">';
                                echo '<label for="radio--' . $x . '--' . $y . '" class="planning__input--label">' . $current_hour . ':00 t/m ' . $current_hour . ':' . $upcoming . ' </label>';
                            } else {
                                echo '<input type="radio" value="' . $x . '--' . $current_hour . ':' . $y . '" onchange="this.form.submit()" name="radio" class="planning__input--radio" id="radio--' . $x . '--' . $y . '">';
                                echo '<label for="radio--' . $x . '--' . $y . '" class="planning__input--label">' . $current_hour . ':' . $y . ' t/m ' . $current_hour . ':' . $upcoming . ' </label>';
                            }
                        }
                    }
                    ?>
                </form>
            </section>
        </form>
        <form class="appointment__info" action="?" method="POST">
            <h2>Afspraak:</h2>
            <p class="appointment__text">
                Naam:
                <?php
                    if(empty(GetStudentInfo($reserveringInfo['student_id'])['naam'])) {
                        echo "U heeft geen tijdstip geselecteerd of er is gen reservering gevonden.";
                    } else {
                        echo GetStudentInfo($reserveringInfo['student_id'])['naam'];
                    }
                ?>
            </p>
            <p class="appointment__text">
                Klas:
                <?php
                    if(empty(GetStudentClass($reserveringInfo['student_id'])['naam'])) {
                        echo "U heeft geen tijdstip geselecteerd of er is gen reservering gevonden.";
                    } else {
                        echo GetStudentClass($reserveringInfo['student_id'])['naam'];
                    }
                ?>
            </p>
            <p class="appointment__text">
                Ingeplande tijd:
                <?php
                    if(empty($reserveringInfo['specific_time'])) {
                        echo "U heeft geen tijdstip geselecteerd of er is gen reservering gevonden.";
                    } else {
                        echo $reserveringInfo['specific_time'];
                    }
                ?>
            </p>
            <p class="appointment__text">
                Aantal personen:
                <?php
                    if(empty($reserveringInfo['personen'])) {
                        echo "U heeft geen tijdstip geselecteerd of er is gen reservering gevonden.";
                    } else {
                        echo $reserveringInfo['personen'];
                    }
                ?>
            </p>
            <p class="appointment__text">
                Vraag/opmerking:
            </p>
            <textarea name="notities" class="appointment__question" disabled> <?php if(empty($reserveringInfo['opmerking'])) { echo "U heeft geen tijdstip geselecteerd of er is gen reservering gevonden."; } else { echo $reserveringInfo['opmerking'];}?> </textarea>
            <p class="appointment__text">
                Notities mentor:
            </p>
            <textarea name="notities" class="appointment__notities"><?php if(empty($reserveringInfo['mentor_opmerking'])) { echo "U heeft geen tijdstip geselecteerd of er is gen reservering gevonden."; } else { echo $reserveringInfo['mentor_opmerking']; } ?></textarea>
            <input type="hidden" value="<?php echo $reserveringInfo['student_id']; ?>" name="student_id">
            <input type="submit" value="Opslaan" class="appointment__submit" name="btnUpdate">
        </form>
    </main>
<?php
// footer
require 'assets/include/footer.php';
?>