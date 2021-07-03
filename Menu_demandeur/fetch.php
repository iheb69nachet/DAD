<?php
//fetch.php
if(isset($_POST["action"]))
{
 $connect = mysqli_connect("localhost", "root", "", "projetphase1");
 $output = '';
 if($_POST["action"] == "Reference_demande")
 {
  $query = "SELECT Objet_depense, Etat, Type_Depense, etat_verife_cg, avis_DGA FROM demande WHERE Reference_demande = '".$_POST["query"]."' GROUP BY Objet_depense";
  $result = mysqli_query($connect, $query);
  //var_dump($result);
  $output = $etat = $type_depense = $etat_verife_cg = $avis_DGA = '';
   
  while($row = mysqli_fetch_array($result))
  {
   $output .= $row["Objet_depense"];
   $etat = $row['Etat'];
   $type_depense = $row['Type_Depense'];
   // $budget_allouer = $row['Budget_allouer'];
   $etat_verife_cg = $row['etat_verife_cg'];
   $avis_dga = $row['avis_DGA'];
  }
 }


$bgh = '';
if($etat == 'Valider') {
	$bgh = 'style="background-color:green;"';
}
elseif($etat == 'Rejeter') {
	$bgh = 'style="background-color:red;"';
}
// if else en meme ligne
$bgc = ($type_depense) ? 'style="background-color:green;"': '';


// $bgb = ($etat_verife_cg) ? 'style="background-color:green;"': '';
$bgb = '';
if($etat_verife_cg == 'Valider') {
	$bgb = 'style="background-color:green;"';
}
elseif($etat_verife_cg == 'Rejeter'){
	$bgb = 'style="background-color:red;"';
}

// $bga = ($avis_dga) ? 'style="background-color:green;"': '';
$bga = '';
if($avis_dga == 'Valider') {
	$bga = 'style="background-color:green;"';
}
elseif($avis_dga == 'Rejeter') {
	$bga = 'style="background-color:red;"';
}

$timeline = '<div class="entry" style="background-color:green;">
			<h1>1</h1>
			<h2></h2>
			<img src="" /> Demandeur
		  </div>
		  <div class="entry" '. $bgh .'>
			<h1>2</h1>
			Chef Hiérarchique
		  </div>
		  <div class="entry" '. $bgc .'>
			<h1>3</h1>
		   Comptabilité
		  </div>
		  <div class="entry"'. $bgb .'>
			<h1>4</h1>
			Contrôle de Gestion
		  </div>
		  <div class="entry" '. $bga .'>
			<h1>5</h1>
			DGA
		  </div>'
;
 $return = [
	'output' => $output,
	'timeline' => $timeline,
 ];
 
 echo json_encode($return);
 exit;
}
?>