<?php
session_start();
$message="";
				if(isset ($_SESSION['Error-connection']) && ($_SESSION['Error-connection'] != 'empty')) {
					$Popup_Connection_Error=$_SESSION['Error-connection'] ;
					if($Popup_Connection_Error == "0"){
					$message = "<div class='bs-example'>
						<div class='alert alert-danger popup'>
							<a href='#' class='close' data-dismiss='alert'>&times;</a>
							<strong> Vérifier Vos info / Site ?.</strong>
						</div>
					</div>";
					
						}
						 }  
 
 ?>
 <!DOCTYPE html>
<html>
    <head>
        <title>DAD</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8" />
	
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' integrity='sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u' crossorigin='anonymous'>
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' integrity='sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa' crossorigin='anonymous'></script>

	
    <link rel="icon" type="image/ico" href="assets/images/small.png" />
    <!-- Bootstrap -->
    <link href="assets/css/vendor/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/vendor/bootstrap-checkbox.css">

    <link href="assets/css/minimal.css" rel="stylesheet">
 <style>
body #content{
	background-image: url('assets/images/backgrounds/11.jpg') !important;
	 background-repeat: no-repeat;
    background-size: cover;
    clear: both;
    width: 100%;
    margin: 0;
	
}
/*
@media only screen and (max-width: 500px) {
    img {
        width:80%;
    }*/
}
</style>
		
    </head>
    <body  style="">
      
        <div class="row">
        
           
		   
		   <div id="content" class="col-md-12 full-page login">
		   
		        <div class="inside-block">
          <div class="twidth" style=" margin-top: -22px;margin-left: -8px;"> <img src="assets/images/aa.png"/> </div>
			
           <!-- <h1><strong style="font-family: Agency FB;">Demande D'Aautorisation De Dépense</strong></h1>-->
            <h1><strong>Demande D'Autorisation De Dépense</strong></h1>
            <h5><strong>----------</strong></h5>

            <form id="form-signin" class="form-signin" action="connexion.php" method="post">
              <section>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Username" id="login" name="login">
                  <div class="input-group-addon"><i class="fa fa-user"></i></div>
                </div>
                <div class="input-group">
                  <input type="Password" class="form-control" placeholder="Password" id="Password" name="Password">
                  <div class="input-group-addon"><i class="fa fa-key"></i></div>
                </div>
				
			<!--	<div class="input-group">
                  <input type="text" class="form-control" placeholder="site" id="site" name="site">
                  <div class="input-group-addon"><i class="fa fa-key"></i></div>
                </div>-->
				
				<div class="form-group" id="site">
                           
									
                                      
                               <!-- <div class="ui-select">
                                                    <select name="site" id="site" class="form-control" required >
                                                       <option value="">Site</option>
                                                       <option value="admin">admin</option>
                                                       <option value="CLSB">CLSB</option>
                                                       <option value="CLN">CLN</option>
                                                       <option value="CLC">CLC</option>
                                                       <option value="CF">CF</option>
                                                       <option value="SBC">SBC</option>
                                                       <option value="SDEM">SDEM</option>
                                                       <option value="DELTA">DELTA</option>
                                                       <!-- <option disabled selected ></option>
                                                       ?php while($row = mysqli_fetch_array($result)){ ?>
															<option value="?php echo $row['id'];?>">?php echo $row['nom_site'];?></option>
														?php }?>
                                                    </select>
                               </div>-->
							   
						
                                               
							</div>
			
              </section>
              <section class="controls">
                <div class="checkbox check-transparent">
                  <input type="checkbox" value="1" id="remember" checked>
               <label for="remember">Enregistre accées</label>
                </div>
                <a href="../Gestion/notice_mdp.php">Modifier Mot de passe</a>
              </section>
              <section class="log-in">
                <button class="btn btn-greensea " style="background-color:#10bb2d" value="Login" name="submit">Connecter</button>
              </section>
			   <?php if($message!="") echo $message; ?> </div>
            </form>
          </div>
		   
		  </div> 
		   
    
 </div>


    
        
    </body>
</html>
