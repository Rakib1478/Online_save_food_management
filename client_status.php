<?php require_once 'client_header.php';
require_once 'connect.php';
  $client_ID=$_COOKIE['cid'];
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>status</title>
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
    <table border="1px"class="my_table">
      <th>message</th><th>status</th>
    <?php
    $client_ID=$_COOKIE['cid'];
    $qry_status="SELECT * FROM `food_offer` WHERE `client_id`=$client_ID;";
    $run_qry_status=mysqli_query($connect,$qry_status);
      while($mystatus=mysqli_fetch_array($run_qry_status)){
        ?>
        <tr>
    <td><?php echo $mystatus['message']; ?></td><td><?php echo $mystatus['status'];  ?></td>
        </tr>

        <?php
    }
     ?>

    </table>
  </body>
</html>
