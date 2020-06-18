<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>header</title>
<style>

    body{
        padding-top: 60px;
        padding-bottom: 40px;
    }
    .container{
        width: 80%;
        margin: 0 auto; /* Center the DIV horizontally */
    }
    .fixed-header, .fixed-footer{
        width: 100%;
        position: fixed;
        background: #047289;
        padding: 10px 0;
        color: #fff;
    }
    .fixed-header{
        top: 0;
    }
    .fixed-footer{
        bottom: 0;
    }
    /* Some more styles to beutify this example */
    nav a{
        color: #fff;
        text-decoration: none;
        padding: 7px 25px;
        display: inline-block;
    }
    .container p{
        line-height: 200px; /* Create scrollbar to test positioning */
    }
</style>
</head>
<body>
    <div class="fixed-header">
        <div class="container">
            <nav>
                <a href="admin_dashboard.php">Home</a>

                <?php
                if(isset($_COOKIE['currentUser'])){
                ?>
                  <a href="logout_core_admin.php">Admin Logout</a>
                <?php
                }
                else{
                  ?>
                  <a href="login_admin.php">Admin Login</a>
                  <?php
                }
                 ?>
                <a href="database_show.php">Client Information</a>
                <a href="offer_show.php">Client Offers</a>
                <?php

                 ?>

            </nav>
        </div>
    </div>
    <div class="fixed-footer">
       <div class="container">Copyright &copy; 2020 Online Food Waste Management </div>
   </div>
</body>
</html>
