  <?php  
 $hostname="localhost";
 $username="root";
 $password="";
 $databasename="projetphase1";
  
try 
 {  
	$connect = new PDO("mysql:host=$hostname;dbname=$databasename", $username, $password);
		if(isset($_POST["avis_DGA"]))
			
			{
				$query = "INSERT INTO demande(avis_DGA, commentaire_DGA) VALUES (:avis_DGA, :commentaire_DGA)";
				$statement = $conn->prepare($query);
				$statement->excute(
				array(
				'avis_DGA' => $_POST["avis_DGA"],
				'commentaire_DGA' => $_POST["commentaire_DGA"]
				
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
 