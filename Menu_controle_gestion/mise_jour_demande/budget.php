<?php	
 	$conn = new PDO("sqlsrv:Server=192.168.0.46; Database=JDE_PRODUCTION", "DAD", "dAd2020+");
	// echo $conn; exit;
	$conn->setAttribute ( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	// $GBFY=substr(date('Y'),-2);
	 $GBFY=14;
	 //Centre de cout
	 $var = str_repeat(" ", 12 - strlen($_POST['country'])).$_POST['country'];
	 // Objet
	 $varcc = $_POST['city'];
	 //Sous Compte
	 $varss = $_POST['ss_compte'];
	 $varbudget = '';
	$sql ="SELECT IsNull(GBAWTD,0) AS budget FROM PRODDTA.F0902 where GBMCU ='".$var."' and GBOBJ = '".$varcc."' and GBSUB = '".$varss."' and GBFY=".$GBFY." and GBLT='BA' and GBCO='00008'";
	$stmt = $conn->query($sql);
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
		  print "budget: <p>{$row[0]}</p>";
			echo $row[0];
	}
	exit;
	
	?>