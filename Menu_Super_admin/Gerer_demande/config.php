<?php
	const DBHOST = 'localhost';
	const DBUSER = 'root';
	const DBPASS = '';
	const DBsite = 'projetphase1';

	$conn = new mysqli(DBHOST, DBUSER, DBPASS, DBsite);

	if ($conn->connect_error) {
	  die('Could not connect to the database!' . $conn->connect_error);
	}
?>