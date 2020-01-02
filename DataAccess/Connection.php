<?php


function connect(){

    $servername = "127.0.0.1:3306";
    $username = "root";
    $password = "";
    $dbname = "weapons_schema";

    return mysqli_connect($servername, $username, $password, $dbname);
}

?>