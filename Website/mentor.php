<?php
//page title
$pageTitle = "Inschrijving ouderavond | Grafisch Lyceum Rotterdam";
//selected navigation link
$selectedLink = "mentor";

// Header
if ($_SESSION['role'] == 0) {
    require 'assets/include/headerMentor.php';
} else {
    require 'assets/include/header.php';
}

require("assets/db/Controllers/TimeTableController.php");
$time = new TimeTableController();

if (isset($_POST['inputClass'])) {
    $class_id = $_POST['inputClass'];
    $query = "SELECT * FROM student WHERE klas_id = $class_id";
    $class_result = mysqli_query($time->mysqli, $query);
}

if (isset($_POST['inputStudent'])) {
    // Reservering table
    $student_id = $_POST['inputStudent'];
    $query = "SELECT * FROM reservering WHERE student_id = $student_id";
    $reservering_result = mysqli_query($time->mysqli, $query);
    $reservering_row = mysqli_fetch_array($reservering_result);

    // Student table
    $query = "SELECT * FROM student WHERE id = $student_id";
    $student_result = mysqli_query($time->mysqli, $query);
    $student_row = mysqli_fetch_array($student_result);

    if ($student_row['foto']) {
        $student_img = "assets/img/profielfotos/" . $student_row['foto'];
    }

    // Tijdstip table
    $tijdstip_id = $reservering_row['tijdstip_id'];
    $query = "SELECT * FROM tijdstip WHERE id = $tijdstip_id";
    $tijdstip_result = mysqli_query($time->mysqli, $query);
    $tijdstip_row = mysqli_fetch_array($tijdstip_result);
}

