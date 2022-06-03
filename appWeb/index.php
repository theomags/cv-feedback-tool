<?php
  include "../templates/password_client.php"
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Applicant Page</title>
    <link rel="stylesheet" href="../templates/style.css"/>
  </head>
  <body>
    <div class="Headban"></div>
    <div class="header" id="myHeader">
      <!-- <button class="btn blue" onclick="window.location.href='http://localhost/checkWeb'">Check Status</button> -->
      <button class="btn blue" onclick="window.location.href='http://localhost/loginWeb/logout.php'">Log Out</button>
    </div>
    <br><br>
    <div class="middle" style="width:800px; margin:0 auto; text-align: center;">
      <form class="form" action="insert.php" method="post">
        <b>First Name: </b><input type="text" name="fname" class="nform" style="padding-right: 35px;">
        <br><br>
        <b>Last Name: </b><input type="text" name="lname" class="nform" style="padding-right: 35px;">
        <br><br>
        <b>Email Address: </b><input type="text" name="email" class="nform" style="padding-right: 35px;">
        <br><br>
        <b>Position: </b>
        <select project="list" id="list" name="jobtytle" class="nform" style="width: 202px; padding-right: 35px;">
          <!-- <option value="0">Select:</option> -->
            <?php
            include "../editWeb/position.php" //dropdown position from db
            ?>
        </select>
        <?php
          print('<input type="test" name="userid" value="'. $user_data2 .'" style="visibility:hidden; border:none; display: none;"');
         ?>
        <br><br>
        <input class="btn blue" type="submit" name="submit "value="Add Applicant" style="display: table; margin-right: auto; margin-left: auto;">
      </form>
      <br>
    </div>
    <br><br><br>
    <script src="program.js">
    </script>
  <?php
  include "../templates/footer.php";
  ?>
  </body>
</html>
