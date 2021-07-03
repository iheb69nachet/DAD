<?php
	
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projetphase1";
$connect = mysqli_connect($servername,$username,$password,$dbname);
// var_dump($connect);

if (!$connect) {
	
echo "Failed to connect: " .mysqli_connect_error();

}
if(isset($_POST['Envoyer'])){

$Direction = $_POST['Direction'];

		
$Departement = $_POST['Departement'];

$Service = $_POST['Service'];

$Matricule = $_POST['Matricule'];

$Hierarchie = $_POST['Hierarchie'];

$Objet_depense = $_POST['Objet_depense'];

$Depense_budgetisee = $_POST['Depense_budgetisee'];

$Proposition_fournisseurs= $_POST['Proposition_fournisseurs'];

$Type_Depense= $_POST['Type_Depense'];

$date_creation = date('Y-m-d H:i:s');

$id_user = $_SESSION['ID'];


$sql= "INSERT INTO demande(date_creation,Direction, Departement, Service, Matricule, Hierarchie, Objet_depense, Depense_budgetisee, Proposition_fournisseurs, Type_Depense, id_user) 

 VALUES('$date_creation','$Direction', '$Departement', '$Service', '$Matricule', '$Hierarchie', '$Objet_depense', '$Depense_budgetisee', '$Proposition_fournisseurs', '$Type_Depense', '$id_user')";

if ( mysqli_query($connect, $sql)){
	
	echo "yes"; 
	//header("Location: http://localhost/Gestion-Clients/Acceuil.php?conf=1");	
	// header("Location:http://test.mnamy.com/Acceuil.php");
	header("demande.php");	
}
else{
	
	echo $sql;
	
header("demande.php");	
}
mysqli_close($connect);
}
?>





