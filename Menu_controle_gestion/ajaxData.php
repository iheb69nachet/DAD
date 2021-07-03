<?php
//Include database configuration file
session_start();
include('dbConfig.php');
 
if(isset($_POST["Centre_Cout_id"]) && !empty($_POST["Centre_Cout_id"])){
    //Get all state data
    $query = $db->query("SELECT * FROM objet WHERE Centre_Cout_id = ".$_POST['country_id']." AND status = 1 ORDER BY Objet_name ASC");
   
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display Objet list
    if($rowCount > 0){
        echo '<option value="">Select Objet</option>';
        while($row = $query->fetch_assoc()){ 
		
            echo '<option value="'.$row['Objet_id'].'">'.$row['Objet_name'].'</option>';
        }
    }else{
        echo '<option value="">Objet not available</option>';
    }
}
 
if(isset($_POST["Objet_id"]) && !empty($_POST["Objet_id"])){
    //Get all city data
    $query = $db->query("SELECT * FROM objet WHERE Objet_id = ".$_POST['Objet_id']." AND status = 1 ORDER BY city_name ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display cities list
    if($rowCount > 0){
        echo '<option value="">Select city</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['city_id'].'">'.$row['city_name'].'</option>';
        }
    }else{
        echo '<option value="">City not available</option>';
    }
}
?>