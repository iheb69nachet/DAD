<?php
	session_start();
	 
?>

 <!DOCTYPE html>
<html>
    <head>
        <title>DAD</title>
      <meta login="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8" />
	
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' integrity='sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u' crossorigin='anonymous'>

<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' integrity='sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa' crossorigin='anonymous'></script>

	
    <link rel="icon" type="image/ico" href="assets/images/small.png" />
    <!-- Bootstrap -->
    <link href="assets/css/vendor/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/vendor/bootstrap-checkbox.css">

    <link href="assets/css/minimal.css" rel="stylesheet">

<style>
	body #content.full-page.error .inside-block {
		width: 400px;
		height:80%;
		position: relative;
	}
</style>
<script type="text/javascript">
  function checkPass()
{
    //Store the password field objects into variables ...
    var pass1 = document.getElementById('pass1');
    var pass2 = document.getElementById('pass2');
    //Store the Confimation Message Object ...
    var message = document.getElementById('confirmMessage');
    //Set the colors we will be using ...
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    //Compare the values in the password field 
    //and the confirmation field
    if(pass1.value == pass2.value){
        //The passwords match. 
        //Set the color to the good color and inform
        //the user that they have entered the correct password 
        pass2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Passwords Match!"
        $('#cp').prop('disabled', false);
    }else{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        pass2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Passwords Do Not Match!"
        $('#cp').prop('disabled', true);
    }
}  

		</script>
    </head>
    <body>
      
        
<div id="content" class="col-md-12 full-page error">



          <div class="inside-block" >

            <img src="assets/images/key.png" alt="" class="logo" style="margin-top:-30px;">
      
		  
		  
		  <section class="tile color transparent-white">



                  <!-- tile header -->
                  <div class="tile-header">
                    <h1><strong>Espace de Modification </strong> Mot de passe</h1>
                    
                  </div>
                  <!-- /tile header -->

                  <!-- tile body -->
                  <div class="tile-body">
                   
			<?php
					$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "projetphase1";
					$conn = mysqli_connect($servername,$username,$password,$dbname);
					
					if(isset($_POST['submit'])){
						
						$login = $_POST['useremail'];
						$opwd = $_POST['opwd'];
						$npwd = $_POST['npwd'];
						$cpwd = $_POST['cpwd'];
						
						$query = mysqli_query($conn,"SELECT * FROM compte_user WHERE login='$login' AND Password='$opwd'");
						// echo $query;
						$num = mysqli_fetch_array($query);
						// echo $num; 
						
						
						if($num>0){
							 $con = mysqli_query($conn,"UPDATE compte_user SET Password='$npwd' WHERE login='$login'");
							 // $_SESSION['msg1'] = "Password changer avec success !!";
							  echo "<h4 style='color:green'>Mot de passe changer avec success !!</h4>";
						}else{
							// $_SESSION['msg2'] = "il faut vérifier les données saisit";
							echo "<h4 style='color:red'>Message d'erreur \"Mot de passe incorrect\"</h4>";
						}
						
						
					}
					

			?>
					
						<div><?php if(isset($message)) { echo $message; } ?></div>
					<form name="chngpwd" class=""  onSubmit="return valid();" action="" method="post">
					
						<table align="center" class="">
							
							<tr height="50">
								<td>Login</td>
								<td><input type="text" name="useremail" id="useremail"/></td>
							</tr>
							<tr height="50">
								<td>Ancien Mot de passe</td>
								<td><input type="password" name="opwd" id="opwd"/></td>
							</tr>
							<tr height="50">
								<td>Nouvelle Mot de passe</td>
								<td><input type="password" name="npwd" id="npwd"/></td>
							</tr>
							<tr height="50">
								<td>Confimation Mot de passe</td>
								<td><input type="password" name="cpwd" id="cpwd"/></td>
							</tr>
						
						</table>
													<div class="form-group has-success">

                                                        <div class="">
                                                           <button type="submit" name="submit" class="btn btn-success btn-labeled">Change<span>&nbsp;&nbsp;</span><span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
                                                    </div>


                                                    
                                                

                                              
                                            </div>

					</form>

                  </div>
                 
                  
                


                </section>

            <div class="controls">
              <a class="btn btn-cyan" href="index.php <?php session_destroy();?>"  ><i class="fa fa-home" aria-hidden="true"></i>Acceuil</a>
            </div>

          </div>


        </div>

    
        
    </body>
</html>
