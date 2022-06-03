
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Response Page</title>
    <link rel="stylesheet" href="../templates/style.css"/>
    <script src="program.js">
    </script>
  </head>
  <body onload="changeTextofCheckboxes();">
    <?php
    include "../templates/header.php";
     ?>
    <div class="content">
      <table class="table1">
        <tr>
            <td>
              <div class="iframeBox">
                <iframe  class="iframe" src="..\upWeb\uploads\CV.pdf" width='650px' height='565px' frameborder='0'>
                </iframe>
              </div>
            </td>
            <td>
              <div class="all">
                <?php
                $jobtytle = $_POST['position'];
                include "get.php";
                 ?>
              </div>
            </td>
        </tr>
      </table>
    </div>
      <div class="end" style="text-align: center;">
        <br>
        <div>
          <input type="button" id="applyButton" class="btn blue" href="#" name="applyButton" value="Apply" onclick="getValueOfCheckboxes();getForm();addSpace();"/>
        </div>
        <br>
        <form action="javascript:submitforms();" method="post" name="mainForm" onsubmit="return confirm('Email will be send. Do you want to proceed?');">
          <div id="form2" style="visibility: hidden; display: none;">
            <div>
            <label for="form"></label>
            <div>
              <b>This is a summary of your CV:</b><br><br>
              <textarea name="form" id="form" class="form" rows="10" cols="50" maxlength="3000" style="visibility: hidden; display: none; font-size: large;" required>Dear....


              </textarea>
            </div>
          </div>
          <div style="visibility: hidden; display: none;">
              <label for="Email"></label>
                <div>
                  <input type="email" id="Email" name="Email">
                </div>
            </div>
            <br>
            <div>
              <?php
                  $address = $_POST['email'];
                  print '<input class="form" type="text" value="' .$address. '" name="applicantaddress" style="visibility: hidden; display: none;"></input>'
               ?>
            </div>
            <div>
                <input type="submit" id="form1" class="btn blue" style="visibility: hidden; display: none;"></input>
            </div>
          </div>
        </form>
      </div>
      <br>
    <span id="bar">&nbsp;</span>
    <div style="visibility:hidden; border:none;  display: none;">
      <iframe name="my_iframe1" width="1" height="1"></iframe>
      <iframe name="my_iframe2" width="1" height="1"></iframe>
    </div>

    <?php
    include "../templates/footer.php";
     ?>
  </body>
</html>
