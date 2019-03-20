<?php

// Require database class
require("../database.class.php");

// Start session
if(session_id() == '') {
    session_start();
}

class TimeTableController extends Database {

    // Array of all dates and their times `after the function GetDates has been called
    public $dates = array();

    // Function to check how many students have signed up for a specific 'tijdstip'
    public function CheckAvailability($timeID) {
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
    public function GetDates($mentorID) {
        // SQL Query to get the datum, tijd_start, tijd_einde with a specific mentor ID
        $sql = "SELECT datum, tijd_start, tijd_einde FROM tijdstip WHERE mentor_id='$mentorID'"; 
        // Execute the query into the database
        $result = mysqli_query($this->mysqli, $sql);

        // Loop through all the rows and put them in a multidimensional array
        while($row = mysqli_fetch_array($result)) {
            $this->dates[] = array($row['datum'], $row['tijd_start'], $row['tijd_einde']);
        }
    }

    public function CreateReservation() {
        // Check if inputs are empty
        if($_POST['student_id'] == "") {
            $_SESSION['errormsg'] = "U heeft geen studenten id ingevuld!";
            return false;
        } else {
            $student_id = $_POST['student_id'];
        }

        if($_POST['mentor_id'] == "") {
            $_SESSION['errormsg'] = "U heeft geen mentor id ingevuld!";
            return false;
        } else {
            $mentor_id = $_POST['mentor_id'];
        }

        if($_POST['inputTime'] == "") {
            $_SESSION['errormsg'] = "U heeft geen tijd ingevuld!";
            return false;
        } else {
            $tijden = $_POST['inputTime'];
        }

        if($_POST['inputPersons'] == "") {
            $_SESSION['errormsg'] = "U heeft geen personen ingevuld!";
            return false;
        } else {
            $personen = $_POST['inputPersons'];
        }

        $opmerking = $_POST['studentRemark'];

        // Get times from the input, explode it to get the start and end time
        $timeArray = explode(" - ", $tijden);
        $timeBegin = $timeArray[0];
        $timeEnd = $timeArray[1];
        $class_id = $_SESSION['class_id'];
        
        // Sql query to get the tijdstip_id from the database
        $sql = "SELECT id FROM tijdstip WHERE tijd_start='$timeBegin' AND tijd_einde='$timeEnd' AND mentor_id= ( SELECT id FROM mentor WHERE klas_id='$class_id')";
        $result = mysqli_query($this->mysqli, $sql);
        $rij = mysqli_fetch_array($result);
        $tijdstip_id = $rij['id'];

        // Sql query to insert the reservation into the database
        $query = " INSERT INTO reservering (id, student_id, mentor_id, tijdstip_id, personen, opmerking, mentor_opmerking) VALUES (NULL, '$student_id', '$mentor_id', '$tijdstip_id', '$personen', '$opmerking', NULL)";

        if(mysqli_query($this->mysqli, $query)) {
            $_SESSION['errormsg'] = "Topp!";
        } else {
            $_SESSION['errormsg'] = "Er is iets mislukt!!";
        }
    }
}
?>