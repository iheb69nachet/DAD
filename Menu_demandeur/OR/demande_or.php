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

 <style>
	
				
				@media only screen and (max-width: 600px) {
				    /* For tablets: */
						  .ScrollStyle
					{
					   height: 450px; 
						overflow-y : auto;
					}
				}
			th     { background:#5bc0de; }
		.tableFixHead th { position: sticky; top: 0; z-index: 1; }
 
	 label {color:white;}
	 </style>
	

      
<div class="col-md-12">
	<section class="tile color transparent-black">

		<div class="tile-header">
							<h1 style="margin-left: auto; margin-right: auto; background-color:red;" <strong>Demande d'Autorisation de Dépense </strong>  <span style="width:10%;">OR</span></h1>
							<div class="controls">
							  <a href="#" class="minimize"><i class="fa fa-chevron-down"></i></a>
							  <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
							  <a href="#" class="remove"><i class="fa fa-times"></i></a>
							</div>
						  </div>
						  <div class="search">
						<label for="input01" class="col-sm-4 control-label">Date</label>
						<?php
						
												
						$dd = date("z")+1;
						$date_y = date("Y");
						$datee =  '1'.substr(strval($date_y), 2). $dd;
						echo ($datee);
						
						/*$empid == "000";
						$empid = substr($lastid, 3);
						$empid = intval($empid);
						$val = $empid + 1;
						$empid = '21' . sprintf("%'.06d", $val);*/
						
						// $inputdate = '021033';
						?>
						
						
							<input type="text" class="form-control fa fa-calendar" value="<?php echo date('d / m / Y'); ?>"/>
							<input  type="hidden" hidden class="form-control fa fa-calendar" name="gregdate" value="<?=$inputdate ?>"/>
						  </div>
										  
	<div class="tile-body" style="height:auto;">

<form class="ScrollStyle  form-horizontal " role="form" action="Menu_demandeur/OR/V_connection.php" method="POST" enctype="multipart/form-data">
			
			<!--<form class="ScrollStyle  form-horizontal " role="form" action="Menu_demandeur/V_insertJDE.php" method="POST" enctype="multipart/form-data">-->

					<!-- row -->
					 <div class="row">
						<?php
									$query = "select * from demande_or order by id DESC";
									$result = mysqli_query($connect, $query);
									$row =mysqli_fetch_array($result);
									$lastid = $row['Reference_demande'];
									if($lastid == " "){
										$empid == "21900001";
									}
									else{
										$empid = substr($lastid, 3);
										$empid = intval($empid);
										$val = $empid + 1;
										$empid = '219' . sprintf("%'.05d", $val);
										$_SESSION['empid']= $empid;
										// echo $empid;die();
										//$empid = "20 0000" . ($empid+1);
									}
						?>
							<div class="form-group">
								  								  
								<label for="input05" class="col-sm-2 control-label">Reference demande</label>
								<div class="col-sm-4">
								  
								  <input type="hidden" class="form-control"  name="Reference_demande"  value="<?=$empid ?>"/><h4> <?=$empid ?> &ensp;&ensp;&ensp;&ensp;&ensp;<strong>DD</strong></h4>
								  
								   <?php
								  // print_r($_SESSION);
									$query2 = "select * from compte_user where id=".$_SESSION['ID']." order by id DESC";
									$result2 = mysqli_query($connect, $query2);
									$row =mysqli_fetch_array($result2);
									// print_r($row);
									
									?>
							<input type="hidden" class="form-control"  name="Matricule" value="<?= $row['Matricule']?>"/> 
							<input type="hidden" class="form-control"  name="ref_site" value="<?= $row['ref_site']?>"/>
							<input type="hidden" class="form-control"  name="site" value="<?= $row['site']?>"/>
							<input type="hidden" class="form-control"  name="Direction" value="<?= $row['direction']?>"/>
							<input type="hidden" class="form-control"  name="departement" value="<?= $row['department']?>"/>
								  <input type="hidden" class="form-control"  name="service" value="<?= $row['service']?>"/>
								</div>
							  </div>
							  
			  <div class="col-md-6">  
							
							 
								<!--<input type="hidden" name="Reference_demande" value="?=$empid ?>"/>-->
						
						
							
							
					  <div class="select-boxes">
				
							
								  <div class="form-group">
									<label for="exampleInputPassword2" class="col-sm-4 control-label">Delai reception</label>
									<div class="col-sm-8">
									<input type="text" class="form-control" placeholder=".....Jours" id="input01" name="reception">
								  </div>
								  </div>
														
								<div class="form-group">
								<label class="col-sm-4 control-label">Justificatif de la dépense</label>
								<div class="col-sm-8">
								  <div class="radio radio-transparent">
									<input type="radio" name="Depense_budgetisee" id="optionsRadios1" value="Depense_budgetisee" required>
									<label for="optionsRadios1">Dépense budgétisée</label>
								  </div>
								  <div class="radio radio-transparent">
									<input type="radio" name="Depense_budgetisee" id="optionsRadios2" value="Depense_non_budgetisee">
									<label for="optionsRadios2">Dépense non budgétisée*</label>
								  </div>
								  
								</div>
							  </div>
							  
							  <div class="form-group">
									<label for="input05" class="col-sm-4 control-label">Coût Estimer</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" placeholder="...." id="coutestime" name="coutestime">
									 </div>
							   </div>
							   
							<div class="form-group">
									<label for="input05" class="col-sm-4 control-label">Mag</label>
									<div class="col-sm-8">
								
										<input type="text" class="form-control" placeholder="...." id="Magcc" name="Magcc" required>
									 </div>
							   </div>
							   
							   
							   <div class="form-group">
                        <label for="input01" class="col-sm-4 control-label">Centre de Coût</label>
                        <div class="col-sm-8">
						
						
						 <select id="slct" name="centrecc"  type="" style="width:250px !important;"  class="form-control form-control-role action" required>
								
									
										<option value="0">Selectionner Centre de Cout</option>
										<?php
										
											$con = mysqli_connect("localhost", "root", "", "projetphase1");
											$sql = mysqli_query($con,"SELECT * FROM centre_cout WHERE site='".$_SESSION['site']."'");
											while($row=mysqli_fetch_array($sql))
											{
											echo '<option value="'.$row['Centre_Cout_id'].'" data-description="'.$row['description_cc'].'">'.$row['Centre_Cout_name'].'</option>';
											} ?>
									</select>
						  
   
                        </div>
                      </div>
							   	
							   
							 
							<!--   <div class="form-group">
									<label for="input05" class="col-sm-4 control-label">Axes d'Analyse 1</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" placeholder="...." id="axes1" name="axes1">
									 </div>
							   </div>
								 
								<div class="form-group">
									<label for="input05" class="col-sm-4 control-label">Axes d'Analyse 2</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" placeholder="..." id="axes2" name="axes2">
									 </div>
							   </div>-->
				
							
					</div>
			</div>
		 
			 <div class="col-md-6">  
								
								<div class="form-group">
								<label for="input05" class="col-sm-4 control-label">Proposition fournisseurs / prestataires de services</label>
								<div class="col-sm-8">
								  <textarea class="form-control" id="input05"  name="Proposition_fournisseurs" rows="3"></textarea>
								</div>
							  </div>
							  
							  <div class="form-group">
								<label for="input05" class="col-sm-4 control-label">Désignation de la dépense</label>
								<div class="col-sm-8">
								  <textarea class="form-control" id="input05"  name="designation_depense" rows="2"></textarea>
								</div>
							  </div>
							  
							  
							  <div class="form-group">
								<label for="input05" class="col-sm-4 control-label">Justification de la dépense</label>
								<div class="col-sm-8">
								  <textarea class="form-control" id="input05"  name="justification_depense" rows="2"></textarea>
								</div>
							  </div>
							  
							   <div class="form-group">
									<label for="input05" class="col-sm-4 control-label"></label>
									<div class="col-sm-8">
										<input class="control-label fa fa-upload" style="font-size:15px;color:white" type='file' name="file" id='file' multiple>
									</div>
							  </div>
								
			</div>			
			</div>
		
		<div class="row">
			<div class="col-md-12">
								   

				
<!--/************************************* // ligne AI //*************************************/-->							
<div class='tableFixHead'>				
 <div class="table-responsive" style="overflow:auto; height: 250px;">
 <div align="right">
     <button type="button" name="add2" id="add2" style="margin:10px;padding:10px;" class="btn btn-danger btn-md">Ajouter une Ligne</button>
    </div>
    <table class="table table-bordered" id="crud_table" >
     <tr>
      <th style="pointer-events:none;" width= "7%">N° ligne</th>
      <th style="pointer-events:none;" width="10%">Reference_demande</th>
      <th width="10%">Code Article</th>
      <th width="5%">Quantité</th>
	  <th width="5%">PU</th>
      <th width="13%">Description 1</th>
      <th width="13%">Description 2</th>
      <th width="12%">Axes Analyse 1</th>
      <th width="12%">Axes Analyse 2</th>
      <th width="5%"></th>
     </tr>
     <tr>

      <td style="pointer-events:none;" contenteditable="false" class="item_ligne">1000</td>
     <td style="pointer-events:none;" disabled="disabled" contenteditable="false" class="item_Reference_demande"><?=$empid ?></td>
      <td style="background-color:#00ffe285; color: black;"contenteditable="true" class="item_article"></td>
      <td contenteditable="true" class="item_qte"></td>
	  <td contenteditable="true" class="item_prix"></td>
      <td contenteditable="true" class="item_desc1"></td>
      <td contenteditable="true" class="item_desc2"></td>
      <td  contenteditable="true" class="item_axe1"></td>
      <td contenteditable="true" class="item_axe2"></td>
      <td></td>
     </tr>
    </table>
  
 
  </div>
 
    <br />
</div>
				
				
				
<!--/************************************* // ligne AI //*************************************/-->
					
			</div>		

				<div class="">
					<button type="submit" class="btn btn-success btn-lg confirm" style="float: right; margin-top:85px; margin-right:10px;" id="save"  name="Envoyer"><b>Enregistrer</b></button>
				</div>

			
		</div>			
							
								
	</form>			
								
	
	</div>
</section>  

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


/************************************* // ligne AI //*************************************/
 
  $(document).ready(function(){
 var sessionValue= $("#hdnSession").data('value');

  
  // var lg = 1000;
  // lg = lg + 1000;
  
  var count = 1000;
 $('#add2').click(function(){
  count = count + 1000;
  // belek men hedhy 
  //att 3andi idée 
  var html_code = "<tr id='row"+count+"'>";
   html_code += "<td style='pointer-events:none;' contenteditable='true' class='item_ligne' readonly>"+count+"</td>";
   html_code += "<td style='pointer-events:none;'  contenteditable='true' class='item_Reference_demande' readonly><?=$empid ?></td>";
   html_code += "<td style='background-color:#00ffe285; color: black;' contenteditable='true' class='item_article' ></td>";
   html_code += "<td contenteditable='true' class='item_qte' ></td>";
   html_code += "<td contenteditable='true' class='item_prix'></td>";
   html_code += "<td contenteditable='true' class='item_desc1' ></td>";
   html_code += "<td contenteditable='true' class='item_desc2' ></td>";
   html_code += "<td contenteditable='true' class='item_axe1' ></td>";
   html_code += "<td contenteditable='true' class='item_axe2' ></td>";
   html_code += "<td><button type='button' name='remove' data-row='row"+count+"' class='btn btn-danger btn-md remove'>X</button></td>";   
   html_code += "</tr>";  
   $('#crud_table').append(html_code);
 });
 
 $(document).on('click', '.remove', function(){
  var delete_row = $(this).data("row");
  $('#' + delete_row).remove();
 });
 
 $('#save').click(function(){
  var item_ligne = [];
  var item_Reference_demande = [];
  var item_article = [];
  var item_qte = [];
  var item_prix = [];
  var item_desc1 = [];
  var item_desc2 = [];
  var item_axe1 = [];
  var item_axe2 = [];
  $('.item_ligne').each(function(){
   item_ligne.push($(this).text());
  });
  $('.item_Reference_demande').each(function(){
   item_Reference_demande.push($(this).text());
  });
   $('.item_article').each(function(){
   item_article.push($(this).text());
  });
   $('.item_qte').each(function(){
   item_qte.push($(this).text());
  });
    $('.item_prix').each(function(){
   item_prix.push($(this).text());
  });
   $('.item_desc1').each(function(){
   item_desc1.push($(this).text());
  });
  $('.item_desc2').each(function(){
   item_desc2.push($(this).text());
  });
    $('.item_axe1').each(function(){
   item_axe1.push($(this).text());
  });
  $('.item_axe2').each(function(){
   item_axe2.push($(this).text());
  });
  $.ajax({
   url:"../Gestion/Menu_demandeur/V_connection_or.php",
   method:"POST",
   data:{item_ligne:item_ligne, item_Reference_demande:item_Reference_demande, item_qte:item_qte, item_article:item_article, item_prix:item_prix, item_desc1:item_desc1, item_desc2:item_desc2, item_axe1:item_axe1, item_axe2:item_axe2},
   success:function(data){
    alert(data);
    $("td[contentEditable='true']").text("");
    for(var i=2; i<= count; i++)
    {
     $('tr#'+i+'').remove();
    }
    fetch_item_data();
   }
  });
 });
 /*
 function fetch_item_data()
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   success:function(data)
   {
    $('#inserted_item_data').html(data);
   }
  })
 }*/
 fetch_item_data();
 
});
 

 
/************************************* // ligne AI //*************************************/




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
 

