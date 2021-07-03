<?php  
session_start();

$connect = mysqli_connect("localhost", "root", "", "projetphase1");  
 
 $query = "SELECT * FROM demande WHERE Type_Depense LIKE 'T%' AND etat_verife_cg ='' AND site='".$_SESSION['site']."' ORDER BY id DESC";  
 $result = mysqli_query($connect, $query);

  $query2 = "SELECT * FROM demande WHERE centre_cout !='' AND site='".$_SESSION['site']."' ORDER BY id DESC"; 
 $result2 = mysqli_query($connect, $query2);  




?>
							
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Validation Type Dépense</title>  
		   		
     <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.min.js"></script>




      
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
                    <h1><strong>
				 Validation des données </strong>  Budgétaire </h1>
                    
                   
                  </div>
                  <!-- tile body -->
                  <div class="tile-body color transparent-black rounded-corners">
                    
                    <div class="table-responsive" style="width:100%; height:300px; overflow:auto;">
                      <table  class="table table-datatable table-custom" id="advancedDataTable">
                        <thead>
                          <tr>
                            <th width="15%">N° Demande</th>  
                            <th width="15%">Matricule</th>  
                            <th width="15%">Nom</th>  			
                            <th width="10%">Coût estimer</th> 
                            <th width="15%">Magasin</th>  
							<th width="15%">Désignation de la dépense </th> 
							<th width="15%">Date</th> 
                            <th width="15%">Type_Depense</th>  
                            <th width="15%">Piéce Joint</th>							
							<th width="15%">Valider</th> 
							<th width="15%">Notif</th>    

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
                                    <td><?php echo $row["Nom"]; ?></td> 
									<td><?php echo $row["coutestime"]; ?></td> 
									<td><?php echo $row["Magcc"]; ?></td> 
									 <td><?php echo $row["designation_depense"]; ?>   
									 <td><?php echo $row["da"]; ?></td>   
                                    <td><?php echo "En attente" ?></td>    
                                    <td><?php if($row["file_upload"]) echo '<a download href="Menu_demandeur/upload/'. $row["file_upload"] .'">Piece_Joint</a>' ?></td>  
									<td>
								<?php
								if($row["centre_cout"]==""){
											
									echo '<input class="btn btn-danger btn-md edit_data"  type="button" name="edit"  value="Actions" id="'.$row["id"].'">';
										  }
										  else{
									echo '<input class="btn btn-info btn-md view_data" type="button" name="view" value="Details" id="'.$row["id"].'">';
										  }
										?>	 
								 </td> 
								 <td>
								 <?php
								if($row["notif"]==null){
											
									echo '0';
										  }
										  else{
									echo  $row["notif"];
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
<section class="tile transparent">
				<div class="tile-header transparent">
                    <h1><strong>Listes  </strong> Demande </h1>
                    
                   
                  </div>
                  <!-- tile body -->
                  <div class="tile-body color transparent-black rounded-corners">
                    
                    <div class="table-responsive" style="width:100%; height:300px; overflow:auto;">
                      <table  class="table table-datatable table-custom" id="advancedDataTable">
                        <thead>
                          <tr>
                            <th width="20%">N° Demande</th>  
                            <th width="20%">Matricule</th>  
							<th width="20%">Désignation de la dépense</th> 
							<th width="20%">Date</th> 
                            <th width="20%">Type_Depense</th> 
                            <th width="10%">Piéce Joint</th>
							<th width="10%">Piéce_Justif_Budgétaire</th>							
							<th width="20%">Valider</th>  
								  
							
						
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
                                      <td><?php echo $row["designation_depense"]; ?> 
									<td><?php echo $row["da"]; ?></td>   										  
                                    <td><?php echo $row["Type_Depense"]; ?></td>   									
                                    <td><?php if($row["file_upload"]) echo '<a download href="Menu_demandeur/upload/'. $row["file_upload"] .'">Piece_Joint</a>' ?></td>  
                                    <td><?php if($row["file_justif"]) echo '<a download href="Menu_controle_gestion/mise_jour_demande/justif/'. $row["file_justif"] .'">justif_Budgétaire</a>' ?></td>  
                                   
									<td>
										<?php
										  if($row["centre_cout"]==""){
											
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
      <div class="modal-dialog" style="width:38%">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title"> Validation des données Budgétaire</h4>  
                </div>  
                <div class="modal-body">  
                   <form method="post" id="insert_form">
             
					 
						<div class="row">
							 <div class="col-md-4" style="background-color:#9999996b;">
								   <label> Objet de la dépense</label> 
								 <!-- <input type="text" name="Objet_depense" id="Objet_depense" disabled class="form-control" /> -->
									<textarea name="description1_L1" id="description1_L1" disabled class="form-control"></textarea>				  
									<textarea name="description1_L1" id="description2_L1" disabled class="form-control"></textarea>

									<textarea name="description1_L1" id="description1_L2" disabled class="form-control"></textarea>				  
									<textarea name="description1_L1" id="description2_L2" disabled class="form-control"></textarea>
								  <br />  
								  <label>  Depense budgétisée</label>  
								  <textarea name="Depense_budgetisee" id="Depense_budgetisee" disabled class="form-control"></textarea>  
								  <br />  
								 
								  <label> Type_Depense</label>  
								  <textarea name="Type_Depense" id="Type_Depense" disabled class="form-control"></textarea>  
								  <br /> 
							</div>	
							<div class="col-md-8">		
						
						
						
<!---------------------------------             Centre de Cout           ---------------------------------->				
							
							<div class="row">
								<label> Axes d'analyse 1</label> 
								<br/>							  
								<input id="axes1" name="axes1" style="float:left; width:100%;" class="form-control"/>	
							</div>	
							<div class="row">
								<label> Axes d'analyse 2</label> 
								<br/>
								<input id="axes2" name="axes2" style="float:left; width:100%;" class="form-control"/>
							</div>
							
							
							
							<div class="row">
								  <label> centre_cout</label> 
								<br/>								  
							 <select id="slct" name="country"  type="" style="width:250px !important;"  class="country chosen-select chosen-transparent form-control" required>
								
									
										<option value="0">Selectionner Centre de Cout</option>
										<?php
										
											$con = mysqli_connect("localhost", "root", "", "projetphase1");
											$sql = mysqli_query($con,"SELECT * FROM centre_cout WHERE site='".$_SESSION['site']."'");
											while($row=mysqli_fetch_array($sql))
											{
											echo '<option value="'.$row['Centre_Cout_id'].'" data-description="'.$row['description_cc'].'">'.$row['Centre_Cout_name'].'</option>';
											} ?>
									</select>
									<div id="descrtcc">Description ... </div>

									
								  </div>
	<!---------------------------------             Centre de Cout           ---------------------------------->							  
								  <br/>
								  
								  	<div class="row">
									  <label> Objet</label> 
									<br/>								  
																  
								  <select id="slct2" name="city"  required="required" style="float:left; width:100%;" class="city chosen-select chosen-transparent form-control" >
								  
								  </select>
										<div id="descobj">Description ...</div>
								  </div>
								  
								
								  
<!---------------------------------             objet            ---------------------------------->								  
								 
								  <br />
									<div class="row">
								  <br />  
								  <label> ss_compte</label>  
							<!--	<textarea name="ss_compte" id="ss_compte"  class="form-control"></textarea> -->
								  <br />  
							   <select id="ss_compte"  name="ss_compte" style="float:left; width:100%;" class=" chosen-select chosen-transparent form-control" >
										
										
										
									
								  </select>
								  
								   </div>
								  <br />
								  <div class="row">
										<label> Budget Alloué </label> 
										<br/>							  
										<input id="Budget_allouer" name="Budget_allouer" style="float:left; width:100%; background-color:#ffb70096;" class="form-control"/>	
								</div>	
								<div class="row">
									<label> Budget Resté</label> 
									<br/>
									<input id="Budget_restant" name="Budget_restant" style="float:left; width:100%; background-color:#ffb70096;" class="form-control"/>
								</div>
								  <br />
								 
								  <div class="row">
								  
								  <label> Date</label>  
								  <?php
									$query = "select * from demande order by id DESC";
									$result = mysqli_query($connect, $query);
									$row =mysqli_fetch_array($result);
									$dt = date("Y-m-d h:i:sa");
									// $dty = date("Y");
									// $dtm = date("m");
									// $dtd = date("d");
									// $dt2 = juliantojd ( $dtd , $dtm , $dty  );
									
									// print_r($dt2);
									print_r($dt);
									?>
								<input type="hidden" class="form-control"  name="Date_controle" value="<?=$dt ?>"/>		
  
								  <br />  
								
									<input class="control-label fa fa-upload" type='file' name="justif" id='justif' multiple>
								  <br />   
							      </div>
							   <div class="form-group">
								<label for="input07" class="col-sm-4 control-label">Approbation </label>
								<div class="col-sm-8" id="selectbox" >
								  <select name="etat_verife_cg" required class="chosen-select chosen-transparent form-control"  id="input07" parsley-trigger="change" parsley-required="true" parsley-error-container="#selectbox" onchange="showHideEle(this, 'TitleRejeter', 'Rejeter')">
									<option value=""></option>
									<option value="Valider">Valider</option>
									<option value="Rejeter" >Rejeter</option>
								  
								  </select>
								  
									<textarea name="commentaire_cg" id="TitleRejeter"  class="form-control" placeholder="Commentaire..." style=""></textarea> 
								</div>
							  </div>
							   
							   
								  <input type="hidden" name="employee_id" id="employee_id"/> 
					<input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" /> 
	
								  
								</div>
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
                url:"../Gestion/Menu_controle_gestion/mise_jour_demande/fetch.php",  
                method:"POST",  
                data:{employee_id:employee_id},  
                dataType:"json",  
                success:function(data){  
                     
                     $('#Depense_budgetisee').val(data.Depense_budgetisee);  
                     $('#description1_L1').val(data.description1_L1);  
                     $('#description2_L1').val(data.description2_L1);  
					 $('#description1_L2').val(data.description1_L2);  
                     $('#description2_L2').val(data.description2_L2); 
                     $('#Type_Depense').val(data.Type_Depense);  
                     $('#centre_cout').val(data.centre_cout);  
                     $('#objet').val(data.objet);  
                     $('#ss_compte').val(data.ss_compte);  
                     $('#Date_controle').val(data.Date_controle);  
                     $('#Budget_allouer').val(data.Budget_allouer);  
                     $('#Budget_allouer').val(data.etat_verife_cg);  
                     $('#Budget_allouer').val(data.Budget_allouer);  
                     $('#axes1').val(data.axes1);  
                     $('#axes2').val(data.axes2);  
                     $('#employee_id').val(data.id);  
                     $('#insert').val("Valider");  
                     $('#add_data_Modal').modal('show');  
                }  
           });  
      });  
      $('#insert_form').on("submit", function(event){  
           event.preventDefault();  
    
                $.ajax({  
                     url:"../Gestion/Menu_controle_gestion/mise_jour_demande/insert.php",  
                     method:"POST",  
                     data:$('#insert_form').serialize(),  
                     data:new FormData(this),
					processData: false,
					contentType: false,					 
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
                     url:"../Gestion/Menu_controle_gestion/mise_jour_demande/select.php",  
                     method:"POST",  
                     data:{employee_id:employee_id},  
                     success:function(data){  
                          $('#employee_detail').html(data);  
                          $('#dataModal').modal('show');  
                     }  
                });  
           }            
      });   


