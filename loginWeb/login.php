<?php
session_start();

$pdo_dsn = 'mysql:host=127.0.0.1;dbname=login_db';
include "../templates/functions.php";
include "../templates/connector.php";

$pdo_dsn2 = 'mysql:host=127.0.0.1;dbname=applicant_db';
$pdo_username2 = "root";
$pdo_password2 = "";

try {
  //Creating the PDO object:
  $pdo_db2 = new PDO($pdo_dsn2, $pdo_username2, $pdo_password2);
  $pdo_db2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  //echo 'Connection failed: ' . $e->getMessage();
  die ('Sorry, database problem');
}

if($_SERVER['REQUEST_METHOD'] == "POST")
{
  //something was posted
  $user_name = $_POST['username'];
  $password = $_POST['password'];
  $admin = "Admin";
  //checking if somthing was posted and the username is not numeric
  //and asking the user to insert the data
  if(!empty($user_name) && !empty($password))
  {

    //read from database and compare the inserted data to the data in the database
    $query = "SELECT * FROM users WHERE user_name = '$user_name' LIMIT 1";
    $result = $pdo_db->query($query);
    $user_data = $result->fetch(PDO::FETCH_ASSOC);




    if (ISSET($user_data['user_name']))
    {
      $id = $user_data['user_id'];
      $query2 = "SELECT user_id FROM applicantdetails WHERE user_id = '$id' LIMIT 1";
      $result2 = $pdo_db2->query($query2);
      $user_data2 = $result2->fetch(PDO::FETCH_ASSOC);
        //comparing the username's (hashed) password in the database matches the password imput by user
        if(password_verify($password, $user_data['password']))
        {
          if($user_data['role'] === $admin) {

            $_SESSION['user_id'] = $user_data['user_id'];
            header("Location: ../upWeb");
            die;
          } else {
            if ($user_data2['user_id'] == $user_data['user_id']){
              $_SESSION['user_id'] = $user_data['user_id'];
              header("Location: ../checkWeb");
              die;
            } else {
              $_SESSION['user_id'] = $user_data['user_id'];
              header("Location: ../appWeb");
              die;
            }
          }
        }
        else {
          echo '<p style="color: #cc0000;">Wrong Password!</p>';
        }
    }
else {

    echo '<p style="color: #cc0000;">Wrong Username!</p>';
  }

  }
  else {

  echo '<p style="color: #cc0000;">Insert your account details!</p>';
}
}

?>
