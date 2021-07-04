<?php  
session_start();
 $connect = mysqli_connect("localhost", "root", "", "projetphase1");  
 
 //$query = "SELECT * FROM demande WHERE Depense_budgetisee =!'' AND site='".$_SESSION['site']."' ORDER BY id DESC";  
 $query='select * from demande where current_level="'.$_SESSION['acess_level'].'"';
 $result = mysqli_query($connect, $query);
 

  
 
 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Validation Demande
</title>  
         
		   <style>

	</style>
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
                    
                    <div class="table-responsive" style="width:100%; height:350px; overflow:auto;">
                      <table  class="table table-datatable table-custom" id="advancedDataTable">
                        <thead>
                          <tr>
                            <th width="10%">N° Demande</th>  
                            <th width="10%">Matricule</th>  
							
                            <th width="10%">Objet de la dépense</th> 
                            <th width="10%">designation de la depense</th> 
                            <th width="10%">Justification de la depense</th> 
                            <th width="10%">Coût estimer</th> 
							
							<th width="10%">Date </th> 
                            <th width="10%">Etat</th>  
                            <th width="10%">Piéce Joint</th>  
							<th width="10%">Actions</th>  
								  
							
						
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
                                    <td><?php echo $row["designation_depense"]; ?></td> 
                                    <td><?php echo $row["justification_depense"]; ?></td> 
                                    <td><?php echo $row["coutestime"]; ?></td> 
									<td><?php echo $row["da"]; ?></td> 
                                    <td><?php echo "En attente" ?></td>  
                                     
                                    <td><?php if($row["file_upload"]) echo '<a download href="Menu_demandeur/upload/'. $row["file_upload"] .'">Piece_Joint</a>' ?></td>  
									<td>
								<?php
								if($row["Etat"]==""){
											
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
                     <h4 class="modal-title">Validation Demande selectionner</h4>  
                </div>  
                <div class="modal-body">  
                     <form method="post" id="insert_form">  
                         
								
									
								<div class="form-group">
								<label for="input07" class="col-sm-4 control-label">Apporbation Dépense</label>
								<div class="col-sm-8" id="selectbox" >
								  <select name="validation_direction_maintenance" class="chosen-select chosen-transparent form-control"  id="input07" parsley-trigger="change" parsley-required="true" parsley-error-container="#selectbox">
									<option value=""></option>
									<option value="Valider">Valider</option>
									<option value="Rejeter" >Rejeter</option>
								  
								  </select>
								</div>
							  </div>
                          <br /> 
						  <br /> 
						   
                        <div class="modal-footer">  
						 <input type="submit" name="justif_demande" id="justif_demande" value="justif_demande" class="btn btn-primary" /> 
						<input type="hidden" name="employee_id" id="employee_id" />  
                          <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" /> 
                     <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>  
					</div> 
                            
                     </form>  
					 
                </div>  
                
           </div>  
      </div>  
 </div>  
 

 
 <script>  

$(document).ready(function(){  
	 $('#insert_form').on("submit", function(event){  
           event.preventDefault();  
    
                $.ajax({  
                     url:"../Gestion/Menu_chef_hierarchie/mise_jour_demande/insert.php",  
                     method:"POST",  
                     data:$('#insert_form').serialize(),  
                     beforeSend:function(){  
                          $('#justif_demande').val("Insertion justif");  
                     },  
                     success:function(data){  
                          $('#insert_form')[0].reset();  
                          $('#add_data_Modal').modal('hide');  
                          $('#employee_table').html(data);  
                     }  
                });  
       
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
                url:"../Gestion/Menu_chef_hierarchie/mise_jour_demande/fetch.php",  
                method:"POST",  
                data:{employee_id:employee_id},  
                dataType:"json",  
                success:function(data){  
                     
                     $('#Depense_budgetisee').val(data.Depense_budgetisee);  
                     $('#designation_depense').val(data.designation_depense);  
                     $('#justification_depense').val(data.justification_depense);  
                     $('#Objet_depense').val(data.description1_L1);  
					 $('#Objet_depense2').val(data.description2_L1);  
                     $('#Etat').val(data.Etat);  
                     $('#employee_id').val(data.id);  
                     $('#insert').val("Enregistrer");  
                     $('#add_data_Modal').modal('show');  
                }  
           });  
      });  
      $('#insert_form').on("submit", function(event){  
           event.preventDefault();  
    
                $.ajax({  
                     url:"../Gestion/Menu_chef_hierarchie/mise_jour_demande/insert.php",  
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
                     url:"../Gestion/Menu_chef_hierarchie/mise_jour_demande/select.php",  
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
