<?php require_once('admin_header.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>show offer</title>
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
    <h1 align="center">Client Offers</h1>
    <table border='1px'>
      <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Location</th>
        <th>Mobile</th>
        <th>Profile picture</th>
        <th>msg_id</th>
        <th>message</th>
        <th>status</th>
        <th>Response</th>
        </tr>

        <?php require_once('connect.php');

        $showDataQuery="SELECT * FROM client_info  INNER JOIN food_offer ON client_info.id =food_offer.client_id ;";
        $runDataQuery=mysqli_query($connect,$showDataQuery);
        if($runDataQuery==true){
          while($mydata=mysqli_fetch_array($runDataQuery)){
          ?>
          <tr><td><?php echo $mydata['id']; ?></td>
          <td><?php echo $mydata['fname']; ?></td>
          <td><?php echo $mydata['lname']; ?></td>
          <td><?php echo $mydata['email']; ?></td>
          <td><?php echo $mydata['gender']; ?></td>
          <td><?php echo $mydata['location']; ?></td>
          <td><?php echo $mydata['mobile']; ?></td>
          <td><center> <img width="60px" src="avatar/<?php echo $mydata['avatar']; ?>" ></center> </td>
          <td><?php echo $mydata['msg_id']; ?></td>
              <td><?php echo $mydata['message']; ?></td>
              <td><?php echo $mydata['status']; ?></td>
              <td><a href="offer_respose.php?id=<?php echo $mydata['msg_id']; ?>">Offer Response</a></td>
            </tr>


          <?php

        }
      }

?>
</table>
  </body>
</html>
