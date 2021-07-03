<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projetphase1";
	$connect = mysqli_connect($servername,$username,$password,$dbname);

$id = $_POST["id"];
$login = $_POST["login"];
$Password = $_POST["Password"];
$Email = $_POST["Email"];
$date_creation = $_POST["date_creation"];
$role = $_POST["role"];
$affect = $_POST["affect"];

$sql = "UPDATE compte_user 
    SET `login` = '$login',
        `Password` = '$Password',
        `Email` = '$Email',
        `date_creation` = '$date_creation',
        `role` = '$role',
		`affect` = '$affect'
    WHERE `id` = '$id'";
echo $sql;
$result = mysqli_query($connect, $sql);

if($result)
	
  {
	  
    echo("Le profil a été correctement modifié") ;
	
  }
  
  else
	  
  {
    echo("La modification à échouée") ;
  }
?>