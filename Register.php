<?php

    // include 'ConnectionSettings.php' library
    require 'ConnectionSettings.php';

    // variable submit by users
    $RegisterEmail = $_POST["Register_email_from_unity"];
    $RegisterUser = $_POST["Register_user_from_unity"];
    $RegisterPass = $_POST["Register_Pass_from_unity"];
        

    $sql = "SELECT Username FROM user_log_info WHERE Username = '" . $RegisterUser . "'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        // Tell user that name is already taken
        echo "the username is already taken.";
        
    } else {
        echo "Creating user ...";
        // insert user and pass
        $sql2 = "INSERT INTO user_log_info (Email, Username, Password )
        VALUES ('" . $RegisterEmail . "' ,'" . $RegisterUser . "' , '" . $RegisterPass . "' )";

        if ($conn->query($sql2) === TRUE) {
            echo "user " . $RegisterUser . " created successfully";
        } else {
            echo "Error: " . $sql2 . "<br>" . $conn->error;
        }
    }

    $conn->close();

?>