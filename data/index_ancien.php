<?php
session_start();
$hostname = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname   = "projetphase1"; 
// Create database connection 
$connect = mysqli_connect($hostname, $username, $password, $dbname); 
if(isset($_GET['id'])){
$id=$_GET['id'];
    // $sql='select * from demande where Reference_demande="'.$id.'"';
$sql='select * from demande where Reference_demande='.$id;

}
elseif(isset($_GET['etat'])){
    $etat=$_GET['etat'];
    
    $sql='select * from demande where Etat ="'.$etat.'"';


}else{
    $sql='select * from demande where Etat !="Valider" and Etat !="en attente"';

}


// echo($sql);
$result = $connect->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    $data=[];
   // $row = $result->fetch_assoc();
    while($row = $result->fetch_assoc()){
        array_push($data,$row);
    }
    //print_r($row);
    $connect->close();
    echo(json_encode($data));
   
  } else {
    $row = $result->fetch_assoc();

    
    echo(json_encode($row));

  }
 
