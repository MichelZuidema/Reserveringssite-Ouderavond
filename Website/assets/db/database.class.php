<?php
// Display errors
ini_set('display_errors', 'On');

// Database Class
class Database {
    // Private Connection Variables
    private $host;
    private $username;
    private $password;
    private $database;

    public $mysqli;

    public function __construct() {
        $this->Connect();
    }
    
    // Connection Function
    public function Connect() {
        // Database Credentials
        $this->host = "localhost";
        $this->username = "root";
        $this->password = "Kaas@360!420";
        $this->database = "ouderavond";

        // Make connection to MySQLi
        $this->mysqli = new mysqli($this->host, $this->username, $this->password, $this->database);

        // Check for connection errors
        if($this->mysqli->connect_error) {
            echo "Connection failed! " . $this->mysqli->connect_error;
        }
    }

    // Function to add array of students
    public function AddStudents($studentArray, $classArray) {
        // Combine both arrays into a associative array
        $studentAndClass = array_combine($studentArray, $classArray);

        // Loop through the students and classes
        foreach($studentAndClass as $student => $class) {
            // SQL INSERT Query
            $sql = "INSERT INTO `student` (id, naam, klas_id) VALUES (NULL, '$student', $class)";

            // Execute into database and check for errors
            if(mysqli_query($this->mysqli, $sql)) {
                echo "Gelukt!";
            } else {
                die(mysqli_error($this->mysqli));
                echo "Mislukt!";
            }
        }
    }

    // Get a specific row from a table
    public function GetSpecificFromTable($id, $specificRow, $table) {
        // SQL Select 
        $sql = "SELECT $specificRow FROM $table WHERE id=$id";
        // Execute the query into the database
        $result = mysqli_query($this->mysqli, $sql);
        // Make an array from the result
        $row = mysqli_fetch_array($result);

        // Return the data that was requested
        return $row[$specificRow];
    }

    public function GetSpecificRowFromTable($specificRow, $table) {
        // SQL Select 
        $sql = "SELECT $specificRow FROM $table";
        // Execute the query into the database
        $result = mysqli_query($this->mysqli, $sql);
        
        while($rij = mysqli_fetch_array($result)) {
            echo $rij[$specificRow] . "<br>";
        }
    }

    public function Diagrams($class) {
        
    }

    // Mentor Login Function
    public function MentorLoginProcess($username, $password) {
        // SQL Query: Search in database for rows with the username
        $sql = "SELECT * FROM mentor WHERE naam='$username'";
        $result = mysqli_query($this->mysqli, $sql);

        // Row with the username
        $row = mysqli_fetch_array($result);

        // Count all rows returned from $result
        $rowcount = mysqli_num_rows($result);

        // Password validation
        if($rowcount > 0) {
            if(password_verify($password, $row['wachtwoord'])) {
                $_SESSION['username'] = $row['naam'];
                return true;
            } else {
                $_SESSION['errormsg'] = "Uw ingevulde wachtwoord is niet correct!";
                return false;
            }
        } else {
            $_SESSION['errormsg'] = "Er bestaan geen mentoren met de ingevulde naam.";
            return false;
        }
        /* 
            Check if password is true
            echo password_verify($password, $hashed);

            it returns a 1 or nothing, 1 = correct.
        */
    }

    public function UniqueLinkGenerator($length) {
        $charactars = "abcdefghijklmnopqrstuvwzyxABCDEFGHIJKLMNOPQRSTUVWXYZ012345678!@#$%^&*()-=_+";
    }

    public function Logout() {
        // Unset all variables in session
        if(session_unset()) {
            // Destroy session
            session_destroy();
            return true;
        } else {
            $_SESSION['errormsg'] = "Er is iets foutgegegaan met het uitloggen!";
            return false;
        }
    }

    // Close Connection Function
    public function CloseConnection() {
        // Check if closing the connection gets any error
        if(mysqli_close($this->mysqli)) {
            return;
        } else {
            echo "Closing connection failed.";
        }
    }
}
?>