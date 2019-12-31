<?php

if(isset($_POST["USERNAME"])&&isset($_POST["PASSWORD"])&&isset($_POST["EMAIL"])&&isset($_POST["PHONE"])){

    $conn = connect();

    $sql = "select registerFct('".$_POST["USERNAME"]."','".$_POST["PASSWORD"]."','".$_POST["EMAIL"]."','".$_POST["PHONE"]."') as isRegistered";
    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()){
        echo $row['isRegistered'];
    }



}


?>
