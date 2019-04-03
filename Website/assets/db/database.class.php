<?php
// Display errors
//  6ini_set('display_errors', 'On');

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