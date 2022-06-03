<?php
  include "../templates/password.php"
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>New Applicant Page</title>
    <link rel="stylesheet" href="../templates/style.css"/>
  </head>
  <body>
    <?php
    include "../templates/header.php";
     ?>
    <br><br>
    <div class="middle" style="width:800px; margin:0 auto; text-align: center;">
      <form class="form" action="insert.php" method="post" target="my_iframe" onsubmit="window.location.reload(true)">
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
        <br><br>
        <input class="btn blue" type="submit" name="submit "value="Add Applicant" style="display: table; margin-right: auto; margin-left: auto;">
      </form>
      <br>
      <form class="form" id="myForm">
        <a href="#" class="btn blue" onclick="document.getElementById('inpFile').click(); return false;" />Choose File</a>
        <input class="btn blue" type="file" id="inpFile" style="visibility: hidden; display: none;"/>
        <button type="submit" class="btn blue"; style="float: right">Upload File</button>
      </form>
    </div>
    <div class="middle" style="width:800px; margin:0 auto; text-align: center;">
      <form class="form" id="myForm" action="remover.php" target="my_iframe1" onsubmit="window.location.reload(true)">
        <b style="padding-right: 15.5%;">Wrong file? Remove it:</b>
        <input class="btn blue" type="file" id="inpFile" style="visibility: hidden; display: none;"/>
        <button type="submit" class="btn blue">Remove Files</button>
      </form>
    </div>
    <br><br><br>
    <div style="visibility:hidden; border:none; display: none;">
      <iframe name="my_iframe" width="1" height="1"></iframe>
      <iframe name="my_iframe1" width="1" height="1"></iframe>
    </div>
    <script src="program.js">
    </script>
  <?php
  include "../templates/footer.php";
  ?>
  </body>
</html>
