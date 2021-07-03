<?php
// php populate html table from mysql database
session_start();

$_SESSION['loaded_page']= "selection";
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

<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
       <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<script src="http://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	
	
	</head>
<body>
<script>

$(document).ready(function() {
    $('#table').DataTable( {
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
 <table class="table table-datatable table-custom" id="table" cellspacing="0" width="100%">
        <thead>
            <tr>
            <th>Gouvernerat</th>
            <th>Municipalitees</th>
            <th>sexe</th>
            <th>age</th>
            <th>P_W_D</th>
               
            </tr>
        </thead>
        <tfoot>
            <tr>
	             <th>Gouvernerat</th>
	            <th>Municipilitees</th>
	            <th>sexe</th>
	            <th>age</th>
	            <th>P_W_D</th>
            </tr>
        </tfoot>

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
            
           
           
        </tbody>
    </table>
</body>
</html>