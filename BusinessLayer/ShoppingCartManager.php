<?php

include "../../DataAccess/ShoppingCartRepository.php";

function getItemsFromShoppingCart($userID){
    return getItemsFromShoppingCartDB($userID);
}


function insertItemIntoCart($userID,$itemID,$quantityRequested){
    insertItemIntoCartDB($userID,$itemID,$quantityRequested);
}


function deleteItemFromCart($userID,$itemID,$quantityToDelete){
    deleteItemFromCartDB($userID,$itemID,$quantityToDelete);
}


function submitShoppingCart($userID){
    submitShoppingCartDB($userID);
}


?>