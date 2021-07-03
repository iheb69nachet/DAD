<?php

session_start();

$_SESSION['loaded_page']="ss";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projetphase1";

// connect to mysql
$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysql select query

$query = "SELECT * FROM `votage`";


// result for method one
$result1 = mysqli_query($connect, $query);


?>
 // <link rel="stylesheet" href="http://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
     //  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	//<script src="http://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	
<script>
$(document).ready(function() {
    $('#drillDownDataTable').DataTable( {
        initComplete: function () {
            this.api().columns().every( function () {
                var column = this;
                var select = $('<select><option value=""></option></select>')
                    .appendTo( $(column.footer()).empty() )
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );
 
                        column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    } );
 
                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value="'+d+'">'+d+'</option>' )
                } );
            } );
        }
    } );
} );
	</script>
	
	
	<style>
	
				
				@media only screen and (max-width: 600px) {
				    /* For tablets: */
						  .ScrollStyle
					{
					   height: 450px; 
						overflow-y : auto;
					}
				}


 
	 label {color:white;}
	 </style>
<section class="ScrollStyle tile transparent">

                  <!-- tile header -->
                  <div class="tile-header transparent">
                    <h1><strong></strong> Datatable </h1>
                    <span class="note"> <span class="italic"></span></span>
                    <div class="controls">
                      <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                      <a href="#" class="remove"><i class="fa fa-times"></i></a>
                    </div>
                  </div>
                  <!-- /tile header -->

                  <!-- tile body -->
                  <div class="tile-body rounded-corners">
 
                    <div class="table-responsive">
                      <table  class="table table-custom" id="drillDownDataTable">
                      <thead>
		            <tr>
		            <th>Gouvernerat</th>
		            <th>Municipalitees</th>
		            <th>sexe</th>
		            <th>age</th>
		            <th>P_W_D</th>
         		   </tr>
        </thead>
        

        <tbody>
             <?php while($row1 = mysqli_fetch_array($result1)):;?>
            <tr >
                <td><?php echo $row1["Gouvernerat"];?></td>
                <td><?php echo $row1["Municipilitees"];?></td>
                <td><?php echo $row1["sexe"];?></td>
                <td><?php echo $row1["age"];?></td>
                <td><?php echo $row1["P_W_D"];?></td>
            </tr>
            <?php endwhile;?>
            
           <tfoot>
            <tr>
	             <th>Gouvernerat</th>
	            <th>Municipilitees</th>
	            <th>sexe</th>
	            <th>age</th>
	            <th>P_W_D</th>
            </tr>
        </tfoot>
           
        </tbody>
                      </table>
                    </div>

                  </div>
                  <!-- /tile body -->
                


                </section>
                
                
                
                 