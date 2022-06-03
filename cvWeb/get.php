<?php
$pdo_dsn = 'mysql:host=127.0.0.1;dbname=applicant_db';
include "../templates/connector.php";
//$jobtytle  = (isset($_POST['jobtytle']) ? $_POST['jobtytle'] : null);
$commentcount = 1;
$count = 1;

while ($count < 100) {
$query = "SELECT Comment FROM applicantcomments Where (Job = '$jobtytle' AND Num = '$commentcount') ORDER BY Num";
$query2 = "SELECT DISTINCT Type FROM applicantcomments WHERE (Job = '$jobtytle' AND Num = '$commentcount') ORDER BY Num";
//Sending the query to Database:
$result = $pdo_db->query($query);
$result2 = $pdo_db->query($query2);
$count2 = 1;

  while ($row2 = $result2->fetch(PDO::FETCH_ASSOC)) {
        print  '<div class="' .$count . '">
            <input type="button" class="btn blue" style="width: 300px;" href="#" value="' .$row2["Type"] . '" id="button' .$count . '" onclick="showCheckboxes(this);"/>
            <div class="comments" id="button' .$count . 'group0" style="display: none">';
  }

  while ($row = $result->fetch(PDO::FETCH_ASSOC)){
          print '<div class="comment">
            <label class="comment">
              <input type="checkbox" class="com" value="' .$row["Comment"] . '" id="inp' .$count2 . '"/>
              <span class="checkmark" for="inp' .$count2 . '"></span>
              <label name="com" id="com' .$count2 . '" for="inp' .$count2 . '">' .$row["Comment"] . '
        </label>
        </label>
      </div>';
      $count2++;
    }

      print '</div>
  </div>';


$result->execute();
  $count++;
  $commentcount++;
}

?>
