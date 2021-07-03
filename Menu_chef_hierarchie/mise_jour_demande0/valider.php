  <?php  
 $hostname="localhost";
 $username="root";
 $password="";
 $databasename="projetphase1";
  
try 
 {  
	$connect = new PDO("mysql:host=$hostname;dbname=$databasename", $username, $password);
		if(isset($_POST["gender"]))
			
			{
				$query = "INSERT INTO demande(Etat) VALUES (:Etat)";
				$statement = $conn->prepare($query);
				$statement->excute(
				array(
				'gender' => $_POST["gender"]
				)
				);
				$conn = $statement->rowCount();
				if($count > 0)
				{
					echo"Data Insertion Successfully..!";
				}else
				{
					echo"Data Insertion Failed";
				}
		}
     
 }  
 catch(PDOException $error)
 {
	 echo $error->getMessage();
 }
 ?>
 