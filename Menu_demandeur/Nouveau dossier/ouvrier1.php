<?php 
session_start();
$_SESSION['loaded_page']= "ouvrier";

?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.js"></script>
<script type="text/javascript" src="../Gestion/Menu_ouvrier/jquery.cascadingdropdown.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js" /></script>
<script type="text/javascript">
$('#example1').cascadingDropdown({
    selectBoxes: [
        {
            selector: '.step1'
        },
        {
            selector: '.step2',
            requires: ['.step1']
        }
        
    ]
});
</script>

<div class="main">
<form class="form-horizontal" role="form" action="Menu_ouvrier/V_connection.php" method="POST">

<!-- row -->
 <div class="row">
<!-- col 12 -->
              <div class="col-md-6">

          
                <section class="tile color transparent-black" style="height:200px;">



                  <!-- tile header -->
                  <div class="tile-header">
                    <h1><strong>Block 1</strong> </h1>
                    <div class="controls">
                      
                      <a href="#" class="remove"><i class="fa fa-pencil"></i></a>
                    </div>
                  </div>
                  <!-- /tile header -->

                  <!-- tile body -->
                  <label class="col-sm-4 control-label">Gouvernerat</label>
                       
                    <div id="example1" class="col-sm-8">
					
							<select class="step1 form-control" name="Gouvernerat">
								<option value="">Please select an Gouvernerat</option>
								<option>SIDI BOUZID</option>
								<option>GASSERINE</option>
								<option>KAIRAOUEN</option>
								
							</select>
				
					
				</br>	
					<div id="champ1">
							<select class="step2 form-control" name="sbz">
								<option value="">Please select an option</option>
								 <option>Bir El Hafey</option>
								<option>Cebbala Ouled Asker</option>
								<option>Meknassy</option>
								<option>Menzel Bouzaiane</option>
								<option>Mezzouna</option>
								<option>Ouled Haffouz</option>
								<option>Regueb</option>
								<option>Sidi Ali Ben Aoun</option>
								<option>Sidi Bouzid Est</option>
								<option>Sidi Bouzid Ouest</option>
								<option>Souk Jedid</option>
							</select>
						</div>	
							<!--<select class="step3 form-control">
								<option value="">Please select an option</option>
								<option>El Ayoun</option>
								<option>Ezzouhour</option>
								<option>F??riana</option>
								<option>Foussana</option>
								<option>Ha??dra</option>
								<option>Hassi El Ferid</option>
								<option>Jedelienne</option>
								<option>Kasserine Nord</option>
								<option>Kasserine Sud</option>
								<option>Majel Bel Abb??s</option>
								<option>Sbe??tla</option>
								<option>Sbiba</option>
								<option>Thala</option>
							</select>
							
							<select class="step4 form-control">
								<option value="">Please select an option</option>
								 <option>Bou Hajla</option>
								<option>Chebika</option>
								<option>Echrarda</option>
								<option>El Al??a</option>
								<option>Haffouz</option>
								<option>Hajeb El Ayoun</option>
								<option>Kairouan Nord</option>
								<option>Kairouan Sud</option>
								<option>Nasrallah</option>
								<option>Oueslatia</option>
								<option>Sbikha</option>
							</select>-->
							
						</div>
                   
				
					
                </section>
				
