<?php
	session_start();
	include 'config.php';

	$update=false;
	$id="";
	$site="";
	$Nom="";
	$reception="";
	$photo="";

	if(isset($_POST['add'])){
		$site=$_POST['site'];
		$Nom=$_POST['Nom'];
		$reception=$_POST['reception'];

		$photo=$_FILES['Reference_demande']['site'];
		$upload="uploads/".$photo;

		$query="INSERT INTO demande(site,Nom,reception,photo)VALUES(?,?,?,?)";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("ssss",$site,$Nom,$reception,$upload);
		$stmt->execute();
		move_uploaded_file($_FILES['Reference_demande']['tmp_site'], $upload);

		header('location:index.php');
		$_SESSION['response']="Successfully Inserted to the database!";
		$_SESSION['res_type']="success";
	}
	if(isset($_GET['delete'])){
		$id=$_GET['delete'];

		$sql="SELECT photo FROM demande WHERE id=?";
		$stmt2=$conn->prepare($sql);
		$stmt2->bind_param("i",$id);
		$stmt2->execute();
		$result2=$stmt2->get_result();
		$row=$result2->fetch_assoc();

		$Reference_demandepath=$row['photo'];
		unlink($Reference_demandepath);

		$query="DELETE FROM demande WHERE id=?";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("i",$id);
		$stmt->execute();

		header('location:index.php');
		$_SESSION['response']="Successfully Deleted!";
		$_SESSION['res_type']="danger";
	}
	if(isset($_GET['edit'])){
		$id=$_GET['edit'];

		$query="SELECT * FROM demande WHERE id=?";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("i",$id);
		$stmt->execute();
		$result=$stmt->get_result();
		$row=$result->fetch_assoc();

		$id=$row['id'];
		$site=$row['site'];
		$Nom=$row['Nom'];
		$reception=$row['reception'];
		$photo=$row['photo'];

		$update=true;
	}
	if(isset($_POST['update'])){
		$id=$_POST['id'];
		$site=$_POST['site'];
		$Nom=$_POST['Nom'];
		$reception=$_POST['reception'];
		$oldReference_demande=$_POST['oldReference_demande'];

		if(isset($_FILES['Reference_demande']['site'])&&($_FILES['Reference_demande']['site']!="")){
			$newReference_demande="uploads/".$_FILES['Reference_demande']['site'];
			unlink($oldReference_demande);
			move_uploaded_file($_FILES['Reference_demande']['tmp_site'], $newReference_demande);
		}
		else{
			$newReference_demande=$oldReference_demande;
		}
		$query="UPDATE demande SET site=?,Nom=?,reception=?,photo=? WHERE id=?";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("ssssi",$site,$Nom,$reception,$newReference_demande,$id);
		$stmt->execute();

		$_SESSION['response']="Updated Successfully!";
		$_SESSION['res_type']="primary";
		header('location:index.php');
	}

	if(isset($_GET['details'])){
		$id=$_GET['details'];
		$query="SELECT * FROM demande WHERE id=?";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("i",$id);
		$stmt->execute();
		$result=$stmt->get_result();
		$row=$result->fetch_assoc();

		$vid=$row['id'];
		$vsite=$row['site'];
		$vNom=$row['Nom'];
		$vreception=$row['reception'];
		// $vphoto=$row['photo'];
	}
?>