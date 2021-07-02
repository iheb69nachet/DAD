<?php 
session_start();
 $connect = mysqli_connect("localhost","root","","projetphase1") ;


$country=$_GET["country"];
if($country!="")
{
		$query=sprintf("SELECT * FROM states WHERE country_id=$country_id");
$result = mysqli_query($connect, $query);
	echo"<select>";
		while($row=mysqli_fetch_array($result))
		{
			echo "<option>"; echo $row["name"];  echo "</option>";
		
		}
	echo"</select>";
}
?>