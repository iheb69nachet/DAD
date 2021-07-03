<?php  
 $connect = mysqli_connect("localhost", "root", "", "projetphase1");  
 $query = "SELECT * FROM demande";  
 $result = mysqli_query($connect, $query);  
 ?>  
 	
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Validation Demande</title>  
      
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
                    <h1><strong>Validation </strong> Demande </h1>
                    
                   
                  </div>
                  <!-- tile body -->
                  <div class="tile-body color transparent-black rounded-corners">
                    
                    <div class="table-responsive">
		
                      <table  class="table table-datatable table-custom" id="advancedDataTable">
                        <thead>
                          <tr>
                            <th width="15%">Numero demande</th>  
                            <th width="15%">Matricule</th>  
                                    <th width="15%">Valider</th>  
                                  <!--  <th width="15%">View</th>  -->
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
                                    <td><input type="button" name="edit" value="Valider" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs edit_data" /></td>  
                                    <!-- <td><input type="button" name="view" value="view" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs view_data" /></td>  -->
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
                     <h4 class="modal-title">Mise à jour Demande selectionner</h4>  
                </div>  
                <div class="modal-body">  
                     <form method="post" id="insert_form">  
                        <label>Enter Objet_depense</label>  
                          <input type="text" name="Objet_depense" id="Objet_depense" disabled class="form-control" />  
                          <br />  
                          <label>Enter Employee Depense_budgetisee</label>  
                          <textarea name="Depense_budgetisee" id="Depense_budgetisee" disabled class="form-control"></textarea>  
                          <br />  
                         <!-- <label>Select Reference_demande</label>  
                           <input type="text" name="Reference_demande" id="Reference_demande" disabled class="form-control" /> 
                          <br />  
                          <label>Enter Etat</label>  
                          <input type="text" name="Etat" id="Etat" class="form-control" />  
                          <br />  
                          <label>Enter id_user</label>  
                          <input type="text" name="id_user" id="id_user" disabled class="form-control" />  
                          <br />  
                          <input type="hidden" name="employee_id" id="employee_id" />  
                          <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" /> 
                          <input type="submit" name="rejeter" id="rejeter" value="Rejeter" class="btn btn-danger"/> -->
						   <input type="radio" name="gender" id="gender" value="Insert" class="btn btn-success" /> Insert
                          <input type="radio" name="gender" id="gender" value="Rejeter" class="btn btn-danger"/>  Rejeter
						  <h3 id="resultat"></h3>
						  
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
                url:"../Gestion-Clients/Menu_chef_hierarchie/mise_jour_demande/fetch.php",  
                method:"POST",  
                data:{employee_id:employee_id},  
                dataType:"json",  
                success:function(data){  
                     $('#Objet_depense').val(data.Objet_depense);  
                     $('#Depense_budgetisee').val(data.Depense_budgetisee);  
                     $('#employee_id').val(data.id);  
                     $('#insert').val("Valider");  
                     $('#add_data_Modal').modal('show');  
                }  
           });  
      });  
      $('#insert_form').on("submit", function(event){  
           event.preventDefault();  
      
                $.ajax({  
                     url:"../Gestion-Clients/Menu_chef_hierarchie/mise_jour_demande/insert.php",  
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
                     url:"../Gestion-Clients/Menu_chef_hierarchie/mise_jour_demande/select.php",  
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