<!--------------------------------------------------------------><!--------------------------------------------------------------><!-------------------------------------------------------------->
				<section class="tile color transparent-black">



                  <!-- tile header -->
                  <div class="tile-header">
                    <h1><strong>Block 3</strong> </h1>
                    <div class="controls">
                      <a href="#" class="remove"><i class="fa fa-list"></i></a>
                    </div>
                  </div>
                  <!-- /tile header -->

                  <!-- tile body -->
                  <div class="tile-body">
                    
                    <form class="form-horizontal" role="form" parsley-validate id="basicvalidations">
					
						  
					  
                      
						  <div class="form-group">
                        <label class="col-sm-4 control-label">Participation au Selection 2011</label>
                        <div class="col-sm-8">
                          <div class="radio radio-transparent">
                            <input type="radio" name="Participation_au_Selection_2011" id="optionsRadios7" value="Oui" checked>
                            <label for="optionsRadios7">Oui</label>
                          </div>
                          <div class="radio radio-transparent">
                            <input type="radio" name="Participation_au_Selection_2011" id="optionsRadios8" value="Non">
                            <label for="optionsRadios8">Non</label>
                          </div>
                        
                        </div>
                      </div>
					  
					  
						<div class="form-group">
                        <label class="col-sm-4 control-label">Participation au Selection en 2014</label>
                        <div class="col-sm-8">
                          <div class="radio radio-transparent">
                            <input type="radio" name="Participation_au_Selection_2014" id="optionsRadios9" value="Legislative" checked>
                            <label for="optionsRadios9">Legislative</label>
                          </div>
                          <div class="radio radio-transparent">
                            <input type="radio" name="Participation_au_Selection_2014" id="optionsRadios10" value="Presdentiel_1">
                            <label for="optionsRadios10">Presdentiel_1</label>
                          </div>
						  <div class="radio radio-transparent">
                            <input type="radio" name="Participation_au_Selection_2014" id="optionsRadios9" value="Presdentiel_2" >
                            <label for="optionsRadios9">Presdentiel_2</label>
                          </div>
                        
                        </div>
                      </div>
					   <div class="form-group">
                        <label class="col-sm-4 control-label">P_W_D</label>
                        <div class="col-sm-8">
                          <div class="radio radio-transparent">
                            <input type="radio" name="P_W_D" id="optionsRadios1" value="Oui" checked>
                            <label for="optionsRadios1">Oui</label>
                          </div>
                          <div class="radio radio-transparent">
                            <input type="radio" name="P_W_D" id="optionsRadios2" value="Non">
                            <label for="optionsRadios2">Non</label>
                          </div>
                        
                        </div>
                      </div>
					  
					  
					  <div class="form-group">
                        <label class="col-sm-4 control-label">Avez Vous une Id??e <br>Concernant La Nouvelle Architecture Municipale </label>
                        <div class="col-sm-8">
                          <div class="radio radio-transparent">
                            <input type="radio" name="Desentralisation" id="optionsRadios11" value="Oui" checked>
                            <label for="optionsRadios11">Oui</label>
                          </div>
                          <div class="radio radio-transparent">
                            <input type="radio" name="Desentralisation" id="optionsRadios12" value="Non">
                            <label for="optionsRadios12">Non</label>
                          </div>
                        </div>
                      </div>
					  
					  
					  <div class="form-group">
                        <label class="col-sm-4 control-label">Intention Aux Selections</label>
                        <div class="col-sm-8">
                          <div class="radio radio-transparent">
                            <input type="radio" name="Intention_Aux_Selections_2" id="optionsRadios13" value="Oui" checked>
                            <label for="optionsRadios13">Oui</label>
                          </div>
                          <div class="radio radio-transparent">
                            <input type="radio" name="Intention_Aux_Selections_2" id="optionsRadios14" value="Non">
                            <label for="optionsRadios14">Non</label>
                          </div>
                        </div>
                      </div>
			

			
                    </form>

                  </div>
                  <!-- /tile body -->
                  
                


                </section>
