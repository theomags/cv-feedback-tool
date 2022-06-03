<?php
$pdo_dsn = 'mysql:host=127.0.0.1;dbname=applicant_db';
include "../templates/connector.php";
$query = "SELECT * FROM applicantcomments ORDER BY Job";
$result = $pdo_db->query($query);

while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
print '
<tr>
  <td style="background-color: #D8D9D7;">' .$row["Type"]. '</td>
  <td>' .$row["Comment"]. '</td>
  <td style="background-color: #D8D9D7;">' .$row["Job"]. '</td>
  <td><a href="remove.php?a=' .$row["Comment"]. '"><button class="btn blue" style="width: 120px;">Remove</button></a></td>
</tr>';
}
$result->execute();
?>
