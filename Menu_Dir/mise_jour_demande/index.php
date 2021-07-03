<?php  
session_start();
 $connect = mysqli_connect("localhost", "root", "", "projetphase1");  

 $query = "SELECT * FROM demande WHERE etat_verife_cg='Valider' AND avis_DGA='' AND site='".$_SESSION['site']."' ORDER BY id DESC";  
 $result = mysqli_query($connect, $query);

  $query2 = "SELECT * FROM demande WHERE avis_DGA !='' AND site='".$_SESSION['site']."' ORDER BY id DESC"; 
 $result2 = mysqli_query($connect, $query2);  
 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
	  
           <title>Dashbord Direction Générale
</title>  
      
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  	
		   
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

 
	  label {}
	 
	 


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
      </head>  

      <body>  
<!------------------------------------------- Zone Time line -------------------------------------------------------->


<div class="row col-md-12">	

			<section class="tile transparent col-md-4">
                  <!-- tile header -->
                  <div class="tile-header color blue rounded-top-corners text-center">               
                    <button class="btn pull-left btn-black-transparent" type="button"><i class="fa fa-caret-square-o-down"></i></button>
                    <h2><strong>Suivi Demande  De Dépense</strong></h2>
                    <div class="controls">
                      <a href="#" class="minimize"><i class="fa fa-chevron-down"></i></a>
                      <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                      <a href="#" class="remove"><i class="fa fa-times"></i></a>
                    </div>
                  </div>
                  <!-- /tile header -->

                  <!-- tile body -->
                  <div class="tile-body color transparent-black rounded-bottom-corners">
					<label for="input01" class="control-label">Date</label>
					<input type="text" class="form-control fa fa-calendar" style="width:35%;" value="<?php echo date('d / m / Y'); ?>"/>
					<div class="row col-md-12"> </div>
					<div class="row col-md-12"> </div>
					<div class="row col-md-12"> </div>
					
					<form class="ScrollStyle  form-horizontal " role="form" action="Menu_demandeur/V_connection.php" method="POST" >

						<!-- row -->
						 <div class="row">
						<!-- col 12 --> 
							  <div class="col-md-12">  
							  
									  <div class="select-boxes">
											  </div>
										<!----------------------------------------->	 
												<?php
									
										//index.php
										$connect = mysqli_connect("localhost", "root", "", "projetphase1");
										$Reference_demande = '';
										$query = "SELECT Reference_demande FROM demande GROUP BY Reference_demande ";
										$result = mysqli_query($connect, $query);
										while($row = mysqli_fetch_array($result))
										{
										 $Reference_demande .= '<option value="'.$row["Reference_demande"].'">'.$row["Reference_demande"].'</option>';
										}
										
									?>
												<div class="form-group">
														<label for="input01" class="col-sm-4 control-label">Reference_demande</label>
														<div class="col-sm-8">
														  <select name="Reference_demande" id="Reference_demande" class="form-control form-control-role action">
															<option value="">Select Reference_demande</option>
															<?php echo $Reference_demande; ?>
														   </select>
								   
														</div>
													  </div>
											  
												<div class="form-group">
													<label for="input01" class="col-sm-4 control-label">Objet_depense</label>
													<div class="col-sm-8">
										
													  <div name="Objet_depense" id="Objet_depense" class="form-control form-control-role action">
														<!--<option value="">Select Objet_depense</option>-->
													   </div>
													</div>
											  </div>
									  <!----------------------------------------->
									</div>
										
								  
							   
							   
									
							   
						 </div>
						

						</form>
						
		
				  
                  </div>
                  <!-- /tile body -->
                


       </section>
			
			<section class="tile color transparent col-md-8">




                  <!-- tile header -->
                 <div class="tile-header color blue rounded-top-corners text-center">               
                    <button class="btn pull-left btn-black-transparent" type="button"><i class="fa fa-caret-square-o-down"></i></button>
                    <h2><strong>Suivi des Demandes</strong></h2>
                    <div class="controls">
                      <a href="#" class="minimize"><i class="fa fa-chevron-down"></i></a>
                      <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                      <a href="#" class="remove"><i class="fa fa-times"></i></a>
                    </div>
                  </div>
                  <!-- /tile header -->


                  <!-- tile body -->
                  <div class="tile-body no-vpadding">
                    
<section class="row">
		  <div class="">  
							
		  <section class=" tile color transparent-black">
		
					
							
				<div class="tile-body" id="" >
				
					<div class="bar"></div>
					<div class="timeline timelinegraphe" >
					  <!--<div class="entry" style="background-color:green;">-->
					  <div class="entry">
						<h1>1</h1>
						<h2></h2>
						<img src="" /> Demandeur
					  </div>
					  <div class="entry">
						<h1>2</h1>
						Chef Hiérarchique
					  </div>
					  <div class="entry">
						<h1>3</h1>
					   Comptabilité
					  </div>
					  <div class="entry">
						<h1>4</h1>
						Contrôle de Gestion
					  </div>
					  <div class="entry">
						<h1>5</h1>
						DGA
					  </div>
					</div>

      </div>
						
	</div>
	</div>
		
				
