<?php 
	session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projetphase1";
	$connect = mysqli_connect($servername,$username,$password,$dbname);
	$query=sprintf("SELECT * FROM compte_user");
	$result = mysqli_query($connect, $query);

$_SESSION['loaded_page']= "Listes_super";

?>
    
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"/></script>
    
<script type="text/javascript">
		var list_stand = '<option></option>';
		<?php while($row = mysqli_fetch_array($result)){ ?>
		list_stand += '<option value="<?php echo $row['id'];?>"><?php echo $row['Nom'];?></option>';
		<?php }?>
        $(document).ready(function() {
        $('a.check-toggler').click(function(e) { 
        e.preventDefault();
        var profilID = $(this).attr('rel');
        var etat = $(this).attr('todo');
        $.ajax({
              url : '../Gestion/Menu_Super_admin/liste_comptes/change_etat.php',
              type : 'POST',
              data: {
                'id' : profilID,
                'etat' : etat,
        },
        success: function(data) {
        console.log(data);
        if(etat == 'active'){
        $('#etat'+profilID).toggleClass('checked');
        $('#etat'+profilID).attr("todo","desactive");
        }else{
         $('#etat'+profilID).toggleClass('checked ');
        $('#etat'+profilID).attr("todo","active");
                  }       
                }
            });
          });

        $('a.supprimer').click(function(e) { 
        e.preventDefault();
        var profilID = $(this).attr('rel');
        $.ajax({
        url : '../Gestion/Menu_Super_admin/liste_comptes/supprimer_compte.php',
        type : 'POST',
        data: {
        'id' : profilID,
                },
        success: function(data) {
        console.log(data);
        $('#row'+profilID).remove();     
         alert("to remove");
                }
            });
          });

        


        });
      </script>
