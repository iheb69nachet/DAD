<?php
$datecreation=$_GET['date'] ;
$ref_site =$_GET['ref_site'] ;
$cs=$_GET['cs'] ;
$heure=$_GET['heure'] ;

$J = "J";
 $N = "N";
$A = "A";
$EA = "EA";
$JDE = "JDE";
$P4311Z1I = "P4311Z1I";
$JDEWEBL = "JDEWEBL";
$DD = "DD";
$espace1 = " ";
$F = "F";
$S = "S";
$espace2 = "  ";
$Y = "Y";
$AA = "AA";
$DAD = "DAD";
$sfxo = "000";

		  
		  
$hostname = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname   = "projetphase1"; 
// Create database connection 
$connect = mysqli_connect($hostname, $username, $password, $dbname);
$conn1 = new PDO("sqlsrv:Server=192.168.0.46; Database=JDE_PRODUCTION", "DAD", "dAd2020+");
$conn1->setAttribute ( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION ); 
$sql='SELECT * FROM demande ORDER BY id DESC LIMIT 1';
$sqlref=$connect->query($sql);
if ($sqlref->num_rows > 0) {
    while($reff = $sqlref->fetch_assoc()){
        $ref=$reff['Reference_demande'];
        //var_dump($ref);
 $sqlOne = "SELECT * FROM ligne_ai A RIGHT JOIN demande B ON A.item_Reference_demande = B.Reference_demande WHERE A.item_Reference_demande=".$ref." LIMIT 1";

 //n7eb nefhem why fel php my admin tji w lena lé bekri kenet tji fel static el ligne !!!
 $sqlresponse=$connect->query($sqlOne);
 if ($sqlresponse->num_rows > 0) {
    while($row = $sqlresponse->fetch_assoc()){

        $a = "INSERT INTO PRODDTA.F4301Z1(
            SYEDUS, SYEDBT, SYEDTN, SYEDLN, SYEDCT, SYTYTN, SYKCOO, SYDCTO, SYOORN, SYOCTO, 
            SYAN8, SYSHAN, SYTORG, SYUSER, SYPID, SYJOBN, SYDRIN, SYTNAC, SYEDSP, SYEDDT, 
            SYEDDL, SYSFXO, SYOPDJ, SYADDJ, SYCNDJ, SYPEFJ, SYPSDJ, SYINVC, SYANBY, SYANCR,
             SYOTOT, SYPCRT, SYCORD, SYCRR, SYFAP, SYURDT, SYURAT, SYURAB, SYRSHT, SYDRQT, 
             SYDOC1, SYBTAN, SYPOHD01, SYPOHD02, SYPOHAB01, SYPOHAB02, SYCUKID, SYFUF1, SYFUF2, SYDRQJ, 
             SYTRDJ, SYUPMJ, SYPDDJ, SYPROM, SYCRRM, SYTDAY, SYOKCO, SYDOCO, SYMCU) 
    
             VALUES(
                 '".$row['Matricule']."','".$row['Reference_demande']."','".$row['Reference_demande']."','".$row['item_ligne']."' ,'',850,'".$row['ref_site']."','' ,'".$row['Reference_demande']."', 'DD',
                 '".$row['Matricule'] ."','".$row['cs']."','JDE', 'JDE', 'P4311Z1I' , 'JDEWEB2' , 1, 'A', 'N', 0, 
                 0, '".$sfxo."', 0, 0, 0, 0,0, 0, 0, 0, 
                 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
                  0, 0, 0, 0, 0, 0, 0, 'Y', 'Y', '".$datecreation."', 
                  '".$datecreation."','".$datecreation."', '".$datecreation."', 1, 'F', 0,'".$row['ref_site']."','".$row['Reference_demande']."','".$row['Magcc']."')";
          // var_dump($a);
      try{
    $conn1->exec($a);
    echo "New record created successfully";
  }catch(PDOException $e){
    echo $a . "<br>" . $e->getMessage();
  }
 // nraj3ou el code 
}
}
 $sqlMultiple = "SELECT * FROM ligne_ai A RIGHT JOIN demande B ON A.item_Reference_demande = B.Reference_demande WHERE A.item_Reference_demande=".$ref;
 $Multi=$connect->query($sqlMultiple);
 if ($Multi->num_rows > 0) {
    while($row = $Multi->fetch_assoc()){
  $b=" INSERT INTO PRODDTA.F4311Z1(
    SZEDUS, SZAN8, SZEDBT, SZEDTN, SZEDLN, SZLNID, SZLNTY, SZTYTN, SZDRIN, SZEDSP, 
    SZTNAC,  SZSFXO, SZNXTR, SZLTTR, SZUOM, SZUSER, SZPID, SZJOBN, SZUORG, SZPRRC, 
    SZOGNO, SZRLLN, SZDMCS, SZOPDJ, SZADDJ, SZCNDJ, SZPEFJ, SZPPDJ, SZPSDJ, SZDSVJ, 
    SZDGL, SZPN, SZFRMP, SZTHRP, SZUCHG, SZUOPN, SZUREC, SZCREC, SZURLV, SZAEXP, 
    SZACHG, SZAOPN, SZAREC, SZARLV, SZFTN1, SZTRLV, SZAMC3, SZECST, SZDSPR, SZANBY, 
    SZANCR, SZPQOR, SZSQOR, SZITWT, SZITVL, SZGRWT, SZCCMP, SZCORD, SZDOCC, SZCHLN, 
    SZCRR, SZFRRC, SZFEA, SZFUC, SZFEC, SZFCHG, SZFAP, SZFREC, SZURDT, SZURAT, 
    SZURAB, SZSHPN, SZRSHT, SZPRJM, SZMKFR, SZMCLN, SZLDNM, SZKTLN, SZFTRL, SZDRQT, 
    SZDLEJ, SZCTAM, SZCPNT, SZCHT, SZCHRT, SZCHRD, SZCHMJ, SZBTAN, SZUKID, SZSRQTY, 
    SZPNS, SZDRQJ, SZTRDJ, SZPDDJ, SZUPMJ, SZDSC1, SZDSC2, SZSHAN, SZOKCO, SZOCTO, 
    SZBALU, SZITM, SZTX, SZRATT, SZCTRY, SZFY, SZSTTS, SZRCD, SZFUF1, SZFUF2, 
    SZLT, SZTORG, SZTDAY, SZOORN, SZDOCO, SZKCOO, SZMCU)
    VALUES(
          '".$row['Matricule']."', 
          '".$row['Matricule']."', 
		  '".$row['Reference_demande']."', 
          '".$row['Reference_demande']."', 
          '".$row['item_ligne']."', 
          '".$row['item_ligne']."', 
          '".$J."', 850, 1, '".$N."', 
          '".$A."', '".$sfxo."', 130, 110, '".$EA."', '".$JDE."', '".$P4311Z1I."', '".$JDEWEBL."', 
		  '".$row['item_qte']."00000"."', 
		  '".htmlspecialchars($row['prix_L1']."0000", ENT_QUOTES)."', 
          0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 
          0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 
          0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 
          0, 0, 0, 0, 0, 0, 0, 0, 0, 0,  
          0, 0, 0, 0, 0, 0, 0, 0, 0, 0,  
          0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 
          0, 0, 0, 0, 0, 0, 0, 0, 0, 0,  
          0, 
		  '".$datecreation."', 
		  '".$datecreation."',
		  '".$datecreation."',
		  '".$datecreation."', 
		  '".htmlspecialchars($row['item_desc1'], ENT_QUOTES)."', 
		  '".htmlspecialchars($row['item_desc2'], ENT_QUOTES)."', 
		  '".$cs."', 
		  '".$ref_site."',
		  '".$DD."', 
          '".$N."', 0, '".$espace1."', '".$F."', 20, 21, '".$S."', '".$espace2."', '".$Y."', '".$Y."', 
          '".$AA."', '".$DAD."', 
		  '".$heure."', 
		  '".$row['Reference_demande']."', 
		  '".$row['Reference_demande']."', 
		  '".$ref_site."', 
		  '".$row['Magcc']."')";
		  

        // var_dump($b);
            try{
          $conn1->exec($b);
          echo "New record created successfully";
        }catch(PDOException $e){
          echo $b . "<br>" . $e->getMessage();
          
        }
   

}
}
else{
  // echo($ref);
  // echo("Error insertion");
   echo "<script>alert('Merci de vérfié vos informations !!');</script>";

} 
    } 
 }
header("Location: http://192.168.0.85/Gestion/Acceuil.php?conf=1");






?>