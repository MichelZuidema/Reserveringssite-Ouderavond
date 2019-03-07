<?php

class UserController extends Database {
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
}

?>