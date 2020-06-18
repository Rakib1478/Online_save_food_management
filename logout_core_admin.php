
<?php
session_unset();
session_destroy();
setcookie("uname","",time()-(86400*50));
setcookie("currentUser","",time()-(86400*50));
header("location:login_admin.php");

 ?>
