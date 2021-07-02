	<title>Modifier Demandes </title>
<?php 
session_start();
 $new = "\\\JDEDEP\E\HTMLUpload\\";
  $conn_srv = new PDO("sqlsrv:Server=192.168.0.46; Database=JDE_PRODUCTION", "DAD", "dAd2020+");
 $conn_srv->setAttribute ( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

include "config.php";

// if the form's update button is clicked, we need to process the form
	if (isset($_POST['update'])) {
		// $Reference_demande = $_POST['Reference_demande'];
		
		$reception = $_POST['reception'];
		$Proposition_fournisseurs = $_POST['Proposition_fournisseurs'];
		$axes1 = $_POST['axes1'];
		$axes2 = $_POST['axes2'];
		$Magcc = $_POST['Magcc'];
		$prix_L1 = $_POST['prix_L1'];
		$quantite_L1 = $_POST['quantite_L1'];
		$description1_L1 = $_POST['description1_L1'];
		$description2_L1 = $_POST['description2_L1'];
		$prix_L2 = $_POST['prix_L2'];
		$quantite_L2 = $_POST['quantite_L2'];
		$description1_L2 = $_POST['description1_L2'];
		$description2_L2 = $_POST['description2_L2'];
		$prix_L3 = $_POST['prix_L3'];
		$quantite_L3 = $_POST['quantite_L3'];
		$description1_L3 = $_POST['description1_L3'];
		$description2_L3 = $_POST['description2_L3'];
		$prix_L4 = $_POST['prix_L4'];
		$quantite_L4 = $_POST['quantite_L4'];
		$description1_L4 = $_POST['description1_L4'];
		$description2_L4 = $_POST['description2_L4'];
		$prix_L5 = $_POST['prix_L5'];
		$quantite_L5 = $_POST['quantite_L5'];
		$description1_L5 = $_POST['description1_L5'];
		$description2_L5 = $_POST['description2_L5'];
		
		$user_id = $_POST['user_id'];

		// write the update query
		$sql = "UPDATE `demande` SET `reception`='$reception', `Proposition_fournisseurs`='$Proposition_fournisseurs', `axes1`='$axes1', `axes2`='$axes2', `Magcc`='$Magcc', `prix_L1`='$prix_L1', `quantite_L1`='$quantite_L1', `description1_L1`='$description1_L1', `description2_L1`='$description2_L1', `prix_L2`='$prix_L2', `quantite_L2`='$quantite_L2', `description1_L2`='$description1_L2', `description2_L2`='$description2_L2', `prix_L3`='$prix_L3', `quantite_L3`='$quantite_L3', `description1_L3`='$description1_L3', `description2_L3`='$description2_L3', `prix_L4`='$prix_L4', `quantite_L4`='$quantite_L4', `description1_L4`='$description1_L4', `description2_L4`='$description2_L4', `prix_L5`='$prix_L5', `quantite_L5`='$quantite_L5', `description1_L5`='$description1_L5', `description2_L5`='$description2_L5' WHERE `id`='$user_id'";

		// execute the query
		$result = $conn->query($sql);
		
		/*$query2 = "UPDATE PRODDTA.F4311Z1 SET SZEDCT = '".$SZEDCT."', SZDCTO = '".$SZEDCT."', SZMCU = '".$varcc."', SZOMCU = '".$varcc."', SZOBJ = '".$varob."', SZSUB = '".$varss."' WHERE SZEDBT='".$varbd."'";  
			$stmt = $conn1->query($query2);
			echo 'MYSQL SERVER Data UPDATED F4311';*/
		
		
		
	/*	if ($result == TRUE) {
			echo "Record updated successfully.";
		}else{
			echo "Error:" . $sql . "<br>" . $conn->error;
		}*/
	}


// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['id'])) {
	$user_id = $_GET['id'];

	// write SQL to get user data
	$sql = "SELECT * FROM `demande` WHERE `id`='$user_id'";

	//Execute the sql
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		
		while ($row = $result->fetch_assoc()) {
			
			$reception = $row['reception'];
			$Proposition_fournisseurs = $row['Proposition_fournisseurs'];
			$axes1 = $row['axes1'];
			$axes2 = $row['axes2'];
			$Magcc = $row['Magcc'];
			$prix_L1 = $row['prix_L1'];
		$quantite_L1 = $row['quantite_L1'];
		$description1_L1 = $row['description1_L1'];
		$description2_L1 = $row['description2_L1'];
		$prix_L2 = $row['prix_L2'];
		$quantite_L2 = $row['quantite_L2'];
		$description1_L2 = $row['description1_L2'];
		$description2_L2 = $row['description2_L2'];
		$prix_L3 = $row['prix_L3'];
		$quantite_L3 = $row['quantite_L3'];
		$description1_L3 = $row['description1_L3'];
		$description2_L3 = $row['description2_L3'];
		$prix_L4 = $row['prix_L4'];
		$quantite_L4 = $row['quantite_L4'];
		$description1_L4 = $row['description1_L4'];
		$description2_L4 = $row['description2_L4'];
		$prix_L5 = $row['prix_L5'];
		$quantite_L5 = $row['quantite_L5'];
		$description1_L5 = $row['description1_L5'];
		$description2_L5 = $row['description2_L5'];
			
			
			$id = $row['id'];
		}

	?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<style>	
body{
	background-color: #0062cc;
}
.container {
     max-width: 80%;
	 background-color: #fff;
}
	.note
{
    text-align: center;
    height: 80px;
    background: -webkit-linear-gradient(left, #0072ff, #8811c5);
    color: #fff;
    font-weight: bold;
    line-height: 80px;
}
.form-content
{
    padding: 5%;
    border: 1px solid #ced4da;
    margin-bottom: 2%;
	width:100%;
	background-color:#fff42;
	
}
.form-control{
    border-radius:1.5rem;
}
.btnSubmit
{
    border:none;
    border-radius:1.5rem;
    padding: 1%;
    width: 20%;
    cursor: pointer;
    background: #0dbb42;
    color: #fff;
}
.btnretour
{
    border:none;
    border-radius:1.5rem;
    padding: 1%;
    width: 20%;
    cursor: pointer;
    background: #ffc107;
    color: #fff;
}

</style>
<div class="container register-form">
            <div class="form">
                <div class="note">
                    <p>Espace de Modifier Demande Investissement (AI)</p>
                </div>
<form action="" method="post">	
                <div class="form-content">
				
                    <div class="row">
				
					<div class="col-md-4">
									<input type="hidden" name="user_id" value="<?php echo $id; ?>">
									<label for="input05" class="col-sm-8 control-label" ><strong>Délai de Réception</strong></label>
                                        <div class="form-group">
											<input type="text" name="reception" required class="form-control" value="<?php echo $reception; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="input05" class="col-sm-8 control-label" ><strong>Délai de Réception</strong></label>
											<div class="col-sm-8">
											  <div class="radio radio-transparent">
												<input type="radio" name="Depense_budgetisee" id="optionsRadios1" value="Depense_budgetisee" required="required">
												<label for="optionsRadios1">Dépense budgétisée</label>
											  </div>
											  <div class="radio radio-transparent">
												<input type="radio" name="Depense_budgetisee" id="optionsRadios2" value="Depense_non_budgetisee">
												<label for="optionsRadios2">Dépense non budgétisée*</label>
											  </div>
											  
											</div>
											
                                        </div>
										<label for="input05" class="col-sm-8 control-label" ><strong>Mag /Centre de Coût</strong></label>
										<div class="form-group">
											<input type="text" name="Magcc" class="form-control" value="<?php echo $Magcc; ?>">
                                        </div>
										
										<label for="input05" class="col-sm-8 control-label" ><strong>Axes d'Analyse 1</strong></label>
										<div class="form-group">
											<input type="text" name="axes1" class="form-control" value="<?php echo $axes1; ?>">
                                        </div>
										
										<label for="input05" class="col-sm-8 control-label" ><strong>Axes d'Analyse 2</strong></label>
										<div class="form-group">
											<input type="text" name="axes2" class="form-control" value="<?php echo $axes2; ?>">
                                        </div>
										
										<label for="input05" class="col-sm-8 control-label" ><strong>Proposition fournisseurs / prestataires de services</strong></label>
										<div class="form-group">
											<input type="text" style="height:15% !important;" name="Proposition_fournisseurs" class="form-control" value="<?php echo $Proposition_fournisseurs; ?>">
                                        </div> 	
										
									
										
              
             </div>
			<div class="col-md-8">
					 <div class="tile-body nopadding">
								
								<table class="table col-md-6">
								  <thead>
								 <h5 style="margin:0 auto; text-align: center;  padding: 8px;"><strong>Objet de la dépense</strong></h5>	
									<tr>
									  
									  <th style="width: 12% !important;">Id_ligne</th>
									  <th style="width: 12% !important;">Prix Unitaire</th>
									  <th style="width: 12% !important;">Quantité</th>
									  <th style="text-align:center">Description_1</th>
									  <th style="text-align:center">Description_2</th>
									</tr>
								  </thead>
								  <tbody style="">
									
									<tr>
									  <td><input type="text" class="form-control" style="color:black" value="1000" 
									  name="id_L1" readonly /> </td>
									  
									   <td><input type="text" class="form-control" style="color:black" value="<?php echo $prix_L1; ?>" name="prix_L1"  /> </td>
									   
									  <td><input type="text" class="form-control" value="<?php echo $quantite_L1; ?>"
									  name="quantite_L1"/></td>
									  
									 <td><input type="text"  rows="6" style="height:60px;" class="form-control" value="<?php echo $description1_L1; ?>"
									  name="description1_L1"/></td>
									 
									  <td><input type="text"  rows="6" style="height:60px;" class="form-control" value="<?php echo $description2_L1; ?>"
									  name="description2_L1"/></td>
									</tr>
									
									<tr>
									  <td><input type="text" class="form-control" style="color:black" value="2000" 
									  name="id_L2" readonly /> </td>
									  
									   <td><input type="text" class="form-control" style="color:black" value="<?php echo $prix_L2; ?>" name="prix_L2"  /> </td>
									   
									  <td><input type="text" class="form-control" value="<?php echo $quantite_L2; ?>"
									  name="quantite_L2"/></td>
									  
									 <td><input type="text"  rows="6" style="height:60px;" class="form-control" value="<?php echo $description1_L2; ?>"
									  name="description1_L2"/></td>
									 
									  <td><input type="text"  rows="6" style="height:60px;" class="form-control" value="<?php echo $description2_L2; ?>"
									  name="description2_L2"/></td>
									</tr>
									
									<tr>
									  <td><input type="text" class="form-control" style="color:black" value="3000" 
									  name="id_L3" readonly /> </td>
									  
									   <td><input type="text" class="form-control" style="color:black" value="<?php echo $prix_L3; ?>" name="prix_L3"  /> </td>
									   
									  <td><input type="text" class="form-control" value="<?php echo $quantite_L3; ?>"
									  name="quantite_L3"/></td>
									  
									 <td><input type="text"  rows="6" style="height:60px;" class="form-control" value="<?php echo $description1_L3; ?>"
									  name="description1_L3"/></td>
									 
									  <td><input type="text"  rows="6" style="height:60px;" class="form-control" value="<?php echo $description2_L3; ?>"
									  name="description2_L3"/></td>
									</tr>
									
									<tr>
									  <td><input type="text" class="form-control" style="color:black" value="4000" 
									  name="id_L4" readonly /> </td>
									  
									   <td><input type="text" class="form-control" style="color:black" value="<?php echo $prix_L4; ?>" name="prix_L4"  /> </td>
									   
									  <td><input type="text" class="form-control" value="<?php echo $quantite_L4; ?>"
									  name="quantite_L4"/></td>
									  
									 <td><input type="text"  rows="6" style="height:60px;" class="form-control" value="<?php echo $description1_L4; ?>"
									  name="description1_L4"/></td>
									 
									  <td><input type="text"  rows="6" style="height:60px;" class="form-control" value="<?php echo $description2_L4; ?>"
									  name="description2_L4"/></td>
									</tr>
									
									<tr>
									  <td><input type="text" class="form-control" style="color:black" value="5000" 
									  name="id_L5" readonly /> </td>
									  
									   <td><input type="text" class="form-control" style="color:black" value="<?php echo $prix_L5; ?>" name="prix_L5"  /> </td>
									   
									  <td><input type="text" class="form-control" value="<?php echo $quantite_L5; ?>"
									  name="quantite_L5"/></td>
									  
									 <td><input type="text"  rows="6" style="height:60px;" class="form-control" value="<?php echo $description1_L5; ?>"
									  name="description1_L5"/></td>
									 
									  <td><input type="text"  rows="6" style="height:60px;" class="form-control" value="<?php echo $description2_L5; ?>"
									  name="description2_L5"/></td>
									</tr>
									
									
									
									
								  </tbody>
								</table>
								
									
										<!--<div class="form-group">
											<label for="input05" class="col-sm-4 control-label"></label>
											<div class="col-sm-8">
												<input class="control-label fa fa-upload" type='file' name="file" id='file' multiple>
											</div>
									  </div>-->
										
										
							<div class="form-group" align="right">
                              <!-- <input type="submit" value="RETOUR"  onclick="history.go(-1);" class="btnretour"  />-->
                               <input type="submit" value="RETOUR"   onclick="window.location.href='/Gestion/Acceuil.php'" class="btnretour"  />
							   <input type="submit" value="ENREGISTRER"  onclick="return confirm('Êtes-vous sûr de Confimer vos modification !!')" name="update" class="btnSubmit"  />
								
								
							</div>
					 </div>
					 
					 
											   
				</div>
	
                    </div>
        	</form>           
                </div>
            </div>
        </div>
<!------ Include the above in your HEAD tag ---------->


	<?php
	} else{
		// If the 'id' value is not valid, redirect the user back to view.php page
		header('Location: ../Gestion/Menu_demandeur/update/view.php');
	}

}
?>