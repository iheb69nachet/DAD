<?php 
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projetphase1";
$connect = mysqli_connect($servername,$username,$password,$dbname);

					 
 
$_SESSION['loaded_page']= "ouvrier";
// print_r($_SESSION);die();
?>
<!-------------------------------------------------------------------------->
<div class="col-md-8">



                <!-- tile -->
                <section class="tile color transparent-black">



                  <!-- tile header -->
                  <div class="tile-header">
                    <h1><strong>Justificatif </strong> demande </h1>
                    <div class="controls">
                      <a href="#" class="minimize"><i class="fa fa-chevron-down"></i></a>
                      <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                      <a href="#" class="remove"><i class="fa fa-times"></i></a>
                    </div>
                  </div>
                  <!-- /tile header -->

                  <!-- tile body -->
                  <div class="tile-body">
                    
                  
					<section class="tile transparent">
				<div class="tile-header transparent">
                    <h1><strong>Télécharger votre   </strong> docuement </h1>
                    
                   
                  </div>
                  <!-- tile body -->
                  <div class="tile-body color transparent-black rounded-corners">
                    
                    <div class="table-responsive" style="width:100%; height:350px; overflow:auto;">
                     <!-- <table  class="table table-datatable table-custom" id="advancedDataTable">-->
					  <table class="table table-datatable table-custom dataTable" id="basicDataTable" aria-describedby="basicDataTable_info">
                        <thead>
                          <tr>
                            <th width="">N° Demande</th>  
							<th width="">Actions</th>  
							</tr>
						 
                        </thead>
                        <tbody>
								 <?php  
                                $connect = mysqli_connect("localhost", "root", "", "projetphase1");  
								$querya = "SELECT * FROM demande WHERE justif_demande='justif_demande' and id_user=".$_SESSION['ID']." AND site='".$_SESSION['site']."'"; 
								$resulta = mysqli_query($connect, $querya); 
                               while($row = mysqli_fetch_array($resulta))  
                               {  
                               ?>  
                                   <tr>  
                                    <td><?php echo $row["Reference_demande"]; ?></td>  
                                   
                                   
									<td>
								<?php
								if($row["justif_demande"] !== ""){
											
									echo '<input class="btn btn-warning btn-md edit_data"  type="button" name="edit"  value="Actions" id="'.$row["id"].'">';
										  }
										  else{
									// echo '<input class="btn btn-info btn-md view_data" type="button" name="view" value="Details" id="'.$row["id"].'">';
									Echo "Justification a été envoyer !!";
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
                  <!-- /tile body -->
                  
                


                </section>
                <!-- /tile -->




</div>
<div id="add_data_Modal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Fichier à télécharger pour justification</h4>  
                </div>  
                <div class="modal-body">  
                     <form method="post" id="insert_form">  
                         
									
								<div class="form-group">
								<label for="input07" class="col-sm-4 control-label">Fichier à télécharger pour justification</label>
								<div class="col-sm-8" id="" >
											
								</div>
							  </div>
							  <div class="form-group .col-md-3 .col-md-offset-3">
										<input class="control-label fa fa-upload" type='file' name="justif" id='justif' multiple>
										<div class="col-sm-8">
								  <textarea class="form-control" id="input05"  name="commente_upload" placeholder="commentaire...." rows="3"></textarea>
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
                url:"../Gestion/Menu_demandeur/action/fetch.php",  
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
                     url:"../Gestion/Menu_demandeur/action/insert.php",  
                     method:"POST",  
                     data:$('#insert_form').serialize(),  
                     data:new FormData(this),
					processData: false,
					contentType: false,					 
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
                     url:"../Gestion/Menu_demandeur/action/select.php",  
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