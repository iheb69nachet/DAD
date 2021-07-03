	<?php
	
	$sexe = "";
	$age = "";
	$Gouvernerat = "";
	$Municipilitees = "";
	$Municipalite = "";
	$verifprecedent = false;
	$requette = "SELECT * FROM votage";

			$sexe = trim($_POST["sexe"]);
			$age = trim($_POST["age"]);
			$Gouvernerat = trim($_POST["Gouvernerat"]);
			$Municipilitees = trim($_POST["Municipilitees"]);
			$Municipalite = trim($_POST["sourceQG"]);
			
			

	function verifsexe($requette,$sexe,$status,$sourceQG){
		if($sexe!="") {
			$list_sexer=array("Homme","Femme");
			if(in_array($Affilier, $list_sexer)){
				if ($verifprecedent) {
					$requette = "$requette AND sexe=\"$sexe\"";
				} else {
					$requette = "$requette WHERE sexe=\"$sexe\"";
					$verifprecedent = true;
				}
				verifstatut($verifprecedent,$requette,$sexe,$status,$sourceQG);
			} else {
				ob_clean();
				echo 'Vérifiez la saisie du statut';
			}
		} else{
			verifstatut($verifprecedent,$requette,$Affilier,$status,$sourceQG);
		} 
	}

	function verifstatut($verifprecedent,$requette,$Affilier,$status,$sourceQG){
		if($status!="") {
			$list_status=array("OK","KO");
			if(in_array($status, $list_status)){
				if ($verifprecedent) {
					$requette = "$requette AND status=\"$status\"";
				} else {
					$requette = "$requette WHERE status=\"$status\"";
					$verifprecedent = true;
				}
				verifsourceQG($verifprecedent,$requette,$sourceQG);
			} else {
				ob_clean();
				echo 'Vérifiez la saisie du statut';
			}
		} else{
			verifsourceQG($verifprecedent,$requette,$sourceQG);
		} 
	}
	
	
	function verifsourceQG($verifprecedent,$requette,$sourceQG){
		if($sourceQG!="") {
			if ($verifprecedent) {
				$requette = "$requette AND sourceQG=\"$sourceQG\"";
			} else {
				$requette = "$requette WHERE sourceQG=\"$sourceQG\"";
			}

			executerrequette($requette);
		} else {
			if ($verifprecedent) {

			executerrequette($requette);
			} else {
				ob_clean();
				echo "Au moin une saisie requise";
			}
		} 
	}

	function executerrequette($requette){
		
		$con = mysqli_connect("localhost:3306","chocoest","chocoest","projetphase1");
		mysqli_set_charset($con,"utf8");
		
		$JsonArray = array();

		if ($resultat = mysqli_query($con, $requette)){
			$html = '';
			$count = $cl = 0;
			$class = array('active', '', 'success', '', 'warning', '', 'danger', '', 'info', '');
			while($row = mysqli_fetch_array($resultat)){
				$affiche_result = array(
									"id" => $row['id'],
									"nom" => $row['nom'],
									"prenom" => $row['prenom'],
									"ddn" => $row['ddn'],
									"tel" => $row['tel'],
									"question" => $row['question'],
									"dateQG" => $row['dateQG'],
									"status" => $row['status'],
									"voyant" => $row['voyant'],
									"traitementText" => $row['traitementText'],
									"dateTraitement" => $row['dateTraitement'],
									"dateInsertion" => $row['dateInsertion'],
									"dateRappel" => $row['dateRappel'],
									"indiceRappel" => $row['indiceRappel'],
									"sourceQG" => $row['sourceQG'],
									"Affilier" => $row['Affilier'],
									"cleanDate" => $row['cleanDate']);
				 
				 $JsonArray[] = $affiche_result;
				 
				$count++;
				$html .= '<tr class="'.$class[$cl].'">
                          <td>'.$row['id'].'</td>
                          <td>'.$row['nom'].'</td>
                          <td>'.$row['prenom'].'</td>
                          <td>'.$row['ddn'].'</td>
                          <td>'.$row['tel'].'</td>
                          <td>'.$row['sourceQG'].'</td>
                        </tr>';
				$cl++;
				if($cl >= count($class))
					$cl = 0;
				 
			}
		}else{
			
			echo ("Aucune donnée trouvée");
		}
		mysqli_close($con);

		//$var = json_encode($JsonArray, JSON_PRETTY_PRINT);
		echo json_encode(array('content' => $html, 'nbre' => $count));
		
		
	}
?>
