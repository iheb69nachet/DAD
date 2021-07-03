<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projetphase1";
	$connect = mysqli_connect($servername,$username,$password,$dbname);

$id = $_POST["id"];

$sql = "DELETE FROM compte_user 
		WHERE `id` = '$id'";
echo $sql;
$result = mysqli_query($connect, $sql);

if($result)
	
  {
	  
    echo("La suppression à été correctement effectuée") ;
	
  }
  
  else
	  
  {
    echo("La suppression à échouée") ;
  }
?>