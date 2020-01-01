<?php

include_once "Connection.php";

function getItemsFromShoppingCartDB($userID){

    $conn = connect();
    $sql = "call getItemsInShoppingCart(".$userID.");";
    $result = $conn->query($sql);

    $tempArray = Array();

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            array_push($tempArray, array( "NAME" => $row["NAME"] , "ID_ITEM" => $row["ID_ITEM"] , "PRICE" => $row["PRICE"],
                                                "PIC_URL" => $row["PIC_URL"] , "QUANTITY" => $row["QUANTITY"] , "TOTAL_PRICE" => $row["TOTAL_PRICE"],
                                                 "TYPE" => $row["TYPE"]));
        }
    } else {
        return -1;
    }

    return $tempArray;
}


function insertItemIntoCartDB($userID,$itemID,$quantityRequested){
    $conn = connect();
    $sql = "call addItemIntoCart(".$userID.",".$itemID.",".$quantityRequested.");";
    $result = $conn->query($sql);

}


function deleteItemFromCartDB($userID,$itemID,$quantityToDelete){

    $conn = connect();
    $sql = "call deleteItemFromShopingCard(".$userID.",".$itemID.",".$quantityToDelete.");";
    $result = $conn->query($sql);

}


?>