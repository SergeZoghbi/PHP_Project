<?php

include "../../DataAccess/AuthenticationRepository.php";

function register($username,$password,$email,$phone){

    return registerDB($username,md5($password),$email,$phone);
}


?>