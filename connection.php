<?php

    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = " ";
    $db = "eprinting";

    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connection failed: %s\n". $conn->error);
    session_start();

?>
