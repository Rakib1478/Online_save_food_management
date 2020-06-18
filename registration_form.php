
<?php require_once 'connect.php';
require_once ('header.php');
if(isset($_REQUEST["action"])){
if($_REQUEST["action"]=="false"){
  echo "<font color='red'> Sign Up unsucessful! Please try again."." </font>";

}
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registation</title>
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

          <form class="form"enctype="multipart/form-data"action="registration_form_core.php" method="post">
            <div class="form__group">
<input type="text" placeholder="First Name" name="fname" value=""class="form__input"required>
            </div>
            <div class="form__group">
<input type="text" placeholder="Last Name"name="lname" value=""class="form__input"required>
            </div>

            <div class="form__group">
<input type="text"placeholder="Location" name="location" value=""class="form__input"required>
            </div>
            <div class="form__group">
<input type="text" placeholder="Mobile Number"name="mobile" value=""class="form__input"required>
            </div>
              <div class="form__group">
                  <input type="text" placeholder="Username" name="uname" class="form__input" required/>
              </div>

              <div class="form__group">
                  <input type="email" placeholder="Email" name="email" class="form__input" required/>
              </div>

              <div class="form__group">
                  <input type="password" placeholder="Password" name="password" class="form__input" required/>
              </div>
              <div class="form__group">
                  Gender: <input type="radio" id="male" name="gender" value="male">
                <label for="male">Male</label>
                <input type="radio" id="female" name="gender" value="female">
                <label for="female">Female</label>
                <input type="radio" id="other" name="gender" value="other">
                <label for="other">Other</label>
              </div>
            <input class="btn" type="submit" name="" value="Sign Up">
          </form>
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
