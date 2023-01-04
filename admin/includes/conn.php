<?php
	//$conn = new mysqli('localhost:3306', 'paquitto1', 'D&7u2$rT_6YuvB2%', 'tiemposmaday');
	$conn = new mysqli('localhost', 'root', '', 'apsystem');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>