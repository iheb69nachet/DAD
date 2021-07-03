
  <?php  
  session_start();
 $connect = mysqli_connect("localhost", "root", "", "projetphase1");  

 if(!empty($_POST))  
 {  
					$query = "SELECT Email FROM `compte_user` where Nom = '".$_SESSION["Chef_Hierarchie"]."'";
					//id chef hira
					// var_dump($query);die;					
					$result = mysqli_query($connect, $query);
					$row =mysqli_fetch_array($result);

					$sub = "Demande d'Approbation DAD";
					//the message
					$msg = "Demande d'Approbation DAD!!";
					//recipient email here

					//send email
					mail($row['Email'],$sub,$msg);
						
//mail("servicecomptabilite11@gmail.com",$sub,$msg);
					

      $output = '';  
      $messid_user = '';  
     /* $Reference_demande = mysqli_real_escape_string($connect, $_POST["Reference_demande"]);  
      $Depense_budgetisee = mysqli_real_escape_string($connect, $_POST["Depense_budgetisee"]);  
      $Matricule = mysqli_real_escape_string($connect, $_POST["Matricule"]);  */ 
      $commentaire_Chef_to_dem = mysqli_real_escape_string($connect, $_POST["commentaire_Chef_to_dem"]);   
      $Etat = mysqli_real_escape_string($connect, $_POST["Etat"]); 
 
		
     if($_POST["employee_id"] != '')  
      {  
           $query = "  
           UPDATE demande   
           SET Etat = '$Etat', Nom_chefhierarchie = '".$_SESSION["Nom"]."', Matricule_chefhierarchie = '".$_SESSION["Matricule"]."',
			justif_demande = 'justif_demande', commentaire_Chef_to_dem = '".$_POST["commentaire_Chef_to_dem"]."'	   
            WHERE id='".$_POST["employee_id"]."'";  
		   
			// echo $result2; exit;
           $messid_user = 'Data Updated';  
      } 
      else
      {  
           $query = "  
           INSERT INTO demande(Etat, id_user)  
           VALUES('$Etat', '$id_user');  
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
                          <td>' . $row["Etat"] . '</td>  
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
 