<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projetphase1";
$connect = mysqli_connect($servername, $username, $password, $dbname);
$_SESSION['loaded_page'] = "ouvrier";

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
#hiver_valide:hover{background-color: Green;}
#hiver_Rejeter:hover{background-color: red;}									
#hiver_attente:hover	{background-color: #ccc;}							

	 </style>


<!------ Include the above in your HEAD tag ---------->

<div class="row col-md-12">

	<section class="col-md-4 tile color transparent-black" style="width:50%">

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
// $query = "SELECT Reference_demande FROM demande GROUP BY Reference_demande";
// $query = "SELECT * FROM demande WHERE site='" . $_SESSION['site'] . "' ";
$query = "SELECT * FROM demande WHERE site='" . $_SESSION['site'] . "'";
$result = mysqli_query($connect, $query);
while ($row = mysqli_fetch_array($result)) {
    $Reference_demande .= '<option value="' . $row["Reference_demande"] . '">' . $row["Reference_demande"] . '</option>';
}

?>
									<label for="input01" class="col-sm-4 control-label">Status</label>
										<div class="col-sm-8">
										  <select name="Reference_demande" id="status" class="form-control form-control-role action">
											<option value="" >Select a status</option>
											<option value="Valider" id="hiver_valide">valider</option>
											<option value="Rejeter" id="hiver_Rejeter" >Rejeter</option>
											<option value="en attente" id="hiver_attente">en attente</option>



										   </select>

										</div>
								<div class="form-group">
										<label for="input01" class="col-sm-4 control-label">Reference_demande</label>
										<div class="col-sm-8">
										  <select name="Reference_demande" id="Reference_demande" class="form-control form-control-role action">
											<option value="" >Select Reference_demande</option>
											<?php echo $Reference_demande; ?>
										   </select>

										</div>
									  </div>
									  <br>
									  
									  </div>

								 <div class="form-group">
									<button class="btn btn-info btn-lg float-left" style="margin-left: 300px; width:250px;" onclick="myFunction()" data-toggle="modal" data-target="#exampleModal"> Détails  </button>
								</div>
								<div class="container">
								<div class="row">
									<div class="col-sm-6" id="data_demande" style="width:100px">
										
								

								<!-- Modal -->
								<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								  <div class="modal-dialog" role="document" style=" width:1150px; height:800px;">
									<div class="modal-content">
									  <div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Informations sur DAD</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										  <span aria-hidden="true">&times;</span>
										</button>
									  </div>
									  <div class="modal-body col-md-12">
											<!---->
								<div class="col-md-3">
									
									  <p> Reference_demande</p>  
									  <textarea id="ref" disabled class="form-control"></textarea> 
									 
									 <p> Matricule</p> 
									  <textarea id="mat"disabled class="form-control"></textarea> 
									 
									  <p> Magsin </p>   
									  <textarea id="Magcc" disabled  class="form-control"></textarea> 
									 
									   <p> centre de coût - demandeur </p> 
									  <textarea id="centrecc"disabled class="form-control"></textarea> 
									 
									  <p> Coût estimé </p>   
									  <textarea id="coutestime" disabled  class="form-control"></textarea> 
									 
									   <p> Depense_budgetisee </p>   
									  <textarea id="Depense_budgetisee" disabled  class="form-control"></textarea> 
									  
									  
									
									
								</div>	
								<div class="col-md-3">
								
								
									  
									   <p> Proposition_fournisseurs </p>   
									  <textarea id="Proposition_fournisseurs" disabled  class="form-control"></textarea> 
									  <p> designation_depense</p>  
									  <textarea id="designation_depense" disabled class="form-control"></textarea> 
									 
									 <p> justification_depense</p> 
									  <textarea id="justification_depense"disabled class="form-control"></textarea> 
									
									  <p> Type_Depense</p> 
									  <textarea id="Type_Depense"disabled class="form-control"></textarea> 
									  
									  <p> Délai de reception</p> 
									  <textarea id="reception"disabled class="form-control"></textarea> 
									  
									  <p> Approbation Chef Hiérarchique</p> 
									  <textarea id="Etat"disabled class="form-control"></textarea> 
								</div>	
						<div class="col-md-3">
									<p> centre_cout</p> 
									  <textarea id="centre_cout"disabled class="form-control"></textarea>

									  <p> objet</p> 
									  <textarea id="objet"disabled class="form-control"></textarea> 
									  
									  <p> ss_compte</p> 
									  <textarea id="ss_compte"disabled class="form-control"></textarea> 
									  
									  <p> Budget Allouer</p> 
									  <textarea id="Budget_allouer"disabled class="form-control"></textarea> 
									  
									  <p> Budget Restant</p> 
									  <textarea id="Budget_restant"disabled class="form-control"></textarea> 
									  
									  <p> Approbation Service Controle Gestion</p> 
									  <textarea id="etat_verife_cg"disabled class="form-control"></textarea> 
									  
									  <p> Commentaire Cpontrole Gestion</p> 
									  <textarea id="commentaire_cg"disabled class="form-control"></textarea>  
									  
									 
						</div>
							<div class="col-md-3">
								 <p> Approbation DGA</p> 
									  <textarea id="avis_DGA"disabled class="form-control"></textarea> 
									  
									  <p> Avis DGA</p> 
									  <textarea id="commentaire_DGA"disabled class="form-control"></textarea> 
							</div>							
											<!--          -->
											
									  </div>
									  <div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									  </div>
									</div>
								  </div>
								</div>
										
										
										
									</div>
									<div class="col-sm-6" id="">
									</div>
								</div>
							</div>

					  <script>
					  //kamel
					  function  myFunction(){
							id=$('#Reference_demande').val();
							var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    var myObj = JSON.parse(this.responseText);
	var donnee_demande = myObj[0].data;
	console.log(donnee_demande) 
	document.getElementById("ref").innerHTML=donnee_demande.Reference_demande;
	document.getElementById("mat").innerHTML=donnee_demande.Matricule;
	document.getElementById("Magcc").innerHTML=donnee_demande.Magcc;
	document.getElementById("centrecc").innerHTML=donnee_demande.centrecc; // proposée du demandeur
	document.getElementById("coutestime").innerHTML=donnee_demande.coutestime; 
	document.getElementById("Depense_budgetisee").innerHTML=donnee_demande.Depense_budgetisee;
	document.getElementById("Proposition_fournisseurs").innerHTML=donnee_demande.Proposition_fournisseurs;
	document.getElementById("designation_depense").innerHTML=donnee_demande.designation_depense;
	document.getElementById("justification_depense").innerHTML=donnee_demande.justification_depense;
	document.getElementById("Type_Depense").innerHTML=donnee_demande.Type_Depense;
	document.getElementById("reception").innerHTML=donnee_demande.reception; 
	document.getElementById("Etat").innerHTML=donnee_demande.Etat; // approbation chef hiérarchique
	document.getElementById("centre_cout").innerHTML=donnee_demande.centre_cout;
	document.getElementById("objet").innerHTML=donnee_demande.objet;
	document.getElementById("ss_compte").innerHTML=donnee_demande.ss_compte;
	document.getElementById("Budget_allouer").innerHTML=donnee_demande.Budget_allouer;
	document.getElementById("Budget_restant").innerHTML=donnee_demande.Budget_restant;
	document.getElementById("etat_verife_cg").innerHTML=donnee_demande.etat_verife_cg;
	document.getElementById("commentaire_cg").innerHTML=donnee_demande.commentaire_cg;
	document.getElementById("avis_DGA").innerHTML=donnee_demande.avis_DGA;
	document.getElementById("commentaire_DGA").innerHTML=donnee_demande.commentaire_DGA;
	$("#modal").click();
	//console.log(myObj[0].data);
 
   $('.timelinegraphe').html(myObj[0].timeline);
   //5rajt valeur js na3rech win 7ajtek bech t7ot en tout cas houwa taw objet k tebda 7ajtek b champ menha tekteb myobj.champEli7ajtek bih

  }
};
xmlhttp.open("GET", `data/index.php?id=${id}`, true);
xmlhttp.send();
					  }

