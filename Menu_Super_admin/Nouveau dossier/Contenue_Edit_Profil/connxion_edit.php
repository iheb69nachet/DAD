 <?php 
$connect = mysqli_connect("localhost:3306","chocoest","chocoest","projetphase1") ;
							

	
$Nom = $_POST["Nom"] ;
$prenom = $_POST["prenom"] ;
$Email = $_POST["Email"] ;
$status  = $_POST["status"] ;
$Supervisor  = $_POST["Supervisor"] ;
$Experience = $_POST["Experience"] ;
$Tel  = $_POST["Tel"] ;
$ville  = $_POST["ville"] ;
						

$sql = "UPDATE compte_user 
		SET `Nom` = '$Nom', 
		`prenom` = '$prenom', 
		`Email` = '$Email', 
		`status` = '$status', 
		`Supervisor` = '$Supervisor',
		`Experience` = '$Experience', 
		`Tel` = '$Tel',
		`ville` = '$ville'" ;
							 
							
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