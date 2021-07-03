<?php
$con = mysqli_connect("localhost", "root", "", "projetphase1");
// $city = $_GET["city"];

if(isset($_POST['id'])){
		$id=$_POST['id'];
		echo "<option>Selectionner Objet</option>";
		// echo "<option>SELECT * FROM `objet` WHERE Centre_Cout_id='$id'</option>";
		
		if($id != '0'){
		 var_dump ($id);
		 $sql3 = mysqli_query($con,"SELECT * FROM `objet` WHERE Centre_Cout_id='$id'");
		 while($row3 = mysqli_fetch_array($sql3)){
		
		 echo '<option value="'.$row3['Objet_name'].'" data-description="'.$row3['description_objet'].'">'.$row3['Objet_name'].'</option>';
		 //echo $row['Objet_name'];
		 }
		  ?>
		   <script type="text/javascript">
  $('#slct2').chosen();
    </script>  <?php
	}

}
if(isset($_POST['slct2_id'])){
	
	$id_ob = $_POST['slct2_id'];
	echo "<option>Selectionner tout d'abord votre objet</option>";
	if($id_ob != '0'){
		
	
		$sql2 = mysqli_query($con,"SELECT * FROM `soucompte` WHERE Objet_id='$id_ob'");
		 while($row = mysqli_fetch_array($sql2)){

		 echo '<option value="'.$row['soucompte_name'].'">'.$row['soucompte_name'].'</option>';
		 }
		
	}
}
?>

