<?php 
	session_start();
	$_SESSION['loaded_page']= "table";
	$connect = mysqli_connect("localhost","chocoest","chocoest","projetphase1");
	$sql = "SELECT * FROM votage";  
	$result = mysqli_query($connect, $sql);
 

// calule totale de base de données
function calcul_Totale_base(){
	$con = mysqli_connect("localhost","chocoest","chocoest","projetphase1");
    $sql="select count(*) from votage";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($result);
	mysqli_close($con);
	return "$row[0]";
}
  ///////////////////////  CABELLA    ////////////////////


// calule totale des hommes et femmes in CEBELLA
function Totale(){
	$con = mysqli_connect("localhost","chocoest","chocoest","projetphase1");
	$sql="select * from votage WHERE sexe='Homme' OR sexe='Femme' AND Municipilitees='4'";
	$result= mysqli_query($con,$sql);
	$numb=  $result->num_rows;
	return $numb;
}

// calule totale des age= entre 18 et 35 ans
function status_jeune(){
	$con = mysqli_connect("localhost","chocoest","chocoest","projetphase1");
	$sql="select * from votage WHERE age='Entre_18__24' AND Municipilitees='4'";	
	$result= mysqli_query($con,$sql);
	$numb=  $result->num_rows;
	return $numb;
}

// calcule des femme
function status_femme(){
	$con = mysqli_connect("localhost","chocoest","chocoest","projetphase1");
	$sql="select * from votage WHERE sexe='Femme' AND Municipilitees='4'";	
	$result= mysqli_query($con,$sql);
	$numb=  $result->num_rows;
	return $numb;
}
// calcule  P_W_D
function status_pwd(){
	$con = mysqli_connect("localhost","chocoest","chocoest","projetphase1");
	$sql="select * from votage WHERE  P_W_D='Oui' AND Municipilitees='4'";	
	$result= mysqli_query($con,$sql);
	$numb=  $result->num_rows;
	return $numb;
}


 ///////////////////////   BEN AOUN    ////////////////////
 // calule totale des hommes et femmes in BEN AOUN
function Totale2(){
	$con = mysqli_connect("localhost","chocoest","chocoest","projetphase1");
	$sql="select * from votage WHERE sexe='Homme' OR sexe='Femme' AND Municipilitees='14'";
	$result= mysqli_query($con,$sql);
	$numb=  $result->num_rows;
	return $numb;
}
 
 // calule totale des age= entre 18 et 35 ans
function status_jeune2(){
	$con = mysqli_connect("localhost","chocoest","chocoest","projetphase1");
	$sql="select * from votage WHERE age='Entre_18__24' AND Municipilitees='14'";	
	$result= mysqli_query($con,$sql);
	$numb=  $result->num_rows;
	return $numb;
}

// calcule des femme
function status_femme2(){
	$con = mysqli_connect("localhost","chocoest","chocoest","projetphase1");
	$sql="select * from votage WHERE sexe='Femme' AND Municipilitees='14'";	
	$result= mysqli_query($con,$sql);
	$numb=  $result->num_rows;
	return $numb;
}
// calcule  P_W_D
function status_pwd2(){
	$con = mysqli_connect("localhost","chocoest","chocoest","projetphase1");
	$sql="select * from votage WHERE  P_W_D='Oui' AND Municipilitees='14'";	
	$result= mysqli_query($con,$sql);
	$numb=  $result->num_rows;
	return $numb;
}
 ///////////////////////   SOUK EJDID    ////////////////////
 // calule totale des hommes et femmes in SOUK EJDID 
 
function Totale3(){
	$con = mysqli_connect("localhost","chocoest","chocoest","projetphase1");
	$sql="select * from votage WHERE sexe='Homme' OR sexe='Femme' AND Municipilitees='16'";
	$result= mysqli_query($con,$sql);
	$numb=  $result->num_rows;
	return $numb;
}

 // calule totale des age= entre 18 et 35 ans
function status_jeune3(){
	$con = mysqli_connect("localhost","chocoest","chocoest","projetphase1");
	$sql="select * from votage WHERE age='Entre_18__24' AND Municipilitees='16'";	
	$result= mysqli_query($con,$sql);
	$numb=  $result->num_rows;
	return $numb;
}

// calcule des femme
function status_femme3(){
	$con = mysqli_connect("localhost","chocoest","chocoest","projetphase1");
	$sql="select * from votage WHERE sexe='Femme' AND Municipilitees='16'";	
	$result= mysqli_query($con,$sql);
	$numb=  $result->num_rows;
	return $numb;
}
// calcule  P_W_D
function status_pwd3(){
	$con = mysqli_connect("localhost","chocoest","chocoest","projetphase1");
	$sql="select * from votage WHERE  P_W_D='Oui' AND Municipilitees='16'";	
	$result= mysqli_query($con,$sql);
	$numb=  $result->num_rows;
	return $numb;
}
  ///////////////////////   Elhajeb    ////////////////////
 // calule totale des hommes et femmes in Elhajeb    

 function Totale4(){
	$con = mysqli_connect("localhost","chocoest","chocoest","projetphase1");
	$sql="select * from votage WHERE sexe='Homme' OR sexe='Femme' AND Municipilitees='38'";
	$result= mysqli_query($con,$sql);
	$numb=  $result->num_rows;
	return $numb;
}
 
 // calule totale des age= entre 18 et 35 ans
