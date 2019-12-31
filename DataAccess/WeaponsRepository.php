<?php
include "Connection.php";

// if(isset($_GET['TYPE'])){
//     echo returnWeaponsByType($_GET['TYPE']);
// }

 function returnWeaponsByType($type){

     $conn = connect();
     $sql="call getWeaponsByType('".$type."')";
     $result = $conn->query($sql);

     if($result->num_rows >0){
         while($row = $result->fetch_assoc()){
             return json_encode($row);
         }
     } else {
         return -1;
     }
 }

 function returnWeaponsByID($id){

     $conn = connect();
     $sql="call getWeaponsByID('".$id."')";
     $result = $conn->query($sql);


         while($row = $result->fetch_assoc()){
             return json_encode($row);
         }

 }

?>