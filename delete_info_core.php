<?php
require_once 'connect.php';
$editID=$_REQUEST['id'];
$update_query="DELETE FROM `client_info` WHERE `client_info`.`id` =$editID;";
$run_query=mysqli_query($connect,$update_query);
if($run_query==true){
   header("Location: database_show.php?deleted");
 }


 ?>
