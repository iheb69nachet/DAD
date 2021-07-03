<?php 
session_start();

$_SESSION['loaded_page']= "Charge_super";


?>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js" /></script>
<script type="text/javascript">

				$(document).ready(function() {
					 $('#modifier_btn').on('click',function(){
						$('#target').load('../Gestion/Menu_Super_admin/Contenue_Edit_Profil/Edit.php');
					});
				});
</script>
          <!-- content main container -->
          <div class="main">        
           <!-- row -->
            <div class="row">
              <!-- col 12 -->
              <div class="col-md-12">
              

                
                <!-- tile -->
                <section class="tile transparent" id="superbox-gallery">


                  <!-- tile header -->
                  <div class="tile-header transparent">
                    <h1><strong>Mon</strong> Profil</h1>
                    <div class="controls">
                      <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                      <a href="#" class="remove"><i class="fa fa-times"></i></a>
                    </div>
                  </div>
                  <!-- /tile header -->


                  <!-- tile widget -->
                  <div class="tile-widget color transparent-black rounded-top-corners">
                    <ul class="tile-navbar bg-transparent-black-3">
                      <li>
                        <div class="">
                         <!-- <input type="checkbox" value="1" id="selectall">-->
                          <label for="selectall"></label>
                        </div>
                      </li>
                     
                    </ul>
                  </div>
                  <!-- /tile widget -->


                  <!-- tile body -->
                  <div class="tile-body color transparent-black superbox">

                     
                    <form class="form-horizontal" role="form" >
					<?php 
										$connect = mysqli_connect("localhost:3306","chocoest","chocoest","projetphase1") ;
										// $vae=$_SESSION['id'];
										
										$query=sprintf("SELECT * FROM `compte_user`");
										
										$result = mysqli_query($connect, $query);
										$row = $result->fetch_array(MYSQLI_ASSOC);
								   ?>
              
				  <div class="col-md-6">
                      <div class="form-group" style="margin-left:150px;">
                        <label for="input01" class="col-sm-4 "  style=" font-weight: bold; color:#fff; font-size: 20px;     font-family: "Roboto Slab", serif;"><strong>Nom :</strong></label>
                        <div class="col-sm-8">
                        	<label for="input01" class="col-sm-4 " style="font-family: Roboto Slab, serif; margin_left=20px; color:#fff;" ><?php echo $row['Nom'];?></label>
                        </div>
                      </div>

                      <div class="form-group" style="margin-left:150px;">
                        <label for="input01" class="col-sm-4 " style=" font-weight: bold; color:#fff; font-size: 20px;     font-family: "Roboto Slab", serif;">Prenom :</label>
                        <div class="col-sm-8">
                       	<label for="input01" class="col-sm-4 " style="font-family: Roboto Slab, serif; font-size: 16px; color:#fff;"><?php echo $row['prenom'];?></label>
                        </div>
                      </div>

                     
                      <div class="form-group" style="margin-left:150px;">
                        <label for="input01" class="col-sm-4 "  style=" font-weight: bold; color:#fff; font-size: 20px;     font-family: "Roboto Slab", serif;">Email :</label>
                        <div class="col-sm-8">
                       	<label for="input01" class="col-sm-4 " style="font-family: Roboto Slab, serif; font-size: 16px; color:#fff;"><?php echo $row['Email'];?></label>
                        </div>
                      </div>

                      <div class="form-group" style="margin-left:150px;">
                        <label for="input01" class="col-sm-4 " style=" font-weight: bold; color:#fff; font-size: 20px;     font-family: "Roboto Slab", serif;">Status :</label>
                        <div class="col-sm-8">
                       	<label for="input01" class="col-sm-4 " style="font-family: Roboto Slab, serif;  font-size: 16px;"><?php echo $row['status'];?></label>
                        </div>
                      </div>
				</div>
					<div class="col-md-6" style="margin-left:-100px;">				
					   <div class="form-group" style="margin-left:150px;">
                        <label for="input01" class="col-sm-4 " style=" font-weight: bold; color:#fff; font-size: 20px;     font-family: "Roboto Slab", serif;">Supervisor :</label>
                        <div class="col-sm-8">
                       	<label for="input01" class="col-sm-4 " style="font-family: Roboto Slab, serif; font-size: 16px; color:#fff;"><?php echo $row['Supervisor'];?></label>
                        </div>
                      </div>
					  

                        <div class="form-group" style="margin-left:150px;">
                        <label for="input01" class="col-sm-4 "  style=" font-weight: bold; color:#fff; font-size: 20px;     font-family: "Roboto Slab", serif;">Experience :</label>
                        <div class="col-sm-8">
                       	<label for="input01" class="col-sm-4 " style="font-family: Roboto Slab, serif;font-size: 16px; color:#fff;"><?php echo $row['Experience'];?></label>
                        </div>
                      </div>
					  
					  
						 <div class="form-group" style="margin-left:150px;">
                        <label for="input01" class="col-sm-4 "  style=" font-weight: bold; color:#fff; font-size: 20px;     font-family: "Roboto Slab", serif;">Tel :</label>
                        <div class="col-sm-8">
                       	<label for="input01" class="col-sm-4 " style="font-family: Roboto Slab, serif; font-size: 16px; color:#fff;"><?php echo $row['Tel'];?></label>
                        </div>
                      </div>

                    
						 <div class="form-group" style="margin-left:150px;">
                        <label for="input01" class="col-sm-4 "  style=" font-weight: bold; color:#fff; font-size: 20px;     font-family: "Roboto Slab", serif;">Ville :</label>
                        <div class="col-sm-8">
                       	<label for="input01" class="col-sm-4 " style="font-family: Roboto Slab, serif; font-size: 16px; color:#fff;"><?php echo $row['ville'];?></label>
                        </div>
                      </div>
                      

            </div>          

                     
                      <div class="form-group">
                        <div class="col-sm-offset-9 col-sm-8">
                          <button id="modifier_btn" type="button" class="btn btn-hotpink margin-bottom-20">Modifier</button>
                  
                        </div>
                      </div>
                    </form>


                 


                  </div>
                  <!-- /tile body -->


                  <div class="tile-footer color transparent-black rounded-bottom-corners text-center">
                    

                    



                  </div>
                
                


                </section>
                <!-- /tile -->


                <!-- /tile -->

          





              </div>
              <!-- /col 12 -->


              
            </div>
            <!-- /row -->

		</div>
        <!-- Page content end -->
	




