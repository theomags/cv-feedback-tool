<?php
$string_0 = htmlspecialchars($_POST['jobtytle']);
$jobtytle = preg_replace('/\s+/', '_', $string_0);

$string_1 = htmlspecialchars($_POST['ncom']);
$fname = preg_replace('/\s+/', '_', $string_1);

$submittedValue = "";
        if (isset($_POST['list'])) {
            $submittedValue = htmlspecialchars($_POST['list']);
            $submittedValuespecial = preg_replace('/\s+/', '_', $submittedValue);
        }

$pdo_dsn = 'mysql:host=127.0.0.1;dbname=applicant_db';
include "../templates/connector.php";

$number = "0";

$num = $pdo_db->query("SELECT Nr from comment_type WHERE Type = '$submittedValuespecial'");
while ($row= $num->fetch(PDO::FETCH_ASSOC)){
  $number = $row['Nr'];
}

$query =
"INSERT into applicantcomments(Type, Comment, Job) values ('".$submittedValuespecial."', '".$fname."', '".$jobtytle."');
UPDATE applicantcomments SET Num = '$number' WHERE Type = '$submittedValuespecial'
";

$result = $pdo_db->query($query);

?>
