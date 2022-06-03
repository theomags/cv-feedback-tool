<?php

function check_login($pdo_db)
{

	if(isset($_SESSION['user_id']))
	{

		$id = $_SESSION['user_id'];
		$query = "SELECT * FROM users WHERE user_id = '$id' LIMIT 1";
		$query_count = "SELECT COUNT(*) FROM users";
		$result = $pdo_db->query($query);
		$count = $pdo_db->query($query_count);
		$num_rows = $count->fetchColumn();
		if ($result && $num_rows > 0){
			$user_data = $result->fetch(PDO::FETCH_ASSOC);
			return $user_data;
		}
	}

	//redirect to login
	header("Location: index.php");
	die;

}

function give_id($pdo_db){
	if(isset($_SESSION['user_id']))
	{
		$id = $_SESSION['user_id'];
		$query = "SELECT user_id FROM users WHERE user_id = '$id' LIMIT 1";
		$result = $pdo_db->query($query);
		$row = $result->fetch(PDO::FETCH_ASSOC);
		$user_data2 = $row['user_id'];
		return $user_data2;
	}
}

function random_num($length)
{

	$text = "";
	if($length < 5)
	{
		$length = 5;
	}

	$len = rand(4,$length);

	for ($i=0; $i < $len; $i++) {

		$text .= rand(0,9);
	}

	return $text;
}

?>