</section>
					
                  </div>
                  <!-- /tile body -->


</section>
			
		
</div>

			
<div class="row col-md-12">	
	
<section class="tile color transparent col-md-8">
		
		
				<div class="tile-header color redbrown rounded-top-corners text-center">               
                    <button class="btn pull-left btn-black-transparent" type="button"><i class="fa fa-caret-square-o-down"></i></button>
                    <h2><strong>Historique Des Demandes</strong></h2>
                    <div class="controls">
                      <a href="#" class="minimize"><i class="fa fa-chevron-down"></i></a>
                      <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                      <a href="#" class="remove"><i class="fa fa-times"></i></a>
                    </div>
                  </div>
                  <!-- tile body -->
                  <div class="tile-body color transparent-black rounded-corners">
                    
                    <div class="table-responsive"style="width:100%; height:250px; overflow:auto;">
                      <table  class="table table-datatable table-custom" id="advancedDataTable">
                        <thead>
                          <tr>
                            <th width="15%">N° Demande</th>  
                            <th width="15%">Matricule</th>  
							<th width="15%">Objet de la dépense</th> 
							<th width="15%">Date de Création</th> 
                            <th width="15%">Type_Depense</th> 
							
                            <th width="15%">Piéce Joint</th>
							<th width="15%">Piéce_Justif_Budgétaire</th>							
							<th width="15%">Valider</th> 
                          </tr> 
								  
							
						
                          </tr>
						  
                        </thead>
                        <tbody>
                    <?php  
                               while($row = mysqli_fetch_array($result2))  
                               {  
                               ?>  
                               <tr>  
                                    <td><?php echo $row["Reference_demande"]; ?></td>  
                                    <td><?php echo $row["Matricule"]; ?></td>   									
                                      <td><?php echo $row["description1_L1"]; ?></td> 
									<td><?php echo $row["da"]; ?></td>   										  
                                    <td><?php echo $row["Type_Depense"]; ?></td>   									
                                    <td><?php if($row["file_upload"]) echo '<a download href="Menu_demandeur/upload/'. $row["file_upload"] .'">Piece_Joint</a>' ?></td>  
                                    <td><?php if($row["file_justif"]) echo '<a download href="Menu_controle_gestion/justif/'. $row["file_justif"] .'">justif_Budgétaire</a>' ?></td>  
                                   
									<td>
										<?php
										  if($row["avis_DGA"]==""){
											// echo '<input type="button" name="edit" value="Actions" id="'.<?php echo $row["id"]; ?.'"/>';
									echo '<input class="btn btn-danger btn-md edit_data" type="button" name="edit"  value="Actions" id="'.$row["id"].'">';
										  }
										  else{
									echo '<input class="btn btn-info btn-md view_data" type="button" name="view" value="Details" id="'.$row["id"].'">';
										  }
										?>	 
								 </td>  								 
                                  
                               </tr>  
                               <?php  
                               }  
                               ?>  
                        </tbody>
                       
                      </table>
                    </div>

                  </div>
                  <!-- /tile body -->
			

</section>
			
			<section class="tile transparent col-md-4">




                  <!-- tile header -->
                  <div class="tile-header color redbrown rounded-top-corners text-center">               
                    <button class="btn pull-left btn-black-transparent" type="button"><i class="fa fa-caret-square-o-down"></i></button>
                    <h2><strong>Validation </strong> Direction Générale</h2>
                    <div class="controls">
                      <a href="#" class="minimize"><i class="fa fa-chevron-down"></i></a>
                      <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                      <a href="#" class="remove"><i class="fa fa-times"></i></a>
                    </div>
                  </div>
                  <!-- /tile header -->

                  <!-- tile body -->
                  <div class="tile-body color transparent-black rounded-bottom-corners">
                    <!--<input type="text" placeholder="Add new todo..." class="form-control w100p bottommargin">-->
					<input class="mx-auto btn btn-warning btn-lg view_data" style="padding:auto; margin-left:150px;" type="button" name="view" value="Validation">
				
                  </div>
                  <!-- /tile body -->
                


       </section>
		
</div>	
<!-------------------------------------------  Zone Historique -------------------------------------------------------->
<div class="row col-md-12">		
		
</div>
			
