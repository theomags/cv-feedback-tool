<?php
$pdo_dsn = 'mysql:host=127.0.0.1;dbname=applicant_db';
include "../templates/connector.php";
$query = "SELECT * FROM comment_type";
$result = $pdo_db->query($query);
$count = 1;
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
print '<option value='.$row["Type"].'>  '.$row["Type"].'</option>';
$count++;
}
$result->execute();
?>
