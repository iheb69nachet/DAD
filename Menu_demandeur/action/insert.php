
  <?php  
 $connect = mysqli_connect("localhost", "root", "", "projetphase1");  


 if(!empty($_POST))  
  
 {  
			$titre_fichier_justif = $_POST["titre_fichier_justif"];
			$pname2 = $_FILES["justif"]["name"];
			$tname2 = $_FILES["justif"]["tmp_name"];
			move_uploaded_file($tname2, 'justif/'.$pname2);

     $output = '';  
     $messid_user = '';
	  $Reference_demande = mysqli_real_escape_string($connect, $_POST["Reference_demande"]);  
  
      $file_justif = mysqli_real_escape_string($connect, $_POST["pname2"]);  
      $commente_upload = mysqli_real_escape_string($connect, $_POST["commente_upload"]);  
      $id_user = mysqli_real_escape_string($connect, $_POST["id_user"]); 
	  // $id_user = $_SESSION['ID'];
	
     
	 if($_POST["employee_id"] != '')  
      {  
		  
			
			$query = "  
           UPDATE demande   
           SET file_upload = '$pname2',   
           commente_upload = '$commente_upload',
		   justif_demande = ''
           WHERE id='".$_POST["employee_id"]."'";  
           $messid_user = 'Data Updated';  
          /* $query = "  
           UPDATE demande   
           SET file_upload = '$pname2'
           WHERE id='".$_POST["employee_id"]."'";  
           $messid_user = 'Data Updated'; */ 
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
 