<?php
require_once('connect.php');
$massage=$_REQUEST['message'];
$client_ID=$_REQUEST['client_id'];

$insert_query="INSERT INTO `food_offer` (`client_id`, `message`, `time`) VALUES ('$client_ID', '$massage',NOW());";



$run_query=mysqli_query($connect,$insert_query);
if($run_query==true){
  header("location:client_panel.php?offer_sent");

}
else{
  header("location:client_panel.php");
}






 ?>
