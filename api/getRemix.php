<?php
	require_once 'lib/mysql.php';
	$query = "SELECT * from remix WHERE done = 0 limit 1";

	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	
	echo json_encode(mysqli_fetch_assoc($result);
?>