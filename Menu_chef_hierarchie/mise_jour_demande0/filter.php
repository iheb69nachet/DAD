<?php  
 //filter.php  
 if(isset($_POST["from_date"], $_POST["to_date"]))  
 {  
      $connect = mysqli_connect("localhost", "root", "", "projetphase1");  
      $output = '';  
      $query = "  
           SELECT * FROM demande  
           WHERE date_creation BETWEEN '".$_POST["from_date"]."' AND '".$_POST["to_date"]."'  
      ";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
           <table class="table table-bordered">  
                <tr>  
								<th width="5%">ID</th>  
                               <th width="30%">Reference_demande</th>  
                               <th width="43%">Matricule</th>  
                               <th width="10%">objet</th>  
                               <th width="12%">date_creation</th>  
                </tr>  
      ';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '  
                     <tr>  
                          <td>'. $row["id"] .'</td>  
                          <td>'. $row["Reference_demande"] .'</td>  
                          <td>'. $row["Matricule"] .'</td>  
                          <td>$ '. $row["objet"] .'</td>  
                          <td>'. $row["date_creation"] .'</td>  
                     </tr>  
                ';  
           }  
      }  
      else  
      {  
           $output .= '  
                <tr>  
                     <td colspan="5">aucune demande trouver !!</td>  
                </tr>  
           ';  
      }  
      $output .= '</table>';  
      echo $output;  
 }  
 ?>