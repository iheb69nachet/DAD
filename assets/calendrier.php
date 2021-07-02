<?php
	
	session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projetphase1";


$_SESSION['loaded_page']= "calander";
	$connect = mysqli_connect($servername,$username,$password,$dbname);
	$query = '';
	$events = $affects = array();
	if($_SESSION['acess_level'] == 'L3')
		$query=sprintf("SELECT * FROM compte_user WHERE IDcreation = ".$_SESSION['ID']." AND acess_level = 'L4'");
	
	elseif($_SESSION['acess_level'] == 'L0')
		$query=sprintf("SELECT * FROM compte_user WHERE acess_level <> 'L0'");
	if($query) {
		$result = mysqli_query($connect, $query);
		while ($obj=mysqli_fetch_object($result)){
			$affects[] = $obj;
		}
	}
	
	$query="SELECT e.*, c.Nom FROM events e 
					LEFT JOIN compte_user c ON e.affect = c.id ";
	if($_SESSION['acess_level'] != 'L0')
		$query.=" WHERE (id_creation = ".$_SESSION['ID']." OR e.affect = ".$_SESSION['ID']." OR c.IDcreation = ".$_SESSION['ID'].")";
	
	$result_events = mysqli_query($connect, sprintf($query));
	while ($obj=mysqli_fetch_object($result_events)){
		$events[] = $obj;
	}
