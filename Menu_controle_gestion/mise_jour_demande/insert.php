<?php  
  session_start();
 $connect = mysqli_connect("localhost", "root", "", "projetphase1");  
	$conn = new PDO("sqlsrv:Server=192.168.0.46; Database=JDE_PRODUCTION", "DAD", "dAd2020+");
	// echo $conn; exit;
	$conn->setAttribute ( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

 if(!empty($_POST))  
  
 {  
				$query = "SELECT Email FROM `compte_user` where Nom = '".$_SESSION["Chef_Hierarchie"]."'";
// var_dump($query);die;					
					$result = mysqli_query($connect, $query);
					$row =mysqli_fetch_array($result);
					$sub = "Demande d'Approbation DAD";
					$msg = "Demande d'Approbation DAD!!";
					mail($row['Email'],$sub,$msg);
			
			
			$titre_fichier_justif = $_POST["titre_fichier_justif"];
			$pname2 = "FILE-192-168-0-53"."-".date("His")."-".date("dmY")."-".rand(1000,10000)."-".$_FILES["justif"]["name"];
			$tname2 = $_FILES["justif"]["tmp_name"];
			$titre_fichier_justif = $_FILES["justif"]["name"];
			move_uploaded_file($tname2, 'justif/'.$pname2);
			copy('justif/'.$pname2, '\\\JDEDEP\E\HTMLUpload\\'.$pname2);


     $output = '';  
     $messid_user = '';
	 // $GBFY=substr(date('Y'),-2);
	 $GBFY=14;
	 //Centre de cout
	 $var = str_repeat(" ", 12 - strlen($_POST['country'])).$_POST['country'];
	 // Objet
	 $varcc = $_POST['city'];
	 //Sous Compte
	 $varss = $_POST['ss_compte'];
	 
	 $varbd = '';

	$sql ="SELECT IsNull(GBAWTD,0) AS budget FROM PRODDTA.F0902 where GBMCU ='".$var."' and GBOBJ = '".$varcc."' and GBSUB = '".$varss."' and GBFY=".$GBFY." and GBLT='BA' and GBCO='00008'";
	$stmt = $conn->query($sql);
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {

		  $varbd = $row[0];
		}
	
      $Reference_demande = mysqli_real_escape_string($connect, $_POST["Reference_demande"]);  
      $Depense_budgetisee = mysqli_real_escape_string($connect, $_POST["Depense_budgetisee"]);  

      // $ss_compte = mysqli_real_escape_string($connect, $_POST["ss_compte"]);  
      $Date_controle = mysqli_real_escape_string($connect, $_POST["Date_controle"]);  
      // $Budget_allouer = mysqli_real_escape_string($connect, $_POST["Budget_allouer"]);  
      $etat_verife_cg = mysqli_real_escape_string($connect, $_POST["etat_verife_cg"]);  
      $commentaire_cg = mysqli_real_escape_string($connect, $_POST["commentaire_cg"]);  
      $axes1 = mysqli_real_escape_string($connect, $_POST["axes1"]);  
      $axes2 = mysqli_real_escape_string($connect, $_POST["axes2"]); 
	  
	  $Budget_allouer = mysqli_real_escape_string($connect, $_POST["Budget_allouer"]);  
      $Budget_restant = mysqli_real_escape_string($connect, $_POST["Budget_restant"]);  
	  
	  
      $file_justif = mysqli_real_escape_string($connect, $_POST["pname2"]);  
      $Matricule = mysqli_real_escape_string($connect, $_POST["Matricule"]);  
      $Etat = mysqli_real_escape_string($connect, $_POST["Etat"]);  
      $id_user = mysqli_real_escape_string($connect, $_POST["id_user"]); 
	  
	
     
	 if($_POST["employee_id"] != '')  
      {  
		  
			
			
           $query = "  
           UPDATE demande   
           SET centre_cout = '$var',  objet = '$varcc', file_justif = '$pname2', ss_compte = '$varss', axes1 = '$axes1', axes2 = '$axes2', Budget_allouer = '$Budget_allouer', Budget_restant = '$Budget_restant', Date_controle = '$Date_controle', etat_verife_cg = '$etat_verife_cg', commentaire_cg = '$commentaire_cg', Nom_cges = '".$_SESSION["Nom"]."', Matricule_cges = '".$_SESSION["Matricule"]."'
           WHERE id='".$_POST["employee_id"]."'";  
           $messid_user = 'Data Updated';  
      }  
      else  
      {  
           $query = "  
           INSERT INTO demande(centre_cout, objet, ss_compte, Date_controle, Budget_allouer, etat_verife_cg, commentaire_cg, id_user)  
           VALUES('$var', '$varcc', '$varss', '$Date_controle', '$varbd', '$etat_verife_cg', '$commentaire_cg', '$id_user');  
           ";  
           $messid_user = 'Data Inserted';  
      }  
      if(mysqli_query($connect, $query))  
      {  
           $output .= '<label class="text-success">' . $messid_user . '</label>';  
           $select_query = "SELECT * FROM demande ORDER BY id DESC";  
           $result = mysqli_query($connect, $select_query);  
           $output .= '  
                <table class="table table-bordered">  
                     <tr>  
                          <th width="70%">Reference_demande</th>  
                          <th width="70%">Matricule</th>  
                          <th width="15%">Edit</th>  
                          <th width="15%">View</th>  
                     </tr>  
           ';  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '  
                     <tr>  
                          <td>' . $row["Reference_demande"] . '</td>  
                          <td><input type="button" name="edit" value="Edit" id="'.$row["id"] .'" class="btn btn-info btn-xs edit_data" /></td>  
                          <td><input type="button" name="view" value="view" id="' . $row["id"] . '" class="btn btn-info btn-xs view_data" /></td>  
                     </tr>  
                ';  
           }  
           $output .= '</table>';  
      }  
    
 }



 ?>
 