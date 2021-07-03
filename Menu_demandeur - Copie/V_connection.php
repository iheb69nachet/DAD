<?php
session_start();
$hostname = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname   = "projetphase1"; 
// Create database connection 
$connect = mysqli_connect($hostname, $username, $password, $dbname); 
$item_Reference_demande ='';
// Create database connection to MYSQL server
/*$conn1 = new PDO("sqlsrv:Server=192.168.0.46; Database=JDE_PRODUCTION", "DAD", "dAd2020+");
$conn1->setAttribute ( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );*/
$conn1 = new PDO("sqlsrv:Server=192.168.0.46; Database=JDE_CRP", "DAD", "dAd2020+");
$conn1->setAttribute ( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

?>
<?php
// session_start();
if (!$connect) {
	
echo "Failed to connect: " .mysqli_connect_error();

}



// Insert into MySQl - Table Demande //
if(isset($_POST['Envoyer'])){


$query = "SELECT Email FROM `compte_user` where Nom = '".$_SESSION["Chef_Hierarchie"]."'";
$result = mysqli_query($connect, $query);
$row =mysqli_fetch_array($result);
$sub = "Demande d'Approbation DAD";$msg = "Demande d'Approbation DAD!!";
mail($row['Email'],$sub,$msg);
echo('notife xampp');


    $pname = "FILE-192-168-0-53"."-".date("His")."-".date("dmY")."-".rand(1000,10000)."-".$_FILES["file"]["name"];
	$titre_fichier_upload = $_FILES["file"]["name"];
    $tname = $_FILES["file"]["tmp_name"];
	move_uploaded_file($tname, 'upload/'.$pname);
	copy('upload/'.$pname, '\\\JDEDEP\E\HTMLUpload\\'.$pname);
	
	
	

$id = $_POST['id'];
$Reference_demande = $_POST['Reference_demande'];
$cs = $_SESSION['cs'];
$Magcc = $_POST['Magcc'];
$centrecc = $_POST['centrecc'];
$coutestime = $_POST['coutestime'];
$ref_site = $_SESSION['ref_site'];
$site = $_SESSION['site'];
$Direction = $_POST['Direction'];
$departement = $_POST['departement'];
$service = $_POST['service'];
$Nom = $_SESSION['Nom'];
$Matricule = $_POST['Matricule'];
$reception = $_POST['reception'];
$axes1 = $_POST['axes1'];
$axes2 = $_POST['axes2'];
$designation_depense = $connect -> real_escape_string($_POST['designation_depense']);
$id_user = $connect -> real_escape_string($_POST['justification_depense']);
$Depense_budgetisee = $connect -> real_escape_string($_POST['Depense_budgetisee']);
$Proposition_fournisseurs= $connect -> real_escape_string($_POST['Proposition_fournisseurs']);


$ref_site =  $_POST['ref_site'];
	$heure = date("His");
	$cs = $_SESSION['cs'];
// normalement tawa temchi 
$ligne   = $_POST["ligne"];
$prix  = $_POST["prix"];
$qte  = $_POST["qte"];
$des1  = $connect -> real_escape_string($_POST["des1"]);
$des2  = $connect -> real_escape_string($_POST["des2"]);


/*
$rsult ='';
$lenght = strlen( date("z"));
$date_1 = date("z") + 1;
if ($lenght = 1){
	$rsult = '0' . $date_1;
}
 elseif($lenght = 2){
    $rsult = '00' . $date_1;
}
else{
    $rsult = '000' . $date_1;
}
$date_y = date("Y");
$dtee =  '1'.substr(strval($date_y), 2). $rsult;
echo ($dtee);*/
$rsult ='';
$lenght = strlen( date("z"));
$date_1 = date("z") + 1;
if ($lenght = 1){
	$rsult = '' . $date_1;
}
 
$date_y = date("Y");
$dtee =  '1'.substr(strval($date_y), 2). $rsult;
echo ($dtee);

$date_creation = $dtee;
$da =  date('d / m / Y');
$id_user = $_SESSION['ID'];


// Insert into database Demande //
$sql .= "INSERT INTO demande(Reference_demande, Direction, departement, service, Nom, Matricule, site, reception, axes1, axes2, designation_depense, justification_depense, Depense_budgetisee, Proposition_fournisseurs, file_upload, da, ref_site, cs, Magcc, centrecc, coutestime, id_user) 
VALUES('$Reference_demande', '$Direction', '$departement', '$service', '$Nom', '$Matricule', '$site', '$reception', '$axes1', '$axes2', '$designation_depense', '$justification_depense', '$Depense_budgetisee', '$Proposition_fournisseurs', '$pname', '$da', '$ref_site', '$cs', '$Magcc', '$centrecc', '$coutestime', '$id_user')";


if (mysqli_query != ''){
    //chniya heure?
	
	$res_demande = mysqli_query($connect, $sql);
	$heure = date("His");

  // header("Location: http://localhost/Gestion/Menu_demandeur/middle.php?date=$dtee&heure=$heure&cs=$cs&ref_site=$ref_site");

  header("Location: http://192.168.0.85/Gestion/Menu_demandeur/middle.php?date=$dtee&heure=$heure&cs=$cs&ref_site=$ref_site");
	}
else{
	echo $sql;
header("demande.php");	
}

mysqli_close($connect);
}



// Insert into MySQl - Table ligne_ai //
if(isset($_POST['item_prix']))
{
  
$item_ligne=$_POST["item_ligne"];
 $item_Reference_demande = $_POST["item_Reference_demande"];
 $item_prix = $_POST["item_prix"];
 $item_qte = $_POST["item_qte"];
 $item_desc1 = $_POST["item_desc1"];
 $item_desc2 =$_POST["item_desc2"];
 $query = '';
  
 for($count = 0; $count<count($item_ligne); $count++)
 {
     
  $item_ligne_clean = "".$item_ligne[$count]."";
  $item_Reference_demande_clean = mysqli_real_escape_string($connect, $item_Reference_demande[$count]);
  $item_prix_clean = mysqli_real_escape_string($connect, $item_prix[$count]);
  $item_qte_clean = mysqli_real_escape_string($connect, $item_qte[$count]);
  $item_desc1_clean = mysqli_real_escape_string($connect, $item_desc1[$count]);
  $item_desc2_clean = mysqli_real_escape_string($connect, $item_desc2[$count]);
 
  /*if($item_ligne_clean != '' && $item_Reference_demande_clean != '' && $item_prix_clean != '' && $item_qte_clean != ''&& $item_desc1_clean != ''&& $item_desc2_clean != '') */
  
  if($item_ligne_clean != '' && $item_Reference_demande_clean != '' )
  {
   $query .= '
   INSERT INTO ligne_ai (item_ligne, item_Reference_demande, item_prix, item_qte, item_desc1, item_desc2) 
   VALUES("'.$item_ligne_clean.'", "'.$item_Reference_demande_clean.'", "'.$item_prix_clean.'", "'.$item_qte_clean.'", "'.$item_desc1_clean.'", "'.$item_desc2_clean.'"); 
   ';
  }
 }
 if($query != '')
 {
	
  if(mysqli_multi_query($connect, $query))
  {
  
}


   echo 'Demande à été ajouter avec Success !!';


  
}
  
 }
 //taw sama7Ni belehi mysqli_multi_query($connect, $query)) lena testa3mel f connect eli hiya tconencti 3al localhost w t7ebou ya3mel insert f sql server? 
 // e7na maw nhezou mel base mba3ed laysir insertion wela la eyh ama mich f fichier hedha netfaker 3amlt fichier jdid ahaw


  
?>