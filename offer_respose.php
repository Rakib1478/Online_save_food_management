<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>offer response</title>
    <style media="screen">
    $font-family:   "Roboto";
$font-size:     14px;

$color-primary: #ABA194;

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: $font-family;
  font-size: $font-size;
  background-size: 200% 100% !important;
  animation: move 10s ease infinite;
  transform: translate3d(0, 0, 0);
  background: linear-gradient(45deg, #49D49D 10%, #A2C7E5 90%);
  height: 100vh
}

.user {
  width: 90%;
  max-width: 340px;
  margin: 10vh auto;
}

.user__header {
  text-align: center;
  opacity: 0;
  transform: translate3d(0, 500px, 0);
  animation: arrive 500ms ease-in-out 0.7s forwards;
}

.user__title {
  font-size: $font-size;
  margin-bottom: -10px;
  font-weight: 500;
  color: white;
}

.form {
  margin-top: 40px;
  border-radius: 6px;
  overflow: hidden;
  opacity: 0;
  transform: translate3d(0, 500px, 0);
  animation: arrive 500ms ease-in-out 0.9s forwards;
}

.form--no {
  animation: NO 1s ease-in-out;
  opacity: 1;
  transform: translate3d(0, 0, 0);
}

.form__input {
  display: block;
  width: 100%;
  padding: 20px;
  font-family: $font-family;
  -webkit-appearance: none;
  border: 0;
  outline: 0;
  transition: 0.3s;

  &:focus {
      background: darken(#fff, 3%);
  }
}

.btn {
  display: block;
  width: 100%;
  padding: 20px;
  font-family: $font-family;
  -webkit-appearance: none;
  outline: 0;
  border: 0;
  color: #333;
  background: $color-primary;
  transition: 0.3s;

  &:hover {
      background: darken($color-primary, 25%);
  }
}

@keyframes NO {
from, to {
  -webkit-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
}

10%, 30%, 50%, 70%, 90% {
  -webkit-transform: translate3d(-10px, 0, 0);
  transform: translate3d(-10px, 0, 0);
}

20%, 40%, 60%, 80% {
  -webkit-transform: translate3d(10px, 0, 0);
  transform: translate3d(10px, 0, 0);
}
}

@keyframes arrive {
  0% {
      opacity: 0;
      transform: translate3d(0, 50px, 0);
  }

  100% {
      opacity: 1;
      transform: translate3d(0, 0, 0);
  }
}

@keyframes move {
  0% {
      background-position: 0 0
  }

  50% {
      background-position: 100% 0
  }

  100% {
      background-position: 0 0
  }
}
    </style>
  </head>
  <body>
    <div class="user">
        <header class="user__header">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3219/logo.svg" alt="" />
        </header>
    <h1 align="center">Admin response</h1>


    <?php
    require_once 'connect.php';
    if(isset($_REQUEST["id"])){
      $msg_ID=$_REQUEST["id"];
    }
    $select_info="SELECT * FROM `food_offer` where msg_id=$msg_ID;";
      $run_query=mysqli_query($connect,$select_info);
      while ($getData=mysqli_fetch_array($run_query)) {

        ?>
<form class="form" action="offer_reponse_core.php" method="post">
  <h3 align="center">Status</h3>
  <div class="form__group">
  <input type="text" name="status" placeholder="status" class="form__input"value="<?php echo $getData['status']; ?>">
  </div>
  <div class="form__group">
  <input type="hidden" class="form__input"name="msg_id" value="<?php echo $msg_ID ; ?>">
  </div>
  <div class="form__group">
  <input type="submit" class="btn" value="response">
  </div>



</form>

        <?php

}


     ?>

  </body>
</html>
