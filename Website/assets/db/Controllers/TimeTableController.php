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

    // Function to check all dates and their times for a specific mentor
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
}


$time = new TimeTableController();
$time->GetDates(2);

echo '<pre>';
print_r($time->dates);
?>