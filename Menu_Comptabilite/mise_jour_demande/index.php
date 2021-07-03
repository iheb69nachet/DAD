<?php  
session_start();
 $connect = mysqli_connect("localhost", "root", "", "projetphase1");  
 
 $query = "SELECT * FROM demande WHERE Type_Depense ='' AND Etat='Valider' AND site='".$_SESSION['site']."' ORDER BY id DESC";   
 $result = mysqli_query($connect, $query);

  $query2 = "SELECT * FROM demande WHERE Type_Depense !='' AND site='".$_SESSION['site']."' ORDER BY id DESC";
 $result2 = mysqli_query($connect, $query2);  

 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Validation Type Dépense</title>  
      
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
                    <h1><strong>Validation </strong>  Type Dépense </h1>
                    
                   
                  </div>
                  <!-- tile body -->
                  <div class="tile-body color transparent-black rounded-corners">
                    
                    <div class="table-responsive" style="width:100%; height:350px; overflow:auto;">
                      <table  class="table table-datatable table-custom" id="advancedDataTable">
                        <thead>
                          <tr>
                            <th width="15%">N° Demande</th>  
                            <th width="15%">Matricule</th>  
							
                            <th width="15%">Désignation de la dépense</th>  
							
                            <th width="10%">Coût estimer</th> 
							
							<th width="15%">Date </th> 
                            <th width="15%">Etat</th>  
                            <th width="15%">Piéce Joint</th> 
                                    <th width="20%">Valider</th>  
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
									<td><?php echo $row["designation_depense"]; ?></td> 
									<td><?php echo $row["coutestime"]; ?></td> 
									<td><?php echo $row["da"]; ?></td> 
                                    <td><?php echo "En attente" ?></td>  									
									<td><?php if($row["file_upload"]) echo '<a download href="Menu_demandeur/upload/'. $row["file_upload"] .'">Piece_Joint</a>' ?></td>  
									<td>
								<?php
								
								
									 if($row["Type_Depense"]==""){
											// echo '<input type="button" name="edit" value="Actions" id="'.<?php echo $row["id"]; ?.'"/>';
									echo '<input class="btn btn-danger btn-md edit_data" type="button" name="edit"  value="Actions" id="'.$row["id"].'">';
										  }
										  else{
									echo '<input class="btn btn-info btn-md view_data" type="button" name="view" value="Details" id="'.$row["id"].'">';
										  }
										?>	 
								 </td>  
									<!--<td>
										?php
										  if($row["Type_Depense"]==""){
											// echo '<input type="button" name="edit" value="Actions" id="'.?php echo $row["id"]; ?.'"/>';
											
												echo '<input class="btn btn-danger btn-xs edit_data" type="button" name="edit"  value="Choix Type Depense" id="'.$row["id"].'">';
											
											
										  }
										  else{
											
										echo '';
										
										  }
										 
								 </td>--> 
                                  <!--  <td><input type="button" name="edit" value="Choix Type" id="?php echo $row["id"]; ?>" class="btn btn-info btn-xs edit_data" /></td>  
                                    <td><input type="button" name="view" value="view" id="?php echo $row["id"]; ?>" class="btn btn-info btn-xs view_data" /></td>  -->
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
                    
                    <div class="table-responsive" style="width:100%; height:350px; overflow:auto;">
                      <table  class="table table-datatable table-custom" id="advancedDataTable">
                        <thead>
                          <tr>
                            <th width="15%">N° Demande</th>  
                            <th width="15%">Matricule</th> 

                            <th width="15%">Désignation de la dépense</th>  
							
							<th width="15%">Date </th> 							
                            <th width="15%">Etat</th>  
                            <th width="15%">Piéce Joint</th>  
							<th width="15%">Valider</th>  
								  
							
						
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
									<td><?php echo $row["designation_depense"]; ?></td> 
									<td><?php echo $row["da"]; ?></td> 
                                    <td><?php echo $row["Etat"]; ?></td>  
                                    <td><?php if($row["file_upload"]) echo '<a download href="Menu_demandeur/upload/'. $row["file_upload"] .'">Piece_Joint</a>' ?></td>  
                                   
									<td>
										<?php
										  if($row["Type_Depense"]==""){
											// echo '<input type="button" name="edit" value="Actions" id="'.<?php echo $row["id"]; ?.'"/>';
									echo '<input class="btn btn-danger btn-md edit_data" type="button" name="edit"  value="Actions" id="'.$row["id"].'">';
										  }
										  else{
									echo '<input class="btn btn-info btn-md view_data" type="button" name="view" value="Details" id="'.$row["id"].'">';
										  }
										?>	 
								 </td>  								 


								 <!-- <td>
										<input type="button" name="edit" value="Actions" id="?php echo $row["id"]; ?>" class="btn btn-danger btn-xs edit_data" />
										<input type="button" name="view" value="Details" id="?php echo $row["id"]; ?>" class="btn btn-info btn-xs view_data" />
									</td>  -->
                                  
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
                     <h4 class="modal-title">Validation Type Dépense</h4>  
                </div>  
                <div class="modal-body">  
                     <form method="post" id="insert_form">  
                           <label> Objet de la dépense</label> 
                          <input type="text" name="Objet_depense" id="Objet_depense" disabled class="form-control" />  
                          <br />  
                          <label> Dépense Budgétisée</label>  
                          <textarea name="Depense_budgetisee" id="Depense_budgetisee" disabled class="form-control"></textarea>  
                          <br />  
                         
                          <br />  
                          <label></label>  
                          <!--<input type="text" name="Type_Depense" id="Type_Depense" class="form-control" />  
								
								<input type="radio" name="Type_Depense" id="optionsRadios3" value="Valider" >
									<label for="optionsRadios3">Valider</label>
									
									<input type="radio" name="Type_Depense" id="optionsRadios4" value="Refuser">
									<label for="optionsRadios4">Refuser</label>-->
									
								<div class="form-group">
								<label for="input07" class="col-sm-4 control-label">Type_Depense Dépense</label>
								<div class="col-sm-8" id="selectbox" >
											<ul class="nolisttypes inlineSelect rowSelect cyan" name="Type_Depense" >
													  <li class="title"><h5>Type :</h5></li>
													  <li>
														<div class="radio">
														  <input type="radio" name="Type_Depense" disabled value="T_Charge" id="opt01">
														  <label for="opt01">Charge</label>
														</div>
													  </li>
													  <li>
														<div class="radio">
														  <input type="radio" name="Type_Depense" value="T_Investissement" id="opt02">
														  <label for="opt02">Investissement</label>
														</div>
													  </li>
													 <!-- <li>
														<div class="radio">
														  <input type="radio" name="Type_Depense" value="T_Achat" id="opt03">
														  <label for="opt03">Achat</label>
														</div>
													  </li>-->
													
											</ul>
								</div>
							  </div>
                          <br />  
                       
                          <input type="hidden" name="employee_id" id="employee_id" />  
                          <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />  
                     </form>  
                </div>  
                <div class="modal-footer"">  
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
                url:"../Gestion/Menu_Comptabilite/mise_jour_demande/fetch.php",  
                method:"POST",  
                data:{employee_id:employee_id},  
                dataType:"json",  
                success:function(data){  
                     
                     $('#Depense_budgetisee').val(data.Depense_budgetisee);  
                     $('#Objet_depense').val(data.description1_L1);  
                     $('#Type_Depense').val(data.Type_Depense);  
                     $('#employee_id').val(data.id);  
                     $('#insert').val("Valider");  
                     $('#add_data_Modal').modal('show');  
                }  
           });  
      });  
      $('#insert_form').on("submit", function(event){  
           event.preventDefault();  
    
                $.ajax({  
                     url:"../Gestion/Menu_Comptabilite/mise_jour_demande/insert.php",  
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
                     url:"../Gestion/Menu_Comptabilite/mise_jour_demande/select.php",  
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