
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
        background: #2471A3;
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
                <a href="client_panel.php">Home</a>

                <?php
                if(isset($_COOKIE['current_User'])){
                ?>
                  <a href="logout_core_client.php">Client Logout</a>
                <?php
                }
                else{
                  ?>
                      <a href="login_client.php">Client Login</a>
                  <?php
                }
                if(isset($_COOKIE['cid'])){
                 ?>
                 <a href="update_info.php?id=<?php echo $_COOKIE['cid']; ?>">Edit your profile</a>
                 <a href="food_offer.php?id=<?php echo $_COOKIE['cid']; ?>">Make an food offer</a>
                 <a href="client_status.php?id=<?php echo $_COOKIE['cid']; ?>">Status</a>

<?php } ?>

            </nav>
        </div>
    </div>
    <div class="fixed-footer">
       <div class="container">Copyright &copy; 2020 Online Food Waste Management</div>
   </div>
</body>
</html>
