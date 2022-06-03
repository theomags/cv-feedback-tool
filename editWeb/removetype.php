<?php
$submittedValue = "";
        if (isset($_POST['list1'])) {
            $submittedValue = htmlspecialchars($_POST['list1']);
            $submittedValuespecial = preg_replace('/\s+/', '_', $submittedValue);
        }

$pdo_dsn = 'mysql:host=127.0.0.1;dbname=applicant_db';
include "../templates/connector.php";

$query = "DELETE FROM comment_type WHERE Type = '$submittedValuespecial'";
$result = $pdo_db->query($query);
$query2 = "DELETE FROM applicantcomments WHERE Type = '$submittedValuespecial'";
$result2 = $pdo_db->query($query2);

print '<script type="text/javascript">';
print 'alert("The data is removed.")';
print '</script>';
 ?>
