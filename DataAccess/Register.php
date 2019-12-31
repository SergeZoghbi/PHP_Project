<?php


function registerDB($username,$password,$email,$phone){
    $conn = connect();

    $sql = "select registerFct('" . $username . "','" . $password . "','" . $email . "','" . $phone . "') as isRegistered";
    $result = $conn->query($sql);

    while ($row = $result->fetch_assoc()) {
        return $row['isRegistered'];
    }
}





?>
