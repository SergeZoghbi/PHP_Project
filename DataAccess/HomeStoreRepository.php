<?php

include 'Connection.php';

function getRandomWeaponsDB(){

    $conn = connect();

    $sql = "call getRandomWeapons();";
    $result = $conn->query($sql);

    $tempArray = Array();

    while($row = $result->fetch_assoc()){
        array_push($tempArray, array( "ORIGIN" => $row["ORIGIN"] , "CALIBRE" => $row["CALIBRE"] , "MAGAZINE_CAPACITY" => $row["MAGAZINE_CAPACITY"],
            "RELOAD_TIME" => $row["RELOAD_TIME"] , "ACCURATE_RANGE" => $row["ACCURATE_RANGE"] , "RATE_OF_FIRE" => $row["RATE_OF_FIRE"],
            "ID_ITEM" => $row["ID_ITEM"] , "TYPE" => $row["TYPE"] , "PRICE" => $row["PRICE"] , "PIC_URL" => $row["PIC_URL"],
            "NAME" => $row["NAME"]));
    }

    return $tempArray;

}



?>