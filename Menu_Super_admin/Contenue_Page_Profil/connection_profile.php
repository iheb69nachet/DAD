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
	 
$Nom = $_POST['Nom'];

$prenom = $_POST['prenom'];

$login = $_POST['login'];

$Password = $_POST['Password'];

$Email = $_POST['Email'];

$Matricule = $_POST['Matricule'];

$Chef_Hierarchie = $_POST['Chef_Hierarchie'];

$direction = $_POST['direction'];

$department = $_POST['department'];

$service = $_POST['service'];

$cs = $_POST['cs']; 

$IDcreation= $_SESSION['ID'];


$acess_level = $_POST['acess_level'];

$role = $_POST['option'];
$ref_site = $_POST['ref_site'];


$date_creation = date('Y-m-d H:i:s');

/*$acess_level = $affect = '';
switch($role) {
	
	 case 'admin':
		$acess_level = "L3";
	break;
	
}*/


$sql= "INSERT INTO compte_user(date_creation,Nom, prenom, acess_level, login, Password, Email, Matricule, Chef_Hierarchie, direction, department, service, etat, site, ref_site, cs, IDcreation) 

 VALUES('$date_creation','$Nom', '$prenom', '$acess_level', '$login', '$Password', '$Email', '$Matricule', '$Chef_Hierarchie', '$direction', '$department', '$service', '$etat', '$role', '$ref_site', '$cs', '$IDcreation')";


if ( mysqli_query($connect, $sql)){
	
	// echo "yes"; 
	header("Location: http://192.168.0.85/localhost/Gestion/Acceuil.php?");	
	// header("Location:http://test.mnamy.com/Acceuil.php");

}
else{
	
	echo $sql;
	
header("demande.php");	
}
mysqli_close($connect);
}
?>





