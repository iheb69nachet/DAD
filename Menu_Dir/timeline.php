<?php 
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projetphase1";
$connect = mysqli_connect($servername,$username,$password,$dbname);
$_SESSION['loaded_page']= "ouvrier";

?>

 <style>
	.timeline {
  white-space: nowrap;
  overflow-x: scroll;
  padding: 30px 0 10px 0;
  position: relative;
}

.entry {
    display: inline-block;
    vertical-align: top;
    background: #b3b2b2ad;
    color: #fff;
    padding: 10px;
    font-size: 12px;
    font-weight: bold;
    font-size: medium;
    text-align: center;
    position: relative;
    border-top: 4px solid #06182E;
    border-radius: 3px;
    min-width: 200px;
    max-width: 500px;
}

.entry img {
  display: block;
  max-width: 100%;
  height: auto;
  margin-bottom: 10px;
}

.entry:after {
  content: '';
  display: block;
  background: #eee;
  width: 7px;
  height: 7px;
  border-radius: 6px;
  border: 3px solid #06182E;
  position: absolute;
  left: 50%;
  top: -30px;
  margin-left: -6px;
}

.entry:before {
  content: '';
  display: block;
  background: #06182E;
  width: 5px;
  height: 20px;
  position: absolute;
  left: 50%;
  top: -20px;
  margin-left: -2px;
}

.entry h1 {
  color: #fff;
  font-size: 18px;
  font-family: Georgia, serif;
  font-weight: bold;
  margin-bottom: 10px;
}

.entry h2 {
  letter-spacing: .2em;
  margin-bottom: 10px;
  font-size: 14px;
}

.bar {
  height: 4px;
  background: #eee;
  width: 100%;
  position: relative;
  top: 13px;
  left: 0;
}
				
				@media only screen and (max-width: 600px) {
				    /* For tablets: */
						  .ScrollStyle
					{
					   height: 450px; 
						overflow-y : auto;
					}
				}

 
	 label {color:white;}
	 
	 


.seats span, .backSeats div{
   margin: 10px;
   padding: 10px;
   color: white;
   // border: 4px solid #000;
}
.seats span{
   width: 120px;
   display: inline-block;
   // background-color: #48C9B0;
}
.left{
   text-align: left;
}
.right{
   text-align: right;
}
.center{
   text-align: center;
}
.seats{
   text-align: center;
}


	 </style>
	

<!------ Include the above in your HEAD tag ---------->
 
<div class="row col-md-12">

	<section class="col-md-4 tile color transparent-black">

		<div class="tile-header">
							<h1 style="margin-left: auto; margin-right: auto;" <strong>SUIVI DEMANDE </strong>DE  DEPENSE</h1>
							<div class="controls">
							  <a href="#" class="minimize"><i class="fa fa-chevron-down"></i></a>
							  <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
							  <a href="#" class="remove"><i class="fa fa-times"></i></a>
							</div>
	</div>
		<div class="search">
		<label for="input01" class="col-sm-4 control-label">Date</label>
            <input type="text" class="form-control fa fa-calendar" value="<?php echo date('d / m / Y'); ?>"/>
          </div>
						  
		<div class="tile-body">

		<form class="ScrollStyle  form-horizontal " role="form" action="Menu_demandeur/V_connection.php" method="POST" >

		<!-- row -->
		 <div class="row">
		<!-- col 12 --> 
			  <div class="col-md-12">  
			  
					  <div class="select-boxes">
							  </div>
						<!----------------------------------------->	 
								<?php
					
						//index.php
						$connect = mysqli_connect("localhost", "root", "", "projetphase1");
						$Reference_demande = '';
						$query = "SELECT Reference_demande FROM demande GROUP BY Reference_demande ";
						$result = mysqli_query($connect, $query);
						while($row = mysqli_fetch_array($result))
						{
						 $Reference_demande .= '<option value="'.$row["Reference_demande"].'">'.$row["Reference_demande"].'</option>';
						}
						
					?>
								<div class="form-group">
										<label for="input01" class="col-sm-4 control-label">Reference_demande</label>
										<div class="col-sm-8">
										  <select name="Reference_demande" id="Reference_demande" class="form-control form-control-role action">
											<option value="">Select Reference_demande</option>
											<?php echo $Reference_demande; ?>
										   </select>
				   
										</div>
									  </div>
							  
								<div class="form-group">
									<label for="input01" class="col-sm-4 control-label">Objet_depense</label>
									<div class="col-sm-8">
						
									  <div name="Objet_depense" id="Objet_depense" class="form-control form-control-role action">
										<!--<option value="">Select Objet_depense</option>-->
									   </div>
									</div>
							  </div>
					  <!----------------------------------------->
					</div>
						
				  
			   
			   
					
			   
		 </div>
		

		</form>
		
		</div>
		 
	
		<div class="col-md-4 col-md-offset-6 tile color transparent-black">
				<div class="tile-header seats">
					<!--<h1 style="margin-left: auto; margin-right: auto;"> </h1>-->
					<span class="left btn-success margin-bottom-20"  style="border-radius:5px; text-align:center; font-weight: bold;">Valider </span>
					<span class="btn-warning margin-bottom-20" style="border-radius:5px; background-color:#b3b2b2ad; text-align:center; font-weight: bold;" >En Attente</span>
					<span class="center btn-danger margin-bottom-20" style="border-radius:5px; text-align:center; font-weight: bold;">Rejeter</span>
					<!--<span class="center btn-danger margin-bottom-20">Attente Valisation</span>-->
					
				</div>
				
				<div class="tile-body">
				</div>
		</div>	
</div>		
		
<!----------------timeline------------------>
 <section class="row">
		  <div class="col-md-10">  
							
		  <section class=" tile color transparent-black">
		
					<div class="tile-header" >
							<h1 style="margin-left: auto; margin-right: auto;" <strong></strong> </h1>
							<div class="controls">
							  <a href="#" class="minimize"><i class="fa fa-chevron-down"></i></a>
							  <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
							  <a href="#" class="remove"><i class="fa fa-times"></i></a>
							</div>
							
	  <div class="tile-body" id="" >
				
					<div class="bar"></div>
					<div class="timeline timelinegraphe" >
					  <!--<div class="entry" style="background-color:green;">-->
					  <div class="entry">
						<h1>1</h1>
						<h2></h2>
						<img src="" /> Demandeur
					  </div>
					  <div class="entry">
						<h1>2</h1>
						Chef Hiérarchique
					  </div>
					  <div class="entry">
						<h1>3</h1>
					   Comptabilité
					  </div>
					  <div class="entry">
						<h1>4</h1>
						Contrôle de Gestion
					  </div>
					  <div class="entry">
						<h1>5</h1>
						DGA
					  </div>
					</div>

      </div>
						
	</div>
	</div>
		
				
</section>
							
								
									  
							  
		  </div>
			 
								
</section>


<script>

$(document).ready(function(){
 $('.action').change(function(){
  if($(this).val() != '')
  {
   var action = $(this).attr("id");
   var query = $(this).val();
   var result = '';
   if(action == "Reference_demande")
   {
    result = 'Objet_depense';
   }
   else
   {
    result = 'service';
   }
   $.ajax({
    url:"../Gestion/Menu_demandeur/fetch.php",
    method:"POST",
    data:{action:action, query:query},
	dataType: 'json',
    success:function(data){
		$('#'+result).html(data.output);
		$('.timelinegraphe').html(data.timeline);
    },
	error: function() {
		alert('Erreur!');
	}
   })
  }
 });
});

</script>  
					  