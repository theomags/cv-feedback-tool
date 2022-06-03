<?php
session_start();

$pdo_dsn = 'mysql:host=127.0.0.1;dbname=login_db';
include "../templates/connector.php";
include "../templates/functions.php";

if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//clicked button
		$user_name = $_POST['username'];
		$unhash = $_POST['password'];
		$password = password_hash($unhash, PASSWORD_DEFAULT);
		//Not accepting blank fields
		if(!empty($user_name) && !empty($password))
		{
			//not accepting numeric username, separated to get a different error
			if(!is_numeric($user_name))
			{
			//Comparing the data inserted with the data on the database to avoid duplicant username
			$query = "SELECT * FROM users WHERE user_name = '$user_name' LIMIT 1";
			$result = $pdo_db->query($query);
			$user_data = $result->fetch(PDO::FETCH_ASSOC);
			if($user_data['user_name'] != $user_name)
	    {
						//save to database
						$user_id = random_num(20);
						$query = "INSERT INTO users (user_id,user_name,password) VALUES ('$user_id','$user_name','$password')";
						$result = $pdo_db->query($query);
			//send the user to the login page if successfull
			header("Location: index.php");
			die;

} echo '<p style="color: #cc0000;">User already registered!</p>';
		}else
			{
				echo '<p style="color: #cc0000;">The username cannot be numeric!</p>';
		}
		}else
		{
      echo '<p style="color: #cc0000;">Please insert registration data!</p>';
    }
	}

?>
