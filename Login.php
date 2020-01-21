<?php

    // include 'ConnectionSettings.php' library
    require 'ConnectionSettings.php';

    // variable submit by users
    $loginPass = $_POST["loginPass_from_unity"];
    $loginUser = $_POST["loginUser_from_unity"];

    $sql = "SELECT Username,Password, id FROM user_log_info WHERE Username = '" . $loginUser . "'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {

            if ($row["Password"] == $loginPass) {
                // echo "login Success ";
                echo $row["id"]." => user : ".$row["Username"];
               
            }else {
                echo "wrong password.";
            }
        }
    } else {
        echo "username does not exist.";
    }

    $conn->close();

?>