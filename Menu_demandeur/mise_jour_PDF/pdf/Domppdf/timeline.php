<?php 
// Include autoloader 
require_once 'dompdf/autoload.inc.php'; 
 
// Reference the Dompdf namespace 
use Dompdf\Dompdf; 
 
// Instantiate and use the dompdf class 
$dompdf = new Dompdf();

/* Load HTML content 
$dompdf->loadHtml(''); */
 
// Load content from html file 
$html = file_get_contents("filehtml.html"); 
$dompdf->loadHtml($html); 
 
// (Optional) Setup the paper size and orientation 
$dompdf->setPaper('A4', 'landscape'); 
 
// Render the HTML as PDF 
$dompdf->render(); 
 
// Output the generated PDF (1 = download and 0 = preview) 
$dompdf->stream("codexworld", array("Attachment" => 0));



?>

 <style>
	.timeline {
  white-space: nowrap;
  overflow-x: scroll;
  padding: 30px 0 10px 0;
  position: relative;
}

.entry {
    display: inline-block;
    vertical-align: top;
    background: #b3b2b2ad;
    color: #fff;
    padding: 10px;
    font-size: 12px;
    font-weight: bold;
    font-size: medium;
    text-align: center;
    position: relative;
    border-top: 4px solid #06182E;
    border-radius: 3px;
    min-width: 200px;
    max-width: 500px;
}

.entry img {
  display: block;
  max-width: 100%;
  height: auto;
  margin-bottom: 10px;
}

.entry:after {
  content: '';
  display: block;
  background: #eee;
  width: 7px;
  height: 7px;
  border-radius: 6px;
  border: 3px solid #06182E;
  position: absolute;
  left: 50%;
  top: -30px;
  margin-left: -6px;
}

.entry:before {
  content: '';
  display: block;
  background: #06182E;
  width: 5px;
  height: 20px;
  position: absolute;
  left: 50%;
  top: -20px;
  margin-left: -2px;
}

.entry h1 {
  color: #fff;
  font-size: 18px;
  font-family: Georgia, serif;
  font-weight: bold;
  margin-bottom: 10px;
}

.entry h2 {
  letter-spacing: .2em;
  margin-bottom: 10px;
  font-size: 14px;
}

.bar {
  height: 4px;
  background: #eee;
  width: 100%;
  position: relative;
  top: 13px;
  left: 0;
}
				
				@media only screen and (max-width: 600px) {
				    /* For tablets: */
						  .ScrollStyle
					{
					   height: 450px; 
						overflow-y : auto;
					}
				}

 
	 label {color:white;}
	 
	 


.seats span, .backSeats div{
   margin: 10px;
   padding: 10px;
   color: white;
   // border: 4px solid #000;
}
.seats span{
   width: 120px;
   display: inline-block;
   // background-color: #48C9B0;
}
.left{
   text-align: left;
}
.right{
   text-align: right;
}
.center{
   text-align: center;
}
.seats{
   text-align: center;
}


	 </style>
	


<!----------------timeline------------------>

		  
							
		
					  