<?php
$host="localhost";
$dbuname="jdhn53";
$dbpwd="jahidhasanz";
$dbname="food_waste";


$connect=mysqli_connect($host,$dbuname,$dbpwd,$dbname);
if($connect==false){
  echo "Error in establishing connection!";
}
 ?>
