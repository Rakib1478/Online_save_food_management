<?php
require_once('connect.php');
if(isset($_REQUEST['fname'])&&isset($_REQUEST['lname'])&&isset($_REQUEST['email'])&&isset($_REQUEST['gender'])&&isset($_REQUEST['location'])&&isset($_REQUEST['mobile'])&isset($_REQUEST['uname'])&&isset($_REQUEST['password'])=='true'){
$fname=validate($_REQUEST['fname']);
$lname=validate($_REQUEST['lname']);
$email=validate($_REQUEST['email']);
$gender=validate($_REQUEST['gender']);
$location=validate($_REQUEST['location']);
$mobile=validate($_REQUEST['mobile']);
$uname=validate($_REQUEST['uname']);
$password=validate($_REQUEST['password']);
$encryptpwd=md5(sha1($password));
$authToken=md5(sha1($password.$uname));

}
function validate($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  $data = htmlentities($data);
  return $data;
}

$insert_query="INSERT INTO `client_info` (`id`, `fname`, `lname`, `email`, `gender`,`location`,`mobile`,`uname`,`password`,`auth`) VALUES (NULL, '$fname', '$lname', '$email','$gender','$location','$mobile','$uname','$encryptpwd','$authToken');";



$run_query=mysqli_query($connect,$insert_query);
if($run_query==true){
  header("location:login_client.php?signup_success");

}
else{
  header("location:registration_form.php?action=false");
}



 ?>
