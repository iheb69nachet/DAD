    <div id="wrap" class="ScrollStyle">
      <!-- Make page fluid -->
      <div class="row" >
        <!-- Fixed navbar -->
        <div class="navbar navbar-default navbar-fixed-top navbar-transparent-black mm-fixed-top" role="navigation" id="navbar">
          <!-- .nav-collapse -->
          <div class="navbar-collapse" >
            <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js" /></script>
            <script type="text/javascript">

            $(document).ready(function() {
				 $('#Formulaire_Votage').on('click',function()  {
                    $('#target').load('Menu_controle_gestion/suivi.php');
                }); 
				$('#suivi_demande').on('click',function()  {
                    $('#target').load('../Gestion/Menu_controle_gestion/mise_jour_demande/index.php');
                });
                
				 $('#timeline').on('click',function()  {
                    $('#target').load('Menu_demandeur/timeline_autre.php');
                });
				
            });
			
            </script>	

            <!-- Sidebar -->
            <ul class="nav navbar-nav side-nav" id="sidebar">
              
              <li class="collapsed-content"> 
                <ul>
                  <li class="search"><!-- Collapsed search pasting here at 768px --></li>
                </ul>
              </li>
              <li class="navigation" id="navigation">
                <a href="#" class="sidebar-toggle" data-toggle="#navigation">Navigation <i class="fa fa-angle-up"></i></a>
                <ul class="menu">
                
                    <li>
                    <a href="#" id="suivi_demande">
                      <i class="fa fa-pencil"></i> Validation  Budgétaire
                    </a>
                  </li>
               <li>
                    <a href="#" id="timeline">
                      <i class="fa fa-pencil"></i> Suivi Demande de Dépense
                    </a>
                  </li>
               
				    
                  </li>
                </ul>
              </li>
            </ul>
            <!-- Sidebar end -->
          </div>
          <!--/.nav-collapse -->
        </div>
        <!-- Fixed navbar end -->
      </div>
      <!-- Make page fluid-->
    </div>
    <!-- Wrap all page content end -->
	