function status_jeune4(){
	$con = mysqli_connect("localhost","chocoest","chocoest","projetphase1");
	$sql="select * from votage WHERE age='Entre_18__24' AND Municipilitees='38'";	
	$result= mysqli_query($con,$sql);
	$numb=  $result->num_rows;
	return $numb;
}

// calcule des femme
function status_femme4(){
	$con = mysqli_connect("localhost","chocoest","chocoest","projetphase1");
	$sql="select * from votage WHERE sexe='Femme' AND Municipilitees='38'";	
	$result= mysqli_query($con,$sql);
	$numb=  $result->num_rows;
	return $numb;
}
// calcule  P_W_D
function status_pwd4(){
	$con = mysqli_connect("localhost","chocoest","chocoest","projetphase1");
	$sql="select * from votage WHERE  P_W_D='Oui' AND Municipilitees='38'";	
	$result= mysqli_query($con,$sql);
	$numb=  $result->num_rows;
	return $numb;
}
$TBASE = calcul_Totale_base();


$St1 = Totale();
$S1 = status_jeune();
$S2 = status_femme();
$S3 = status_pwd();

$St2 = Totale2();
$S11 = status_jeune2();
$S22 = status_femme2();
$S33 = status_pwd2();

$St3 = Totale3();
$S111 = status_jeune3();
$S222 = status_femme3();
$S333 = status_pwd3();

$St4 = Totale4();
$S1111 = status_jeune4();
$S2222 = status_femme4();
$S3333 = status_pwd4();

$T1 = $S1 + $S11 + $S111 + $S1111;
$T2 = $S2 + $S22 + $S222 + $S2222;
$T3 = $S3 + $S33 + $S333 + $S3333;



?>

<script>
function downloadCSV(csv, filename) {
	    var csvFile;
	    var downloadLink;
	
	    // CSV file
	    csvFile = new Blob([csv], {type: "text/csv"});
	
	    // Download link
	    downloadLink = document.createElement("a");
	
	    // File name
	    downloadLink.download = filename;
	
	    // Create a link to the file
	    downloadLink.href = window.URL.createObjectURL(csvFile);
	
	    // Hide download link
	    downloadLink.style.display = "none";
	
	    // Add the link to DOM
	    document.body.appendChild(downloadLink);
	
	    // Click download link
	    downloadLink.click();
	}
function exportTableToCSV(filename) {
	    var csv = [];
	    var rows = document.querySelectorAll("table tr");
	    
	    for (var i = 0; i < rows.length; i++) {
	        var row = [], cols = rows[i].querySelectorAll("td, th");
	        
	        for (var j = 0; j < cols.length; j++) 
	            row.push(cols[j].innerText);
	        
	        csv.push(row.join(","));        
	    }
	
	    // Download CSV file
	    downloadCSV(csv.join("\n"), filename);
}	
</script>  
<section class="tile color transparent-black">



                  <!-- tile header -->
                  <div class="tile-header">
                    <h1><strong>Tableau </strong> Statistique</h1>
                    
                  </div>
                  <!-- /tile header -->

                  <!-- tile body -->
                  <div class="tile-body nopadding">
                    
                    <table class="table">
                    
                      <thead>
                        <tr class="noExl">
                          <th>#</th>
                          <th>TOTALE</th>
                          <th>MUNICIPALITES</th>
                          <th>JEUNNE</th>
                          <th>FEMME</th>
                          <th>P_W_D</th>
                        </tr>
                      </thead>
                      <tbody>
					  
					  
			
		  
					  
                        <tr>
                          <td>1</td>
                          <td>  <?php echo $St1; ?>  </td>
			  <td>  Cabbela   </td>	                         
                          <td>  <?php echo $S1; ?>  </td>
                          <td>  <?php echo $S2; ?>   </td>
                          <td>  <?php echo $S3; ?>   </td>
                        </tr>
                     
			
			 <tr>
                          <td>2</td>
                          <td>  <?php echo $St2; ?>  </td>
			  <td>  BEN AOUN  </td>	                         
                          <td>  <?php echo $S11; ?>  </td>
                          <td>  <?php echo $S22; ?>   </td>
                          <td>  <?php echo $S33; ?>   </td>
                        </tr>
			 
			 <tr>
                          <td>3</td>
                          <td>  <?php echo $St3; ?>  </td>
			  <td>  SOUK EJDID  </td>	                         
                          <td>  <?php echo $S111; ?>  </td>
                          <td>  <?php echo $S222; ?>   </td>
                          <td>  <?php echo $S333; ?>   </td>
                        </tr>
			
		 
			 <tr>
                          <td>4</td>
                          <td>  <?php echo $St4; ?>  </td>
			  <td>  ELHAJEB  </td>	                         
                          <td>  <?php echo $S1111; ?>  </td>
                          <td>  <?php echo $S2222; ?>   </td>
                          <td>  <?php echo $S3333; ?>   </td>
                        </tr>		 
			
			 <tr>
			    <th colspan="3">Totale Section:</th>
			    
			    <td><?php echo $T1; ?></td>
			    <td><?php echo $T2; ?></td>
			    <td><?php echo $T3; ?></td>
			   
			   
			  </tr>		 
                       
                      </tbody>
		                  	 
                    </table>
 			
                      <br />
		    <button onClick="exportTableToCSV('members.csv')">Exporter Statistique Table To Excel</button>
                  </div>
                  <!-- /tile body -->
                  
                

 </section>
 
