<?php
include "Connection.php";

// if(isset($_GET['TYPE'])){
//     echo returnWeaponsByType($_GET['TYPE']);
// }

 function returnWeaponsByType($type){

     $conn = connect();
     $sql="call getWeaponsByType('".$type."')";
     $result = $conn->query($sql);

     $tempArray = Array();

     if($result->num_rows >0){
         while($row = $result->fetch_assoc()){
              array_push($tempArray, array( "ID" => $row["ID"] , "NAME" => $row["NAME"]
                                                ,"PRICE" => $row["PRICE"], "PIC_URL" => $row["PIC_URL"]));
         }
     } else {
         return -1;
     }
     return $tempArray;
 }


 function returnWeaponsByID($id){

     $conn = connect();
     $sql="call getWeaponByID('".$id."')";
     $result = $conn->query($sql);


         while($row = $result->fetch_assoc()){
             return json_encode($row);
         }

 }

?>