<?php

include 'connection.php';

if(isset($_POST["USERNAME"])&&isset($_POST["PASSWORD"])){

    $conn = connect();

    $sql = "select loginFct('".$_POST["USERNAME"]."','".$_POST["PASSWORD"]."') as loggedIn";
    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()){
        echo $row['loggedIn'];
    }

}


?>