<?php
include 'Connection.php';
 if(isset($_GET['TYPE'])){

     $conn = connect();
     $sql="call getWeaponsByType('".$_GET['TYPE']."')";
     $result = $conn->query($sql);

     if($result->num_rows >0){
         while($row = $result->fetch_assoc()){
             echo json_encode($row);
         }
     } else {
         echo -1;
     }

 }

?>