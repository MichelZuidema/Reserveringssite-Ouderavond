<?php
// Require database class
//require($_SERVER['DOCUMENT_ROOT'] . "/Ouderavond/Website/assets/db/database.class.php");

// Start session
if (session_id() == '') {
    session_start();
}

require_once 'assets/db/database.class.php';

class TimeTableController extends Database
{

    // Array of all dates and their times `after the function GetDates has been called
    public $dates = array();

    // Array variables used for the algorithm
    public $availableTimes = array();
    public $timesRegistered = array();

    // Function to check how many students have signed up for a specific 'tijdstip'
    public function CheckAvailability($timeID)
    {
        // SQL to get the row 'bezet' whith the ID of the mentor
        $sql = "SELECT bezet FROM tijdstip WHERE id='$timeID'";
        // Execute the SQL Query into the database
        $result = mysqli_query($this->mysqli, $sql);
        // Get array of the result
        $row = mysqli_fetch_assoc($result);

        // Return the data of the row 'bezet'
        return $row['bezet'];
    }

    // Function to check all dates and their timeSEs for a specific mentor
    public function GetDates($mentorID)
    {
        // SQL Query to get the datum, tijd_start, tijd_einde with a specific mentor ID
        $sql = "SELECT id, datum, tijd_start, tijd_einde FROM tijdstip WHERE mentor_id='$mentorID'";
        // Execute the query into the database
        $result = mysqli_query($this->mysqli, $sql);

        // Loop through all the rows and put them in a multidimensional array
        while ($row = mysqli_fetch_array($result)) {
            //$this->dates[] = array($row['id'], $row['datum'], $row['tijd_start'], $row['tijd_einde']);
            $this->dates[] = array(
                'id' => $row['id'],
                'datum' => $row['datum'],
                'tijd_start' => $row['tijd_start'],
                'tijd_einde' => $row['tijd_einde']
            );
        }
    }

    public function CreateReservation()
    {
        // Check if inputs are empty
        if ($_SESSION['student_id'] == "") {
            $_SESSION['errormsg'] = "U bent niet ingelogd!";
            return false;
        } else {
            $student_id = $_SESSION['student_id'];
        }

        if ($_SESSION['mentor_id'] == "") {
            $_SESSION['errormsg'] = "U bent niet ingelogd!";
            return false;
        } else {
            $mentor_id = $_SESSION['mentor_id'];
        }

        if ($_POST['inputTime'] == "") {
            $_SESSION['errormsg'] = "U heeft geen tijd ingevuld!";
            return false;
        } else {
            $tijdstip_id = $_POST['inputTime'];
        }

        if ($_POST['inputPerson'] == "") {
            $_SESSION['errormsg'] = "U heeft geen personen ingevuld!";
            return false;
        } else {
            $personen = $_POST['inputPerson'];
        }

        $opmerking = $_POST['inputRemark'];

        // Check if the logged in user already has a reservation
        $duplicateCheck = "SELECT * FROM reservering WHERE student_id='$student_id'";
        $duplicateResult = mysqli_query($this->mysqli, $duplicateCheck);
        $duplicateRowCount = mysqli_num_rows($duplicateResult);

        // If any duplicates exist, give error
        if ($duplicateRowCount > 0) {
            $_SESSION['errormsg'] = "U heeft al een reservering!";
            return false;
        }

        // Bezet row in table tijstip + 1

        $bezetQuery = "SELECT bezet FROM tijdstip WHERE id = $tijdstip_id";
        $bezetResult = mysqli_query($this->mysqli, $bezetQuery);
        $bezetRow = mysqli_fetch_array($bezetResult);
        $bezetCount = $bezetRow['bezet'] + 1;

        $bezetUpdateQuery = "UPDATE tijdstip SET bezet = '$bezetCount' WHERE id = $tijdstip_id";
        mysqli_query($this->mysqli, $bezetUpdateQuery);

        // Sql query to insert the reservation into the database
        $query = "INSERT INTO reservering (id, student_id, mentor_id, tijdstip_id, personen, opmerking, mentor_opmerking) VALUES (NULL, '$student_id', '$mentor_id', '$tijdstip_id', '$personen', '$opmerking', NULL)";

        // Execute the query into the database and check for errors
        if (mysqli_query($this->mysqli, $query)) {
            $_SESSION['succmsg'] = "Uw reservering is toegevoegt!";
            return true;
        } else {
            $_SESSION['errormsg'] = "Er is iets mislukt!";
            return false;
        }
    }

    // Time suggestion algorithm
    public function SuggestionAlgorithm($mentor_id)
    {
        // Get all times from mentor
        $query = "SELECT * FROM tijdstip WHERE mentor_id = '$mentor_id'";
        $result = mysqli_query($this->mysqli, $query);
        while ($row = mysqli_fetch_array($result)) {
            $this->availableTimes[] = $row;
        }

        // Get all times where students have registered
        $query = "SELECT * FROM tijdstip WHERE mentor_id = '$mentor_id' AND bezet > 0";
        $result = mysqli_query($this->mysqli, $query);
        while ($row = mysqli_fetch_array($result)) {
            $this->timesRegistered[] = $row;
        }

        $highest = 0;
        // Loop through the 'tijdstip''s and check which one has the highest students
        for ($x = 0; $x < count($this->timesRegistered); $x++) {
            if ($this->timesRegistered[$x]['bezet'] > $highest) {
                if ($this->timesRegistered[$x]['bezet'] >= 4) {
                    exit;
                } else {
                    $highest = $this->timesRegistered[$x]['id'];
                }
            }
        }
        // Return the ID of the tijdstip with the most students
        return $highest;
    }
}

?>