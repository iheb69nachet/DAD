<?php  
//export.php  
$connect = mysqli_connect("localhost","chocoest","chocoest","projetphase1");
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM votage";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                          <th>MUNICIPALITES</th>
                          <th>JEUNNE</th>
                          <th>FEMME</th>
                          <th>P_W_D</th>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                         <td>'.$row["Municipalitees"].'</td>  
                         <td>'.$row["age"].'</td>  
                         <td>'.$row["sexe"].'</td>  
      			 <td>'.$row["P_W_D"].'</td>  
       			
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }
}
?>