<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projetphase1";
$connect = mysqli_connect($servername,$username,$password,$dbname);

$id = $_POST["id"];
$etat = $_POST["etat"];

$sql = "UPDATE compte_user 
		SET `etat` = '$etat'
		WHERE `id` = '$id'";
$result = mysqli_query($connect, $sql);

if($result)
	
  {
	  
    echo("La modification à été correctement effectuée") ;
	
  }
  
  else
	  
  {
    echo("La modification à échouée") ;
  }
?>