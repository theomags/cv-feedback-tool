<?php
$string = htmlspecialchars($_POST['deletepos']);
$deletepos = preg_replace('/\s+/', '_', $string);
$pdo_dsn = 'mysql:host=127.0.0.1;dbname=applicant_db';

include "../templates/connector.php";
//deleting in both tables the position and comments
$query = "DELETE FROM positions WHERE Position = '$deletepos'";
$result = $pdo_db->query($query);

$query = "DELETE FROM applicantcomments WHERE Job = '$deletepos'";
$result = $pdo_db->query($query);

header ("location:index.php");
 ?>
