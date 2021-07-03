<?php
session_start();
$hostname = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname   = "projetphase1"; 
// Create database connection 
$connect = mysqli_connect($hostname, $username, $password, $dbname); 
if(isset($_GET['id'])){
$id=$_GET['id'];
    $sql='select * from demande where Reference_demande='.$id;


}
elseif(isset($_GET['etat'])){
    $etat=$_GET['etat'];
    
    $sql='select * from demande where Etat ="'.$etat.'" and avis_DGA ="Valider" and Matricule = '. $_SESSION['Matricule'].' 
	and  site='.$_SESSION['site'].'  ';


}else{
    $sql='select * from demande where Etat !="Valider" and Etat !="en attente"';

}

$output = $etat = $type_depense = $etat_verife_cg = $avis_DGA = '';

// echo($sql);
$result = $connect->query($sql);
if ($result->num_rows > 0) {

    $data=[];
    while($row = $result->fetch_assoc()){
        $output .= $row["Objet_depense"];
   $etat = $row['Etat'];
   $type_depense = $row['Type_Depense'];
   // $budget_allouer = $row['Budget_allouer'];
   $etat_verife_cg = $row['etat_verife_cg'];
   $avis_dga = $row['avis_DGA'];
      
        $return=json_encode($row);
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
    'data'=>$row
 ];
 

        array_push($data,$return);
    }

    //print_r($row);
    $connect->close();
    echo(json_encode($data));
   
  } else {
    $row = $result->fetch_assoc();

    
    echo(json_encode($row));

  }
 
