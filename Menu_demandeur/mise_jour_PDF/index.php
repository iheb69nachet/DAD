<?php
session_start();

$connect = mysqli_connect("localhost", "root", "", "projetphase1");

 $query = "SELECT * FROM demande WHERE avis_DGA='Valider' AND site='".$_SESSION['site']."' ORDER BY id DESC";  
$result = mysqli_query($connect, $query);



?>
<!DOCTYPE html>
<html>

<head>
     <title>Extrait Flux Demande DAD
     </title>

     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>

<body>




     <section class="tile transparent ">
          <div class="tile-header transparent">
               <h1><strong>Extrait Flux Demande DAD </strong> </h1>


          </div>
          <!-- tile body -->
          <div class="tile-body color transparent-black rounded-corners">

               <div class="table-responsive" style="width:100%; height:250px; overflow:auto;">
                    <table class="table table-datatable table-custom" id="advancedDataTable">
                         <thead>
                              <tr>
                                   <th width="10%">N° Demande</th>
                                   <th width="10%">Matricule</th>
                                   <th width="15%">Objet de la dépense</th>
                                   <th width="10%">Date </th>
                                   <th width="15%">Type_Depense</th>

                                   <th width="15%">Piéce Joint</th>
                                   <th width="10%">Télécharger PDF</th>
                              </tr>

                         </thead>
                         <tbody>
                              <?php
                              while ($row = mysqli_fetch_array($result)) {
                              ?>
                                   <tr>
                                        <td><?php echo $row["Reference_demande"]; ?></td>
                                        <td><?php echo $row["Matricule"]; ?></td>
                                        <td><?php echo $row["description1_L1"]; ?></td>
                                        <td><?php echo $row["da"]; ?></td>
                                        <td><?php echo $row["Type_Depense"]; ?></td>
                                        <td><?php if ($row["file_upload"]) echo '<a download href="Menu_demandeur/upload/' . $row["file_upload"] . '">Piece_Joint</a>' ?></td>
                                        
                                        <!-- <td><input type="button" name="edit" value="Actions" id="<?php echo $row["id"]; ?>" class="btn btn-warning btn-md edit_data" /></td> -->
                     <td>
                              <a class='btn btn-warning btn-md' href="Menu_demandeur/mise_jour_PDF/pdf/index_pdf.php?id=<?php echo $row["id"]; ?>">PDF</a>
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


<!-----          Model PDF Ouvrir                ----->

<div id="dataModal" class="modal fade">
     <div class="modal-dialog">
          <div class="modal-content">
               <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Extrait PDF</h4>
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
                    <h4 class="modal-title"><strong>Extrait Flux Demande DAD</strong> </h4>
               </div>
               <div class="modal-body">
                    <form method="post" id="insert_form">
                         <div class="row">

                              <div class="col-md-6">
                                   <!-- <label> Objet de la dépense</label>   
									  <input type="text" name="Objet_depense" id="Objet_depense" disabled class="form-control" />  
									  <br /> -->
                                   <img src="../Gestion/assets/images/pdf_icon.png" alt="Smiley face" width="75%" height="75%" style="vertical-align:center; position:center;margin-left: 10pc;" />

                              </div>

                         </div>
                         <input type="hidden" name="employee_id" id="employee_id" />
                         <!-------     Button à modifier        ---------->
                         <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info btn-lg btn-block" />
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
     
	 $(document).ready(function() {
                    $(' #add').click(function() {
                         $('#insert').val("Insert");
                         $('#insert_form')[0].reset();
                    });
                    $('#insert_form').on("submit", function(event) {
                            event.preventDefault();
                            $.ajax({
									url: "../Gestion/Menu_DGA/mise_jour_PDF/pdf/index_pdf.php",
                                    method: "POST",
                                    data: $('#insert_form').serialize(),
                                    beforeSend: function() {
												$('#insert').val("Validation"); 
												("../Gestion/Menu_DGA/mise_jour_PDF/pdf/index_pdf.php");}, 
									success: function(data) { 
												$('#insert_form')[0].reset(); 
												$('#add_data_Modal').modal('hide');
												$('#employee_table').html(data); 
															} 
									}); 
					}); 
	}); 
															
</script>