<?php
//Include database configuration file
session_start();
include('dbConfig.php');
 
if(isset($_POST["id_site"]) && !empty($_POST["id_site"])){
    //Get all state data
    $query = $db->query("SELECT * FROM compte_user WHERE id_site = ".$_POST['id_site']."");
   
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display states list
    if($rowCount > 0){
        echo '<option value="">Select site</option>';
        while($row = $query->fetch_assoc()){ 
		
            echo '<option value="'.$row['state_id'].'">'.$row['state_name'].'</option>';
        }
    }else{
        echo '<option value="">site not available</option>';
    }
}
 s
?>