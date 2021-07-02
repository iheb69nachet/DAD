<?php 
session_start();
include "config.php";
$user=$_SESSION['ID'];
// var_dump($user); die;
//write the query to get data from users table

$sql = "SELECT * FROM demande where id_user=$user  and Type_Depense ='' ";

//execute the query

$result = $conn->query($sql);


?>


	<title>Modifier Demandes </title>
	 <!-- to make it looking good im using bootstrap -->
	 <!-- Latest compiled and minified CSS 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">-->


	
	      <div class="row">

              <div class="col-md-12">
                <!-- tile -->
               
                <!-- tile -->
                <section class="tile transparent">
				<div class="tile-header transparent">
                    <h1><strong>Demandes à Modifier</strong>  </h1>
                   <!-- <span class="note">including: <span class="italic">multi-column sorting and row select</span></span>-->
                  
                  </div>
                  <div class="tile-body color transparent-black rounded-corners">
                    
                    <div class="table-responsive">
<table  class="table table-datatable table-custom" id="advancedDataTable">

	<thead>
		<tr>
		<th>Reference_demande</th>
		
		<th>Statut</th>
		<th width="50%">Piéce Joint</th>  
		
		<th>Action</th>
	</tr>
	</thead>
	<tbody>	
		<?php
			if ($result->num_rows > 0) {
				//output data of each row
				while ($row = $result->fetch_assoc()) {
		?>

					<tr>
					<td><?php echo $row['Reference_demande']; ?></td>
					<td><?php 
					if($row["statut_demande"] ==  "") {echo "En cours";} else { echo"Annuler";}  ?></td>
					<td><?php if($row["file_upload"]) echo '<a download href="Menu_demandeur/upload/'. $row["file_upload"] .'">Piece_Joint</a>' ?></td>  
					<td><a class="btn btn-md btn-info" href="Menu_demandeur/update/update.php?id=<?php echo $row['id']; ?>">Modifier </a>
					&nbsp;<a class="btn btn-danger" href="Menu_demandeur/update/delete.php?id=<?php echo $row['id']; ?>">Annuler</a></td>
					</tr>	
					
		<?php		}
			}
		?>
	        	
	</tbody>
</table>
                    </div>

                  </div>
                  <!-- /tile body -->
                


                </section>
                <!-- /tile -->


              </div>
              <!-- /col 12 -->



      </div>
	
