<?php
	$pdo = new PDO('mysql:dbname=wordpress;host=maria', 'wordpress', 'P@ssw0rd', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
	$query = $pdo->query('SHOW VARIABLES like "version"');
	$row = $query->fetch();
	echo 'Maria DB version: ' . $row['Value'];
?>