</body>  
 </html>  
 
    <div id="dataModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Demande Details</h4>  
                </div>  
                <div class="modal-body" id="employee_detail">  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>  
 <div id="add_data_Modal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title"><strong>Approbation </strong>Demande selectionner</h4>  
                </div>  
                <div class="modal-body">  
                     <form method="post" id="insert_form">  
                         <div class="row">
						  
							<div class="col-md-6">						  
									  <label> Objet de la dépense</label>   
									  <input type="text" name="Objet_depense" id="Objet_depense" disabled class="form-control" />  
									  <br />  
									  <label> Employee Depense_budgetisee</label>  
									  <textarea name="Depense_budgetisee" id="Depense_budgetisee" disabled class="form-control"></textarea>  
									  <br />  
									   <br />  
									  <label> Type_Depense</label>  
									  <textarea name="Type_Depense" id="Type_Depense" disabled class="form-control"></textarea>  
									  <br />  
									  <label> centre_cout</label>  
									  <textarea name="centre_cout" id="centre_cout"  disabled class="form-control"></textarea> 
									  <br />  
							</div>
							<div class="col-md-6">
									  <br />  
									  <label> objet</label>  
									  <textarea name="objet" id="objet" disabled class="form-control"></textarea> 
									  <br />  
									  <br />  
									  <label> ss_compte</label>  
									  <textarea name="ss_compte" id="ss_compte" disabled class="form-control"></textarea> 
									  <br />  
									  <br />  
									  <label> Date_controle</label>  
									  <textarea name="Date_controle" id="Date_controle" disabled  class="form-control"></textarea> 
									  <br />  
									  <br />  
									 <!-- <label> Budget_allouer</label>  
									  <textarea name="Budget_allouer" id="Budget_allouer" disabled class="form-control"></textarea> -->
									  <br />  
									  <br />  
								</div>	
						</div>	
								
						<div class="form-group">
								<label for="input07" class="col-sm-4 control-label">Approbation DGA</label>
								<div class="col-sm-8" id="selectbox" >
								  <select name="avis_DGA" class="chosen-select chosen-transparent form-control"  id="input07" parsley-trigger="change" parsley-required="true" parsley-error-container="#selectbox" onchange="showHideEle(this, 'TitleRejeter', 'Rejeter')">
									<option value=""></option>
									<option value="Valider">Valider</option>
									<option value="Rejeter" >Rejeter</option>
								  
								  </select>
								  
									<textarea name="commentaire_DGA" id="TitleRejeter"  class="form-control" placeholder="Commentaire..." style="display:none;"></textarea> 
								</div>
							  </div>
                          <br />  
                       
                          <input type="hidden" name="employee_id" id="employee_id" />  
						  
						  
						  <!-------     Button à modifier        ---------->
						  
                          <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />  
						  
						   <!-------     Button à modifier        ---------->
						  
						  
                     </form>  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>  


<script>

$(document).ready(function(){
 $('.action').change(function(){
  if($(this).val() != '')
  {
   var action = $(this).attr("id");
   var query = $(this).val();
   var result = '';
   if(action == "Reference_demande")
   {
    result = 'Objet_depense';
   }
   else
   {
    result = 'service';
   }
   $.ajax({
    url:"../Gestion/Menu_demandeur/fetch.php",
    method:"POST",
    data:{action:action, query:query},
	dataType: 'json',
    success:function(data){
		$('#'+result).html(data.output);
		$('.timelinegraphe').html(data.timeline);
    },
	error: function() {
		alert('Erreur!');
	}
   })
  }
 });
});

</script>  
 <script>  
 $(document).ready(function(){  
      $('#add').click(function(){  
           $('#insert').val("Insert");  
           $('#insert_form')[0].reset();  
      });  
      $(document).on('click', '.edit_data', function(){  
           var employee_id = $(this).attr("id");  
           $.ajax({  
                url:"../Gestion/Menu_DGA/mise_jour_demande/fetch.php",  
                method:"POST",  
                data:{employee_id:employee_id},  
                dataType:"json",  
                success:function(data){  
                     
                     $('#Depense_budgetisee').val(data.Depense_budgetisee);  
                     $('#Objet_depense').val(data.description1_L1);  
                     $('#Type_Depense').val(data.Type_Depense);  
                     $('#centre_cout').val(data.centre_cout);  
                     $('#objet').val(data.objet);  
                     $('#ss_compte').val(data.ss_compte);  
                     $('#Date_controle').val(data.Date_controle);  
                     $('#Budget_allouer').val(data.Budget_allouer);    
                     $('#avis_DGA').val(data.avis_DGA);  
                     $('#commentaire_DGA').val(data.commentaire_DGA);  
                     $('#employee_id').val(data.id);  
                     $('#insert').val("Enregistrer");  
                     $('#add_data_Modal').modal('show');  
                }  
           });  
      });  
      $('#insert_form').on("submit", function(event){  
           event.preventDefault();  
    
                $.ajax({  
                     url:"../Gestion/Menu_DGA/mise_jour_demande/insert.php",  
                     method:"POST",  
                     data:$('#insert_form').serialize(),  
                     beforeSend:function(){  
                          $('#insert').val("Validation");  
                     },  
                     success:function(data){  
                          $('#insert_form')[0].reset();  
                          $('#add_data_Modal').modal('hide');  
                          $('#employee_table').html(data);  
                     }  
                });  
       
      });  
      $(document).on('click', '.view_data', function(){  
           var employee_id = $(this).attr("id");  
           if(employee_id != '')  
           {  
                $.ajax({  
                     url:"../Gestion/Menu_DGA/mise_jour_demande/select.php",  
                     method:"POST",  
                     data:{employee_id:employee_id},  
                     success:function(data){  
                          $('#employee_detail').html(data);  
                          $('#dataModal').modal('show');  
                     }  
                });  
           }            
      });  
 });  
 </script>