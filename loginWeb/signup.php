<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../templates/style.css"/>
	<script type = "text/javascript" src = "login.js" ></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="height=device-height, initial-scale=1.0">
	<meta charset="utf-8">
	<title>Sign Up Page</title>
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
    		<b style="font-size: 140%">Sign Up</b>
    		<p id="alert" style="color:red"></p>
    		<p><input type="text" name="username" id="username" class="login-form-field" placeholder="Username"><p>
    		<p><input type="password" name="password" id="password" class="login-form-field" placeholder="Password"></p>
        <?php
        include "sign.php";
         ?>
    		<p><input class="btn blue" id="login-button" type="submit" value="Sign Up"></p>
       	<h3 class="change">Already registered?</h3>
			</div>
  		</form>
			<div class="middle" style="width:100%; margin:0 auto; text-align: center;">
		<button class="btn blue" onclick="window.location.href='index.php'">Log In</button>
	</div>
	</div>
</div>
<br><br><br>
<?php
include "../templates/footer.php";
 ?>
</body>
</html>
