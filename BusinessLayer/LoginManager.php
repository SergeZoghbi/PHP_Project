<?php

include "../../DataAccess/AuthenticationRepository.php";

function login($username,$password){
    $result = loginDB($username,$password);
    if($result != -1){
        $_SESSION['USER_ID'] = $result;
        header("Location : Login.php");
    }
    return $result;
}

?>