<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projetphase1";

$error=''; 
if( (isset($_POST['login'])) && (isset ($_POST['Password'])) /*&& (isset ($_POST['site']))*/) {
    $login = $_POST['login']; 
    $Password = $_POST['Password'];
    $site = $_POST['site'];
    $Email = $_POST['Email'];
          // $query=sprintf("SELECT * FROM `compte_user` WHERE `login`='$login' AND `Password`='$Password' AND `site`='$site'"); 
          $query=sprintf("SELECT * FROM `compte_user` WHERE `login`='$login' AND `Password`='$Password'"); 
                
          
        $conn =  mysqli_connect($servername,$username,$password,$dbname);
	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	    echo "Connection Failed\n";
	}
		
     $result = mysqli_query($conn, $query);
      if(!$result){
          echo ($_SESSION['Error-connection']);
           header("Location: Page_Error.php");
      }     
      $row = $result->fetch_array(MYSQLI_ASSOC);
      // if(($row['login'] != $_POST['login']) or ($row['Password'] != $_POST['Password']) or ($row['site'] != $_POST['site'])) {
       if(($row['login'] != $_POST['login']) or ($row['Password'] != $_POST['Password'])) {
         $_SESSION['Error-connection'] = '0';
         header("Location: Page_Error.php");            
      }else{
              $login = $login;
              $Password = $Password ;
              $site = $site ;
              $_SESSION['Nom'] = $row['Nom'];
              $_SESSION['role'] = $row['role'];
              $_SESSION['Email'] = $row['Email'];
              $_SESSION['Matricule'] = $row['Matricule'];
              $_SESSION['Chef_Hierarchie'] = $row['Chef_Hierarchie'];
              $_SESSION['site'] = $row['site'];
              $_SESSION['ref_site'] = $row['ref_site'];
              $_SESSION['id_user'] = $row['id_user'];
              $_SESSION['cs'] = $row['cs'];
              $_SESSION['ID'] = $row['id'];
              $_SESSION['acess_level'] = $row['acess_level'];
             header("Location: Acceuil.php");
      }
    }
        else{
              $_SESSION['Error-connection'] = 'Erreur login or password';                                                                      
              header("Location: Page_Error.php");
            } 
     ?>


