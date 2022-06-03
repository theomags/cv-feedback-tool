<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$pos = $_POST['jobtytle'];
$email = $_POST['email'];
$user_data2 = $_POST['userid'];
$pdo_dsn = 'mysql:host=127.0.0.1;dbname=applicant_db';

include "../templates/connector.php";

if($fname == "" || $lname == "" || $pos == "" || $email == ""){
    $msg = "One or more field is empty";
    die ('<script type="text/javascript">alert("' . $msg . '")</script>');
}

try{
  $sql = "INSERT into applicantdetails(Fname, Lname, Pos, Email, user_id) VALUES ('".$fname."', '".$lname."', '".$pos."', '".$email."', '".$user_data2."')";
  $conn = $pdo_db->query($sql);
  $msg = "The data is inserted successfully";
  echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}

catch(PDOException $e){
  $msg = $sql . "<br>" . $e->getMessage();
  echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}

header("Location: ../checkWeb/");
?>
