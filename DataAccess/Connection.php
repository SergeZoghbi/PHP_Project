<?php


function connect(){

    $servername = "127.0.0.1:3308";
    $username = "root";
    $password = "123456";
    $dbname = "WebProgramingDB";

// Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    return $conn;
}

?>