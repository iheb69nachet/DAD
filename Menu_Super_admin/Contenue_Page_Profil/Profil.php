<?php 
session_start();

$_SESSION['loaded_page']= "CP";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projetphase1";
 
					

?>

<!--<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js" /></script>-->

<script type="text/javascript">

</script>
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
<div class="main">
		<!-- row -->
            <div class="row">
			<!-- col 12 -->
              <div class="col-md-12">
          
                <section class="tile color transparent">



                 

                  <!-- tile body -->
                  <div class="tile-body color transparent-black">
                    
         <form class="ScrollStyle form-horizontal" role="form" action="Menu_Super_admin/Contenue_Page_Profil/connection_profile.php" method="POST">
                     
			<div class="col-md-6"> 
					 <div class="form-group">
                        <label for="input01" class="col-sm-3 control-label">Nom</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="input01" name="Nom">
                        </div>
                      </div>
					 
						<div class="form-group">
                        <label for="input01" class="col-sm-3 control-label">prenom</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="input01" name="prenom">
                        </div>
                      </div>
					  
					  
					   <div class="form-group">
                        <label for="input01" class="col-sm-3 control-label">Email</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="input01" name="Email">
                        </div>
                      </div>
                      
						 <div class="form-group">
                        <label for="input01" class="col-sm-3 control-label">Matricule</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="input01" name="Matricule">
                        </div>
                      </div>
						
						 
					<!-------------------------------------- Début Zone filtre -------------------------------------------->  
					<?php
					
						//index.php
						$connect = mysqli_connect("localhost", "root", "", "projetphase1");
						$direction = '';
						$query = "SELECT direction FROM base GROUP BY direction ORDER BY direction ASC";
						$result = mysqli_query($connect, $query);
						while($row = mysqli_fetch_array($result))
						{
						 $direction .= '<option value="'.$row["direction"].'">'.$row["direction"].'</option>';
						}
						
					?>
					   <div class="form-group">
                        <label for="input01" class="col-sm-3 control-label">Direction</label>
                        <div class="col-sm-8">
						  <select name="direction" id="direction" class="form-control form-control-role action">
							<option value="">Sélectionnez la direction</option>
							<?php echo $direction; ?>
						   </select>
   
                        </div>
                      </div>
					 
					  <div class="form-group">
                        <label for="input01" class="col-sm-3 control-label">Department</label>
                        <div class="col-sm-8">
						   <select name="department" id="department" class="form-control form-control-role action">
							<option value="">Sélectionnez un département</option>
						   </select>
                        </div>
                      </div>
					  
					  
					  <div class="form-group">
                        <label for="input01" class="col-sm-3 control-label">Service</label>
                        <div class="col-sm-8">
						 
					   <select name="service" id="service" class="form-control form-control-role">
						<option value="">Sélectionnez un service</option>
					   </select>
                        </div>
                      </div>
					  
					  <div class="form-group">
                        <label for="input01" class="col-sm-3 control-label">Chef Hierarchie </label>
                        <div class="col-sm-8">
                        <!--  <input type="text" class="form-control" id="input01" name="Chef_Hierarchie">-->
						 <select class="form-control form-control-role" id="input07_chosen" name="Chef_Hierarchie">
						    <option class="f"></option>
                            <option class="f">Omri Foued</option>
                            <option class="f">moncef</option>
                            <option class="f">Chef Hierarchie 2</option>
                            <option class="f">Chef Hierarchie 3</option>
                            <option class="f">Chef Hierarchie 4</option>
                            <option class="f">Chef Hierarchie 5</option>
                            <option class="f">Chef Hierarchie 6</option>
                            <option class="f">Chef Hierarchie 7</option>
                            					
                            </select>
                        </div>
                      </div>
					  
					  
					  	<!-------------------------------------- Fin Zone Travil -------------------------------------------->  
						
						
					   <!--<div class="form-group">
                        <label for="input01" class="col-sm-3 control-label">adresse</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="input01" name="adresse">
                        </div>
                      </div>-->
                      
            </div> 
            <div class="col-md-6">           
						 <div class="form-group">
                        <label for="input01" class="col-sm-3 control-label">login</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="input01" name="login">
                        </div>
                      </div>
					  
					  
					   <div class="form-group">
                        <label for="input01" class="col-sm-3 control-label">Mot de passe</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="input01" name="Password">
                        </div>
                      </div>
					  
                     <div class="form-group">
                        <label for="input01" class="col-sm-3 control-label">Role</label>
						
                        <div class="col-sm-8">
                          <select class="form-control form-control-role" id="acess_level" name="acess_level">
						    <option class="v"></option>
                            <option class="v" value="L1">Demandeur</option>                        					
                            <option class="v" value="L2">Chef Hierarchie</option>                        					
                            <option class="v" value="L3">Comptabilite</option>                        					
                            <option class="v" value="L4">Controle Gestion</option>                        					
                            <option class="v" value="L5">DGA</option>                        					
                           </select>
                        </div>
                      </div>
					  
				
					<div class="form-group">
                        <label for="input01" class="col-sm-3 control-label">Site</label>
						
                        <div class="col-sm-8">
                          <select class="form-control form-control-role" id="input07_chosen" name="option">
						    <option class="f"></option>
                            <option class="f">CLSB</option>
                            <option class="f">CLC</option>
                            <option class="f">CF</option>
                            <option class="f">CLN</option>
                            <option class="f">SBC</option>
                            <option class="f">SDEM</option>
                            <option class="f">DELTA</option>
                            <option class="f">DHO</option>
                            					
                            </select>
                        </div>
                      </div>
					  
					  <div class="form-group">
                        <label for="input01" class="col-sm-3 control-label">Reference Site</label>
						
                        <div class="col-sm-8">
                          <select class="form-control form-control-role" id="input07_chosen" name="ref_site">
								<option class="h"></option>
								<option class="h">00001</option>
								<option class="h">00002</option>
								<option class="h">00003</option>
								<option class="h">00004</option>
								<option class="h">00005</option>
								<option class="h">00006</option>
								<option class="h">00008</option>
								<option class="h">00011</option>	
                            </select>
                        </div>
                      </div>
					  
					  
					    <div class="form-group">
                        <label for="input01" class="col-sm-3 control-label">Site</label>
						
                        <div class="col-sm-8">
                          <select class="form-control form-control-role" id="input07_chosen" name="cs">
						    <option class="q"></option>
                            <option class="q">1</option>
                            <option class="q">2</option>
                            <option class="q">3</option>
                            <option class="q">4</option>
                            <option class="q">5</option>
                            <option class="q">6</option>
                            <option class="q">7</option>
                            <option class="q">8</option>
                            					
                            </select>
                        </div>
                      </div>
					  
					  
					  

				</div>	  
					   <div class="form-group form-footer footer-white">
                         <div class="col-sm-offset-8 col-sm-8">
                   
                          <button type="submit" class="btn btn-red" name="Envoyer">Envoyer</button>
                        </div>
                      </div>
                     
					  
					  
                     </form>

                  </div>
                 
                </section>
		  
<script>

	$(document).ready(function(){
 $('.action').change(function(){
  if($(this).val() != '')
  {
   var action = $(this).attr("id");
   var query = $(this).val();
   var result = '';
   if(action == "direction")
   {
    result = 'department';
   }
   else
   {
    result = 'service';
   }
   $.ajax({
    url:"../Gestion/Menu_Super_admin/Contenue_Page_Profil/fetch.php",
    method:"POST",
    data:{action:action, query:query},
    success:function(data){
     $('#'+result).html(data);
    }
   })
  }
 });
});

</script>
 			
             </div>
       
      </div>
    
    </div>
 	
 				
 				