
  <?php  
 $connect = mysqli_connect("localhost", "root", "", "projetphase1");  

if(!isset($_POST['justif_demande'])) {
	 // if($_POST["justif_demande"] != '')  

								$justif_demande = '';  
							   
							   $query = " UPDATE demande SET justif_demande = '$justif_demande' WHERE id='".$_POST["employee_id"]."'"; 
							   // $query = "INSERT INTO demande(justif_demande) values ('$justif_demande')";
							   
							   $result = mysqli_query($connect, $query);
							   
							 
 }					
 ?>
 	
							   
					