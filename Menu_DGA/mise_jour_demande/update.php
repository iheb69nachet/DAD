<?php
session_start();
$hostname = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname   = "projetphase1"; 
// Create database connection 
$connect = mysqli_connect($hostname, $username, $password, $dbname); 
if(isset($_GET['id'])){
    $sql='update demande set notif=1 and etat_verife_cg ='' where id='.$_GET['id'];
   

if ($connect->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $connect->error;
}

$conn->close();
}
 