<!-- Wrap all page content here -->
    <div id="wrap">
    <?php 
      $connect = mysqli_connect("localhost","root","","projetphase1");
      $query=sprintf("SELECT * FROM compte_user ");
      $result = mysqli_query($connect, $query);
    ?>

      <!-- Make page fluid -->
      <div class="row">

              <div class="col-md-12">
                <!-- tile -->
               
                <!-- tile -->
                <section class="tile transparent">
				
                  <div class="tile-body color transparent-black rounded-corners">
                    
                    <div class="table-responsive">
                      <table  class="table table-datatable table-custom" id="advancedDataTable">
                        <thead>
                          <tr>
                            <th class="sort-alpha">login </th>
                            <th class="sort-alpha">Password </th>
                            <th class="sort-amount">Email </th>
                            <th class="sort-numeric">Date</th>
                            <th class="sort-numeric">Matricule</th>
                            <!--<th class="sort-numeric">Affect</th>-->
                            <th>Actions</th>
                          </tr>
						  
                        </thead>
                        <tbody>
                    <?php while($row = mysqli_fetch_array($result)){ ?>
                          <tr class="odd gradeX" id= "row<?php echo $row["id"]; ?>">
                            <td id= "login<?php echo $row["id"]; ?>"><?php echo $row["login"]; ?></td>
                            <td id= "Password<?php echo $row["id"]; ?>"><?php echo $row["Password"]; ?></td>
                            <td id= "Email<?php echo $row["id"]; ?>"><?php echo $row["Email"]; ?></td>
                            <td class="text-center" id= "date_creation<?php echo $row["id"]; ?>"<?php echo $row["id"]; ?>> <?php echo $row["date_creation"]; ?></td>
                           <td class="text-center" id= "Matricule<?php echo $row["id"]; ?>"><?php echo $row["Matricule"]; ?></td>
                           <!-- <td class="text-center" id= "affect<?php echo $row["id"]; ?>"></td>-->
							
            							  <td class="text-center" >
            								<?php
                              if($row["etat"]=="active"){
                                echo '<a class="check-toggler checked check-toggler" style="text-decoration:none; font-family:Roboto Condensed, sans-serif;
    font-size: 12px; font-weight: 700;text-transform: uppercase;" rel="'.$row["id"].'" todo="desactive" >ACTIVE</a>';
                              }
                              else{
                                echo '<a class="check-toggler check-toggler " style="text-decoration:none; font-family:Roboto Condensed, sans-serif;
    font-size: 12px; font-weight: 700;text-transform: uppercase;" rel="'.$row["id"].'"  todo="active" >DESACTIVE</a>';
                              }
                            ?>	 
            				  &nbsp;&nbsp;&nbsp;
            				
							

							<a  class="modifier" style="text-decoration:none; font-family:Roboto Condensed, sans-serif;
							font-size: 12px; font-weight: 700;text-transform: uppercase;" todo="modif" rel="<?php echo $row["id"]; ?>">MODIFIER
							</a>&nbsp;&nbsp;&nbsp;
																		 
							<a  class="supprimer" style="text-decoration:none; font-family:Roboto Condensed, sans-serif;
							font-size: 12px; font-weight: 700;text-transform: uppercase;" rel="<?php echo $row["id"]; ?>">SUPPRIMER						
							</a>
            				 </td>
							 </tr>
                    <?php } /* end while */ ?>
                        </tbody>
                        <!--<script type="text/javascript">
                          function activer_compte(id){

                          }
                        </script>-->
                      </table>
                    </div>

                  </div>
                  <!-- /tile body -->
                


                </section>
                <!-- /tile -->


              </div>
              <!-- /col 12 -->



      </div>
      <!-- Make page fluid-->




    </div>
    <!-- Wrap all page content end -->



       <script>
    $(function(){

      //check all checkboxes
      $('table thead input[type="checkbox"]').change(function () {
        $(this).parents('table').find('tbody input[type="checkbox"]').prop('checked', $(this).prop('checked'));
      });

      // sortable table
      $('.table.table-sortable th.sortable').click(function() {
        var o = $(this).hasClass('sort-asc') ? 'sort-desc' : 'sort-asc';
        $(this).parents('table').find('th.sortable').removeClass('sort-asc').removeClass('sort-desc');
        $(this).addClass(o);
      });

      //chosen select input
      $(".chosen-select").chosen({disable_search_threshold: 10});

      //check toggling
      $('.check-toggler').on('click', function(){
        $(this).toggleClass('checked');
		if($(this).hasClass('checked'))
			$(this).html('Active');
		else
			$(this).html('Desactive');
      });
      
    });
      
    </script>

    <script>
    $(function(){

      

      // Add custom class to pagination div
      $.fn.dataTableExt.oStdClasses.sPaging = 'dataTables_paginate paging_bootstrap paging_custom';

     

     
      /****************************************************/
      /**************** ADVANCED DATATABLE ****************/
      /****************************************************/

       var oTable04 = $('#advancedDataTable').dataTable({
        "sDom":
          "R<'row'<'col-md-6'l><'col-md-6'f>r>"+
          "t"+
          "<'row'<'col-md-4 sm-center'i><'col-md-4'><'col-md-4 text-right sm-center'p>>",
         "oLanguage": {
          "sSearch": ""
        },
        /*"oTableTools": {
          "sSwfPath": "assets/js/vendor/datatables/tabletools/swf/copy_csv_xls_pdf.swf",
          "aButtons": [
            "copy",
            "print",
            {
              "sExtends":    "collection",
              "sButtonText": 'Save <span class="caret" />',
              "aButtons":    [ "csv", "xls", "pdf" ]
            }
          ]
        },*/
        "fnInitComplete": function(oSettings, json) { 
          $('.dataTables_filter input').attr("placeholder", "Search");
        },
        /*"oColVis": {
          "buttonText": '<i class="fa fa-eye"></i>'
        }*/
      });
	  
	  var nEditing = null;
	  /////////////////////////////////////// ajouter button///////////////////////////
	        // Append add row button to table
      /*var addRowLink = '<a href="#" id="addRow" class="btn btn-green btn-xs add-row">Ajouter Compte</a>'
      $('#advancedDataTable_wrapper').append(addRowLink);*/

	  // Add row initialize
      $('#addRow').click( function (e) {
        e.preventDefault();

		// Only allow a new row when not currently editing
        if ( nEditing !== null ) {
          return;
        }
        
        var aiNew = oTable04.fnAddData([ '', '', '', '', '', '', '<a class="edit" href="">MODIFIER</a>'+'<a class="delete" href="">SUPPRIMER</a>' ]);
        var nRow = oTable04.fnGetNodes(aiNew[0]);
        editRow(oTable04, nRow);
        nEditing = nRow;

        $(nRow).find('td:last-child').addClass('actions text-center');
      });
	  /*
      $('.ColVis_MasterButton').on('click', function(){
        var newtop = $('.ColVis_collection').position().top - 45; 

        $('.ColVis_collection').addClass('dropdown-menu');
        $('.ColVis_collection>li>label').addClass('btn btn-default')     
        $('.ColVis_collection').css('top', newtop + 'px');
      });

      $('.DTTT_button_collection').on('click', function(){
        var newtop = $('.DTTT_dropdown').position().top - 45;   
        $('.DTTT_dropdown').css('top', newtop + 'px');
      });*/

      //initialize chosen
      $('.dataTables_length select').chosen({disable_search_threshold: 10});
      
	  // Delete row initialize
      $(document).on( "click", "#advancedDataTable a.delete", function(e) {
        e.preventDefault();
        
        var nRow = $(this).parents('tr')[0];
        oTable02.fnDeleteRow( nRow );
      });
	  
	  // Edit row initialize
      $(document).on( "click", "#advancedDataTable a.edit", function(e) {
        e.preventDefault();
         
        /* Get the row as a parent of the link that was clicked on */
        var nRow = $(this).parents('tr')[0];
         
        if (nEditing !== null && nEditing != nRow){
          /* A different row is being edited - the edit should be cancelled and this row edited */
          restoreRow(oTable04, nEditing);
          editRow(oTable04, nRow);
          nEditing = nRow;
        }
        else if (nEditing == nRow && this.innerHTML == "Save") {
          /* This row is being edited and should be saved */
		  var jqInputs = $('input', nEditing);
          saveRow(oTable04, nEditing);
		  console.log(jqInputs);
		  $.ajax({
              url : '../Gestion/Menu_Super_admin/liste_comptes/ajouter_compte.php',
              type : 'POST',
              data: {
                'login': jqInputs[0].value,
                'Password': jqInputs[1].value,
                'Email': jqInputs[2].value,
                'date_creation': jqInputs[3].value,
                'Matricule': jqInputs[4].value,
				'affect': jqInputs[5].value,
                },
                success: function(data) {
				  jQuery('.edit.save').attr('rel', data);
                }
		  });
          nEditing = null;
		  $(this).removeClass('edit').addClass('modifier').attr('todo', 'modif');
		  $(this).html('Edit');
		  $(this).remove();
        }
        else {
          /* No row currently being edited */
          editRow(oTable04, nRow);
          nEditing = nRow;
		  $(this).html('Save');
        }
      });
    })
    
	$(document).on('click', 'a.modifier', function(e) { 
        e.preventDefault();
        var todo = $(this).attr('todo');
        var profilID = $(this).attr('rel');
        if(todo == "modif"){
              jQuery(this).html('Save');
              var login = $('#login'+profilID).html();
              var Password = $('#Password'+profilID).html();
              var Email = $('#Email'+profilID).html();
              var date_creation = $('#date_creation'+profilID).html();
              var Matricule = $('#Matricule'+profilID).html();
              $('#login'+profilID).html('<input type="text" id="LoginET'+profilID+'" value="'+login+'">');
              $('#Password'+profilID).html('<input type="text" id="PasswordET'+profilID+'" value="'+Password+'">');
              $('#Email'+profilID).html('<input type="text" id="EmailET'+profilID+'" value="'+Email+'">');
              $('#date_creation'+profilID).html('<input type="text" id="date_creationET'+profilID+'" value="'+date_creation+'">');
              $('#Matricule'+profilID).html('<input type="text" id="MatriculeET'+profilID+'" value="'+Matricule+'">');
			  if(Matricule == "Operateur")
				$('#affect'+profilID).html('<select name="affectET'+profilID+'" id="affectET'+profilID+'" class="chosen-select chosen-transparent form-control">' + list_stand + '</select>');
              $(this).attr('todo','confirme');
            }
            else{
              jQuery(this).html('Edit');
              var LoginET = $('#LoginET'+profilID).val();
              var PasswordET = $('#PasswordET'+profilID).val();
              var EmailET = $('#EmailET'+profilID).val();
              var date_creationET = $('#date_creationET'+profilID).val();
              var MatriculeET = $('#MatriculeET'+profilID).val();
              var affectET = $('#affectET'+profilID).val();

              $.ajax({
              url : 'Menu_Super_admin/liste_comptes/modifier_compte.php',
              type : 'POST',
              data: {
                'id': profilID,
                'login': LoginET,
                'Password': PasswordET,
                'Email': EmailET,
                'date_creation': date_creationET,
                'Matricule': MatriculeET,
				'affect': affectET,
                },
                success: function(data) {
                  console.log(data);
                }
              });
			  if(affectET)
				  $('#affect'+profilID).parent().remove();
			  else {
				  $('#login'+profilID).html(LoginET);
				  $('#Password'+profilID).html(PasswordET);
				  $('#Email'+profilID).html(EmailET);
				  $('#date_creation'+profilID).html(date_creationET);
				  $('#Matricule'+profilID).html(MatriculeET);
				  $('#affect'+profilID).html('');
			  }
              $(this).attr('todo','modif');
            }
          });
    </script>
	
<style>
body #content .tile-body.color table.table-custom > tbody > tr > td a {
	color: #fff;
	text-decoration: underline;
	cursor: pointer;
}
a.check-toggler:before {
	display: none;
}
#advancedDataTable input[type="text"] {
	max-width: 120px;
}
</style>
  
  
  
  