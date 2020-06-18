<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
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

    <table>

      <form class="" enctype="multipart/form-data"action="update_info_core.php" method="post">
    <?php require_once 'connect.php';


    if(isset($_REQUEST["id"])){
      $editID=$_REQUEST["id"];
    }
    $select_info="SELECT * FROM `client_info` where id=$editID;";
      $run_query=mysqli_query($connect,$select_info);
      while ($getData=mysqli_fetch_array($run_query)) {

        ?>
        <div class="form__group">
            <tr><td>First Name: </td> <td><input type="text"class="form__input" name="fname" value="<?php echo $getData['fname']; ?>"></td>   </tr>
        </div><div class="form__group">
            <tr><td>Last Name:</td><td><input type="text" class="form__input"name="lname" value="<?php echo $getData['lname']; ?>"></td>    </tr>
        </div><div class="form__group">
              <tr><td>E-mail:</td> <td><input type="text" class="form__input"name="email" value="<?php echo $getData['email']; ?>"></td> </tr>
        </div><div class="form__group">
            <tr><td>Gender:</td> <td><input type="text"class="form__input" name="gender" value="<?php echo $getData['gender']; ?>"></td>   </tr>
        </div><div class="form__group">
            <tr><td>Location:</td><td><input type="text"class="form__input" name="location" value="<?php echo $getData['location']; ?>"></td>  </tr>
        </div><div class="form__group">
            <tr><td>Mobile: </td><td><input type="text"class="form__input" name="mobile" value="<?php echo $getData['mobile']; ?>"></td>   </tr>
        </div><div class="form__group">
            <tr><td>User Name:</td> <td><input type="text" class="form__input"name="uname" value="<?php echo $getData['uname']; ?>"></td>  </tr>
        </div><div class="form__group">
          <tr><td>Password:</td> <td><input type="password"class="form__input" name="password" value="<?php echo $getData['password']; ?>"></td>   </tr>
        </div>
        <div class="form__group">
            <tr><td>Upload profile picture:</td><td><input type="file" class="btn" name="avatar"></td></tr>
        </div>
        <div class="form__group">
            <tr><td></td><td><input type="submit" class="btn" name="" value="Update Data"> </td></tr>
        </div>
        <input type="hidden" name="editing_id" value="<?php echo $editID?>">


<?php
}
 ?>
   </form>
 </table>
   </div>

  </body>
</html>
<script type="text/javascript">
const button = document.querySelector('.btn')
const form   = document.querySelector('.form')

button.addEventListener('click', function() {
 form.classList.add('form--no')
});
</script>
