 
 <!-- Wrap all page content here -->
 <!--<div id="target">-->
    <div id="wrap">
      <!-- Make page fluid -->
      <div class="row" >
        <!-- Fixed navbar -->
        <div class="navbar navbar-default navbar-fixed-top navbar-transparent-black mm-fixed-top" role="navigation" id="navbar">
          <!-- .nav-collapse -->
          <div class="navbar-collapse" >
            <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js" /></script>
            <script type="text/javascript">

            $(document).ready(function() {
				
               
             $('#Filtre').on('click',function()  {
                    $('#target').load('Menu_Super_admin/Filtre_Statiqtique_Des_Donnees.php');
                });
				$('#Filtre_votage').on('click',function()  {
                   $('#target').load('Menu_Super_admin/Filtre_Statiqtique_Des_Donnees_votage.php');
              });
			
			$('#calander').on('click',function()  {
				$('#target').load('calendrier.php');
			});
			
			$('#Profil').on('click',function()  {
				$('#target').load('Menu_Super_admin/Contenue_Page_Profil/Profil.php');
			});
			$('#Listes').on('click',function()  {
				$('#target').load('Menu_Super_admin/Listes_Comptes.php');
			});
			
			$('#Tableau').on('click',function()  {
				$('#target').load('Menu_Super_admin/Tableau.php');
			});
			$('#test').on('click',function()  {
				$('#target').load('Menu_Super_admin/test.php');
			});
			
			$('#Selection').on('click',function()  {
				$('#target').load('Menu_Super_admin/selection.php');
			});
			
			
			
			 $('#statoperateur').on('click',function()  {
                    $('#target').load('Menu_Super_admin/stat_operateur.php');
                 }); 
				 
				 
				 $('#gere_demande').on('click',function()  {
                    $('#target').load('Menu_Super_admin/Gerer_demande/index.php');
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
                 
			  
				<!--  <li class="">
				   
                    <a href="#" id="calander">
                      <i class="fa fa-calendar" aria-hidden="true"></i> Calandrier
                      <span class="badge badge-red"></span>
                    </a>
                  </li>
			-->
			
			
			
				  <li class="">
				   
                    <a href="#" id="Profil">
                      <i class="fa fa-pencil" aria-hidden="true"></i> Creer Compte
                      <span class="badge badge-red"></span>
                    </a>
                  </li>		
                    <li class="">
				   
                    <a href="#" id="Listes">
                      <i class="fa fa-tint" aria-hidden="true"></i> Listes Compte
                      <span class="badge badge-red"></span>
                    </a>
                  </li>	
                  
                    <li class="">
				   
                    <a href="#" id="gere_demande">
                      <i class="fa fa-th" aria-hidden="true"></i> Gérer Demandes
                      <span class="badge badge-red"></span>
                    </a>
                  </li>	
                 
                  
              
                  <!--	
                    <li class="">
				   
                    <a href="#" id="test">
                      <i class="fa fa-tasks" aria-hidden="true"></i> Selection Filtrage
                      <span class="badge badge-red"></span>
                    </a>
                  </li>	
                   -->
                  
                  
			
				<!-- <li>
                    <a href="# " id="Filtre">
                      <i class="fa fa-tint"></i> Filtre_Statiqtique_Des_Donnees
                    </a>
                  </li>
                  
				  
				    <li class="">
                    <a href="#" id="statoperateur">
                      <i class="fa fa-bar-chart-o"></i>  Statistique   </a>
                    
                  </li>-->
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
	
<section class="videocontent" id="video"></section>




    <script>
    $(function(){

      // Initialize card flip
      $('.card.hover').hover(function(){
        $(this).addClass('flip');
      },function(){
        $(this).removeClass('flip');
      });

      // Initialize flot chart
      var d1 =[ [1, 715],
            [2, 985],
            [3, 1525],
            [4, 1254],
            [5, 1861],
            [6, 2621],
            [7, 1987],
            [8, 2136],
            [9, 2364],
            [10, 2851],
            [11, 1546],
            [12, 2541]
      ];
      var d2 =[ [1, 463],
                [2, 578],
                [3, 327],
                [4, 984],
                [5, 1268],
                [6, 1684],
                [7, 1425],
                [8, 1233],
                [9, 1354],
                [10, 1200],
                [11, 1260],
                [12, 1320]
      ];
      var months = ["January", "February", "March", "April", "May", "Juny", "July", "August", "September", "October", "November", "December"];

      // flot chart generate
      var plot = $.plotAnimator($("#statistics-chart"), 
        [
          {
            label: 'Sales', 
            data: d1,    
            lines: {lineWidth:3}, 
            shadowSize:0,
            color: '#ffffff'
          },
          { label: "Visits",
            data: d2, 
            animator: {steps: 99, duration: 500, start:200, direction: "right"},   
            lines: {        
              fill: .15,
              lineWidth: 0
            },
            color:['#ffffff']
          },{
            label: 'Sales',
            data: d1, 
            points: { show: true, fill: true, radius:6,fillColor:"rgba(0,0,0,.5)",lineWidth:2 }, 
            color: '#fff',        
            shadowSize:0
          },
          { label: "Visits",
            data: d2, 
            points: { show: true, fill: true, radius:6,fillColor:"rgba(255,255,255,.2)",lineWidth:2 }, 
            color: '#fff',        
            shadowSize:0
          }
        ],{ 
        
        xaxis: {

          tickLength: 0,
          tickDecimals: 0,
          min:1,
          ticks: [[1,"JAN"], [2, "FEB"], [3, "MAR"], [4, "APR"], [5, "MAY"], [6, "JUN"], [7, "JUL"], [8, "AUG"], [9, "SEP"], [10, "OCT"], [11, "NOV"], [12, "DEC"]],

          font :{
            lineHeight: 24,
            weight: "300",
            color: "#ffffff",
            size: 14
          }
        },
        
        yaxis: {
          ticks: 4,
          tickDecimals: 0,
          tickColor: "rgba(255,255,255,.3)",

          font :{
            lineHeight: 13,
            weight: "300",
            color: "#ffffff"
          }
        },
        
        grid: {
          borderWidth: {
            top: 0,
            right: 0,
            bottom: 1,
            left: 1
          },
          borderColor: 'rgba(255,255,255,.3)',
          margin:0,
          minBorderMargin:0,              
          labelMargin:20,
          hoverable: true,
          clickable: true,
          mouseActiveRadius:6
        },
        
        legend: { show: false}
      });

      $(window).resize(function() {
        // redraw the graph in the correctly sized div
        plot.resize();
        plot.setupGrid();
        plot.draw();
      });

      $('#mmenu').on(
        "opened.mm",
        function()
        {
          // redraw the graph in the correctly sized div
          plot.resize();
          plot.setupGrid();
          plot.draw();
        }
      );

      $('#mmenu').on(
        "closed.mm",
        function()
        {
          // redraw the graph in the correctly sized div
          plot.resize();
          plot.setupGrid();
          plot.draw();
        }
      );

      // tooltips showing
      $("#statistics-chart").bind("plothover", function (event, pos, item) {
        if (item) {
          var x = item.datapoint[0],
              y = item.datapoint[1];

          $("#tooltip").html('<h1 style="color: #418bca">' + months[x - 1] + '</h1>' + '<strong>' + y + '</strong>' + ' ' + item.series.label)
            .css({top: item.pageY-30, left: item.pageX+5})
            .fadeIn(200);
        } else {
          $("#tooltip").hide();
        }
      });

      
      //tooltips options
      $("<div id='tooltip'></div>").css({
        position: "absolute",
        //display: "none",
        padding: "10px 20px",
        "background-color": "#ffffff",
        "z-index":"99999"
      }).appendTo("body");

      //generate actual pie charts
      $('.pie-chart').easyPieChart();


      //server load rickshaw chart
      var graph;

      var seriesData = [ [], []];
      var random = new Rickshaw.Fixtures.RandomData(50);

      for (var i = 0; i < 50; i++) {
        random.addData(seriesData);
      }

      graph = new Rickshaw.Graph( {
        element: document.querySelector("#serverload-chart"),
        height: 150,
        renderer: 'area',
        series: [
          {
            data: seriesData[0],
            color: '#6e6e6e',
            Reference_demande:'File Server'
          },{
            data: seriesData[1],
            color: '#fff',
            Reference_demande:'Mail Server'
          }
        ]
      } );

      var hoverDetail = new Rickshaw.Graph.HoverDetail( {
        graph: graph,
      });

      setInterval( function() {
        random.removeData(seriesData);
        random.addData(seriesData);
        graph.update();

      },1000);

      // Morris donut chart
      Morris.Donut({
        element: 'browser-usage',
        data: [
          {label: "Chrome", value: 25},
          {label: "Safari", value: 20},
          {label: "Firefox", value: 15},
          {label: "Opera", value: 5},
          {label: "Internet Explorer", value: 10},
          {label: "Other", value: 25}
        ],
        colors: ['#00a3d8', '#2fbbe8', '#72cae7', '#d9544f', '#ffc100', '#1693A5']
      });

      $('#browser-usage').find("path[stroke='#ffffff']").attr('stroke', 'rgba(0,0,0,0)');

      //sparkline charts
      $('#projectbar1').sparkline('html', {type: 'bar', barColor: '#22beef', barWidth: 4, height: 20});
      $('#projectbar2').sparkline('html', {type: 'bar', barColor: '#cd97eb', barWidth: 4, height: 20});
      $('#projectbar3').sparkline('html', {type: 'bar', barColor: '#a2d200', barWidth: 4, height: 20});
      $('#projectbar4').sparkline('html', {type: 'bar', barColor: '#ffc100', barWidth: 4, height: 20});
      $('#projectbar5').sparkline('html', {type: 'bar', barColor: '#ff4a43', barWidth: 4, height: 20});
      $('#projectbar6').sparkline('html', {type: 'bar', barColor: '#a2d200', barWidth: 4, height: 20});

      // sortable table
      $('.table.table-sortable th.sortable').click(function() {
        var o = $(this).hasClass('sort-asc') ? 'sort-desc' : 'sort-asc';
        $('th.sortable').removeClass('sort-asc').removeClass('sort-desc');
        $(this).addClass(o);
      });

      //todo's
      $('#todolist li label').click(function() {
        $(this).toggleClass('done');
      });

      // Initialize tabDrop
      $('.tabdrop').tabdrop({text: '<i class="fa fa-th-list"></i>'});

      //load wysiwyg editor
      $('#quick-message-content').summernote({
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
        height: 143   //set editable area's height
      });

      //multiselect input
      $(".chosen-select").chosen({disable_search_threshold: 10});
      
    })
      
    </script>

      