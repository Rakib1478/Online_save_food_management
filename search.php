<?php require_once('header.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>show database</title>
  </head>
  <body>
    <div class="container">


    <form class="" action="" method="post">
      <input placeholder="search" type="text" name="search_term" value="">
      <input type="submit"  value="Search">

<?php require_once('connect.php');

if(isset($_REQUEST['search_term'])){

$search_term=$_REQUEST['search_term'];
?>
</form>

<h1>Database</h1>
<table border='1px'>
  <tr>
  <td>ID</td>
  <td>First Name</td>
  <td>Last Name</td>
  <td>Email</td>
  <td>Gender</td>
  <td>Location</td>
  <td>Mobile</td>
  <td>Profile picture</td>
  <td>User Name</td>
  <td>password</td>
  <td>edit</td>
  <td>delete</td>
</tr>
<?php
$showDataQuery="SELECT * FROM `client_info` WHERE `fname` LIKE '%$search_term%' OR `lname` LIKE '%$search_term%' OR `email` LIKE '%$search_term%' OR `mobile` LIKE '%$search_term%' ;";
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
        <td><a href="update_info.php?id=<?php echo $mydata['id']; ?>">edit</a></td>
        <td><a onclick="<?php $message = "are you sure";
echo "<script type='text/javascript'>alert('$message');</script>"; ?>" href="delete_info_core.php?id=<?php echo $mydata['id']; ?>">delete</a></td>

    </tr>

  <?php



      }
    }

}


?>

  </div>
</table>
  </body>
</html>
