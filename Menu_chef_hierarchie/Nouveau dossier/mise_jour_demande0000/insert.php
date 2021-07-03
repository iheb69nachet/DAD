
  <?php  
 $connect = mysqli_connect("localhost", "root", "", "projetphase1");  
 if(!empty($_POST))  
 {  
      $output = '';  
      $messid_user = '';  
      $Reference_demande = mysqli_real_escape_string($connect, $_POST["Reference_demande"]);  
      $Depense_budgetisee = mysqli_real_escape_string($connect, $_POST["Depense_budgetisee"]);  
      $Matricule = mysqli_real_escape_string($connect, $_POST["Matricule"]);  
      $Etat = mysqli_real_escape_string($connect, $_POST["Etat"]);  
      $id_user = mysqli_real_escape_string($connect, $_POST["id_user"]);  
      if($_POST["employee_id"] != '')  
      {  
           $query = "  
           UPDATE demande   
           SET Reference_demande='$Reference_demande',   
           Depense_budgetisee='$Depense_budgetisee',   
           Matricule='$Matricule',   
           Etat = '$Etat',   
           id_user = '$id_user'   
           WHERE id='".$_POST["employee_id"]."'";  
           $messid_user = 'Data Updated';  
      }  
      else  
      {  
           $query = "  
           INSERT INTO demande(Reference_demande, Depense_budgetisee, Matricule, Etat, id_user)  
           VALUES('$Reference_demande', '$Depense_budgetisee', '$Matricule', '$Etat', '$id_user');  
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
 