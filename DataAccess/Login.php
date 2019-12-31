<?php

include 'connection.php';

function loginDB($username,$password){

    $conn = connect();

    $sql = "select loginFct('".$username."','".$password."') as loggedIn";
    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()){
        return $row['loggedIn'];
    }

}


?>