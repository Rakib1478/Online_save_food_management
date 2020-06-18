<?php
require_once 'connect.php';
$uname=$_REQUEST['uname'];
$pass=$_REQUEST['pass'];
$createAuth=md5(sha1($pass.$uname));

$matchQuery="SELECT * FROM client_info WHERE auth='$createAuth';";
$runMatchQuery=mysqli_query($connect,$matchQuery);
$checkCount= mysqli_num_rows($runMatchQuery);
if($runMatchQuery==true){
  if($checkCount===1){
  setcookie("current_User",$createAuth,time()+(86400*7));
  header("location:client_panel.php?uname=$uname");
}

else{
  header("location:login_client.php?invaild");
}
}

 ?>
