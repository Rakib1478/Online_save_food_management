<?php
require_once('connect.php');
$uname=$_REQUEST['uname'];
$pass=$_REQUEST['pass'];

$matchQuery="SELECT * FROM `admin_info` WHERE `uname`='$uname' AND `password`='$pass';";
$runMatchQuery=mysqli_query($connect,$matchQuery);
$checkCount=mysqli_num_rows($runMatchQuery);
if($runMatchQuery==true){
  if($checkCount===1){
  setcookie("currentUser",$uname,time()+(86400*7));
  header("location:admin_dashboard.php");
}
else{
  header("location:login_admin.php?invaild");
}
}

 ?>
