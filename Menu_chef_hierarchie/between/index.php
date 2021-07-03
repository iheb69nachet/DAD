<!DOCTYPE html>
<html>
<head>
<title>Historique demandes</title>
</head>
<body>
<h2>Table Demandes</h2>
<div>
	<table border="1">
		<thead>
			<th>ID</th>
			<th>Matricule</th>
			<th>Login Date</th>
		</thead>
		<tbody>
		<?php
			include('conn.php');
			//MySQLi Procedural
			//$query=mysqli_query($conn,"select * from `login`");
			//while($row=mysqli_fetch_array($query)){
			/*	?>
				<tr>
					<td><?php echo $row['Reference_demande']; ?></td>
					<td><?php echo $row['Matricule']; ?></td>
					<td><?php echo $row['date_creation']; ?></td>
				</tr>
				<?php */
			//}
			
			//MySQLi Object-oriented
			$query=$conn->query("select * from `demande`");
			while($row = $query->fetch_array()) {
				?>
				<tr>
					<td><?php echo $row['Reference_demande']; ?></td>
					<td><?php echo $row['Matricule']; ?></td>
					<td><?php echo $row['date_creation']; ?></td>
				</tr>
				<?php 
			}
		?>
		</tbody>
	</table>
</div><br>
<div>

<br>
<br>
<br>
<br>
<br>

<!----------------->

	<form method="POST">
		<label>From: </label><input type="date" name="from">
		<label>To: </label><input type="date" name="to">
		<input type="submit" value="Get Data" name="submit">
	</form>
</div>
<h2>Data Between Selected Dates</h2>
<div>
	<table border="1">
		<thead>
			<th>UserID</th>
			<th>Matricule</th>
			<th>Login Date</th>
		</thead>
		<tbody>
		<?php
			if (isset($_POST['submit'])){
				include('../Gestion/Menu_chef_hierarchie/between/conn.php');
				$from=date('Y-m-d',strtotime($_POST['from']));
				$to=date('Y-m-d',strtotime($_POST['to']));
				//MySQLi Procedural
				//$oquery=mysqli_query($conn,"select * from `login` where date_creation between '$from' and '$to'");
				//while($orow=mysqli_fetch_array($oquery)){
				/*	?>
					<tr>
						<td><?php echo $orow['Reference_demande']?></td>
						<td><?php echo $orow['Matricule']?></td>
						<td><?php echo $orow['date_creation']?></td>
					</tr>
					<?php */
				//}
				
				//MySQLi Object-oriented
				$oquery=$conn->query("select * from `demande` where date_creation between '$from' and '$to'");
				while($orow = $oquery->fetch_array()){
					?>
					<tr>
						<td><?php echo $orow['Reference_demande']?></td>
						<td><?php echo $orow['Matricule']?></td>
						<td><?php echo $orow['date_creation']?></td>
					</tr>
					<?php 
				}
			}
		?>
		</tbody>
	</table>
</div>
</body>
</html>