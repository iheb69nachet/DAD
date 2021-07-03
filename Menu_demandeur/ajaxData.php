<?php
//Include database configuration file
session_start();
include('dbConfig.php');
 
if(isset($_POST["departement_id"]) && !empty($_POST["departement_id"])){
    //Get all Service data
    $query = $db->query("SELECT * FROM services WHERE departement_id = ".$_POST['departement_id']." AND status = 1 ORDER BY state_name ASC");
   
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display services list
    if($rowCount > 0){
        echo '<option value="">Select Service</option>';
        while($row = $query->fetch_assoc()){ 
		
            echo '<option value="'.$row['departement_id'].'">'.$row['state_name'].'</option>';
        }
    }else{
        echo '<option value=""></option>';
    }
}
 
if(isset($_POST["departement_id"]) && !empty($_POST["departement_id"])){
    //Get all city data
    $query = $db->query("SELECT * FROM services WHERE departement_id = ".$_POST['departement_id']." AND status = 1 ORDER BY city_name ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display services list
    if($rowCount > 0){
        echo '<option value="">Select departement</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['city_id'].'">'.$row['city_name'].'</option>';
        }
    }else{
        echo '<option value=""></option>';
    }
}
?>