<input type="text" name="SYDOCO" /> 

<button class="btn btn-primary" value="INSERTION">INSERTION</button>
  <?php  
 $connect = mysqli_connect("localhost", "root", "", "projetphase1");  
	$conn = new PDO("sqlsrv:Server=192.168.0.46; Database=JDE_CRP", "DAD", "dAd2020+");
	// echo $conn; exit;
	$conn->setAttribute ( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
  
	 
		$query = "INSERT INTO F4301Z1(SYDOCO) VALUES('$SYDOCO');";  
           $messid_user = 'Data Inserted';  
       
    
      if(mysqli_query($connect, $query))  
      {  
           $output .= '<label class="text-success">' . $messid_user . '</label>';  
            
      }  
	  
	
 ?>
 