<?php
include 'Connection.php';

function loginDB($username,$password){

    $conn = connect();

    $sql = $conn->prepare("select loginFct(?,?) as loggedIn");
    $sql->bind_param('ss',$username,$password);
    $sql->execute();
    $result = $sql->get_result();

    while($row = $result->fetch_assoc()){
        return $row['loggedIn'];
    }

}

function registerDB($username,$password,$email,$phone){
    $conn = connect();


    $sql = $conn->prepare("select registerFct(?,?,?,?) as isRegistered");
    $sql->bind_param('sssi',$username,$password,$email,$phone);
    $sql->execute();
    $result = $sql->get_result();

    while ($row = $result->fetch_assoc()) {
        return $row['isRegistered'];
    }
}