if (isset($_POST['mentorSubmit'])) {
    $mentor_remarking = $_POST['mentorRemark'];
    $specific_time = $_POST['mentor_hour'];
    $id = $_POST['student_id'];
    $query = "UPDATE reservering SET mentor_opmerking = '$mentor_remarking', specific_time = '$specific_time' WHERE student_id = $id";

    if (mysqli_query($time->mysqli, $query)) {
        $_SESSION['succmsg'] = "Reservering is aangepast!";
    } else {
        $_SESSION['errormsg'] = "Er is iets foutgegaan bij het aanpassen van de reservering!";
    }
}
?>
    <main class="mentorpage">
        <?php
        if (!empty($_SESSION['errormsg'])) {
            echo "<h2 style=\'text-align: center;\'>" . $_SESSION['errormsg'] . "</h2>";
            unset($_SESSION['errormsg']);
        } else {
            if (!empty($_SESSION['succmsg'])) {
                echo "<h2 style=\'text-align: center;\'>" . $_SESSION['succmsg'] . "</h2>";
                unset($_SESSION['succmsg']);
            }
        }
        ?>
        </h2>
        <section class="select--student">
            <h2 class="student__heading">Kies een student</h2>
            <section class="student__img__container">
                <img src="
                <?php if (empty($student_img)) {
                    echo "assets/img/GLRlogo_RGB.png";
                } else {
                    echo $student_img;
                } ?>" align="GLR-logo" class="student__img">
            </section>
            <section class="class">
                <form action="?" method="POST">
                    <select class="class__container" name="inputClass" onchange="this.form.submit()">
                        <option value="" class="select--option">Kies een klas</option>
                        <?php
                        $selectedKlas = $_POST['inputClass'];
                        $query = "SELECT * FROM klas";
                        $result = mysqli_query($time->mysqli, $query);
                        $selected = $_POST['inputClass'];

                        while ($row = mysqli_fetch_array($result)) {
                            if ($selectedKlas == $row['id']) {
                                echo "<option selected value='" . $row['id'] . "' class='select--option'>" . $row['naam'] . "</option>";
                            } else {
                                echo "<option value='" . $row['id'] . "' class='select--option'>" . $row['naam'] . "</option>";
                            }
                        }
                        ?>
                    </select>
                </form>
            </section>
            <section class="student">
                <form action="?" method="POST">
                    <select class="student__container" name="inputStudent" onchange="this.form.submit()">
                        <option value="" class="select--option">
                            <?php
                            if (empty($selectedKlas)) {
                                echo "Selecteer een klas!";
                            } else {
                                echo "Selecteer een student!";
                            }
                            ?>
                        </option>
                        <?php
                        $selectedStudent = $_POST['inputStudent'];
                        while ($class_row = mysqli_fetch_array($class_result)) {
                            if ($selectedKlas == $class_row['id']) {
                                echo "<option selected value='" . $class_row['id'] . "' class='select--option'>" . $class_row['naam'] . "</option>";
                            } else {
                                echo "<option value='" . $class_row['id'] . "' class='select--option'>" . $class_row['naam'] . "</option>";
                            }
                        }
                        ?>
                    </select>
                </form>
            </section>
        </section>
        <form class="studentInfo" method="POST" action="?">
            <h2>Inschrijvings info</h2>
            <section class="studentInfo__section">
                <label class="studentInfo__label">Naam:</label>
                <p class="studentInfo__text">
                    <?php
                    if ($student_row['naam']) {
                        echo $student_row['naam'];
                    } else {
                        echo "Selecteer een student!";
                    }
                    ?>
                </p>
            </section>
            <section class="studentInfo__section">
                <label class="studentInfo__label">Aantal personen:</label>
                <p class="studentInfo__text">
                    <?php
                    if ($reservering_row['personen']) {
                        echo $reservering_row['personen'];
                    } else {
                        echo "Selecteer een student!";
                    }
                    ?>
                </p>
            </section>
            <section class="studentInfo__section">
                <label class="studentInfo__label">Gewenste tijd:</label>
                <p class="studentInfo__text">
                    <?php
                    if ($tijdstip_row['tijd_start']) {
                        echo $tijdstip_row['tijd_start'] . " - " . $tijdstip_row['tijd_einde'];
                    } else {
                        echo "Selecteer een student!";
                    }
                    ?>
                </p>
            </section>
            <section class="studentInfo__section">
                <label class="studentInfo__label">Ingeschreven Tijd:</label>
                <?php
                $tijdstip_hour = explode(":", $tijdstip_row['tijd_start'])[0];
                $current_hour = $tijdstip_hour;
                $new_hour = $tijdstip_hour + 1;

                for ($x = 15; $x <= 60; $x += 15) {
                    if ($x == 15) {
                        if ($tijdstip_hour . ":" . "00" . "-" . $tijdstip_hour == $reservering_row['specific_time']) {
                            echo "<input type='radio' class='studentInfo__radio' id='studentInfo--" . $x . "' value='" . $tijdstip_hour . ":" . "00" . "-" . $tijdstip_hour . ":" . $x . "' name='mentor_hour' checked='checked'>";
                            echo "<label for='studentInfo--" . $x . "' class='studentInfo__button'>" . $tijdstip_hour . ":" . "00" . "-" . $tijdstip_hour . ":" . $x . "</label>";
                        } else {
                            echo "<input type='radio' class='studentInfo__radio' id='studentInfo--" . $x . "' value='" . $tijdstip_hour . ":" . "00" . "-" . $tijdstip_hour . ":" . $x . "' name='mentor_hour'>";
                            echo "<label for='studentInfo--" . $x . "' class='studentInfo__button'>" . $tijdstip_hour . ":" . "00" . "-" . $tijdstip_hour . ":" . $x . "</label>";
                        }
                    } else if ($x == 60) {
                        if ($current_hour . "-" . $new_hour . ":00" == $reservering_row['specific_time']) {
                            echo "<input type='radio' id='studentInfo--" . $x . "' class='studentInfo__radio' value='" . $current_hour . "-" . $new_hour . ":00" . "' name='mentor_hour' checked='checked'>";
                            echo "<label for='studentInfo--" . $x . "' class='studentInfo__button'>" . $current_hour . "-" . $new_hour . ":00" . "</label>";
                        } else {
                            echo "<input type='radio' id='studentInfo--" . $x . "' class='studentInfo__radio' value='" . $current_hour . "-" . $new_hour . ":00" . "' name='mentor_hour'>";
                            echo "<label for='studentInfo--" . $x . "' class='studentInfo__button'>" . $current_hour . "-" . $new_hour . ":00" . "</label>";
                        }
                    } else {
                        if ($current_hour . "-" . $tijdstip_hour . ":" . $x == $reservering_row['specific_time']) {
                            echo "<input type='radio' id='studentInfo--" . $x . "' class='studentInfo__radio' value='" . $current_hour . "-" . $tijdstip_hour . ":" . $x . "' name='mentor_hour' checked='checked'>";
                            echo "<label for='studentInfo--" . $x . "' class='studentInfo__button'>" . $current_hour . "-" . $tijdstip_hour . ":" . $x . "</label>";
                        } else {
                            echo "<input type='radio' id='studentInfo--" . $x . "' class='studentInfo__radio' value='" . $current_hour . "-" . $tijdstip_hour . ":" . $x . "' name='mentor_hour'>";
                            echo "<label for='studentInfo--" . $x . "' class='studentInfo__button'>" . $current_hour . "-" . $tijdstip_hour . ":" . $x . "</label>";
                        }
                    }
                    $current_hour = $tijdstip_hour . ":" . $x;
                }
                ?>
            </section>
            <section class="studentInfo__section">
                <label class="studentInfo__label">Opmerking of vraag:</label>
                <p class="studentInfo__text">
                    <?php
                    if ($reservering_row['opmerking']) {
                        echo $reservering_row['opmerking'];
                    } else {
                        echo "Selecteer een student!";
                    }
                    ?>
                </p>
            </section>
            <section class="studentInfo__section">
                <label class="studentInfo__label">Notities mentor:</label>
                <textarea id="mentor-notities" name="mentorRemark">
                    <?php echo $reservering_row['mentor_opmerking']; ?>
                </textarea>
                <input type="hidden" name="student_id" value="<?php echo $student_row['id']; ?>">
                <input type="submit" class="studentInfo__button--send" value="Opslaan" name="mentorSubmit">
            </section>
        </form>
    </main>
<?php
// footer
require 'assets/include/footer.php';
?>