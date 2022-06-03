  <?php
$pdo_dsn = 'mysql:host=127.0.0.1;dbname=applicant_db';
include "../templates/connector.php";
$query = "SELECT * FROM applicantdetails";
$result = $pdo_db->query($query);
$count = 1;

while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
  print'
  <tr>
  <form action="../cvWeb/index.php" method="post">
    <td style="background-color: #D8D9D7;">' .$row["Fname"]. '</td>
    <td>' .$row["Lname"]. '</td>
    <td style="background-color: #D8D9D7;"><input type="text" name="position" value="' .$row["Pos"]. '" style="visibility: hidden; display: none;">' .$row["Pos"]. '</td>
    <td>' .$row["Num"]. '</td>
    <td style="background-color: #D8D9D7;"><input type="text" name="email" value="' .$row["Email"]. '" style="visibility: hidden; display: none;">' .$row["Email"]. '</td>
    <td><input type="submit" value="Select" class="btn blue" style="width: 120px;"></input></a></td>
    </form>
    <td><a href="remove.php?a=' .$row["Lname"]. '"><button class="btn blue" style="width: 120px;">Remove</button></a></td>
    ';
    $count++;
   }
$result->execute();
?>