<!--------------------------------------------------------------><!--------------------------------------------------------------><!--------------------------------------------------------------><!-------------------------------------------------------------->
             </div>
       
	   <div class="col-md-6">

          
                <section class="tile color transparent-black">



                  <!-- tile header -->
                  <div class="tile-header">
                    <h1><strong>Block 2</strong> </h1>
                    <div class="controls">
                      <a href="#" class="remove"><i class="fa fa-list"></i></a>
                    </div>
                  </div>
                  <!-- /tile header -->

                  <!-- tile body -->
                  <div class="tile-body">
                  
						
						<div class="form-group">
                        <label class="col-sm-4 control-label">Intention Aux Selections</label>
                        <div class="col-sm-8">
                          <div class="radio radio-transparent">
                            <input type="radio" name="Intention_Aux_Selections" id="optionsRadios15" value="Oui" checked>
                            <label for="optionsRadios15">Oui</label>
                          </div>
                          <div class="radio radio-transparent">
                            <input type="radio" name="Intention_Aux_Selections" id="optionsRadios16" value="Non">
                            <label for="optionsRadios16">Non</label>
                          </div>
                        </div>
                      </div>
						
                      <div class="form-group">
                        <label for="input07" class="col-sm-4 control-label">Sexe</label>
                        <div class="col-sm-8" id="selectbox">
                          <select name="sexe" class="chosen-select chosen-transparent form-control" id="input07" parsley-trigger="change" parsley-required="true" parsley-error-container="#selectbox">
                            <option value="">Please choose</option>
                            <option value="Homme">Homme</option>
                            <option value="Femme">Femme</option>
                          
                          </select>
                        </div>
                      </div>

                       <div class="form-group">
                        <label for="input08" class="col-sm-4 control-label">Age</label>
                        <div class="col-sm-8" id="selectbox2">
                          <select name="age" multiple class="chosen-select chosen-transparent form-control" id="input08" parsley-trigger="change" parsley-required="true" parsley-error-container="#selectbox2">
                            <option value="Moins_18">Moins de 18 ans</option>
                            <option value="Entre_18__24">Entre 18 -- 35 ans</option>
                            <option value="Plus_35">Plus de 35 ans</option>
                         </select>
                        </div>
                      </div>

					  
					  
					  <div class="form-group">
                        <label class="col-sm-4 control-label">Employabilit??</label>
                        <div class="col-sm-8">
                          <div class="radio radio-transparent">
                            <input type="radio" name="Employabilite" id="optionsRadios1" value="Oui" checked>
                            <label for="optionsRadios1">Oui</label>
                          </div>
                          <div class="radio radio-transparent">
                            <input type="radio" name="Employabilite" id="optionsRadios2" value="Non">
                            <label for="optionsRadios2">Non</label>
                          </div>
                        
                        </div>
                      </div>
					  
					  
					   <div class="form-group">
                        <label class="col-sm-4 control-label">Habitation</label>
                        <div class="col-sm-8">
                          <div class="radio radio-transparent">
                            <input type="radio" name="Habitation" id="optionsRadios3" value="Urbain" checked>
                            <label for="optionsRadios3">Urbain</label>
                          </div>
                          <div class="radio radio-transparent">
                            <input type="radio" name="Habitation" id="optionsRadios4" value="Rurale">
                            <label for="optionsRadios4">Rurale</label>
                          </div>
                        
                        </div>
                      </div>
					  
					  
					  <div class="form-group">
                        <label class="col-sm-4 control-label">Municipalit??</label>
                        <div class="col-sm-8">
                          <div class="radio radio-transparent">
                            <input type="radio" name="Municipalite" id="optionsRadios5" value="Nouvelle_Municipalit??" checked>
                            <label for="optionsRadios5">Nouvelle Municipalite</label>
                          </div>
                          <div class="radio radio-transparent">
                            <input type="radio" name="Municipalite" id="optionsRadios6" value="Ancien_Municipalit??">
                            <label for="optionsRadios6">Ancien Municipalite</label>
                          </div>
                        
                        </div>
                      </div>
					 
					  
					    <div class="form-group">
                        <label for="input07" class="col-sm-4 control-label">Niveau Acad??mic</label>
                        <div class="col-sm-8" id="selectbox">
                          <select name="Niveau_Academic" class="chosen-select chosen-transparent form-control" id="input07" parsley-trigger="change" parsley-required="true" parsley-error-container="#selectbox">
                            <option value="">Please choose</option>
                            <option value="Primaire">Primaire</option>
                            <option value="Secondaire">Secondaire</option>
                            <option value="Universitaire">Universitaire</option>
                            <option value="Alphabete">Alphab??te</option>
                          
                          </select>
                        </div>
                      </div>
					   
					 <!--   <input type="button" name="confirm" id="confirm"  onClick="confirm('do you really want this')" value="click">

					   
					   
					  <form action="Menu_ouvrier/V_connection.php" method="POST" >
							<input type="submit" name="completeYes" value="Complete Transaction" />
						</form>-->
					   
					    <div class="form-group form-footer footer-white">
                         <div class="col-sm-offset-8 col-sm-8">
                   
                          <button type="submit" class="btn btn-red confirm" onclick="return confirm('??tes-vous s??r de Confimer vos choix ?')" name="Envoyer">Envoyer</button>
                        </div>
                      </div>
					   
					   
					   
					  
					  
					  

                  </div>
                  <!-- /tile body -->
                  
                


                </section>
				
             </div>
			  
	   
	   
			
	   
 </div>
    </form>
</div>

					  
					  
					  