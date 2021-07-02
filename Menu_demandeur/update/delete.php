<?php 
include "config.php";

// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['id'])) {
	$user_id = $_GET['id'];

	// write delete query
	$sql = "DELETE FROM `demande` WHERE `id`='$user_id'";
	/*$sql = "UPDATE `demande` SET `statut_demande`='Annuler' WHERE `id`='$user_id'";*/

	// Execute the query

	$result = $conn->query($sql);

	if ($result == TRUE) {
		echo "Votre Demande à été Anuuler.";
	}else{
		echo "Error:" . $sql . "<br>" . $conn->error;
	}
}
header("Location: http://192.168.0.85/Gestion/Acceuil.php?conf=1");

?>