<?php  
session_start();

 $connect = mysqli_connect("localhost", "root", "", "projetphase1");  

 $query = "SELECT * FROM demande WHERE etat_verife_cg='Valider' AND avis_DGA='Valider' ORDER BY id DESC";  
 $result = mysqli_query($connect, $query);
 

 
 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Validation Demande
</title>  
      
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  	
      
      </head>  
      <body>  
           <br /><br />  
           <div class="col-md-2" style="">  </div>
		   <div class="col-md-8" style="">  
                <h3 align="center"></h3>  
                <br />  

                     </div>  
                     <br />  
                  
				
				
				
<section class="tile transparent">
				<div class="tile-header transparent">
                    <h1><strong>Validation  </strong> Demande </h1>
                    
                   
                  </div>
                  <!-- tile body -->
                  <div class="tile-body color transparent-black rounded-corners">
                    
                    <div class="table-responsive" style="width:100%; height:250px; overflow:auto;">
                      <table  class="table table-datatable table-custom" id="advancedDataTable">
                        <thead>
                          <tr>
                            <th width="15%">N° Demande</th>  
                            <th width="15%">Matricule</th>  
							<th width="15%">Objet de la dépense</th> 
							<th width="15%">Date </th> 
                            <th width="15%">Type_Depense</th> 
							
                            <th width="15%">Piéce Joint</th>
							<th width="15%">Piéce_Justif_Budgétaire</th>							
							<th width="15%">Valider</th> 
                          </tr>
						  
                        </thead>
                        <tbody>
                    <?php  
                               while($row = mysqli_fetch_array($result))  
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
                                   
									<td><input type="button" name="edit" value="Actions" id="<?php echo $row["id"]; ?>" class="btn btn-danger btn-md edit_data" /></td> 								 


                                  
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

<!--/*************************/-->
<section class="tile transparent">
				<div class="tile-header transparent">
                    <h1><strong>Listes  </strong> Demande </h1>
                    
                   
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
                               while($row = mysqli_fetch_array($result))  
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
				
	<!--/*************************/-->			
							
				
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
		function showHideEle(selectSrc, targetEleId, triggerValue) {	
			if(selectSrc.value==triggerValue) {
				document.getElementById(targetEleId).style.display = "inline-block";
			} else {
				document.getElementById(targetEleId).style.display = "none";
			}
		} 
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