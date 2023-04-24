<?php
    include "index4.php";

if(isset($_GET['id'])){
    $user_id= $_GET['id'];
    
    $sql ="DELETE FROM users WHERE id=$user_id";
 
   $result = $conn->query($sql); 
}
?>