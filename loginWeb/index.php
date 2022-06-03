<!DOCTYPE html>
<html>
<head>
  <script type = "text/javascript" src = "login.js" ></script>
  <meta charset="utf-8">
  <title>Log In Page</title>
  <link rel="stylesheet" href="../templates/style.css"/>
</head>
<body>
  <?php
  include "../templates/header.php";
   ?>
<br><br>
<div class="table1">
  <div class="form">
    <form id="login" method="post">
      <div class="middle" style="width:100%; margin:0 auto; text-align: center;">
      <b style="font-size: 140%">Log In</b>
      <p id="alert" style="background-color:red"></p>
      <p><input type="text" name="username" id="login-username" class="login-form-field" placeholder="Username"><p>
      <p><input type="password" name="password" id="login-password" class="login-form-field" placeholder="Password"></p>
      <?php
      include "login.php";
       ?>
      <p><input class="btn blue" id="login-button" type="submit" value="login" ></p>
      <h3 class="change"> Not a user yet?</h3>
      </div>
    </form>
    <div style="width:100%; margin:0 auto; text-align: center;" >
      <button class="btn blue" onclick="window.location.href='signup.php'">Sign Up</button>
    </div>
  </div>
</div>
<br><br><br>
<?php
include "../templates/footer.php";
 ?>
</body>
</html>
