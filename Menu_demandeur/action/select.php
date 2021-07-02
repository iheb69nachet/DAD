 <?php  
 if(isset($_POST["employee_id"]))  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "projetphase1");  
      $query = "SELECT * FROM demande WHERE id = '".$_POST["employee_id"]."'";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td width="30%"><label>Reference_demande</label></td>  
                     <td width="70%">'.$row["Reference_demande"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Depense_budgetisee</label></td>  
                     <td width="70%">'.$row["Depense_budgetisee"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Matricule</label></td>  
                     <td width="70%">'.$row["Matricule"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Etat</label></td>  
                     <td width="70%">'.$row["Etat"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>id_user</label></td>  
                     <td width="70%">'.$row["id_user"].' </td>  
                </tr>  
           ';  
      }  
      $output .= '  
           </table>  
      </div>  
      ';  
      echo $output;  
 }  
 ?>
 