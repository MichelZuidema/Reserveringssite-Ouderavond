<?php
    /* 
        Session variables
        1. username - logged in user,
        2. errormsg - Error message,
        3. class_id - Class ID of the logged in user,
        4. role - The logged in user role, 0 = student, 1 = mentor
    */


    // Check if user is logged in.
    if(!isset($_SESSION['username'])) {
        // Not logged in.
    }
?>