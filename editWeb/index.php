<?php
  include "../templates/password.php"
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Edit Template Page</title>
    <link rel="stylesheet" href="../templates/style.css"/>
    <script type="text/javascript" src="modal.js"></script>
  </head>
  <body>
    <?php
    include "../templates/header.php";
     ?>
    <br><br>
    <div class="middle" style="width:800px; margin:0 auto; text-align: center;">
      <form class="form" action="insert.php" method="post" name="NewCom" target="my_iframe" onsubmit="window.location.reload(true)">
        <b style="float: left;">Select position: </b>
        <select project="list" id="list" name="jobtytle" class="custom-select" style="display:table; margin-left: 40px; float:left">
                    <?php
                      include "position.php" //inserting the dropdown box with the available positions from database
                     ?>
                  </select>
                  <br><br>
        <b>New Comment: </b><input type="text" name="ncom" class="nform">
        <br><br>
        <b style="float: left;">Select Type: </b>
        <div class="custom-select" style="display: table; margin-right: auto; margin-left: 70px; float: left;">
          <select project="list" id="list" name="list">
            <?php
            include "typeconn.php";
             ?>
          </select>
        </div> <br>
        <input class="btn blue" style="display: table; margin-right: auto; margin-left: auto;" type="submit" name="submit "value="Add">
      </form>
      <iframe name="my_iframe" width="1" height="1" style="border:none"></iframe>
    </div>
    <button class="modal-button1 btn blue" style="display: table; margin-right: auto; margin-left: auto;">Add/Delete Position</button>
    <button class="modal-button btn blue" style="display: table; margin-right: auto; margin-left: auto;">Add/Delete Type</button>
    <div class="modal-bg1">
      <div class="modal1">
        <div class="middle">
          <form class="form" action="newpos.php" method="post" name="newpos" target="my_iframe">
            <b style="float: left;">Add new position:  </b>
            <input type="text" name="newpos" class="nform">
            <br>
            <input class="btn blue" style="display: table; margin-right: auto; margin-left: auto;" type="submit" name="submit "value="Add" onclick="window.alert(text='New position added')">
          </form>
        </div>
        <div class="middle">
          <form class="form" action="deletepos.php" method="post" name="deletepos" target="my_iframe">
            <b style="float: left;">Remove position:  </b>
              <select project="list" id="list" name="deletepos" class="custom-select" style="display:table; margin-left: 40px; float:left">
              <?php
              include "position.php" //inserting the dropdown box with the available positions from database
              ?>
              </select>
            <br>
            <input class="btn blue" style="display: table; margin-right: auto; margin-left: auto;" type="submit" name="submit "value="Delete" onclick="window.alert(text='The position was deleted')">
          </form>
        </div>
        <span onclick="myFunction()"class="modal-close1">Close</span>
        <script>function myFunction() {
          location.replace("http://localhost/editWeb/")
        }
        </script>
        <script src="modal1.js"></script>
    </div>
    </div>
    <div class="modal-bg">
      <div class="modal">
        <form action="insertintodb.php" method="post" target="my_iframe1" ><br>
          <p>Add Comment Type:</p>
          <input class="" type="text" name="comment_type" placeholder="Add..."><br>
          <button type="submit" name="insert" class="btn blue" style="display: table; margin-right: auto; margin-left: auto;">Add</button>
        </form>
        <form action="removetype.php" method="post" target="my_iframe1" ><br>
          <p>Remove Comment Type:</p>
          <div class="custom-select" style="display: table; margin-right: auto; margin-left: auto;">
            <select project="list1" id="list1" name="list1">
              <option value="0">Select:</option>
              <?php
              include "typeconn.php";
               ?>
            </select>
          </div>
          <button type="submit" name="insert" class="btn blue" style="display: table; margin-right: auto; margin-left: auto;">Remove</button>
        </form>
          <iframe name="my_iframe1" width="1" height="1" style="border:none"></iframe>
          <span onclick="myFunction()" class="modal-close">Close</span>
          <script>function myFunction() {
            location.replace("http://localhost/editWeb/")
          }
          </script>
          <script src="modal.js"></script>
      </div>
    </div>



    <div class="content">
      <table class="table2">
        <tr>
          <th style="width: 200px;">Type</th>
          <th style="width: 400px;">Comment</th>
          <th style="width: 200px;">Position</th>
          <th></th>
        </tr>
        <tr>
          <td><br></td>
        </tr>
        <?php include "get.php"
        ?>
      </table>
      <br><br><br><br>
    </div>
    <?php
    include "../templates/footer.php";
     ?>
  </body>
</html>
