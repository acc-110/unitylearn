<?php

    // include 'ConnectionSettings.php' library
    // require 'ConnectionSettings.php';
    
    echo "hello , today is " . date("Y-m-d H:i:s") . "<br>";
    echo $_SERVER['HTTP_USER_AGENT'] . "<br>";
    // echo "user : ".$_SERVER['PHP_AUTH_USER'] . "<br>";
    ini_set('user_agent', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.7; rv:7.0.1) Gecko/20100101 Firefox/7.0.1');
    echo "<br>";

    phpinfo();
 
?>
