<?php
    /* 
        Session variables
        1. username - logged in user,
        2. errormsg - Error message,
        3. succmsg - Success message,
        4. class_id - Class ID of the logged in user,
        5. mentor_id - Mentor ID of the logged in user,
        6. student_id - ID of logged in user,
        7. role - The logged in user role, 0 = student, 1 = mentor
    */


    // Check if user is logged in.
    if(!isset($_SESSION['username'])) {
        // Not logged in.
    }
?>