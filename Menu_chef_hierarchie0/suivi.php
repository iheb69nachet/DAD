<?php 
session_start();
$_SESSION['loaded_page']= "ouvrier";

?>
 <style>
	
				
				@media only screen and (max-width: 600px) {
				    /* For tablets: */
						  .ScrollStyle
					{
					   height: 450px; 
						overflow-y : auto;
					}
				}


 
	 label {color:white;}
	 </style>
	

      
    
<section class="tile color transparent-black">

		<div class="tile-header">
							<h1><strong>Espace</strong> Demande</h1>
							<div class="controls">
							  <a href="#" class="minimize"><i class="fa fa-chevron-down"></i></a>
							  <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
							  <a href="#" class="remove"><i class="fa fa-times"></i></a>
							</div>
						  </div>
						  
		<div class="tile-body">
<form class="ScrollStyle  form-horizontal " role="form" action="Menu_demandeur/V_connection.php" method="POST" >

		<!-- row -->
		 <div class="row">
		<!-- col 12 -->
			  <div class="col-md-6">  
					  <div class="select-boxes">
					  
						
									<div class="form-group">
								<label for="input01" class="col-sm-4 control-label">Direction</label>
								<div class="col-sm-8">
								  <input type="text" class="form-control" id="input01" name="Direction">
								</div>
							  </div>
							 
								
								 <div class="form-group">
								<label for="input01" class="col-sm-4 control-label">Département</label>
								<div class="col-sm-8">
								  <input type="text" class="form-control" id="input01" name="Departement">
								</div>
							  </div>
							  
							  
							   <div class="form-group">
								<label for="input01" class="col-sm-4 control-label">Service</label>
								<div class="col-sm-8">
								  <input type="text" class="form-control" id="input01" name="Service">
								</div>
							  </div>
								
								
								
								 <div class="form-group">
								<label for="input01" class="col-sm-4 control-label">Matricule</label>
								<div class="col-sm-8">
								  <input type="text" class="form-control" id="input01" name="Matricule">
								</div>
							  </div>
							  
							  
							   <div class="form-group">
								<label for="input01" class="col-sm-4 control-label">Chef Hiérarchie</label>
								<div class="col-sm-8">
								  <input type="text" class="form-control" id="input01" name="Hierarchie">
								</div>
							  </div>
								
								
								  <div class="form-group">
								<label for="input05" class="col-sm-4 control-label">Objet de la dépense</label>
								<div class="col-sm-8">
								  <textarea class="form-control" id="input05"  name="Objet_depense" rows="6"></textarea>
								</div>
							  </div>

								
								
								
								
								
											<div class="form-group">
								<label class="col-sm-4 control-label">Justificatif de la dépense</label>
								<div class="col-sm-8">
								  <div class="radio radio-transparent">
									<input type="radio" name="Depense_budgetisee" id="optionsRadios1" value="Depense_budgetisee">
									<label for="optionsRadios1">Dépense budgétisée</label>
								  </div>
								  <div class="radio radio-transparent">
									<input type="radio" name="Depense_budgetisee" id="optionsRadios2" value="Depense_non_budgetisee">
									<label for="optionsRadios2">Dépense non budgétisée*</label>
								  </div>
								  
								</div>
							  </div>
								
								

								<!----------------------------->
								
								
								
							
							  
							   
								
								<!----------------------------->
								
								
							   
								
								
								
								
								
					</div>
						
				  
			   
			   
					
			   
		 </div>
		  <div class="col-md-6">  
							<div class="form-group">
								<label for="input05" class="col-sm-4 control-label">Proposition fournisseurs / prestataires de services</label>
								<div class="col-sm-8">
								  <textarea class="form-control" id="input05"  name="Proposition_fournisseurs" rows="6"></textarea>
								</div>
							  </div>
		  
							<div class="form-group">
								<label for="input07" class="col-sm-4 control-label">Type_Dépense</label>
								<div class="col-sm-8" id="selectbox">
								  <select name="Type_Depense" class="chosen-select chosen-transparent form-control" id="input07" parsley-trigger="change" parsley-required="true" parsley-error-container="#selectbox">
									<option value="">Please choose</option>
									<option value="Charge">Dépense de fonctionnement</option>
									<option value="Investissement">Dépense d'investissement</option>
									<option value="Achat">Achat petit matériel</option>
								  
								  </select>
								</div>
							  </div>
								
								<!----------------------------->
								
									

								
								<!----------------------------->
								
								
							  
						<!-------	  
							  <div class="form-group">
								<label class="col-sm-4 control-label">Employabilité</label>
								<div class="col-sm-8">
								  <div class="radio radio-transparent">
									<input type="radio" name="Employabilite" id="optionsRadios3" value="Oui" checked>
									<label for="optionsRadios3">Oui</label>
								  </div>
								  <div class="radio radio-transparent">
									<input type="radio" name="Employabilite" id="optionsRadios4" value="Non">
									<label for="optionsRadios4">Non</label>
								  </div>
								
								</div>
							  </div>
							  
								
								---------------------->
								
									  
							  
		  </div>
			  <div class="col-sm-offset-8 col-sm-8">
						   
								  <button type="submit" class="btn btn-red confirm" onclick="return confirm('Êtes-vous sûr de Confimer vos choix ?')" name="Envoyer">Envoyer</button>
								</div>
								
		</div>

		</form>
		</div>
		</section>  

					  
					  