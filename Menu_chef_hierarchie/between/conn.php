<?php

//MySQLi Procedural
//$conn = mysqli_connect("localhost","root","","between");
//if (!$conn) {
//  die("Connection failed: " . mysqli_connect_error());
//}

//MySQLi Object-oriented
$conn = new mysqli("localhost","root","","projetphase1");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>