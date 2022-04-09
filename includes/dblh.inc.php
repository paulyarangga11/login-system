<?php
    $serverName = "localhost";
    $dBUsername = "root";
    $dBPassword = "";
    $dBName = "phpproject01";

    $conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);
    if (!$conn){
        die("Connection failde: " . mysqli_connect_error();)
    }
?>