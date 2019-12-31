<?php

include "../../DataAccess/AuthenticationRepository.php";

function login($username,$password){
    return loginDB($username,$password);
}

?>