//verife budget

	  $(document).on('click', '#fetch_budget', function(){  
			var slct = $('#slct').val();
			var slct2 = $('#slct2').val();
			var ss_compte = $('#ss_compte').val();
		   $.ajax({  
                     url:"../Gestion/Menu_controle_gestion/mise_jour_demande/budget.php",  
                     method:"POST",  
                     data:{country:slct, city:slct2, ss_compte:ss_compte},  
                     success:function(data){  
					 
					 
					 $('#Budget_allouer').html($(this).data);
					  // $('#bdg').modal('show');  
                        // if($('#Budget_allouer').val() <= data){
							// alert("OK !!"+ data)
						// }else{
							// alert("Budget insiffusant" + data);
						// }
                     }  
                });  
                      
      });  
 });  
 </script>

 <script type="text/javascript">
		$(document).ready(function()
		{
		$(".country").change(function()
		{
			var Centre_Cout_id =$(this).val();
			var post_id = 'id='+ Centre_Cout_id ;

			$('#descrtcc').html($(this).find(':selected').data('description'));
			// alert($(this).find(':selected').data('description'));
			 
			$.ajax
			({
			type: "POST",
			url: "../Gestion/Menu_controle_gestion/mise_jour_demande/ajax.php",
			data: post_id,
			cache: false,
			success: function(cities)
			{
			$(".city").html(cities);

			} 
			});
			 
			});

			$('#slct2').change(function()
			{
				var slct2_id = $('#slct2').val();
				$('#descobj').html($(this).find(':selected').data('description'));
				$('#descobj').html($(this).data('description'));
				$('#ss_compte').html('<option value="">Selectionner sous Compte</option>');  
				$.post( "../Gestion/Menu_controle_gestion/mise_jour_demande/ajax.php", { slct2_id: slct2_id})
				  .done(function( data ) {
					console.log(data);
					$('#ss_compte').html(data);
				  });
		
			});



		});
</script>

  <script type="text/javascript">
  $(document).ready(function()
		{
   $('#slct').chosen();
   
		});
  
 </script>  
 
  <script type="text/javascript">
  
	function change_state()
	{
			alert();
		
	}

  
 </script>  
 
 

