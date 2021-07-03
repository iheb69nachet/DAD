<?php

session_start();
$_SESSION['loaded_page']= "Fi";
$connect = mysqli_connect("localhost:3306", "chocoest", "chocoest", "projetphase1");


?>
<style>
.wrapper{margin-button:20px;}
h1{font-family:verdana;   color:white;}
.data{width:800px; padding:10px; margin-top:20px;}
.data select{width: 200px; padding:5px; margin:20px 0px;   float: left;   position: relative; margin-right: 20px;}
.submit{margin-top:18px;  width:100px;  padding:6px;  font-weight:bold; boder: none;  outline: none; background:#00ff89; color: #fff;}

</style>
<div class="wrapper">

	<h1>Firltrer Informations !!</h1>
	<div class="data">
	<form action="" method="POST">
		<select name="block1">
				<option>Sexe</option>
				<?php
					
					$query = "SELECT * FROM `champ`";
					$filter_Result = mysqli_query($connect, $query);
					 while($rows1 = mysqli_fetch_array($filter_Result)){
						 
						 $sexeID = $rows1['id'];
						 $rowsData1 = $rows1['Sexe'];
					?>	 
						<option value=<?php echo $sexeID; ?>"> <?php  echo $rowsData1; ?>   </option> 
					<?php }
				?>
		</select>
		
		<select name="block2">
				<option>Municipalites</option>
				<?php
					
					$query2 = "SELECT * FROM `champ`";
					$filter_Result2 = mysqli_query($connect, $query2);
					 while($rows2 = mysqli_fetch_array($filter_Result2)){
						 
						 $MunicipalitesID = $rows2['id'];
						 $rowsData2 = $rows2['Municipalites'];
					?>	 
						<option value=<?php echo $MunicipalitesID; ?>"> <?php  echo $rowsData2; ?>   </option> 
					<?php }
				?>
		</select>
	
	
		<input type ="submit" name="submit" class="submit"/>
		<table border="1" class="table" style="background-color:#ffffff;">
		
				<tr>
					<th>Sexe</th>
					<th>Municipalites</th>
				</tr>
				
				<tr>
				
				<?php
				
				if(isset($_POST['submit'])){
					$sex = $_POST['block1'];
					$Municipalites = $_POST['block2'];
					$query3 = "SELECT votage.sex, votage.Municipalites 
					FROM `votage` 
					WHERE votage.sexeID = '$sex' 
					AND votage.MunicipalitesID = '$Municipalites' ";
					$filter_Result3 = mysqli_query($connect, $query3);
					 while($rows3 = mysqli_fetch_array($filter_Result3)){
						 
						// $dataID = $rows3['id'];
						 $sex = $rows3['sex'];
						 $Municipalites = $rows3['Municipalites'];
					?>	 
						<td><?php echo $sex; ?> </td> 
						<td><?php echo $Municipalites; ?> </td> 
					<?php 
					
					}
					
				} 	
				?>
				
				</tr>
		</table>
		
	</form>	
	</div>

</div>