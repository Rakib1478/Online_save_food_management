<?php
require_once 'connect.php';
$msg_ID=$_REQUEST["msg_id"];

$status=$_REQUEST['status'];


$update_query="UPDATE `food_offer` SET `status` = '$status' WHERE `msg_id` = $msg_ID;";
 $run_query=mysqli_query($connect,$update_query);
 if($run_query==true){
   header("Location: admin_dashboard.php?updated");
 }



 ?>
