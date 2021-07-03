<?php
	$conn = mysqli_connect("localhost", "root", "", "projetphase1");
	
	$date_creation = "";
	$date_creation_to_date = "";
	
	$queryCondition = "";
	if(!empty($_POST["search"]["date_creation"])) {			
		$date_creation = $_POST["search"]["date_creation"];
		list($fid,$fim,$fiy) = explode("-",$date_creation);
		
		$date_creation_todate = date('Y-m-d');
		if(!empty($_POST["search"]["date_creation_to_date"])) {
			$date_creation_to_date = $_POST["search"]["date_creation_to_date"];
			list($tid,$tim,$tiy) = explode("-",$_POST["search"]["date_creation_to_date"]);
			$date_creation_todate = "$tiy-$tim-$tid";
		}
		
		$queryCondition .= "WHERE date_creation BETWEEN '$fiy-$fim-$fid' AND '" . $date_creation_todate . "'";
	}

	$sql = "SELECT * from demande " . $queryCondition . " ORDER BY date_creation desc";
	$result = mysqli_query($conn,$sql);
?>

<html>
	<head>
    <title>Recent Articles</title>		
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

	<style>
	.table-content{border-top:#CCCCCC 4px solid; width:50%;}
	.table-content th {padding:5px 20px; background: #F0F0F0;vertical-align:top;} 
	.table-content td {padding:5px 20px; border-bottom: #F0F0F0 1px solid;vertical-align:top;} 
	</style>
	</head>
	
	<body>
    <div class="demo-content">
		<h2 class="title_with_link">Recent Articles</h2>
  <form name="frmSearch" method="post" action="">
	 <p class="search_input">
		<input type="text" placeholder="From Date" id="date_creation" name="search[date_creation]"  value="<?php echo $date_creation; ?>" class="input-control" />
	    <input type="text" placeholder="To Date" id="date_creation_to_date" name="search[date_creation_to_date]" style="margin-left:10px"  value="<?php echo $date_creation_to_date; ?>" class="input-control"  />			 
		<input type="submit" name="go" value="Search" >
	</p>
<?php if(!empty($result))	 { ?>
<table class="table-content">
          <thead>
        <tr>
                      
          <th width="30%"><span>Reference_demande</span></th>
          <th width="50%"><span>Matricule</span></th>          
          <th width="20%"><span>Date</span></th>	  
        </tr>
      </thead>
    <tbody>
	<?php
		while($row = mysqli_fetch_array($result)) {
	?>
        <tr>
			<td><?php echo $row["Reference_demande"]; ?></td>
			<td><?php echo $row["Matricule"]; ?></td>
			<td><?php echo $row["date_creation"]; ?></td>

		</tr>
   <?php
		}
   ?>
   <tbody>
  </table>
<?php } ?>
  </form>
  </div>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script>
$.datepicker.setDefaults({
showOn: "button",
buttonImage: "../Gestion/Menu_chef_hierarchie/column_filtre/datepicker.png",
buttonText: "Date Picker",
buttonImageOnly: true,
dateFormat: 'dd-mm-yy'  
});
$(function() {
$("#date_creation").datepicker();
$("#date_creation_to_date").datepicker();
});
</script>
</body></html>
