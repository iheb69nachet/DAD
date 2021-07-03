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
                    $('#target').load('Menu_demandeur/ouvrier.php');
                }); 
				
			
				 $('#suivi_D').on('click',function()  {
                    $('#target').load('Menu_demandeur/update/view.php');
                });
				
				$('#demandeOR').on('click',function()  {
                    $('#target').load('Menu_demandeur/OR/demande_or.php');
                });
				
				 $('#justif').on('click',function()  {
                    $('#target').load('Menu_demandeur/notife_justif_demande.php');
                });
				
				 $('#timeline').on('click',function()  {
                    $('#target').load('Menu_demandeur/timeline.php');
                });


				$('#extract').on('click',function()  {
                    $('#target').load('Menu_demandeur/mise_jour_PDF/index.php');
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
                    <a href="#" style="background-color:#00ffad9c;" id="Formulaire_Votage">
                      <i class="fa fa-pencil"></i> Insertion Demande AI
                    </a>
                  </li>  
				 <!--  <li style="pointer-events:none;" >-->
				   <li  >
                    <a href="#" style="background-color: #ff00007a; " id="demandeOR">
                      <i class="fa fa-pencil"></i> Insertion Demande OR
                    </a>
                  </li>  
				  
				  <li>
                    <a href="#" id="justif">
                      <i class="fa fa-pencil"></i> Justificatif demande
                    </a>
                  </li>
				  <li>
                    <a href="#" id="suivi_D">
                      <i class="fa fa-pencil"></i> Modifier Demande(s)
                    </a>
                  </li>
				  
				  <li>
                    <a href="#" id="extract">
                      <i class="fa fa-pencil"></i> Extrait PDF
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
	