$('#status').on('change', function() {
	etat=$('#status').val();
	if(etat=='en attente'){
		var xmlhttp = new XMLHttpRequest();

xmlhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
var filtered = JSON.parse(this.responseText);
console.log(filtered);

document.getElementById("Reference_demande").innerHTML=''
if(filtered!==null){
	filtered.forEach(demande=>{
document.getElementById("Reference_demande").innerHTML+=`<option value="'${demande.data.Reference_demande}'">${demande.data.Reference_demande}</option>`

	$('.timelinegraphe').html(demande.timeline);


})

}else{
document.getElementById("Reference_demande").innerHTML=`<option value="'no_data'">no data</option>`

}
}
};
xmlhttp.open("GET", `data/index.php`, true);
xmlhttp.send();
	}else{
		var xmlhttp = new XMLHttpRequest();

xmlhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
var filtered = JSON.parse(this.responseText);
console.log(filtered);

document.getElementById("Reference_demande").innerHTML=''

if(filtered!==null){


	filtered.forEach(demande=>{
document.getElementById("Reference_demande").innerHTML+=`<option value="'${demande.data.Reference_demande}'">${demande.data.Reference_demande}</option>`
$('.timelinegraphe').html(demande.timeline);

})
}else{
document.getElementById("Reference_demande").innerHTML=`<option value="'no_data'">no data</option>`

}
}
};
xmlhttp.open("GET", `data/index.php?etat=${etat}`, true);
xmlhttp.send();
	}


}
);
					  </script>
					</div>
		<form class="ScrollStyle  form-horizontal " role="form" action="Menu_demandeur/V_connection.php" method="POST" >






		 </div>


		</form>
		</div>
		</section>

		<div class="col-md-4 col-md-offset-6 tile color transparent-black" style="width:50%; margin-top:-50px;">
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
		  <div class="col-md-12">

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
    result = 'description1_L1';
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

	}
   })
  }
 });
});

</script>
