<?php
//Connection to the Database:
$pdo_username = "root";
$pdo_password = "";

try {
  //Creating the PDO object:
  $pdo_db = new PDO($pdo_dsn, $pdo_username, $pdo_password);
  $pdo_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  //echo 'Connection failed: ' . $e->getMessage();
  die ('Sorry, database problem');
}
 ?>
