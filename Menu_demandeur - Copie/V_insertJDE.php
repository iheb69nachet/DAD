<?php
 session_start();
  
 $conn1 = new PDO("sqlsrv:Server=192.168.0.46; Database=JDE_PRODUCTION", "DAD", "dAd2020+");
 $conn1->setAttribute ( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

if(isset($_POST['Envoyer'])){
	
	
	$Matricule = $_POST['Matricule'];
	$Reference_demande = $_POST['Reference_demande'];
	$id_L1 = $_POST['id_L1'];
	$prix_L1 = $_POST['prix_L1'];
	$quantite_L1 = $_POST['quantite_L1'];
	$description1_L1 = $_POST['description1_L1'];

	

	if(!empty($prix_L1)){
			$query_insert= "INSERT INTO PRODDTA.F4311Z1(SZEDUS, SZAN8, SZEDBT, SZEDTN, SZEDLN, SZLNID, SZTYTN, SZDRIN, SZEDSP, SZTNAC, SZSFXO, SZNXTR, SZLTTR, SZUOM, SZUSER, SZPID, SZJOBN) 
			VALUES('$Matricule', '$Matricule', '$Reference_demande', '$Reference_demande', '$id_L1', '$id_L1', '850', '1', 'N', 'A', '000', '230', '280', 'EA', 'JDE', 'P4311Z1I  ', 'JDEWEB1    ')";
			$stmt = $conn1->query($query_insert);
	}		
/*
$Matricule = $_POST['Matricule'];
$id_L1 = $_POST['id_L1'];
$id_L2 = $_POST['id_L2'];
$id_L3 = $_POST['id_L3'];
$prix_L1 = $_POST['prix_L1'];
$prix_L2 = $_POST['prix_L2'];
$prix_L3 = $_POST['prix_L3'];
$quantite_L1 = $_POST['quantite_L1'];
$description1_L1 = $_POST['description1_L1'];
$description2_L1 = $_POST['description2_L1'];
$Reference_demande = $_POST['Reference_demande'];

if(!empty($prix_L1)){
			$query_insert= "INSERT INTO PRODDTA.F4311Z1(SZEDUS, SZEDBT, SZEDTN, SZEDLN) 
			VALUES('$Matricule', '$Reference_demande', '$Reference_demande', '$id_L1')";
			$stmt = $conn1->query($query_insert);
}

if(!empty($prix_L2)){
			$query_insert= "INSERT INTO PRODDTA.F4311Z1(SZEDUS, SZEDBT, SZEDTN, SZEDLN) 
			VALUES('$Matricule', '$Reference_demande', '$Reference_demande', '$id_L2')";
			$stmt = $conn1->query($query_insert);
}
if(!empty($prix_L3)){
			$query_insert= "INSERT INTO PRODDTA.F4311Z1(SZEDUS, SZEDBT, SZEDTN, SZEDLN) 
			VALUES('$Matricule', '$Reference_demande', '$Reference_demande', '$id_L3')";
			$stmt = $conn1->query($query_insert);
}

		

/*if ( mysqli_query($conn1, $query_insert)){
	 echo "yes"; 
	}
else{
	echo "No !!";

}
 mysqli_close($conn1);*/
 
 
 

}
?>





