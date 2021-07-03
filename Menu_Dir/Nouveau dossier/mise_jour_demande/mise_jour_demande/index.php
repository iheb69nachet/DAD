<?php  
 $connect = mysqli_connect("localhost", "root", "", "projetphase1");  
 // $query = "SELECT * FROM demande where Etat='Valider' ";  
 $query = "SELECT * FROM demande WHERE Type_Depense LIKE 'T%' AND Etat='Valider' ORDER BY id DESC";  
 $result = mysqli_query($connect, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Approuver Demande</title>  
      
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  	
      
      </head>  
      <body>  
           <br /><br />  
           <div class="col-md-2" style="">  </div>
		   <div class="col-md-8" style="">  
                <h3 align="center"></h3>  
                <br />  
              <!--  <div class="table-responsive">  
                     <div align="right">  
                          <!--<button type="button" name="add" id="add" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-warning">Add</button>  -->
                     </div>  
                     <br />  
                  
				
				
				
				<section class="tile transparent">
				<div class="tile-header transparent">
                    <h1><strong>Approuver </strong> Demande </h1>
                    
                   
                  </div>
                  <!-- tile body -->
                  <div class="tile-body color transparent-black rounded-corners">
                    
                    <div class="table-responsive">
                      <table  class="table table-datatable table-custom" id="advancedDataTable">
                        <thead>
                          <tr>
                            <th width="30%">N° Demande</th>  
                            <th width="30%">Matricule</th>  
                                    <th width="20%">Actions</th>  
                                 <!--   <th width="15%">View</th>  -->
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
                                    <td><input type="button" name="edit" value="Actions" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs edit_data" /></td>  
                                    <!--<td><input type="button" name="view" value="view" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs view_data" /></td>  -->
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
                     <h4 class="modal-title">Approuver Demande selectionner</h4>  
                </div>  
                <div class="modal-body">  
                     <form method="post" id="insert_form">  
                          <div class="row">
						  
							<div class="col-md-6">						  
									  <label> Objet_depense</label>  
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
									  <textarea name="centre_cout" id="centre_cout" disabled class="form-control"></textarea> 
									  <br />  
									  <br />  
									  <label> Date_controle</label>  
									  <textarea name="Date_controle" id="Date_controle" disabled  class="form-control"></textarea> 
									  <br />  
									  <br />  
									  <label> Budget_allouer</label>  
									  <textarea name="Budget_allouer" id="Budget_allouer" disabled class="form-control"></textarea> 
									  <br />  
									  <br />  
								</div>	
						</div>								
									  <!--<input type="text" name="Etat" id="Etat" class="form-control" />  
											
											<input type="radio" name="Etat" id="optionsRadios3" value="Valider" >
												<label for="optionsRadios3">Valider</label>
												
												<input type="radio" name="Etat" id="optionsRadios4" value="Refuser">
												<label for="optionsRadios4">Refuser</label>-->
									<div class="row">			
											<div class="form-group">
											<label for="input07" class="col-sm-4 control-label">Etat Dépense</label>
											<div class="col-sm-8" id="selectbox" >
											  <select name="Etat" class="chosen-select chosen-transparent form-control"  name="avis_DGA" id="input07" parsley-trigger="change" parsley-required="true" parsley-error-container="#selectbox">
												<option value=""></option>
												<option value="Valider">Valider</option>
												<option value="Rejeter" >Rejeter</option>
											  
											  </select>
											</div>
										  </div>
									  <br />  
								   
									  <input type="hidden" name="employee_id" id="employee_id" />  
									  <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />  
							</div>
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
      $('#add').click(function(){  
           $('#insert').val("Insert");  
           $('#insert_form')[0].reset();  
      });  
      $(document).on('click', '.edit_data', function(){  
           var employee_id = $(this).attr("id");  
           $.ajax({  
                url:"../Gestion/Menu_PDG/mise_jour_demande/fetch.php",  
                method:"POST",  
                data:{employee_id:employee_id},  
                dataType:"json",  
                success:function(data){  
                     
                     $('#Depense_budgetisee').val(data.Depense_budgetisee);  
                     $('#Objet_depense').val(data.Objet_depense);  
                     $('#Type_Depense').val(data.Type_Depense);  
                     $('#centre_cout').val(data.centre_cout);  
                     $('#objet').val(data.objet);  
                     $('#ss_compte').val(data.ss_compte);  
                     $('#Date_controle').val(data.Date_controle);  
                     $('#Budget_allouer').val(data.Budget_allouer);  
                     $('#avis_DGA').val(data.avis_DGA);  
                     $('#employee_id').val(data.id);  
                     $('#insert').val("Enregistrer");  
                     $('#add_data_Modal').modal('show');  
                }  
           });  
      });  
      $('#insert_form').on("submit", function(event){  
           event.preventDefault();  
    
                $.ajax({  
                     url:"../Gestion/Menu_PDG/mise_jour_demande/insert.php",  
                     method:"POST",  
                     data:$('#insert_form').serialize(),  
                     beforeSend:function(){  
                          $('#insert').val("Inserting");  
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
                     url:"../Gestion/Menu_PDG/mise_jour_demande/select.php",  
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