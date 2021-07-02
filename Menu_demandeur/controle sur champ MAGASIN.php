<?php
								

	$conn = new PDO("sqlsrv:Server=192.168.0.46; Database=JDE_PRODUCTION", "DAD", "dAd2020+");
	$conn->setAttribute ( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION ); 
	$varbd = '';
	// $Magcc   = $_POST['Magcc'];
	$Magcc   = '        5000';
	// $query_verife = "SELECT * FROM PRODDTA.F41001 where CIMCU ='".$Magcc."'";
	$query_verife = "SELECT * FROM PRODDTA.F41001";
	$stmt = $conn->query($query_verife);
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {

		  $varbd = $row[];
		}
	var_dump ($varbd); die;
	
	 $resultSet  = mysqli_query($conn, $query_verife); 
	 if(mysqli_num_rows($resultSet) > 0){
        $row    = mysqli_fetch_assoc($resultSet);
        if($row['Magcc'] == $Magcc){ 
            echo '<input type="text" class="form-control" style="background-color=green;" id="Magcc" name="Magcc">';
        }else{
            echo '<input type="text" class="form-control" style="background-color=red;" id="Magcc" name="Magcc">';
        }
    }else{
        echo "Error!";
    }
								
								
								
	?>