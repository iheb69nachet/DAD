<?php

//multiple_update.php

include('database_connection.php');

if(isset($_POST['hidden_id']))
{
 $Type_Depense = $_POST['Type_Depense'];
 $Etat = $_POST['Etat'];
 $id = $_POST['hidden_id'];
 for($count = 0; $count < count($id); $count++)
 {
  $data = array(
   ':Type_Depense'   => $Type_Depense[$count],
   ':Etat'  => $Etat[$count],

   ':id'   => $id[$count]
  );
  $query = "
  UPDATE demadne 
  SET Type_Depense = :Type_Depense, Etat = :Etat 
  WHERE id = :id
  ";
  $statement = $connect->prepare($query);
  $statement->execute($data);
 }
}

?>