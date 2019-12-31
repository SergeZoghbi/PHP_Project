<?php

include "../../DataAccess/Login.php";


function login($username,$password){
    return loginDB($username,$password);
}

?>