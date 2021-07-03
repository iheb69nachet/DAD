 <!-- Fixed navbar -->
        <div class="navbar navbar-default navbar-fixed-top navbar-transparent-black mm-fixed-top" role="navigation" id="navbar">
          


          <!-- Branding -->
          <div class="navbar-header col-md-2">
            <a class="navbar-brand" href="index.html">
          <strong style="margin-left:-20px;">Application DAD</strong>
            </a>
            <div class="sidebar-collapse">
              <a href="#">
                <i class="fa fa-bars"></i>
              </a>
            </div>
          </div>
          <!-- Branding end -->


          <!-- .nav-collapse -->
          <div class="navbar-collapse">
                        
            <!-- Page refresh -->
            <ul class="nav navbar-nav refresh">
              <li class="divided">
                <a href="#" class="page-refresh"><i class="fa fa-refresh"></i></a>
              </li>
            </ul>
            <!-- /Page refresh -->

            

            <!-- Quick Actions -->
            <ul class="nav navbar-nav quick-actions">
              
               
				<li class="dropdown divided user" id="current-user">
                <div class="profile-photo">
                  <img src="assets/images/Super-User.png" alt />
                </div>
                <a href="#"><?php echo $_SESSION['Nom'];?> <a href="#"><?php echo $_SESSION['acess_level'];?> </a>    </a>
               
                
                
              </li>
              

              

              <li class="dropdown divided user" id="current-user">
               
                <a class="dropdown-toggle options" data-toggle="dropdown" href="#">
                  Options <i class="fa fa-caret-down"></i>
                </a>
                
                <ul class="dropdown-menu arrow settings" style="margin-left:-70px;">

                  <li>
                    
                    <h3>Backgrounds:</h3>
                    <ul id="color-schemes">
                      <li><a href="#" class="bg-1"></a></li>
                      <li><a href="#" class="bg-2"></a></li>
                      <li><a href="#" class="bg-3"></a></li>
                      <li><a href="#" class="bg-4"></a></li>
                      <li><a href="#" class="bg-5"></a></li>
                      <li><a href="#" class="bg-6"></a></li>
                    </ul>

                    

                  </li>
				<li class="divider"></li>
					<li>
                    <a href="../Gestion/Change_mdp.php"><i class="fa fa-key"></i> Modifier Mot de passe</a>
                  </li>
                <li class="divider"></li>

               
                </ul>
              </li>

              
			  
			  
			  <li class="dropdown divided">
                
                <a href="deconnexion.php">
                  <i class="fa fa-power-off"></i>
                </a>
              </li>
            </ul>
            <!-- /Quick Actions -->
		  
		  
		  



            





          </div>
          <!--/.nav-collapse -->





        </div>
        <!-- Fixed navbar end -->