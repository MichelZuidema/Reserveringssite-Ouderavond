<?php
    // Start the session
    session_start();
    require("../database.class.php");
    
    // Make database object
    $db = new Database();

    // Sql query to get all reservations
    $query = "SELECT * FROM reservering";
    $result = mysqli_query($db->mysqli, $query);

    echo '<table cellspacing=20 style="text-align: center; border: 1px solid black">';
        echo '<tr><th>Student</th><th>Mentor</th><th>Tijdstip</th><th>Personen</th><th>Opmerking</th><th>Mentor Opmerking</th></tr>';

    // Loop through all the rows and make a table with the data
    while($row = mysqli_fetch_array($result)) {
        $student_id = $row['student_id'];
        $mentor_id = $row['mentor_id'];
        $tijdstip_id = $row['tijdstip_id'];

        echo '<tr>';
        echo '<td>';
            $student_result = mysqli_query($db->mysqli, "SELECT naam FROM student WHERE id='$student_id'");
            echo mysqli_fetch_array($student_result)['naam'];
        echo '</td>';
        echo '<td>';
            $mentor_result = mysqli_query($db->mysqli, "SELECT naam FROM mentor WHERE id='$mentor_id'");
            echo mysqli_fetch_array($mentor_result)['naam'];
        echo '</td>';
        echo '<td>';
            $tijdstip_result = mysqli_query($db->mysqli, "SELECT tijd_start, tijd_einde FROM tijdstip WHERE id='$tijdstip_id'");
            $tijdstip_row = mysqli_fetch_array($tijdstip_result);
            echo $tijdstip_row['tijd_start'] . " - " . $tijdstip_row['tijd_einde'];
        echo '</td>';
        echo '<td>' . $row['personen'] . '</td>';
        echo '<td>' . $row['opmerking'] . '</td>';
        echo '<td>' . $row['mentor_opmerking'] . '</td>';
        echo '</tr>';
    }
?>