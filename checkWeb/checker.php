<?php
$pdo_dsn = 'mysql:host=127.0.0.1;dbname=applicant_db';
include "../templates/connector.php";

$query = "SELECT user_id FROM applicantdetails WHERE user_id = '$user_data2'";
$result = $pdo_db->query($query);
$user_data = $result->fetch(PDO::FETCH_ASSOC);
$link = <<<link
<button class="btn blue" onclick="window.location.href='
link;
$end = <<<endlink
'">
endlink;

if($user_data){
  if(!is_null($user_data)){
    if($user_data['user_id'] == $user_data2){
      print '<b>Your application is under review.</b>';
    }
  }
} else {
  print '<b>Ops. Looks like you did not submit application form yet.</b>';
  print  $link . 'http://localhost/appWeb/' . $end . "Back</button>";
}

?>
