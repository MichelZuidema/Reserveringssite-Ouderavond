<?php
session_start();

if(isset($_POST['submit'])) {
    require("../Controllers/TimeTableController.php");
    $time = new TimeTableController();

    if($time->CreateReservation()) {
        echo $_SESSION['errormsg'];
    } else {
        echo $_SESSION['errormsg'];
    }
}

?>
<html>
    <head>
        <title>Reservering Testing</title>
        <meta charset="utf-8">
    </head>
    <body>
        <main>
            <fieldset>
                <legend>Reservering Form</legend>
                <form action="?" method="POST">
                    <?php   
                        session_start();
                        if($_SESSION['errormsg']) {
                            echo '<h2>' . $_SESSION['errormsg'] . '</h2>';
                        }
                    ?>
                    <!-- inputs from session -->
                    <input type="hidden" name="student_id" value="<?php echo $_SESSION['student_id']?>">
                    <input type="hidden" name="mentor_id" value="<?php echo $_SESSION['mentor_id']?>">
                    <!-- Tijdstip --> 
                    <label for="inputTime">Selecteer uw tijdskeuze: </label>
                    <?php
                        require("../database.class.php");
                        $db = new Database();

                        $mentorid = $_SESSION['mentor_id'];
                        $row = "SELECT tijd_start, tijd_einde FROM tijdstip WHERE mentor_id='$mentorid'";
                        $result = mysqli_query($db->mysqli, $row);

                        echo '<select name="inputTime">';
                        echo '<option value="Selecteer uw tijdstip.">Selecteer uw tijdstip.</option>';
                        while($row = mysqli_fetch_array($result)) {
                            echo '<option value="' . $row['tijd_start'] . ' - ' . $row['tijd_einde'] . '">' . $row['tijd_start'] . ' - ' . $row['tijd_einde'] . '</option>';
                        }
                        echo '</select><br>';

                    ?>
                    <label for="inputPersons">Met hoeveel personen komt u?</label>
                    <input type="number" name="inputPersons"><br>

                    <label for="studentRemark">Opmerkingen:</label>
                    <textarea name="studentRemark" cols="20" rows="5"></textarea><br>

                    <input type="submit" value="submit" name="submit">
                </form>
            </fieldset>
        </main>
    </body>
</html>