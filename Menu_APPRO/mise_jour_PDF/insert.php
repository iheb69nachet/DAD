<?php 
session_start();
require_once "fpdf182/fpdf.php";



 
if(!empty($_POST))  
 {  

$pdf = new FPDF();
$pdf->AddPage();

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

$pdf->Cell(40, 00, date("Y-m-d"));
$pdf->Ln();
$pdf->SetX(-40);
$pdf->Cell(40, 10, date("H:i:s"));



/*          Imprter DATA         */
$pdf->Ln();
$pdf->Ln();
$pdf->SetFillColor(209, 207, 207);
$pdf->SetY(50);
 
// Cell
$pdf->Cell(60, 10, "Type Utilisateur", 1, 0, "L", true);
$pdf->Cell(40, 10, "Nom & Prenom", 1, 0, "L", true);
$pdf->Cell(40, 10, "Matricule", 1, 0, "L", true);
$pdf->Cell(40, 10, "Statut", 1, 0, "L", true);

$pdf->SetY(55);
$pdf->SetFillColor(209, 207, 207);
$pdf->Ln();
$pdf->SetFont("Arial", "", 12);
/*$conn = mysqli_connect("localhost", "root", "", "projetphase1");
$result = mysqli_query($conn, "SELECT * FROM demande WHERE id='1'");*/
$conn = mysqli_connect("localhost", "root", "", "projetphase1");
$result = mysqli_query($conn, " SELECT * FROM demande WHERE id='".$_POST['employee_id']."' ");

while ($row = mysqli_fetch_object($result))
{
		
		// $pdf->SetFillColor(209, 207, 207);
		$pdf->SetFont("Arial", "", 12);
		$pdf->Cell(60, 15, "DEMANDEUR", 1, 0, "C", true);
		$pdf->Cell(40, 15, $row->Nom, 1);
		$pdf->Cell(40, 15, $row->Matricule, 1);
		$pdf->SetFont("Arial", "B", 10);
		$pdf->SetFillColor(54, 255, 51);
		$pdf->Cell(40, 15, $row->avis_DGA, 1, 0, "C", true);
		$pdf->Ln();
		
		
$pdf->SetY(90);

		$pdf->SetFillColor(209, 207, 207);
		$pdf->SetFont("Arial", "", 12);
		$pdf->Cell(60, 15, "CHEF HIERARCHIE", 1, 0, "C", true);
		$pdf->Cell(40, 15, $row->Nom_chefhierarchie, 1);
		$pdf->Cell(40, 15, $row->Matricule_chefhierarchie, 1);
		$pdf->SetFont("Arial", "B", 10);
		$pdf->SetFillColor(54, 255, 51);
		$pdf->Cell(40, 15, $row->Etat, 1, 0, "C", true);
		$pdf->Ln();
		
$pdf->SetY(115);	
	
		$pdf->SetFillColor(209, 207, 207);
		$pdf->SetFont("Arial", "", 12);
		$pdf->Cell(60, 15, "COMPTABILITE", 1, 0, "C", true);
		$pdf->Cell(40, 15, $row->Nom_compt, 1);
		$pdf->Cell(40, 15, $row->Matricule_compt, 1);
		$pdf->SetFont("Arial", "B", 10);
		
				
	
		if($row->Type_Depense = 'T_Investissement'){
			$pdf->SetFillColor(54, 255, 51);
			$pdf->Cell(40, 15, "Valider", 1, 0, "C", true);
		}else{
			$pdf->SetFillColor(255, 3, 15);	
			$pdf->Cell(40, 15, "----", 1, 0, "C", true);
		}
		$pdf->Ln();
		
$pdf->SetY(140);		
		
		$pdf->SetFillColor(209, 207, 207);
		$pdf->SetFont("Arial", "", 12);
		$pdf->Cell(60, 15, "CONTROLE GESTION", 1, 0, "C", true);
		$pdf->Cell(40, 15, $row->Nom_cges, 1);
		$pdf->Cell(40, 15, $row->Matricule_cges, 1);
		$pdf->SetFont("Arial", "B", 10);
		$pdf->SetFillColor(54, 255, 51);
		$pdf->Cell(40, 15, $row->etat_verife_cg, 1, 0, "C", true);
		$pdf->Ln();
		
$pdf->SetY(165);

		$pdf->SetFillColor(209, 207, 207);
		$pdf->SetFont("Arial", "", 12);
		$pdf->Cell(60, 15, "DGA", 1, 0, "C", true);
		$pdf->Cell(40, 15, $row->Nom_dg, 1);
		$pdf->Cell(40, 15, $row->Matricule_dg, 1);
		$pdf->SetFont("Arial", "B", 10);
		$pdf->SetFillColor(54, 255, 51);
		$pdf->Cell(40, 15, $row->avis_DGA, 1, 0, "C", true);
		$pdf->Ln();
	
}


/*$conn = mysqli_connect("localhost", "root", "", "projetphase1");
$result = mysqli_query($conn, "SELECT * FROM demande WHERE id='1'");*/
 $conn = mysqli_connect("localhost", "root", "", "projetphase1");
$result = mysqli_query($conn, " SELECT * FROM demande WHERE id='".$_POST['employee_id']."' ");
while ($row = mysqli_fetch_object($result))
{

$pdf->SetY(180);
$pdf->SetY(200);
$pdf->Ln();
$pdf->SetFillColor(127, 127, 127);

$pdf->Cell(75, 10, "Objet de la depense", 0, "L", true);
$pdf->SetFillColor(209, 207, 207);
$pdf->Cell(50, 10, $row->description1_L1, 0.5, 0, "C", true);
$pdf->Cell(50, 10, $row->description2_L1, 0.5, 0, "C", true);
$pdf->Ln();
$pdf->SetX(85);
$pdf->SetFillColor(209, 207, 207);
$pdf->Cell(50, 10, $row->description1_L2, 0.5, 0, "C", true);
$pdf->Cell(50, 10, $row->description2_L2, 0.5, 0, "C", true);

$pdf->SetY(235);$pdf->SetX(85);
$pdf->SetFillColor(209, 207, 207);
$pdf->Cell(50, 10, $row->description1_L3, 0.5, 0, "C", true);
$pdf->Cell(50, 10, $row->description2_L3, 0.5, 0, "C", true);

$pdf->SetY(245);$pdf->SetX(85);
$pdf->SetFillColor(209, 207, 207);
$pdf->Cell(50, 10, $row->description1_L3, 0.5, 0, "C", true);
$pdf->Cell(50, 10, $row->description2_L3, 0.5, 0, "C", true);

}
$pdf->Ln();



$pdf->output();	
		
	  
 }  
 
 ?>
 