?>
 <style>
	
				
				@media only screen and (max-width: 600px) {
				    /* For tablets: */
						  .ScrollStyle
					{
					   height: 450px; 
						overflow-y : auto;
					}
				}


 
	
	 </style>
          <div class="ScrollStyle main as-table col-md-12">        



            <div class="col-md-4 tile color transparent-black rounded-left-corners">
              <div class="tile-body">
                
                <div class="cal-options">
                  
                  <div class="date-info">
                    <h2 class="text-center">
                      <i class="fa fa-angle-left pull-left" id="cal-prev"></i>
                      <span id="cal-current-date"></span>
                      <i class="fa fa-angle-right pull-right" id="cal-next"></i>
                    </h2>
                    <h3 class="large-thin text-center" id="cal-current-day"></h3>
                  </div>

                  <div id="event-delete"><i class="fa fa-trash-o fa-4x"></i></div>                  
                  
                  <div id="external-events" class="events-wrapper">
                    
                    <h4 class="thin events">
                      <strong>Draggable</strong> Events
                      <a class="new-event pull-right" data-toggle="modal" href="#cal-new-event"><i class="fa fa-plus"></i></a>
                    </h4>
                    <!--<div class="external-event" data-color="red">The Custom Event #1</div>
                    <div class="external-event" data-color="cyan">The Custom Event #2</div>
                    <div class="external-event" data-color="orange">The Custom Event #3</div>
                    <div class="external-event" data-color="amethyst">The Custom Event #4</div>
                    <div class="external-event" data-color="drank">The Custom Event #5</div>
                    <div class="external-event">The Custom Event #6</div>
                    <div class="external-event" data-color="drank">The Custom Event #5</div>-->
					 
					<?php foreach($events as $row){ ?>
							<div class="external-event" data-id="<?php echo $row->id;?>" data-color="<?php echo $row->color;?>"><?php echo $row->title.' ('.$row->Nom.')';?></div>
					<?php }?>
                    <div class="checkbox check-transparent">
                      <input type="checkbox" value="1" id="drop-remove">
                       <label for="drop-remove">Remove after drop</label>
                    </div>
                   
                  </div>

                </div>

              </div>
            </div>



            <div class="col-md-8 tile nopadding transparent">


              <!-- tile widget -->
              <div class="tile-widget nopadding color transparent-black rounded-top-right-corner">
                <div class="cal-header">
                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs">
                    <li class="active"><a href="#" id="change-view-month" data-toggle="tab">Month</a></li>
                    <li><a href="#" id="change-view-week" data-toggle="tab">Week</a></li>
                    <li><a href="#" id="change-view-day" data-toggle="tab">Day</a></li>
                    <li><a href="#" id="change-view-today">Today</a></li>
                  </ul>
                  <!-- / Nav tabs -->
                </div>
              </div>
              <!-- /tile widget -->


              <div class="tile-body rounded-bottom-right-corner">                
                <div id='calendar'></div>
              </div>

            </div>


            <!-- modal --> 
            <div class="modal fade" id="cal-new-event" tabindex="-1" role="dialog" aria-labelledby="new-event" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">Close</button>
                    <h3 class="modal-title thin" id="new-event">Add New Event</h3>
                  </div>
                  <form role="form" id="add-event" parsley-validate>
                    <div class="modal-body">
                        
                      <div class="form-group">
                        <label class="control-label">Event title *</label>
                        <input type="text" class="form-control" id="event-title" name="event-title" parsley-trigger="change" parsley-required="true" parsley-minlength="4" parsley-validation-minlength="1">
                      </div>

                      <div class="form-group">
                        <label class="control-label">Color</label>
                        <div class="input-group event-color">
                          <input type="text" class="form-control" id="event-color" name="event-color" readonly="">
                          <div class="input-group-btn">
                            <button type="button" class="btn btn-greensea dropdown-toggle" data-toggle="dropdown"><i class="fa fa-tint"></i></button>
                            <ul class="dropdown-menu pull-right">
                              <li>
                                <div id="event-colorpalette" data-return-color="#event-color"></div>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
				<?php
				if(count($affects) > 0) {
					?>
					<div class="form-group">
						<label for="start" class="control-label">Affect</label>
						<div class="col-sm-14">
						  <select name="affect" id="affect-event">
							<option></option>
							<?php foreach($affects as $row){ ?>
								<option value="<?php echo $row->id;?>"><?php echo $row->Nom;?></option>
							<?php }?>
						  </select>
						</div>
					</div>
					<?php 
				}
				?>
				<div class="form-group">
					<label for="start" class="control-label">Start date</label>
					<div class="col-sm-14">
					  <input type="text" name="start" class="form-control" id="start" readonly>
					</div>
				</div>
				<div class="form-group">
					<label for="end" class="control-label">End date</label>
					<div class="col-sm-14">
					  <input type="text" name="end" class="form-control" id="end" readonly>
					</div>
				  </div>

                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-red" data-dismiss="modal" aria-hidden="true">Cancel</button>
                      <button type="submit" class="btn btn-green">Add event</button>
                    </div>
                  </form>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->  

			<!-- Modal -->
			<?php 
			if(count($affects) > 0) {
			?>
			<div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
				<div class="modal-content">
				<form class="form-horizontal" method="POST">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">Close</span></button>
					<h4 class="modal-title" id="myModalLabel">Edit Event</h4>
				  </div>
				  <div class="modal-body">
					
					  <div class="form-group">
						<div class="col-sm-10">
						  <h5 id="title"></h5>
						</div>
					  </div>
					  <div class="form-group">
						<label for="title" class="col-sm-2 control-label">Affect</label>
						<div class="col-sm-10">
						  <select name="affect-event" id="affect-event">
						  <option></option>
							<?php foreach($affects as $row){ ?>
								<option value="<?php echo $row->id;?>"><?php echo $row->Nom;?></option>
							<?php }?>
						  </select>
						</div>
					  </div>
					  
					  <input type="hidden" name="id" class="form-control" id="id">
					
					
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save changes</button>
				  </div>
				</form>
				</div>
			  </div>
			</div>
			<?php
			}
			?>
          </div>  
          <!-- /content container -->







    <script>
    $(function(){

      // Initialize external events
    
      $('#external-events div.external-event').each(function() {
        
        // Make events draggable using jQuery UI
        $(this).draggable({
          zIndex: 999,
          revert: true, 
          revertDuration: 0,
          drag: function() {
            $('.cal-options .date-info').addClass('out')
            $('.cal-options #event-delete').addClass('in')
          },
          stop: function() {
            $('.cal-options .date-info').removeClass('out')
            $('.cal-options #event-delete').removeClass('in')
          }
        });
        
      });
    
    
      // Initialize the calendar 

      $('#calendar').fullCalendar({
        header: {
          left: 'prev,next today',
          center: 'title',
          right: 'month,agendaWeek,agendaDay'
        },
        editable: true,
        droppable: true,		
        drop: function(date, allDay) { 
          var  copiedEventObject = {
            title: $(this).text(),
			id: $(this).attr('data-id'),
            start: date,
            allDay: allDay,
            color: $(this).css('border-left-color')
          };
          $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);
          // is the "remove after drop" checkbox checked?
          if ($('#drop-remove').is(':checked')) {
            // if so, remove the element from the "Draggable Events" list
            $(this).remove();
          }
		  $.ajax({
			url : 'Dossier Web S/edit_event.php',
		    type : 'POST',
		    data: 'id_event=' + copiedEventObject.id +'&start_date=' + $.fullCalendar.formatDate(copiedEventObject.start, 'yyyy-MM-dd h:mm:ss'),
		    dataType : 'html',
		    success: function(data, textStatus, jqXHR) {
		    	//alert("sucess : "+data['content']);
		    },
		    error: function(jqXHR, textStatus, errorThrown) {
		    	alert("error : "+jqXHR.responseText);
		    }
		  });
        },
		eventResize: function(event,dayDelta,minuteDelta,revertFunc) { // si changement de longueur

			end_date = '';
			if(event.end)
				end_date = '&end_date='+$.fullCalendar.formatDate(event.end, 'yyyy-MM-dd h:mm:ss');
			$.ajax({
				url : 'Dossier Web S/edit_event.php',
				type : 'POST',
				data: 'id_event=' + event.id +'&start_date=' + $.fullCalendar.formatDate(event.start, 'yyyy-MM-dd h:mm:ss')+end_date,
				dataType : 'html',
				success: function(data, textStatus, jqXHR) {
					//alert("sucess : "+data['content']);
				},
				error: function(jqXHR, textStatus, errorThrown) {
					alert("error : "+jqXHR.responseText);
				}
			});

		},
		eventDrop: function(event, delta, revertFunc) { // si changement de position

			end_date = '';
			if(event.end)
				end_date = '&end_date='+$.fullCalendar.formatDate(event.end, 'yyyy-MM-dd h:mm:ss');
			$.ajax({
				url : 'Dossier Web S/edit_event.php',
				type : 'POST',
				data: 'id_event=' + event.id +'&start_date=' + $.fullCalendar.formatDate(event.start, 'yyyy-MM-dd h:mm:ss')+end_date,
				dataType : 'html',
				success: function(data, textStatus, jqXHR) {
					//alert("sucess : "+data['content']);
				},
				error: function(jqXHR, textStatus, errorThrown) {
					alert("error : "+jqXHR.responseText);
				}
			});

		},
		eventRender: function(event, element) {
			element.bind('dblclick', function() {
				if($('#ModalEdit').length) {
					$('#ModalEdit #id').val(event.id);
					$('#ModalEdit #title').html(event.title);
					$('#ModalEdit').modal('show');
				}
			});
		},
		events: [
				<?php foreach($events as $row){
			?>
				{
					id: '<?php echo $row->id; ?>',
					title: '<?php echo $row->title.' ('.$row->Nom.')'; ?>',
					start: '<?php echo $row->start_date; ?>',
					end: '<?php echo $row->end_date; ?>',
					color: '<?php echo $row->color; ?>',
				},
				<?php } ?>
			
			]
      });

      // Hide default header
      $('.fc-header').hide();
      
      // Show current date
      var currentDate = $('#calendar').fullCalendar('getDate');
      
      $('#cal-current-day').html($.fullCalendar.formatDate(currentDate, "dddd"));
      $('#cal-current-date').html($.fullCalendar.formatDate(currentDate, "MMM yyyy"));     
    
      // Previous month action
      $('#cal-prev').click(function(){
        $('#calendar').fullCalendar( 'prev' );
        currentDate = $('#calendar').fullCalendar('getDate'); 
        $('#cal-current-day').html($.fullCalendar.formatDate(currentDate, "dddd"));  
        $('#cal-current-date').html($.fullCalendar.formatDate(currentDate, "MMM yyyy"));
      });

      // Next month action
      $('#cal-next').click(function(){
        $('#calendar').fullCalendar( 'next' );
        currentDate = $('#calendar').fullCalendar('getDate');
        $('#cal-current-day').html($.fullCalendar.formatDate(currentDate, "dddd"));   
        $('#cal-current-date').html($.fullCalendar.formatDate(currentDate, "MMM yyyy"));
      });
      
      // Change to month view
      $('#change-view-month').click(function(){
        $('#calendar').fullCalendar('changeView', 'month');

        // safari fix 
        $('#content .main').fadeOut(0, function() {
          setTimeout( function() {
            $('#content .main').css({'display':'table'}); 
          }, 0);
        });

      });
      
      // Change to week view
      $('#change-view-week').click(function(){
        $('#calendar').fullCalendar( 'changeView', 'agendaWeek');
        
        // safari fix 
        $('#content .main').fadeOut(0, function() {
          setTimeout( function() {
            $('#content .main').css({'display':'table'}); 
          }, 0);
        });

      });
      
      // Change to day view
      $('#change-view-day').click(function(){
        $('#calendar').fullCalendar( 'changeView','agendaDay');

        // safari fix 
        $('#content .main').fadeOut(0, function() {
          setTimeout( function() {
            $('#content .main').css({'display':'table'}); 
          }, 0);
        });
        
      });

      // Change to today view
      $('#change-view-today').click(function(){
        $('#calendar').fullCalendar('today');
        currentDate = $('#calendar').fullCalendar('getDate');  
        $('#cal-current-day').html($.fullCalendar.formatDate(currentDate, "dddd"));
        $('#cal-current-date').html($.fullCalendar.formatDate(currentDate, "MMM yyyy"));
      });

      // Initialize colorpalette
      $('#event-colorpalette').colorPalette({ 
        //colors:[['#428bca', '#5cb85c', '#5bc0de', '#f0ad4e' ,'#d9534f', '#ff4a43', '#22beef', '#a2d200', '#ffc100', '#cd97eb', '#16a085', '#FF0066', '#A40778', '#1693A5', '#418bca', '#d9544f', '#3f4e62']] 
		colors:[['red', 'cyan', 'green', 'orange' ,'amethyst', 'greensea', 'hotpink', 'drank', 'dutch', 'blue', 'redbrown', 'slategray']] 
      }).on('selectColor', function(e) {
        var data = $(this).data();

        $(data.returnColor).val(e.color);
        $(this).parents(".input-group").css("border-bottom-color", e.color );
      });


      // Submitting new event form
      $('#add-event').submit(function(e){
        e.preventDefault();
		
        var form = $(this);
        if(form.parsley('isValid')) {
		  affect = '';
		  if($('#affect-event').val())
			  affect = $('#affect-event').val();
		  $.ajax({
		   url : 'Dossier Web S/add_event.php',
		   type : 'POST',
		   data: 'title=' + $('#event-title').val()+'&color=' + $("#event-color").val()+'&affect=' + affect,
		   dataType : 'json',
		   success: function(data, textStatus, jqXHR) {
				var newEvent = $('<div class="external-event" data-id="'+data['id']+'" data-color="'+$("#event-color").val()+'">'+$('#event-title').val() +'</div>');
          
			    newEvent.css({'border-left-color': $("#event-color").val() || "#717171"});
                
			    if ($('#external-events .external-event').length > 0) {
			    $('#external-events .external-event:last').after(newEvent);
			    } else {
			    $('#external-events .events').after(newEvent);
			    };
                
			    $('#external-events .external-event:last').after(newEvent);
                
			    $('#external-events .external-event').draggable({
			    zIndex: 999,
			    revert: true,     
			    revertDuration: 0,
			    drag: function() {
			      $('.cal-options .date-info').addClass('out')
			      $('.cal-options #event-delete').addClass('in')
			    },
			    stop: function() {
			      $('.cal-options .date-info').removeClass('out')
			      $('.cal-options #event-delete').removeClass('in')
			    }
			    });

			    form[0].reset();

			    $('#cal-new-event').modal('hide');
			},
			error: function(jqXHR, textStatus, errorThrown) {
				alert("error : "+jqXHR.responseText);
			}
		  });
        } else {
          
          $('#event-title').focus();
          return false;

        }
        
      });

      // Event deleting function
      $('.cal-options #event-delete').droppable({
        accept: "#external-events .external-event",
        hoverClass: "active",
        drop: function(event, ui) {
		  $.ajax({
				url : 'Dossier Web S/delete_event.php',
				type : 'POST',
				data: 'id_event=' + $(ui.draggable).attr("data-id"),
				dataType : 'html',
				success: function(data, textStatus, jqXHR) {
				  $('#calendar').fullCalendar('removeEvents', $(ui.draggable).attr("data-id"));
				  ui.draggable.remove();
				  $(this).removeClass( "active in" );
				  $('.cal-options .date-info').removeClass('out');
				},
				error: function(jqXHR, textStatus, errorThrown) {
					alert("error : "+jqXHR.responseText);
				}
		  });
        }
      });
	  
	  $('#ModalEdit button[type="submit"]').click(function() {
		  $.ajax({
				url : 'Dossier Web S/edit_event.php',
				type : 'POST',
				data: 'id_event=' + $('#ModalEdit #id').val() +'&affect-event=' + $('#ModalEdit #affect-event').val(),
				dataType : 'html',
				success: function(data, textStatus, jqXHR) {
					$('.close').click();
				},
				error: function(jqXHR, textStatus, errorThrown) {
					alert("error : "+jqXHR.responseText);
				}
		  });
		  return false;
	  });
      
    })
      
    </script>
  