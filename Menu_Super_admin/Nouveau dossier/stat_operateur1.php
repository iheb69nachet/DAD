<?php 
session_start();
$_SESSION['loaded_page']= "stat_operateur";
?>
<?php
	ob_clean();
	$connect = mysqli_connect("localhost","root","","projetphase1");

	if (!$connect) {
		die("Failed to connect: " .mysqli_connect_error());
	}
	
	$stats = $stats_1 = $stats_2 = $stats_3 = $stats_4 = array('homme' => 0, 'femme' => 0);
	$query=sprintf("SELECT v.*, c.Nom, c.prenom FROM votage v INNER JOIN compte_user c ON v.id_user = c.id");
    $result = mysqli_query($connect, $query);
	while ($obj=mysqli_fetch_object($result)){
		if(!isset($stats[$obj->id_user])) {
			$stats[$obj->id_user] = array('label' => $obj->Nom.' '.$obj->prenom, 'value' => 0);
		}
		$stats[$obj->id_user]['value']++;
		if(($obj->Intention_Aux_Selections == 1) && ($obj->Intention_Aux_Selections_2 == 1)) {
			if($obj->sexe == 1) {
				$stats_1['homme']++; 
			}
			else {
				$stats_1['femme']++;
			}
		}
		elseif(($obj->Intention_Aux_Selections == 1) && ($obj->Intention_Aux_Selections_2 == 0)) {
			if($obj->sexe == 1) {
				$stats_2['homme']++; 
			}
			else {
				$stats_2['femme']++;
			}
		}
		elseif(($obj->Intention_Aux_Selections == 0) && ($obj->Intention_Aux_Selections_2 == 1)) {
			if($obj->sexe == 1) {
				$stats_3['homme']++; 
			}
			else {
				$stats_3['femme']++;
			}
		}
		elseif(($obj->Intention_Aux_Selections == 0) && ($obj->Intention_Aux_Selections_2 == 0)) {
			if($obj->sexe == 1) {
				$stats_4['homme']++; 
			}
			else {
				$stats_4['femme']++;
			}
		}
	}
	$stat_group_1 = "{label :'homme', value: ".$stats_1['homme']."} ,";
	$stat_group_1 .= "{label :'femme', value: ".$stats_1['femme']."} ,";
	$stat_group_2 = "{label :'homme', value: ".$stats_2['homme']."} ,";
	$stat_group_2 .= "{label :'femme', value: ".$stats_2['femme']."} ,";
	$stat_group_3 = "{label :'homme', value: ".$stats_3['homme']."} ,";
	$stat_group_3 .= "{label :'femme', value: ".$stats_3['femme']."} ,";
	$stat_group_4 = "{label :'homme', value: ".$stats_4['homme']."} ,";
	$stat_group_4 .= "{label :'femme', value: ".$stats_4['femme']."} ,";
	
	$stat_group = '';
	foreach ($stats as $st) {
		if($st['value'] && $st['label']) {
			$stat_group .= "{label :'".$st['label']."', value: ".$st['value']."} ,";	
		}
	}

?>
<h1 class="titstat">Statistique</h1>
<section class="chart-stats" >
	<div class="">
		<div class="chart-stats-tit"><h2>Statistique par utilisateur</h2></div>
		<div id="browser-usage" style="height: 230px;" class="morris-chart"></div>
	</div>
	<div class="stat-item">
		<div class="chart-stats-tit"><h2>Statistique oui oui</h2></div>
		<div id="browser-usage-1" style="height: 230px;" class="morris-chart"></div>
	</div>
	<div class="stat-item">
		<div class="chart-stats-tit"><h2>Statistique oui non</h2></div>
		<div id="browser-usage-2" style="height: 230px;" class="morris-chart"></div>
	</div>
	<div class="stat-item">
		<div class="chart-stats-tit"><h2>Statistique non oui</h2></div>
		<div id="browser-usage-3" style="height: 230px;" class="morris-chart"></div>
	</div>
	<div class="stat-item">
		<div class="chart-stats-tit"><h2>Statistique non non</h2></div>
		<div id="browser-usage-4" style="height: 230px;" class="morris-chart"></div>
	</div>
</section>
<script>
	Morris.Donut({
        element: 'browser-usage',
        data: [
		  <?php echo $stat_group ?>
        ]
    });
	Morris.Donut({
        element: 'browser-usage-1',
        data: [
		  <?php echo $stat_group_1 ?>
        ],
        colors: ['#00a3d8', '#ff0000']
    });
	Morris.Donut({
        element: 'browser-usage-2',
        data: [
		  <?php echo $stat_group_2 ?>
        ],
        colors: ['#00a3d8', '#ff0000']
    });
	Morris.Donut({
        element: 'browser-usage-3',
        data: [
		  <?php echo $stat_group_3 ?>
        ],
        colors: ['#00a3d8', '#ff0000']
    });
	Morris.Donut({
        element: 'browser-usage-4',
        data: [
		  <?php echo $stat_group_4 ?>
        ],
        colors: ['#00a3d8', '#ff0000']
    });
</script>

<script src="assets/js/vendor/morris/morris.min.js"></script>