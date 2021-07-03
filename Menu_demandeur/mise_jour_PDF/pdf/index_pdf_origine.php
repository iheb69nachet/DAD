<?php
session_start();
require_once "fpdf182/fpdf.php"; 
$id=$_GET['id'];

$pdf = new FPDF();
$pdf->AddPage();
 $conn = mysqli_connect("localhost", "root", "", "projetphase1");
$result = mysqli_query($conn, "SELECT * FROM demande where id=$id");
//jebt el ligne_ai 7asb refrence ta3 demande
$ligne = mysqli_query($conn, "SELECT * FROM `ligne_ai` WHERE `item_Reference_demande`=(SELECT Reference_demande from demande WHERE demande.id=$id)");
$dataLigne=[];


//fin

// mouch n7otouha lena 
//att haw fekra
	while ($row = mysqli_fetch_object($result))
	
{

/*          Logo         */
$pdf->Ln();
$pdf->Ln();
$pdf->SetY(40);
$pdf->Image("logo.png", 10, 10, 30);

/*          Titre H1         */
$pdf->Ln();
$pdf->SetFont("Arial", "B", 16);
$pdf->SetY(10);
$pdf->SetX(70);
$pdf->Cell(0, 0, "Validation De Flux DAD");
$pdf->SetFont("Arial", "B", 12);
$pdf->SetX(-40);

// $pdf->Cell(40, 00, date("Y-m-d"));
// $pdf->Ln();
// $pdf->SetX(-40);
// $pdf->Cell(40, 10, date("H:i:s"));


/*     Numéro Demande    */

$pdf->Ln();
$pdf->SetFont("Arial", "B", 12);
$pdf->SetY(30);
$pdf->SetX(20);
$pdf->Cell(40, 15, "Numero Demande   :", 0, "C", true);
$pdf->Cell(40, 15, $row->Reference_demande);
$pdf->SetFont("Arial", "B", 12);
// $pdf->SetX(-40);

/*     Site              */
// $pdf->Cell(0, 0, "Site                         	 :");
$pdf->Ln();
$pdf->SetFont("Arial", "B", 12);
$pdf->SetY(40);
$pdf->SetX(20);
$pdf->Cell(40, 15, "Site                         	 :", 0, "C", true);
$pdf->Cell(40, 15, $row->site);
$pdf->SetFont("Arial", "B", 12);
// $pdf->SetX(-40);



/*          Imprter DATA         */

$pdf->Ln();
$pdf->SetFillColor(209, 207, 207);
$pdf->SetY(60);
 
// Cell
$pdf->Cell(60, 10, "Type Utilisateur", 1, 0, "L", true);
$pdf->Cell(60, 10, "Nom & Prenom", 1, 0, "L", true);
$pdf->Cell(40, 10, "Matricule", 1, 0, "L", true);
$pdf->Cell(30, 10, "Statut", 1, 0, "L", true);


// $pdf->SetY(55);
$pdf->SetFillColor(209, 207, 207);
$pdf->Ln();
$pdf->SetFont("Arial", "", 12);

////////////////////////////////////////////////////////
$pdf->SetFont("Arial", "", 12);
		$pdf->Cell(60, 15, "DEMANDEUR", 1, 0, "L", true);
		$pdf->Cell(60, 15, $row->Nom, 1);
		$pdf->Cell(40, 15, $row->Matricule, 1);
		$pdf->SetFont("Arial", "B", 10);
		$pdf->SetFillColor(54, 255, 51);
		
		if($row->Reference_demande =! ''){
			$pdf->SetFillColor(54, 255, 51);
			$pdf->Cell(30, 15, "Valider", 1, 0, "C", true);
		}else{
			$pdf->SetFillColor(255, 35, 35);
			$pdf->Cell(40, 15, "----", 1, 0, "C", true);
		}
		
		$pdf->Ln();
////////////////////////////////////////////////////////		
$pdf->SetFillColor(209, 207, 207);
		$pdf->SetFont("Arial", "", 12);
		$pdf->Cell(60, 15, "CHEF HIERARCHIE", 1, 0, "L", true);
		$pdf->Cell(60, 15, $row->Nom_chefhierarchie, 1);
		$pdf->Cell(40, 15, $row->Matricule_chefhierarchie, 1);
		$pdf->SetFont("Arial", "B", 10);
		$pdf->SetFillColor(54, 255, 51);
		
		if($row->Etat == 'Valider'){
			$pdf->SetFillColor(54, 255, 51);
			$pdf->Cell(30, 15, "Valider", 1, 0, "C", true);
		}else{
			$pdf->SetFillColor(255, 35, 35);
			$pdf->Cell(30, 15, "----", 1, 0, "C", true);
		}
		$pdf->Ln();		
////////////////////////////////////////////////////////		
$pdf->SetFillColor(209, 207, 207);
		$pdf->SetFont("Arial", "", 12);
		$pdf->Cell(60, 15, "COMPTABILITE", 1, 0, "L", true);
		$pdf->Cell(60, 15, $row->Nom_compt, 1);
		$pdf->Cell(40, 15, $row->Matricule_compt, 1);
		$pdf->SetFont("Arial", "B", 10);
		if($row->Type_Depense == 'T_Investissement'){
			$pdf->SetFillColor(54, 255, 51);
			$pdf->Cell(30, 15, "Valider", 1, 0, "C", true);
		}else{
			$pdf->SetFillColor(255, 35, 35);	
			$pdf->Cell(30, 15, "----", 1, 0, "C", true);
		}
		$pdf->Ln();
////////////////////////////////////////////////////////		
$pdf->SetFillColor(209, 207, 207);
		$pdf->SetFont("Arial", "", 12);
		$pdf->Cell(60, 15, "CONTROLE GESTION", 1, 0, "L", true);
		$pdf->Cell(60, 15, $row->Nom_cges, 1);
		$pdf->Cell(40, 15, $row->Matricule_cges, 1);
		$pdf->SetFont("Arial", "B", 10);
		$pdf->SetFillColor(54, 255, 51);
		
		if($row->etat_verife_cg == 'Valider'){
			$pdf->SetFillColor(54, 255, 51);
			$pdf->Cell(30, 15, "Valider", 1, 0, "C", true);
		}else{
			$pdf->SetFillColor(255, 35, 35);
			$pdf->Cell(30, 15, "----", 1, 0, "C", true);
		}
		
		$pdf->Ln();
////////////////////////////////////////////////////////
$pdf->SetFillColor(209, 207, 207);
		$pdf->SetFont("Arial", "", 12);
		$pdf->Cell(60, 15, "DGA", 1, 0, "L", true);
		$pdf->Cell(60, 15, $row->Nom_dg, 1);
		$pdf->Cell(40, 15, $row->Matricule_dg, 1);
		$pdf->SetFont("Arial", "B", 10);
		$pdf->SetFillColor(54, 255, 51);
		
		if($row->avis_DGA == 'Valider'){
			$pdf->SetFillColor(54, 255, 51);
			$pdf->Cell(30, 15, "Valider", 1, 0, "C", true);
		}else{
			$pdf->SetFillColor(255, 35, 35);
			$pdf->Cell(30, 15, "----", 1, 0, "C", true);
		}
		
	
////////////////////////////////////////////////////////

/*    Centre de Cout  */

$pdf->Ln();

$pdf->SetFont("Arial", "B", 12);
$pdf->Cell(52, 15, "Centre de Cout           :", 0, "C", true);
$pdf->SetFont("Arial", "", 12);
$pdf->Cell(52, 15, $row->centre_cout);
$pdf->Ln();

/*    Objet de la dépense  - Désignation de la dépense

$pdf->Ln();
$pdf->SetY(160);
$pdf->SetFont("Arial", "B", 12);
$pdf->Cell(50, 15, "Objet de la depense :", 0, "C", true);
$pdf->SetFont("Arial", "", 12);
$pdf->Cell(40, 15, $row->description1_L1);
$pdf->Cell(10, 15, "    -");
$pdf->Cell(40, 15, $row->description2_L1);
$pdf->SetFont("Arial", "B", 12);



$pdf->Ln();
$pdf->SetFont("Arial", "B", 12);
$pdf->Cell(50, 15, "", 0, "C", true);
$pdf->SetFont("Arial", "", 12);
$pdf->Cell(40, 15, $row->description1_L2);
$pdf->Cell(10, 15, "    -");
$pdf->Cell(40, 15, $row->description2_L2);
$pdf->SetFont("Arial", "B", 12);


$pdf->Ln();
$pdf->SetFont("Arial", "B", 12);
$pdf->Cell(50, 15, "", 0, "C", true);
$pdf->SetFont("Arial", "", 12);
$pdf->Cell(40, 15, $row->description1_L3);
$pdf->Cell(10, 15, "    -");
$pdf->Cell(40, 15, $row->description2_L3);
$pdf->SetFont("Arial", "B", 12);
// $pdf->SetX(-20);

$pdf->Ln();
$pdf->SetFont("Arial", "B", 12);
$pdf->Cell(50, 15, "", 0, "C", true);
$pdf->SetFont("Arial", "", 12);
$pdf->Cell(40, 15, $row->description1_L4);
$pdf->Cell(10, 15, "    -");
$pdf->Cell(40, 15, $row->description2_L4);
$pdf->SetFont("Arial", "B", 12);
// $pdf->SetX(-20);

$pdf->Ln();
$pdf->SetFont("Arial", "B", 12);
$pdf->Cell(50, 15, "", 0, "C", true);
$pdf->SetFont("Arial", "", 12);
$pdf->Cell(40, 15, $row->description1_L4);
$pdf->Cell(10, 15, "    -");
$pdf->Cell(40, 15, $row->description2_L4);
$pdf->SetFont("Arial", "B", 12);*/
// $pdf->SetX(-20);

// $pdf->SetX(-120);
$pdf->Ln();
$pdf->SetFont("Arial", "B", 12);
$pdf->Cell(60, 10, "Delai de Reception           :", 0, "C", true);
$pdf->SetFont("Arial", "", 12);
$pdf->Cell(60, 10, $row->reception);
$pdf->Ln();
$pdf->SetY(185);
$pdf->Ln();
$pdf->SetFont("Arial", "B", 12);
$pdf->Cell(60, 13, "Proposition fournisseurs           :", 0, "C", true);
$pdf->SetFont("Arial", "", 12);
$pdf->Cell(60, 10, $row->Proposition_fournisseurs);
$pdf->Ln();
$pdf->SetY(195);
$pdf->Ln();
$pdf->SetFont("Arial", "B", 12);
$pdf->Cell(40, 15, "Budget Allouer :", 0, "C", true);
$pdf->SetFont("Arial", "", 12);
$pdf->Cell(40, 15, $row->Budget_allouer);
$pdf->SetFont("Arial", "B", 12);
$pdf->Cell(43, 15, "Budget Rester :", 0, "C", true);
$pdf->SetFont("Arial", "", 12);
$pdf->Cell(43, 15, $row->Budget_restant);








$pdf->Ln();
$pdf->SetFillColor(209, 207, 207);
$pdf->Ln();
$pdf->SetY(225);
$pdf->Ln();


$pdf->Cell(30, 10, "Ligne", 1, 0, "L", true);
$pdf->Cell(40, 10, "Prix", 1, 0, "L", true);
$pdf->Cell(40, 10, "Qte", 1, 0, "L", true);
$pdf->Cell(40, 10, "Desc11", 1, 0, "L", true);
$pdf->Cell(40, 10, "Desc22", 1, 0, "L", true);

$pdf->SetFillColor(209, 207, 207);
$pdf->Ln();
$pdf->SetFont("Arial", "", 12);

}
while ($k = mysqli_fetch_object($ligne))
{
	array_push($dataLigne,$k);
	$pdf->SetFont("Arial", "", 12);
	$pdf->Cell(30,10, $k->item_ligne, 1);
	$pdf->Cell(40, 10, $k->item_prix, 1);
	$pdf->Cell(40, 10, $k->item_qte, 1);
	$pdf->Cell(40, 10, $k->item_desc1, 1);
	$pdf->Cell(40, 10, $k->item_desc2, 1);
	$pdf->Ln();
$pdf->SetFillColor(209, 207, 207);
$pdf->SetY(260);
	$pdf->SetFont("Arial", "B", 12);

}
$pdf->output();

?>