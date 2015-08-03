<?php
	require_once 'lib/mysql.php';
	$query = "INSERT INTO remix (id, mbzid, done) VALUES "
	$file = file_get_contents("out.txt");
	$lines = explode("\n", $file);

	foreach ($lines as $l) {
		$query = $query."(NULL, ".$l.", 0), "
	}

	$query = substr($query, 0, strlen($query) - 3);

	echo $query;
?>