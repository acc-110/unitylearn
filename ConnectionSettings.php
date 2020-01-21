<?php

    // $servername = "localhost";
    // $username = "my_mysql";
    // $password = "66436645a";
    // $dbname = "acc";
    // $servername = "sql209.gigfa.com";
    $host = "http://acc110.gigfa.com/sql209.gigfa.com";
    $servername = "gigfa_25035837";
    $username = "gigfa_25035837";
    $password = "m110o880";
    $dbname = "gigfa_25035837_ACC";
    $port = 3306;
    
    // Create connection
    $conn = new mysqli( $host , $servername , $username , $password , $dbname , $port);
    // $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

?>
