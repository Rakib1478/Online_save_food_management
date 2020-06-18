<?php
require_once 'connect.php';
      $editID=$_REQUEST['editing_id'];
      if(isset($_REQUEST['fname'])&&isset($_REQUEST['lname'])&&isset($_REQUEST['email'])&&isset($_REQUEST['gender'])&&isset($_REQUEST['location'])&&isset($_REQUEST['mobile'])&isset($_REQUEST['uname'])&&isset($_REQUEST['password'])=='true'){
      $fname=validate($_REQUEST['fname']);
      $lname=validate($_REQUEST['lname']);
      $email=validate($_REQUEST['email']);
      $gender=validate($_REQUEST['gender']);
      $location=validate($_REQUEST['location']);
      $mobile=validate($_REQUEST['mobile']);
      $uname=validate($_REQUEST['uname']);
      $password=validate($_REQUEST['password']);

      }


$submitted_Name = $_FILES["avatar"];
$fileName=$submitted_Name["name"];
$fileType=$submitted_Name["type"];
$fileSize=$submitted_Name["size"];
$fileTmpName=$submitted_Name["tmp_name"];
$dbavatarname=uniqid().".jpg";

move_uploaded_file($fileTmpName,"avatar/$dbavatarname");
      function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

     $update_query="UPDATE client_info SET fname = '$fname',lname = '$lname', email = '$email', gender = '$gender', location = '$location', mobile = '$mobile',avatar = '$dbavatarname', uname = '$uname', password = '$password' where id=$editID;";
      $run_query=mysqli_query($connect,$update_query);
      if($run_query==true){
        header("Location: database_show.php?updated");
      }

 ?>
