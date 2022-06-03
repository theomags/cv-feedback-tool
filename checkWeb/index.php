<?php
  include "../templates/password_client.php"
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Application Status</title>
    <link rel="stylesheet" href="../templates/style.css"/>
  </head>
  <body>
    <div class="Headban"></div>
    <div class="header" id="myHeader">
      <button class="btn blue" onclick="window.location.href='http://localhost/loginWeb/logout.php'">Log Out</button>
    </div>
    <br><br>
    <div class="middle" style="width:800px; margin:0 auto; text-align: center;">
      <div class="form" style="text-align: center;">
        <?php
        include "checker.php";
         ?>
      </div>
   </div><br><br><br>
    <?php
    include "../templates/footer.php";
     ?>
  </body>
</html>
