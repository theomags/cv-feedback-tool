<?php
  include "../templates/password.php"
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Applicant List Page</title>
    <link rel="stylesheet" href="../templates/style.css"/>
  </head>
  <body>
    <?php
    include "../templates/header.php";
     ?>
     <div class="content">
         <table class="table2">
           <tr>
             <th style="width: 200px;">First name</th>
             <th style="width: 100px;">Last name</th>
             <th style="width: 100px;">Position</th>
             <th style="width: 100px;">Number</th>
             <th style="width: 200px;">Email Address</th>
             <th></th>
           </tr>
           <tr>
             <td><br></td>
           </tr>
           <?php include "get.php"
           ?>
         </table>
         <script src="program.js">
         </script>
       <br><br><br><br>
     </div>
      <br><br><br><br>
    <?php
    include "../templates/footer.php";
     ?>
  </body>
</html>
