<?php
$pdo_dsn = 'mysql:host=127.0.0.1;dbname=applicant_db';
include "../templates/connector.php";

$query = "SELECT * FROM positions";
$result = $pdo_db->query($query);
//create drop down list for position template
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
print '<option value=' .$row["Position"]. '>' .$row["Position"]. '</option>';
}
$result->execute();
?>
