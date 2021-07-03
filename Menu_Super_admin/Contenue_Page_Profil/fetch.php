<?php
//fetch.php
if(isset($_POST["action"]))
{
 $connect = mysqli_connect("localhost", "root", "", "projetphase1");
 $output = '';
 if($_POST["action"] == "direction")
 {
  $query = "SELECT department FROM base WHERE direction = '".$_POST["query"]."' GROUP BY department";
  $result = mysqli_query($connect, $query);
  var_dump($result);
  $output .= '<option value="">Sélectionnez un département</option>';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '<option value="'.$row["department"].'">'.$row["department"].'</option>';
  }
 }
 if($_POST["action"] == "department")
 {
  $query = "SELECT service FROM base WHERE department = '".$_POST["query"]."'";
  $result = mysqli_query($connect, $query);
  $output .= '<option value="">Sélectionnez un service</option>';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '<option value="'.$row["service"].'">'.$row["service"].'</option>';
  }
 }
 echo $output;
}
?>