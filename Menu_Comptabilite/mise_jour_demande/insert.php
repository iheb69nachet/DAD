<?php  
  session_start();
 $connect = mysqli_connect("localhost", "root", "", "projetphase1");  
  $conn1 = new PDO("sqlsrv:Server=192.168.0.46; Database=JDE_PRODUCTION", "DAD", "dAd2020+");
 $conn1->setAttribute ( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
 if(!empty($_POST))  
 {  

				$query = "SELECT Email FROM `compte_user` where Nom = '".$_SESSION["Chef_Hierarchie"]."'";
				
					$result = mysqli_query($connect, $query);
					$row =mysqli_fetch_array($result);
					$sub = "Demande d'Approbation DAD";
					$msg = "Demande d'Approbation DAD!!";
					mail($row['Email'],$sub,$msg);
					




      $output = '';  
      $messid_user = '';  
     /* $Reference_demande = mysqli_real_escape_string($connect, $_POST["Reference_demande"]);  
      $Depense_budgetisee = mysqli_real_escape_string($connect, $_POST["Depense_budgetisee"]);  
      $Matricule = mysqli_real_escape_string($connect, $_POST["Matricule"]); */ 
      $Type_Depense = mysqli_real_escape_string($connect, $_POST["Type_Depense"]);  
      $id_user = mysqli_real_escape_string($connect, $_POST["id_user"]);  
      if($_POST["employee_id"] != '')  
      {  
          $query = "  
           UPDATE demande   
           SET Type_Depense = '$Type_Depense', Nom_compt = '".$_SESSION["Nom"]."', Matricule_compt = '".$_SESSION["Matricule"]."'
		   WHERE id='".$_POST["employee_id"]."'";  
           $messid_user = 'Data Updated';
	  }
	   elseif(!empty($Type_Depense))
	  {   
		  /* $query2 = "  
           UPDATE CRPDTA.F4311Z1   
           SET SZEDCT = (SELECT Type_Depense FROM demande WHERE demande.id='".$_POST["employee_id"]."' AND Type_Depense.demande = CRPDTA_F4311Z1.SZEDCT )";  
           $messid_user1 = 'Data Updated';
		   
		   */
		   
			$query = "  
           UPDATE CRPDTA.F4311Z1  
           SET SZEDCT = 'OR', SZDCTO = 'OR'";  
           $messid_user = 'Data Updated';  
		  
      }  
      else  
      {  
           $query = "  
           INSERT INTO demande(Type_Depense, id_user)  
           VALUES('$Type_Depense', '$id_user');  
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
      echo $output;  
 }  

 ?>
 