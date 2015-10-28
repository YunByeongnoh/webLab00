<?php
	echo "dddd";
	$db = new PDO("mysql:dbname=colleage;host=localhost", "root", "root");
	$db->query("SELECT * FROM student");
?>