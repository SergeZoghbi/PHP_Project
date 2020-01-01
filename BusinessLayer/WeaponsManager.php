<?php

include "../../DataAccess/WeaponsRepository.php";

function returnWeaponsFromLogic($type){
    return returnWeaponsByType($type);
}

function returnWeaponsFromLogicByID($id){
    return returnWeaponsByID($id);
}
?>