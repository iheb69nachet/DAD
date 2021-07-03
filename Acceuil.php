<?php
 session_start();
 $acess_level = $_SESSION['acess_level']; 
 $site = $_SESSION['site']; 
          
if(!isset($_SESSION['loaded_page'])) $_SESSION['loaded_page']= "accueil";

$mypage=$_SESSION['loaded_page'];
$navigation="";
		  
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8" />
	<link rel="icon" type="image/ico" href="../assets/images/small.ico" />

  <!--   <link rel="icon" type="image/ico" href="assets/images/small.ico" />
  
  
    Bootstrap -->
  <link href="assets/css/vendor/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/vendor/animate/animate.min.css">
    <link type="text/css" rel="stylesheet" media="all" href="assets/js/vendor/mmenu/css/jquery.mmenu.all.css" />
    <link type="text/css" rel="stylesheet" media="all" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/js/vendor/videobackground/css/jquery.videobackground.css">
    <link rel="stylesheet" href="assets/css/vendor/bootstrap-checkbox.css">
    <link rel="stylesheet" href="assets/js/vendor/rickshaw/css/rickshaw.min.css">
    <link rel="stylesheet" href="assets/js/vendor/morris/css/morris.css">
    <link rel="stylesheet" href="assets/js/vendor/tabdrop/css/tabdrop.css">
    <link rel="stylesheet" href="assets/js/vendor/summernote/css/summernote.css">
    <link rel="stylesheet" href="assets/js/vendor/summernote/css/summernote-bs3.css">
    <link rel="stylesheet" href="assets/js/vendor/chosen/css/chosen.min.css">
    <link rel="stylesheet" href="assets/js/vendor/chosen/css/chosen-bootstrap.css">
	    <link rel="stylesheet" href="assets/js/vendor/datatables/css/dataTables.bootstrap.css">
    <link rel="stylesheet" href="assets/js/vendor/datatables/css/ColVis.css">
    <link rel="stylesheet" href="assets/js/vendor/datatables/css/TableTools.css">
    <link href="assets/css/minimal.css" rel="stylesheet">
	<!---------- liste link css comptes -->
	  <link href="assets/css/vendor/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/vendor/animate/animate.css">
    <link type="text/css" rel="stylesheet" media="all" href="assets/js/vendor/mmenu/css/jquery.mmenu.all.css" />
    <link rel="stylesheet" href="assets/js/vendor/videobackground/css/jquery.videobackground.css">
    <link rel="stylesheet" href="assets/css/vendor/bootstrap-checkbox.css">

    <link rel="stylesheet" href="assets/js/vendor/fullcalendar/fullcalendar.css">
    <link rel="stylesheet" href="assets/js/vendor/colorpalette/bootstrap-colorpalette.css">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	   <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->

    <!-- Bootstrap -->
    <link href="assets/css/vendor/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/vendor/animate/animate.css">
    <link type="text/css" rel="stylesheet" media="all" href="assets/js/vendor/mmenu/css/jquery.mmenu.all.css" />
    <link rel="stylesheet" href="assets/js/vendor/videobackground/css/jquery.videobackground.css">
    <link rel="stylesheet" href="assets/css/vendor/bootstrap-checkbox.css">

    <link rel="stylesheet" href="assets/js/vendor/fullcalendar/fullcalendar.css">
    <link rel="stylesheet" href="assets/js/vendor/colorpalette/bootstrap-colorpalette.css">

    <link href="assets/css/minimal.css" rel="stylesheet">
	   <!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js" /></script>-->
	
	
	<style>
	#htmlcontent { width: 70px, min-height: 100%; }
	html *{
    -webkit-font-smoothing: antialiased;
	
}
.alert-purple { border-color: #694D9F;background: #694D9F;color: #fff; }
.alert-info-alt { border-color: #B4E1E4;background: #81c7e1;color: #fff; }
.alert-danger-alt { border-color: #B63E5A;background: #E26868;color: #fff; }
.alert-warning-alt { border-color: #F3F3EB;background: #E9CEAC;color: #fff; }
.alert-success-alt { border-color: #19B99A;background: #20A286;color: #fff; }
.glyphicon { margin-right:10px; }
.alert a {color: gold;}

	</style>
	
	</head>   	
	<body  class="bg-1" id="htmlcontent" style="margin:auto; height: auto; width: auto; !importent">
	<!--//-------------------------------------------gestion de navigation ----------------------------------------------------!>
<?php 

switch ($mypage){

	case 'accueil':
	break;
	
	case 'sous_Charge':
		$navigation.='
		<script> 
		$(function() {
		$("#target").load("../gestion-clients/menu_admin/Contenue_Charge_Profil/Charge.php"); 
		}); 
		</script> ';
			echo $navigation; 
			
	break;
	
	case 'ouvrier':
	
		$navigation.='
		<script> 
		$(function() {
		$("#target").load("Menu_demandeur/ouvrier.php"); 
		}); 
		</script> ';
			echo $navigation; 
			
	break;
	case 'Listes_super':
	
		$navigation.='
		<script> 
		$(function() {
		$("#target").load("Menu_Super_admin/Listes_Comptes.php"); 
		}); 
		</script> ';
			echo $navigation; 
			
	break;
	
	
	case 'sous_Edit':
		$navigation.='
		<script> 
		$(function() {
		$("#target").load("../gestion-clients/menu_admin/Contenue_Edit_Profil/Edit.php"); 
		}); 
		</script> ';
			echo $navigation; 
			//die;
	break;
	/********************************/
	
		
}

?>



<!--     Menus                  -->
					<div>
							 <?php
							 
								if(($_SESSION['acess_level'] == "L0") ){
								include("Menu_Super_admin/Sidbar_Menu.php"); 
								 }
								 if(($_SESSION['acess_level'] == "L1") ){
								include("Menu_demandeur/Sidbar_Menu_demadeur.php"); 
								 }
								 	/*******************************************************************************/
									if(($_SESSION['acess_level'] == "L1.1") ){
									 include("Menu_Directeur_industrielle/Sidbar_Directeur_industrielle.php"); 
									}
									if(($_SESSION['acess_level'] == "L12") ){
									 include("Menu_Directeur_maintenance/Sidbar_Directeur_maintenance.php"); 
									}
									if(($_SESSION['acess_level'] == "L13") ){
									 include("Menu_HACCP/Sidbar_HACCP.php"); 
									}
									if(($_SESSION['acess_level'] == "L14") ){
									 include("Menu_SST/Sidbar_SST.php"); 
									}
									/*******************************************************************************/	
															
							 if(($_SESSION['acess_level'] == "L2") ){
								include("Menu_chef_hierarchie/Sidbar_chef_hierarchie.php"); 
								 }
								  if(($_SESSION['acess_level'] == "L3") ){
								include("Menu_Comptabilite/Sidbar_Comptabilite.php"); 
								 }
								  if(($_SESSION['acess_level'] == "L4") ){
								include("Menu_controle_gestion/Sidbar_controle_gestion.php"); 
								 } 
								 if(($_SESSION['acess_level'] == "L5") ){
								include("Menu_DGA/Sidbar_DGA.php"); 
								 } 
								 if(($_SESSION['acess_level'] == "L6") ){
								include("Menu_Dir/Sidbar_Dir.php"); 
								 }
								 if(($_SESSION['acess_level'] == "L7") ){
								include("Menu_APPRO/Sidbar_APPRO.php"); 
								 }
							 ?>
				   </div> 
				   
				   
				   
				   <!--     Navbar                -->
				   <div>
				  <?php 		
				
								if(($_SESSION['acess_level'] == "L0") ){
								 include("Menu_Super_admin/NavBar.php"); 
								}
								if(($_SESSION['acess_level'] == "L1") ){
								 include("Menu_demandeur/NavBar_demandeur.php"); 
								}
								
								/*******************************************************************************/
									if(($_SESSION['acess_level'] == "L1.1") ){
									 include("Menu_Directeur_industrielle/NavBar_Directeur_industrielle.php"); 
									}
									if(($_SESSION['acess_level'] == "L12") ){
									 include("Menu_Directeur_maintenance/NavBar_Directeur_maintenance.php"); 
									}
									if(($_SESSION['acess_level'] == "L13") ){
									 include("Menu_HACCP/NavBar_HACCP.php"); 
									}
									if(($_SESSION['acess_level'] == "L14") ){
									 include("Menu_SST/NavBar_SST.php"); 
									}
									/*******************************************************************************/	
															
								if(($_SESSION['acess_level'] == "L2") ){
								 include("Menu_chef_hierarchie/NavBar_chef_hierarchie.php"); 
								}
								if(($_SESSION['acess_level'] == "L3") ){
								 include("Menu_Comptabilite/NavBar_Comptabilite.php"); 
								}
								if(($_SESSION['acess_level'] == "L4") ){
								 include("Menu_controle_gestion/NavBar_controle_gestion.php"); 
								}
								
								if(($_SESSION['acess_level'] == "L5") ){
								 include("Menu_DGA/NavBar_DGA.php"); 
								}
								if(($_SESSION['acess_level'] == "L6") ){
								 include("Menu_Dir/NavBar_Dir.php"); 
								}
								if(($_SESSION['acess_level'] == "L7") ){
								include("Menu_APPRO/NavBar_APPRO.php"); 
								 }
								 
								 ?>
							
				   </div>
				   
				   
				   
				   
				   <!--     Conetnue   -->
				   
				     		<div id="content" class="col-md-12" style="margin-top:40px;">
				     		<div class="" id="">
					<?php
					if(isset($_GET['conf']) && ($_GET['conf'] == 1))
						// echo '<h1 style="color: green;" id="alert">Votre Demande a été enregistrée.</h1>';
						echo '<div class="bs-example">
						<div class="alert alert-success">
							<a href="#" class="close" data-dismiss="alert">&times;</a>
							<strong> Demande Enregistrer avec Success !!</strong>
						</div>
					</div>';
					
										
								if(($_SESSION['acess_level'] == "L0")){
								 include("Menu_Super_admin/Acceuil_superadmin.php"); 
								}
								if(($_SESSION['acess_level'] == "L1") ){
								 include("Menu_demandeur/Acceuil_demandeur.php"); 
								}
									/*******************************************************************************/
									if(($_SESSION['acess_level'] == "L1.1") ){
									 include("Menu_Directeur_industrielle/Acceuil_Directeur_industrielle.php"); 
									}
									if(($_SESSION['acess_level'] == "L12") ){
									 include("Menu_Directeur_maintenance/Acceuil_Directeur_maintenance.php"); 
									}
									if(($_SESSION['acess_level'] == "L13") ){
									 include("Menu_HACCP/Acceuil_HACCP.php"); 
									}
									if(($_SESSION['acess_level'] == "L14") ){
									 include("Menu_SST/Acceuil_SST.php"); 
									}
									/*******************************************************************************/	
															
								if(($_SESSION['acess_level'] == "L2") ){
								 include("Menu_chef_hierarchie/Acceuil_chef_hierarchie.php"); 
								}
								if(($_SESSION['acess_level'] == "L3") ){
								 include("Menu_Comptabilite/Acceuil_Comptabilite.php"); 
								}
									if(($_SESSION['acess_level'] == "L4") ){
								 include("Menu_controle_gestion/Acceuil_controle_gestion.php"); 
								}	
								if(($_SESSION['acess_level'] == "L5") ){
								 include("Menu_DGA/Acceuil_DGA.php"); 
								}
								
								if(($_SESSION['acess_level'] == "L6") ){
								 include("Menu_Dir/Acceuil_Dir.php"); 
								}
								if(($_SESSION['acess_level'] == "L7") ){
								include("Menu_APPRO/Acceuil_APPRO.php"); 
								 }

						?>


          <!-- content main container -->
          
				  </div>
				    </div>
	 
	
				   
				   
				   
				<!--   <script>
				   $(document).ready(function() {
						$('body').bootstrapMaterialDesign();
					});
				   </script>-->
				   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/vendor/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/vendor/nicescroll/jquery.nicescroll.min.js"></script>
    <script type="text/javascript" src="assets/js/vendor/mmenu/js/jquery.mmenu.min.js"></script>
    <script type="text/javascript" src="assets/js/vendor/sparkline/jquery.sparkline.min.js"></script>
    <script type="text/javascript" src="assets/js/vendor/animate-numbers/jquery.animateNumbers.js"></script>
    <script type="text/javascript" src="assets/js/vendor/videobackground/jquery.videobackground.js"></script>
    <script type="text/javascript" src="assets/js/vendor/blockui/jquery.blockUI.js"></script>

    <script src="assets/js/vendor/flot/jquery.flot.min.js"></script>
    <script src="assets/js/vendor/flot/jquery.flot.time.min.js"></script>
    <script src="assets/js/vendor/flot/jquery.flot.selection.min.js"></script>
    <script src="assets/js/vendor/flot/jquery.flot.animator.min.js"></script>
    <script src="assets/js/vendor/flot/jquery.flot.orderBars.js"></script>
    <script src="assets/js/vendor/easypiechart/jquery.easypiechart.min.js"></script>

    <script src="assets/js/vendor/rickshaw/raphael-min.js"></script> 
    <script src="assets/js/vendor/rickshaw/d3.v2.js"></script>
    <script src="assets/js/vendor/rickshaw/rickshaw.min.js"></script>

    <script src="assets/js/vendor/morris/morris.min.js"></script>

    <script src="assets/js/vendor/tabdrop/bootstrap-tabdrop.min.js"></script>

    <script src="assets/js/vendor/summernote/summernote.min.js"></script>

    <script src="assets/js/vendor/chosen/chosen.jquery.min.js"></script>

    <script src="assets/js/minimal.min.js"></script>
	
	<!--------  script page Charge-------->
	
	 <!--<script src="../../google-code-prettify.googlecode.com/svn/loader/run_prettifyf793.js?lang=css&amp;skin=sons-of-obsidian"></script>-->
    <script src="assets/js/vendor/summernote/summernote.min.js"></script>
 <script src="assets/js/vendor/chosen/chosen.jquery.min.js"></script>
 <script src="assets/js/vendor/momentjs/moment-with-langs.min.js"></script>
 <script src="assets/js/vendor/datepicker/bootstrap-datetimepicker.min.js"></script>
<script src="assets/js/vendor/colorpicker/bootstrap-colorpicker.min.js"></script>
<script src="assets/js/vendor/colorpalette/bootstrap-colorpalette.js"></script>

<!----------------  script page listes des comptes ---------->

    <script src="assets/js/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/js/vendor/datatables/ColReorderWithResize.js"></script>
    <script src="assets/js/vendor/datatables/colvis/dataTables.colVis.min.js"></script>
    <script src="assets/js/vendor/datatables/tabletools/ZeroClipboard.js"></script>
    <script src="assets/js/vendor/datatables/tabletools/dataTables.tableTools.min.js"></script>
    <script src="assets/js/vendor/datatables/dataTables.bootstrap.js"></script>

    <script src="assets/js/vendor/chosen/chosen.jquery.min.js"></script>
	
	 <script src="assets/js/vendor/fullcalendar/jquery-ui-1.10.4.custom.min.js"></script>
    <script src="assets/js/vendor/fullcalendar/fullcalendar.min.js"></script>

    <script src="assets/js/vendor/colorpalette/bootstrap-colorpalette.js"></script>

    <script src="assets/js/vendor/parsley/parsley.min.js"></script>
	



 <script>

    //initialize file upload button function
    $(document)
      .on('change', '.btn-file :file', function() {
        var input = $(this),
        numFiles = input.get(0).files ? input.get(0).files.length : 1,
        label = input.val().replace(/\\/g, 'http://tattek.com/').replace(/.*\//, '');
        input.trigger('fileselect', [numFiles, label]);
    });


    $(function(){

      //load wysiwyg editor
      $('#input06').summernote({
        toolbar: [
          //['style', ['style']], // no style button
          ['style', ['bold', 'italic', 'underline', 'clear']],
          ['fontsize', ['fontsize']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['height', ['height']],
          //['insert', ['picture', 'link']], // no insert buttons
          //['table', ['table']], // no table button
          //['help', ['help']] //no help button
        ],
        height: 137   //set editable area's height
      });

      //chosen select input
      $(".chosen-select").chosen({disable_search_threshold: 10});

      //initialize datepicker
      $('#datepicker').datetimepicker({
        icons: {
          time: "fa fa-clock-o",
          date: "fa fa-calendar",
          up: "fa fa-arrow-up",
          down: "fa fa-arrow-down"
        }
      });

      $("#datepicker").on("dp.show",function (e) {
        var newtop = $('.bootstrap-datetimepicker-widget').position().top - 45;      
        $('.bootstrap-datetimepicker-widget').css('top', newtop + 'px');
      });

      //initialize colorpicker
      $('#colorpicker').colorpicker();

      $('#colorpicker').colorpicker().on('showPicker', function(e){
        var newtop = $('.dropdown-menu.colorpicker.colorpicker-visible').position().top - 45;      
        $('.dropdown-menu.colorpicker.colorpicker-visible').css('top', newtop + 'px');
      });

      //initialize colorpicker RGB
      $('#colorpicker-rgb').colorpicker({
        format: 'rgb'
      });

      $('#colorpicker-rgb').colorpicker().on('showPicker', function(e){
        var newtop = $('.dropdown-menu.colorpicker.colorpicker-visible').position().top - 45;      
        $('.dropdown-menu.colorpicker.colorpicker-visible').css('top', newtop + 'px');
      });

      //initialize file upload button
      $('.btn-file :file').on('fileselect', function(event, numFiles, label) {
        
        var input = $(this).parents('.input-group').find(':text'),
            log = numFiles > 1 ? numFiles + ' files selected' : label;

            console.log(log);
        
        if( input.length ) {
          input.val(log);
        } else {
          if( log ) alert(log);
        }
        
      });

      // Initialize colorpalette
      $('#event-colorpalette').colorPalette({ 
        colors:[['#428bca', '#5cb85c', '#5bc0de', '#f0ad4e' ,'#d9534f', '#ff4a43', '#22beef', '#a2d200', '#ffc100', '#cd97eb', '#16a085', '#FF0066', '#A40778', '#1693A5']] 
      }).on('selectColor', function(e) {
        var data = $(this).data();

        $(data.returnColor).val(e.color);
        $(this).parents(".input-group").css("border-bottom-color", e.color );
      });
      
	  $(document).ready(function(){
		  jQuery("html").niceScroll({cursorwidth: '10px', autohidemode: false, zindex: 999 });
	  });
    })
      
    </script>

	</body>
</html>