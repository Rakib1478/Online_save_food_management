<?php require_once('admin_header.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>show database</title>
<style media="screen">
table {
border-collapse: collapse;
  margin: auto;
  width: 50%;
  border: 3px solid green;
  padding: 10px;
}
th {
background: #ccc;
}

th, td {
border: 1px solid #ccc;
padding: 8px;
}

tr:nth-child(even) {
background: #efefef;
}

tr:hover {
background: #d1d1d1;
}
</style>
  </head>
  <body>
<div class="container">


    <h1>Database</h1>
    <table border='1px'class="my_table">
      <tr>
   <th>ID</th>
   <th>First Name</th>
   <th>Last Name</th>
   <th>Email</th>
   <th>Gender</th>
   <th>Location</th>
   <th>Mobile</th>
   <th>Profile picture</th>
   <th>User Name</th>
   <th>password</th>
   <th>edit</th>
   <th>delete</th>
    </tr>
<?php require_once('connect.php');

$showDataQuery="SELECT * FROM `client_info`;";
$runDataQuery=mysqli_query($connect,$showDataQuery);
if($runDataQuery==true){
  while
  ($mydata=mysqli_fetch_array($runDataQuery)
)
{
  ?>

    <tr><td><?php echo $mydata['id']; ?></td>
        <td><?php echo $mydata['fname']; ?></td>
        <td><?php echo $mydata['lname']; ?></td>
        <td><?php echo $mydata['email']; ?></td>
        <td><?php echo $mydata['gender']; ?></td>
        <td><?php echo $mydata['location']; ?></td>
        <td><?php echo $mydata['mobile']; ?></td>
        <td><center> <img width="60px" src="avatar/<?php echo $mydata['avatar']; ?>" ></center> </td>
        <td><?php echo $mydata['uname']; ?></td>
        <td><?php echo $mydata['password']; ?></td>
        <td><a href="update_info.php?id=<?php echo $mydata['id']; ?>">Edit</a></td>
        <td><a onclick="<?php $message = "are you sure";
echo "<script type='text/javascript'>alert('$message');</script>"; ?>" href="delete_info_core.php?id=<?php echo $mydata['id']; ?>">delete</a></td>

    </tr>

  <?php



      }
    }




?>

<?php

if(isset($_REQUEST['updated'])){
echo "value is updated";
}
if(isset($_REQUEST['delete'])){
echo "client has been deleted";
}



?>
</div>
</table>
  </body>
</html>
