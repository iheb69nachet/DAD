<?php




 $conn = mysqli_connect("localhost", "root", "", "projetphase1");
$result = mysqli_query($conn, "SELECT * FROM demande where id=$id");

	while ($row = mysqli_fetch_object($result))
{


		
		
		
// $pdf->SetY(90);

		
		
// $pdf->SetY(115);	
	
		
		
// $pdf->SetY(140);		
		
		
		
// $pdf->SetY(165);

		

$pdf->SetY(140);
// $pdf->SetY(200);
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

$pdf->SetY(175);$pdf->SetX(85);
$pdf->SetFillColor(209, 207, 207);
$pdf->Cell(50, 10, $row->description1_L3, 0.5, 0, "C", true);
$pdf->Cell(50, 10, $row->description2_L3, 0.5, 0, "C", true);

$pdf->SetY(185);$pdf->SetX(85);
$pdf->SetFillColor(209, 207, 207);
$pdf->Cell(50, 10, $row->description1_L3, 0.5, 0, "C", true);
$pdf->Cell(50, 10, $row->description2_L3, 0.5, 0, "C", true);


$pdf->Ln();

$pdf->output();
}