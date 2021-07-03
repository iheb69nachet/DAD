
  <?php 
session_start();


 // $new = "\\\JDEDEP\E\HTMLUpload\\";
 $new = "\\\JDEDEP\E\HTMLUpload\\";
 


 $connect = mysqli_connect("localhost", "root", "", "projetphase1"); 
 
 $conn1 = new PDO("sqlsrv:Server=192.168.0.46; Database=JDE_PRODUCTION", "DAD", "dAd2020+");
 $conn1->setAttribute ( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

 
 //* insert to base F00165**/
 $conn4 = new PDO("sqlsrv:Server=192.168.0.46; Database=JDE_PRODUCTION", "DAD", "dAd2020+");
 $conn4->setAttribute ( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
 if(empty($_POST['justif_demande'])){
	 
	 
	 
 }
 if(!empty($_POST))  
 {  

				$query = "SELECT Email FROM `compte_user` where Nom = '".$_SESSION["Chef_Hierarchie"]."'";
// var_dump($query);die;					
					$result = mysqli_query($connect, $query);
					$row =mysqli_fetch_array($result);
					$sub = "Demande d'Approbation DAD";
					$msg = "Demande d'Approbation DAD!!";
					mail($row['Email'],$sub,$msg);



      $output = '';  
      $messid_user = ''; 
	
       
      $avis_DGA = mysqli_real_escape_string($connect, $_POST["avis_DGA"]);  
      $commentaire_DGA = mysqli_real_escape_string($connect, $_POST["commentaire_DGA"]);
	  /**************** traitement MYSQL ***************/
      if($_POST["employee_id"] != '')  
      {  
           
		   $query = "  
           UPDATE demande   
           SET avis_DGA = '$avis_DGA', commentaire_DGA = '$commentaire_DGA' , Nom_dg = '".$_SESSION["Nom"]."', Matricule_dg = '".$_SESSION["Matricule"]."'
           WHERE id='".$_POST["employee_id"]."'";  
           $messid_user = 'Data Updated requet 1';  

		    
	  }
     
      else  
      {  
           $query = "  
           INSERT INTO demande(avis_DGA, commentaire_DGA, id_user)  
           VALUES('$avis_DGA', '$commentaire_DGA', '$id_user');  
           ";  
           $messid_user = 'MYSQL Data Inserted';  
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
                          <td>' . $row["avis_DGA"] . '</td>  
                          <td>' . $row["commentaire_DGA"] . '</td>  
                          <td><input type="button" name="edit" value="Edit" id="'.$row["id"] .'" class="btn btn-info btn-xs edit_data" /></td>  
                          <td><input type="button" name="view" value="view" id="' . $row["id"] . '" class="btn btn-info btn-xs view_data" /></td>  
                     </tr>  
                ';  
           }  
           $output .= '</table>';  
      }  
      echo $output;  
  
	  /**************** traitement MYSQL SERVER JDE F4311 ***************/

	  if($_POST["employee_id"] != '')  
      {  
			$sq ="SELECT Reference_demande, Type_Depense, centre_cout, objet, ss_compte FROM demande WHERE id='".$_POST['employee_id']."'";
			$stt = $connect->query($sq);
			$row =$stt->fetch_assoc();
			$varbd = $row['Reference_demande'];
			$varcc = $row['Magcc'];
			$varob = $row['objet'];
			$varss = $row['ss_compte'];
			// $varref = $row['ref_site'];
			// $varcodesite = $row['code_site'];
						
			$SZEDCT ='';		
			if($row['Type_Depense'] == 'T_Charge'){
				$SZEDCT = 'OR';	
				}
			else{
				$SZEDCT = 'AI';	
				}		
			$query2 = "UPDATE PRODDTA.F4311Z1 SET SZEDCT = '".$SZEDCT."', SZDCTO = '".$SZEDCT."', SZMCU = '".$varcc."', SZOMCU = '".$varcc."', SZOBJ = '".$varob."', SZSUB = '".$varss."' WHERE SZEDBT='".$varbd."'";  
			$stmt = $conn1->query($query2);
			echo 'MYSQL SERVER Data UPDATED F4311';
		}
/**************** traitement MYSQL SERVER JDE F4301 ***************/
	  if($_POST["employee_id"] != '')  
      {  
			
			$sq2 ="SELECT Reference_demande, Type_Depense, centre_cout, objet, ss_compte FROM demande WHERE id='".$_POST['employee_id']."'";
			$stt2 = $connect->query($sq2);
			$row2 =$stt2->fetch_assoc();
			$varbd2 = $row2['Reference_demande'];
			$varcc2 = $row['Magcc'];
				echo 'test select ';		
			$SYEDCT ='';		
			if($row['Type_Depense'] == 'T_Charge'){
				$SYEDCT = 'OR';	
				}
			else{
				$SYEDCT = 'AI';	
				}		
			$query3 = "UPDATE PRODDTA.F4301Z1 SET SYEDCT = '".$SYEDCT."', SYDCTO = '".$SYEDCT."', SYMCU = '".$varcc2."', SYUSER = 'JDE', SYTORG = 'JDE', SYPID = 'P4311Z1I', SYJOBN = 'JDEWEB2' WHERE SYEDBT='".$varbd2."'";  
			$stmt3 = $conn1->query($query3);
			echo 'MYSQL SERVER Data UPDATED F4301';
		}
/*********************************** F00165 UPDATE ATTACHMENT FILE **********************************************/
	if($_POST["employee_id"] != '')  
      {  
			$sq3 ="SELECT * FROM demande WHERE id='".$_POST['employee_id']."'";
			$stt3 = $connect->query($sq3);
			$row =$stt3->fetch_assoc();
			
			$varupload= $new . $row['file_upload'];
			$nameupload = $row['titre_fichier_upload'];
		
			echo '<br>';
			echo $varupload;
			$varmatri= $row['Matricule'];
			
			
			$res1 ='';
			$varref_demande = $row['Reference_demande'];
			$varref_site = $row['ref_site'];
			$vartype_dep = 'AI';
			$cons = '000';
			$res1 = $varref_demande."|".$vartype_dep."|".$varref_site."|".$cons;			
			
			$query4 = "INSERT INTO PRODDTA.F00165 (GDOBNM, GDGTMOTYPE, GDUSER, GDGTFILENM, GDTXKY, GDMOSEQN, GDGTITNM) VALUES ('GT4301', '5', '".$varmatri."', '".$varupload."', '".$res1."', '1', '".$nameupload."')";  
			$stmt = $conn4->query($query4);
			echo 'MYSQL SERVER Data INSERT F00165';
		}
		
	if($_POST["employee_id"] != '')  
      {  
			$qr ="SELECT * FROM demande WHERE id='".$_POST['employee_id']."'";
			$stt4 = $connect->query($qr);
			$row =$stt4->fetch_assoc();
			
			$varjustif= $new . $row['file_justif'];
		
			echo '<br>';
			echo $varjustif;
			$varmatric= $row['Matricule'];
			$nameupload2 = $row['titre_fichier_upload'];
			
			$res2 ='';
			$varref_demande2 = $row['Reference_demande'];
			$varref_site2 = $row['ref_site'];
			$vartype_dep2 = 'AI';
			$cons2 = '000';
			$res2 = $varref_demande2."|".$vartype_dep2."|".$varref_site2."|".$cons2;			
			
			$query5 = "INSERT INTO PRODDTA.F00165 (GDOBNM, GDGTMOTYPE, GDUSER, GDGTFILENM, GDTXKY, GDMOSEQN, GDGTITNM) VALUES ('GT4301', '5', '".$varmatric."', '".$varjustif."', '".$res2."', '2', '".$nameupload2."')";  
			$stmt = $conn4->query($query5);
			echo 'MYSQL SERVER Data INSERT F00165';
		}
		
	  
 }  
 
 ?>
 