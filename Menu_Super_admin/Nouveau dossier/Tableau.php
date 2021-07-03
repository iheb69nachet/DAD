<?php 
	session_start();
	$_SESSION['loaded_page']= "Tableau";
	$connect = mysqli_connect("localhost","chocoest","chocoest","projetphase1");
	$sql = "SELECT * FROM votage";  
	$result = mysqli_query($connect, $sql);
 

// calule totale de base de données
function calcul_Totale_base(){

    //$sql="select count(*) from votage";
   
   $con = mysqli_connect("localhost","chocoest","chocoest","projetphase1");
	$sql="SELECT * FROM `votage`";
	$result= mysqli_query($con,$sql);
	$numb=  $result->num_rows;
	return $numb;
}
  ///////////////////////  CABELLA    ////////////////////

/* calule totale des hommes et femmes in CEBELLA*/
function TC(){
	$con = mysqli_connect("localhost","chocoest","chocoest","projetphase1");
	$sql="SELECT * FROM `votage` WHERE `Municipilitees`='4'";
	$result= mysqli_query($con,$sql);
	$numb=  $result->num_rows;
	return $numb;
}

// calule totale des age= entre 18 et 35 ans
function status_jeune(){
	$con = mysqli_connect("localhost","chocoest","chocoest","projetphase1");
	$sql="select * from votage WHERE age='Entre_18__35' AND Municipilitees='4'";	
	$result= mysqli_query($con,$sql);
	$numb=  $result->num_rows;
	return $numb;
}

// calcule des femme
function status_femme(){
	$con = mysqli_connect("localhost","chocoest","chocoest","projetphase1");
	$sql="select * from votage WHERE sexe='Femme' AND Municipilitees='4'";	
	$result= mysqli_query($con,$sql);
	$numb=  $result->num_rows;
	return $numb;
}
// calcule  P_W_D
function status_pwd(){
	$con = mysqli_connect("localhost","chocoest","chocoest","projetphase1");
	$sql="select * from votage WHERE  P_W_D='Oui' AND Municipilitees='4'";	
	$result= mysqli_query($con,$sql);
	$numb=  $result->num_rows;
	return $numb;
}


 ///////////////////////   BEN AOUN    //////////////////// 
 /* calule totale des hommes et femmes in BEN AOUN*/
function TBA(){
	$con = mysqli_connect("localhost","chocoest","chocoest","projetphase1");
	$sql="select * from votage WHERE Municipilitees='14'";
	$result= mysqli_query($con,$sql);
	$numb=  $result->num_rows;
	return $numb;
}
 // calule totale des age= entre 18 et 35 ans
function status_jeune2(){
	$con = mysqli_connect("localhost","chocoest","chocoest","projetphase1");
	$sql="select * from votage WHERE age='Entre_18__35' AND Municipilitees='14'";	
	$result= mysqli_query($con,$sql);
	$numb=  $result->num_rows;
	return $numb;
}

// calcule des femme
function status_femme2(){
	$con = mysqli_connect("localhost","chocoest","chocoest","projetphase1");
	$sql="select * from votage WHERE sexe='Femme' AND Municipilitees='14'";	
	$result= mysqli_query($con,$sql);
	$numb=  $result->num_rows;
	return $numb;
}
// calcule  P_W_D
function status_pwd2(){
	$con = mysqli_connect("localhost","chocoest","chocoest","projetphase1");
	$sql="select * from votage WHERE  P_W_D='Oui' AND Municipilitees='14'";	
	$result= mysqli_query($con,$sql);
	$numb=  $result->num_rows;
	return $numb;
}
 ///////////////////////   SOUK EJDID    ////////////////////
 /*calule totale des hommes et femmes in SOUK EJDID */
 
function TSE(){
	$con = mysqli_connect("localhost","chocoest","chocoest","projetphase1");
	$sql="select  * from votage WHERE Municipilitees='16'";
	$result= mysqli_query($con,$sql);
	$numb=  $result->num_rows;
	return $numb;
}
 // calule totale des age= entre 18 et 35 ans
function status_jeune3(){
	$con = mysqli_connect("localhost","chocoest","chocoest","projetphase1");
	$sql="select * from votage WHERE age='Entre_18__35' AND Municipilitees='16'";	
	$result= mysqli_query($con,$sql);
	$numb=  $result->num_rows;
	return $numb;
}

// calcule des femme
function status_femme3(){
	$con = mysqli_connect("localhost","chocoest","chocoest","projetphase1");
	$sql="select * from votage WHERE sexe='Femme' AND Municipilitees='16'";	
	$result= mysqli_query($con,$sql);
	$numb=  $result->num_rows;
	return $numb;
}
// calcule  P_W_D
function status_pwd3(){
	$con = mysqli_connect("localhost","chocoest","chocoest","projetphase1");
	$sql="select * from votage WHERE  P_W_D='Oui' AND Municipilitees='16'";	
	$result= mysqli_query($con,$sql);
	$numb=  $result->num_rows;
	return $numb;
}
 
///////////////////////  JELMA    ////////////////////


/* calule totale des hommes et femmes in JELMA*/
function TJ(){
	$con = mysqli_connect("localhost","chocoest","chocoest","projetphase1");
	$sql="select * from votage WHERE Municipilitees='6'";
	$result= mysqli_query($con,$sql);
	$numb=  $result->num_rows;
	return $numb;
}
// calule totale des age= entre 18 et 35 ans
function status_jeune5(){
	$con = mysqli_connect("localhost","chocoest","chocoest","projetphase1");
	$sql="select * from votage WHERE age='Entre_18__35' AND Municipilitees='6'";	
	$result= mysqli_query($con,$sql);
	$numb=  $result->num_rows;
	return $numb;
}

// calcule des femme
function status_femme5(){
	$con = mysqli_connect("localhost","chocoest","chocoest","projetphase1");
	$sql="select * from votage WHERE sexe='Femme' AND Municipilitees='6'";	
	$result= mysqli_query($con,$sql);
	$numb=  $result->num_rows;
	return $numb;
}
// calcule  P_W_D
function status_pwd5(){
	$con = mysqli_connect("localhost","chocoest","chocoest","projetphase1");
	$sql="select * from votage WHERE  P_W_D='Oui' AND Municipilitees='6'";	
	$result= mysqli_query($con,$sql);
	$numb=  $result->num_rows;
	return $numb;
}





///////////////////////  RGUEB    ////////////////////


/* calule totale des hommes et femmes in SOUK RGUEB */   
function TR(){
	$con = mysqli_connect("localhost","chocoest","chocoest","projetphase1");
	$sql="select * from votage WHERE Municipilitees='13'";
	$result= mysqli_query($con,$sql);
	$numb=  $result->num_rows;
	return $numb;
}
// calule totale des age= entre 18 et 35 ans
function status_jeune7(){
	$con = mysqli_connect("localhost","chocoest","chocoest","projetphase1");
	$sql="select * from votage WHERE age='Entre_18__35' AND Municipilitees='13'";	
	$result= mysqli_query($con,$sql);
	$numb=  $result->num_rows;
	return $numb;
}

// calcule des femme
function status_femme7(){
	$con = mysqli_connect("localhost","chocoest","chocoest","projetphase1");
	$sql="select * from votage WHERE sexe='Femme' AND Municipilitees='13'";	
	$result= mysqli_query($con,$sql);
	$numb=  $result->num_rows;
	return $numb;
}
// calcule  P_W_D
function status_pwd7(){
	$con = mysqli_connect("localhost","chocoest","chocoest","projetphase1");
	$sql="select * from votage WHERE  P_W_D='Oui' AND Municipilitees='13'";	
	$result= mysqli_query($con,$sql);
	$numb=  $result->num_rows;
	return $numb;
}



/////////////////////// ELHAJEB    ////////////////////


/* calule totale des hommes et femmes in SOUK ELHAJEB   */ 
function TEH(){
	$con = mysqli_connect("localhost","chocoest","chocoest","projetphase1");
	$sql="select * from votage WHERE Municipilitees='32'";
	$result= mysqli_query($con,$sql);
	$numb=  $result->num_rows;
	return $numb;
}
// calule totale des age= entre 18 et 35 ans
function status_jeune8(){
	$con = mysqli_connect("localhost","chocoest","chocoest","projetphase1");
	$sql="select * from votage WHERE age='Entre_18__35' AND Municipilitees='32'";	
	$result= mysqli_query($con,$sql);
	$numb=  $result->num_rows;
	return $numb;
}

// calcule des femme
function status_femme8(){
	$con = mysqli_connect("localhost","chocoest","chocoest","projetphase1");
	$sql="select * from votage WHERE sexe='Femme' AND Municipilitees='32'";	
	$result= mysqli_query($con,$sql);
	$numb=  $result->num_rows;
	return $numb;
}
// calcule  P_W_D
function status_pwd8(){
	$con = mysqli_connect("localhost","chocoest","chocoest","projetphase1");
	$sql="select * from votage WHERE  P_W_D='Oui' AND Municipilitees='32'";	
	$result= mysqli_query($con,$sql);
	$numb=  $result->num_rows;
	return $numb;
}



/////////////////////// SIDI BOUZID    ////////////////////


/* calule totale des hommes et femmes in SOUK SIDI BOUZID  */  
function TSB(){
	$con = mysqli_connect("localhost","chocoest","chocoest","projetphase1");
	$sql="select * from votage WHERE Municipilitees='15'";
	$result= mysqli_query($con,$sql);
	$numb=  $result->num_rows;
	return $numb;
}
// calule totale des age= entre 18 et 35 ans
function status_jeune9(){
	$con = mysqli_connect("localhost","chocoest","chocoest","projetphase1");
	$sql="select * from votage WHERE age='Entre_18__35' AND Municipilitees='15'";	
	$result= mysqli_query($con,$sql);
	$numb=  $result->num_rows;
	return $numb;
}

// calcule des femme
function status_femme9(){
	$con = mysqli_connect("localhost","chocoest","chocoest","projetphase1");
	$sql="select * from votage WHERE sexe='Femme' AND Municipilitees='15'";	
	$result= mysqli_query($con,$sql);
	$numb=  $result->num_rows;
	return $numb;
}
// calcule  P_W_D
function status_pwd9(){
	$con = mysqli_connect("localhost","chocoest","chocoest","projetphase1");
	$sql="select * from votage WHERE  P_W_D='Oui' AND Municipilitees='15'";	
	$result= mysqli_query($con,$sql);
	$numb=  $result->num_rows;
	return $numb;
}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/////////////////// OUI /OUI
function OUI_OUI_Cabela(){
	$con = mysqli_connect("localhost","chocoest","chocoest","projetphase1");
	$sql="SELECT * FROM `votage` WHERE `Intention_Aux_Selections`='OUI' AND  `Intention_Aux_Selections_2`='OUI' AND `Municipilitees`='4'";
	$result= mysqli_query($con,$sql);
	$numb=  $result->num_rows;
	return $numb;
}

function OUI_OUI_Bnaoun(){
	$con = mysqli_connect("localhost","chocoest","chocoest","projetphase1");
	$sql="SELECT * FROM `votage` WHERE `Intention_Aux_Selections`='OUI' AND  `Intention_Aux_Selections_2`='OUI' AND `Municipilitees`='14'";
	$result= mysqli_query($con,$sql);
	$numb=  $result->num_rows;
	return $numb;
}

function OUI_OUI_Souk(){
	$con = mysqli_connect("localhost","chocoest","chocoest","projetphase1");
	$sql="SELECT * FROM `votage` WHERE `Intention_Aux_Selections`='OUI' AND  `Intention_Aux_Selections_2`='OUI' AND `Municipilitees`='16'";
	$result= mysqli_query($con,$sql);
	$numb=  $result->num_rows;
	return $numb;
}
function OUI_OUI_Jelma(){
	$con = mysqli_connect("localhost","chocoest","chocoest","projetphase1");
	$sql="SELECT * FROM `votage` WHERE `Intention_Aux_Selections`='OUI' AND  `Intention_Aux_Selections_2`='OUI' AND `Municipilitees`='6'";
	$result= mysqli_query($con,$sql);
	$numb=  $result->num_rows;
	return $numb;
}
function OUI_OUI_Rgueb(){
	$con = mysqli_connect("localhost","chocoest","chocoest","projetphase1");
	$sql="SELECT * FROM `votage` WHERE `Intention_Aux_Selections`='OUI' AND  `Intention_Aux_Selections_2`='OUI' AND `Municipilitees`='13'";
	$result= mysqli_query($con,$sql);
	$numb=  $result->num_rows;
	return $numb;
}
function OUI_OUI_Hajeb(){
	$con = mysqli_connect("localhost","chocoest","chocoest","projetphase1");
	$sql="SELECT * FROM `votage` WHERE `Intention_Aux_Selections`='OUI' AND  `Intention_Aux_Selections_2`='OUI' AND `Municipilitees`='32'";
	$result= mysqli_query($con,$sql);
	$numb=  $result->num_rows;
	return $numb;
}
function OUI_OUI_Sidibouzid(){
	$con = mysqli_connect("localhost","chocoest","chocoest","projetphase1");
	$sql="SELECT * FROM `votage` WHERE `Intention_Aux_Selections`='OUI' AND  `Intention_Aux_Selections_2`='OUI' AND `Municipilitees`='15'";
	$result= mysqli_query($con,$sql);
	$numb=  $result->num_rows;
	return $numb;
}



/////////////////// OUI / NON

function OUI_NON_Cabela(){
	$con = mysqli_connect("localhost","chocoest","chocoest","projetphase1");
	$sql="SELECT * FROM `votage` WHERE `Intention_Aux_Selections`='OUI' AND  `Intention_Aux_Selections_2`='NON' AND `Municipilitees`='4'";
	$result= mysqli_query($con,$sql);
	$numb=  $result->num_rows;
	return $numb;
}

function OUI_NON_Bnaoun(){
	$con = mysqli_connect("localhost","chocoest","chocoest","projetphase1");
	$sql="SELECT * FROM `votage` WHERE `Intention_Aux_Selections`='OUI' AND  `Intention_Aux_Selections_2`='NON' AND `Municipilitees`='14'";
	$result= mysqli_query($con,$sql);
	$numb=  $result->num_rows;
	return $numb;
}

function OUI_NON_Souk(){
	$con = mysqli_connect("localhost","chocoest","chocoest","projetphase1");
	$sql="SELECT * FROM `votage` WHERE `Intention_Aux_Selections`='OUI' AND  `Intention_Aux_Selections_2`='NON' AND `Municipilitees`='16'";
	$result= mysqli_query($con,$sql);
	$numb=  $result->num_rows;
	return $numb;
}
function OUI_NON_Jelma(){
	$con = mysqli_connect("localhost","chocoest","chocoest","projetphase1");
	$sql="SELECT * FROM `votage` WHERE `Intention_Aux_Selections`='OUI' AND  `Intention_Aux_Selections_2`='NON' AND `Municipilitees`='6'";
	$result= mysqli_query($con,$sql);
	$numb=  $result->num_rows;
	return $numb;
}
function OUI_NON_Rgueb(){
	$con = mysqli_connect("localhost","chocoest","chocoest","projetphase1");
	$sql="SELECT * FROM `votage` WHERE `Intention_Aux_Selections`='OUI' AND  `Intention_Aux_Selections_2`='NON' AND `Municipilitees`='13'";
	$result= mysqli_query($con,$sql);
	$numb=  $result->num_rows;
	return $numb;
}
function OUI_NON_Hajeb(){
	$con = mysqli_connect("localhost","chocoest","chocoest","projetphase1");
	$sql="SELECT * FROM `votage` WHERE `Intention_Aux_Selections`='OUI' AND  `Intention_Aux_Selections_2`='NON' AND `Municipilitees`='32'";
	$result= mysqli_query($con,$sql);
	$numb=  $result->num_rows;
	return $numb;
}
function OUI_NON_Sidibouzid(){
	$con = mysqli_connect("localhost","chocoest","chocoest","projetphase1");
	$sql="SELECT * FROM `votage` WHERE `Intention_Aux_Selections`='OUI' AND  `Intention_Aux_Selections_2`='NON' AND `Municipilitees`='15'";
	$result= mysqli_query($con,$sql);
	$numb=  $result->num_rows;
	return $numb;
}



/////////////////// NON / NON

function NON_NON_Cabela(){
	$con = mysqli_connect("localhost","chocoest","chocoest","projetphase1");
	$sql="SELECT * FROM `votage` WHERE `Intention_Aux_Selections`='NON' AND  `Intention_Aux_Selections_2`='NON' AND `Municipilitees`='4'";
	$result= mysqli_query($con,$sql);
	$numb=  $result->num_rows;
	return $numb;
}

function NON_NON_Bnaoun(){
	$con = mysqli_connect("localhost","chocoest","chocoest","projetphase1");
	$sql="SELECT * FROM `votage` WHERE `Intention_Aux_Selections`='NON' AND  `Intention_Aux_Selections_2`='NON' AND `Municipilitees`='14'";
	$result= mysqli_query($con,$sql);
	$numb=  $result->num_rows;
	return $numb;
}

function NON_NON_Souk(){
	$con = mysqli_connect("localhost","chocoest","chocoest","projetphase1");
	$sql="SELECT * FROM `votage` WHERE `Intention_Aux_Selections`='NON' AND  `Intention_Aux_Selections_2`='NON' AND `Municipilitees`='16'";
	$result= mysqli_query($con,$sql);
	$numb=  $result->num_rows;
	return $numb;
}
function NON_NON_Jelma(){
	$con = mysqli_connect("localhost","chocoest","chocoest","projetphase1");
	$sql="SELECT * FROM `votage` WHERE `Intention_Aux_Selections`='NON' AND  `Intention_Aux_Selections_2`='NON' AND `Municipilitees`='6'";
	$result= mysqli_query($con,$sql);
	$numb=  $result->num_rows;
	return $numb;
}
function NON_NON_Rgueb(){
	$con = mysqli_connect("localhost","chocoest","chocoest","projetphase1");
	$sql="SELECT * FROM `votage` WHERE `Intention_Aux_Selections`='NON' AND  `Intention_Aux_Selections_2`='NON' AND `Municipilitees`='13'";
	$result= mysqli_query($con,$sql);
	$numb=  $result->num_rows;
	return $numb;
}
function NON_NON_Hajeb(){
	$con = mysqli_connect("localhost","chocoest","chocoest","projetphase1");
	$sql="SELECT * FROM `votage` WHERE `Intention_Aux_Selections`='NON' AND  `Intention_Aux_Selections_2`='NON' AND `Municipilitees`='32'";
	$result= mysqli_query($con,$sql);
	$numb=  $result->num_rows;
	return $numb;
}
function NON_NON_Sidibouzid(){
	$con = mysqli_connect("localhost","chocoest","chocoest","projetphase1");
	$sql="SELECT * FROM `votage` WHERE `Intention_Aux_Selections`='NON' AND  `Intention_Aux_Selections_2`='NON' AND `Municipilitees`='15'";
	$result= mysqli_query($con,$sql);
	$numb=  $result->num_rows;
	return $numb;
}



/////////////////// NON / NON

function NON_OUI_Cabela(){
	$con = mysqli_connect("localhost","chocoest","chocoest","projetphase1");
	$sql="SELECT * FROM `votage` WHERE `Intention_Aux_Selections`='NON' AND  `Intention_Aux_Selections_2`='OUI' AND `Municipilitees`='4'";
	$result= mysqli_query($con,$sql);
	$numb=  $result->num_rows;
	return $numb;
}

function NON_OUI_Bnaoun(){
	$con = mysqli_connect("localhost","chocoest","chocoest","projetphase1");
	$sql="SELECT * FROM `votage` WHERE `Intention_Aux_Selections`='NON' AND  `Intention_Aux_Selections_2`='OUI' AND `Municipilitees`='14'";
	$result= mysqli_query($con,$sql);
	$numb=  $result->num_rows;
	return $numb;
}

function NON_OUI_Souk(){
	$con = mysqli_connect("localhost","chocoest","chocoest","projetphase1");
	$sql="SELECT * FROM `votage` WHERE `Intention_Aux_Selections`='NON' AND  `Intention_Aux_Selections_2`='OUI' AND `Municipilitees`='16'";
	$result= mysqli_query($con,$sql);
	$numb=  $result->num_rows;
	return $numb;
}
function NON_OUI_Jelma(){
	$con = mysqli_connect("localhost","chocoest","chocoest","projetphase1");
	$sql="SELECT * FROM `votage` WHERE `Intention_Aux_Selections`='NON' AND  `Intention_Aux_Selections_2`='OUI' AND `Municipilitees`='6'";
	$result= mysqli_query($con,$sql);
	$numb=  $result->num_rows;
	return $numb;
}
function NON_OUI_Rgueb(){
	$con = mysqli_connect("localhost","chocoest","chocoest","projetphase1");
	$sql="SELECT * FROM `votage` WHERE `Intention_Aux_Selections`='NON' AND  `Intention_Aux_Selections_2`='OUI' AND `Municipilitees`='13'";
	$result= mysqli_query($con,$sql);
	$numb=  $result->num_rows;
	return $numb;
}
function NON_OUI_Hajeb(){
	$con = mysqli_connect("localhost","chocoest","chocoest","projetphase1");
	$sql="SELECT * FROM `votage` WHERE `Intention_Aux_Selections`='NON' AND  `Intention_Aux_Selections_2`='OUI' AND `Municipilitees`='32'";
	$result= mysqli_query($con,$sql);
	$numb=  $result->num_rows;
	return $numb;
}
function NON_OUI_Sidibouzid(){
	$con = mysqli_connect("localhost","chocoest","chocoest","projetphase1");
	$sql="SELECT * FROM `votage` WHERE `Intention_Aux_Selections`='NON' AND  `Intention_Aux_Selections_2`='OUI' AND `Municipilitees`='15'";
	$result= mysqli_query($con,$sql);
	$numb=  $result->num_rows;
	return $numb;
}

$TBASE = calcul_Totale_base();



$S1 = status_jeune();
$S2 = status_femme();
$S3 = status_pwd();
$St1 = TC();

$S11 = status_jeune2();
$S22 = status_femme2();
$S33 = status_pwd2();
$St2 = TBA();

$S111 = status_jeune3();
$S222 = status_femme3();
$S333 = status_pwd3();
$St3 = TSE();

$S55 = status_jeune5();
$S555 = status_femme5();
$S5555 = status_pwd5();
$St5 = TJ();

$S77 = status_jeune7();
$S777 = status_femme7();
$S7777 = status_pwd7();
$St7 = TR();

$S88 = status_jeune8();
$S888 = status_femme8();
$S8888 = status_pwd8();
$St8 = TEH();

$S99 = status_jeune9();
$S999 = status_femme9();
$S9999 = status_pwd9();
$St9 = TSB();

$T1 = $S1 + $S11 + $S111 + $S55 + $S77 + $S88 + $S99;
$T2 = $S2 + $S22 + $S222  + $S555 + $S777 + $S888 + $S999;
$T3 = $S3 + $S33 + $S333  + $S5555 + $S7777+ $S8888+ $S9999;

$OUI_OUI_Cabbela = OUI_OUI_Cabela();
$OUI_OUI_Bnaoun= OUI_OUI_Bnaoun();
$OUI_OUI_Souk= OUI_OUI_Souk();
$OUI_OUI_Jelma= OUI_OUI_Jelma();
$OUI_OUI_Rgueb= OUI_OUI_Rgueb();
$OUI_OUI_Hajeb= OUI_OUI_Hajeb();
$OUI_OUI_Sidibouzid= OUI_OUI_Sidibouzid();


$OUI_NON_Cabbela = OUI_NON_Cabela();
$OUI_NON_Bnaoun= OUI_NON_Bnaoun();
$OUI_NON_Souk= OUI_NON_Souk();
$OUI_NON_Jelma= OUI_NON_Jelma();
$OUI_NON_Rgueb= OUI_NON_Rgueb();
$OUI_NON_Hajeb= OUI_NON_Hajeb();
$OUI_NON_Sidibouzid= OUI_NON_Sidibouzid();


$NON_NON_Cabbela = NON_NON_Cabela();
$NON_NON_Bnaoun= NON_NON_Bnaoun();
$NON_NON_Souk= NON_NON_Souk();
$NON_NON_Jelma= NON_NON_Jelma();
$NON_NON_Rgueb= NON_NON_Rgueb();
$NON_NON_Hajeb= NON_NON_Hajeb();
$NON_NON_Sidibouzid= NON_NON_Sidibouzid();

$NON_OUI_Cabbela = NON_OUI_Cabela();
$NON_OUI_Bnaoun= NON_OUI_Bnaoun();
$NON_OUI_Souk= NON_OUI_Souk();
$NON_OUI_Jelma= NON_OUI_Jelma();
$NON_OUI_Rgueb= NON_OUI_Rgueb();
$NON_OUI_Hajeb= NON_OUI_Hajeb();
$NON_OUI_Sidibouzid= NON_OUI_Sidibouzid();


$N0 = $OUI_OUI_Cabbela + $NON_OUI_Cabbela;
$N1 = $OUI_OUI_Bnaoun + $NON_OUI_Bnaoun;
$N2 = $OUI_OUI_Souk + $NON_OUI_Souk;
$N3 = $OUI_OUI_Jelma + $NON_OUI_Jelma;
$N4 = $OUI_OUI_Rgueb + $NON_OUI_Rgueb;
$N5 = $OUI_OUI_Hajeb + $NON_OUI_Hajeb;
$N6 = $OUI_OUI_Sidibouzid + $NON_OUI_Sidibouzid;

$N7 = $OUI_NON_Cabbela + $NON_NON_Cabbela;
$N8 = $OUI_NON_Bnaoun + $NON_NON_Bnaoun;
$N9 = $OUI_NON_Souk + $NON_NON_Souk;
$N10 = $OUI_NON_Jelma + $NON_NON_Jelma;
$N11 = $OUI_NON_Rgueb + $NON_NON_Rgueb;
$N12 = $OUI_NON_Hajeb + $NON_NON_Hajeb;
$N13 = $OUI_NON_Sidibouzid + $NON_NON_Sidibouzid;


$Somm1 = $N0 + $N7;
$Somm2 = $N1 + $N8;
$Somm3 = $N2 + $N9;
$Somm4 = $N3 + $N10;
$Somm5 = $N4 + $N11;
$Somm6 = $N5 + $N12;
$Somm7 = $N6 + $N13;
?>





<script>
function downloadCSV(csv, filename) {
	    var csvFile;
	    var downloadLink;
	
	    // CSV file
	    csvFile = new Blob([csv], {type: "text/csv"});
	
	    // Download link
	    downloadLink = document.createElement("a");
	
	    // File name
	    downloadLink.download = filename;
	
	    // Create a link to the file
	    downloadLink.href = window.URL.createObjectURL(csvFile);
	
	    // Hide download link
	    downloadLink.style.display = "none";
	
	    // Add the link to DOM
	    document.body.appendChild(downloadLink);
	
	    // Click download link
	    downloadLink.click();
	}
function exportTableToCSV(filename) {
	    var csv = [];
	    var rows = document.querySelectorAll("table tr");
	    
	    for (var i = 0; i < rows.length; i++) {
	        var row = [], cols = rows[i].querySelectorAll("td, th");
	        
	        for (var j = 0; j < cols.length; j++) 
	            row.push(cols[j].innerText);
	        
	        csv.push(row.join(","));        
	    }
	
	    // Download CSV file
	    downloadCSV(csv.join("\n"), filename);
}	
</script>


 <style>			
				@media only screen and (max-width: 600px) {
				    /* For tablets: */
						  .ScrollStyle
					{
					   height: 450px; 
						overflow-y : auto;
					}
				}

 </style>
 
<div class="ScrollStyle"> 
<div class="row">  
<section class="tile color transparent-black col-md-12">
                  <!-- tile header -->
                  <div class="tile-header">
                    <h1><strong>Tableau </strong> Statistique</h1>
                    
                  </div>
                  <!-- /tile header -->

                  <!-- tile body -->
                  <div class="tile-body nopadding" style="overflow-x:auto;">
                    
                    <table class="table">
                    
                      <thead>
                        <tr class="noExl">
                          <th>#</th>
                          <th>MUNICIPALITES</th>
                          <th>TOTALE</th>
                          <th>JEUNNE</th>
                          <th>FEMME</th>
                          <th>P_W_D</th>
                        </tr>
                      </thead>
                      <tbody>
						  
                        <tr>
                          <td>1</td>
                          <td>  Cabbela   </td>	
                          <td>  <?php echo $St1; ?>  </td>
			                           
                          <td>  <?php echo $S1; ?>  </td>
                          <td>  <?php echo $S2; ?>   </td>
                          <td>  <?php echo $S3; ?>   </td>
                        </tr>
                     
			
			 <tr>
                          <td>2</td>
                          <td>  BEN AOUN  </td>
                          <td>  <?php echo $St2; ?>  </td>
			  	                         
                          <td>  <?php echo $S11; ?>  </td>
                          <td>  <?php echo $S22; ?>   </td>
                          <td>  <?php echo $S33; ?>   </td>
                        </tr>
			 
			 <tr>
                          <td>3</td>
                          <td>  SOUK EJDID  </td>
                          <td>  <?php echo $St3; ?>  </td>
			  	                         
                          <td>  <?php echo $S111; ?>  </td>
                          <td>  <?php echo $S222; ?>   </td>
                          <td>  <?php echo $S333; ?>   </td>
                        </tr>
			
		 
			
                        
                         <tr>
                          <td>4</td>
                          <td>  JELMA   </td>
                          <td>  <?php echo $St5; ?>  </td>
			  	                         
                          <td>  <?php echo $S55; ?>  </td>
                          <td>  <?php echo $S555; ?>   </td>
                          <td>  <?php echo $S5555; ?>   </td>
                        </tr>	
                        
                         
                        
                         <tr>
                          <td>6</td>
                          <td>  RGUEB   </td>
                          <td>  <?php echo $St7; ?>  </td>
			  	                         
                          <td>  <?php echo $S77; ?>  </td>
                          <td>  <?php echo $S777; ?>   </td>
                          <td>  <?php echo $S7777; ?>   </td>
                        </tr>
                        
                         <tr>
                          <td>7</td>
                          <td>  EL-HAJEB   </td>
                          <td>  <?php echo $St8; ?>  </td>
			  	                         
                          <td>  <?php echo $S88; ?>  </td>
                          <td>  <?php echo $S888; ?>   </td>
                          <td>  <?php echo $S8888; ?>   </td>
                        </tr>
                        
                         <tr>
                          <td>8</td>
                          <td>  SIDI BOUZID   </td>
                          <td>  <?php echo $St9; ?>  </td>
			  	                         
                          <td>  <?php echo $S99; ?>  </td>
                          <td>  <?php echo $S999; ?>   </td>
                          <td>  <?php echo $S9999; ?>   </td>
                        </tr>	 
			
			 <tr>
			    <th colspan="">Totale de la Base:</th>
			    <td class="card-greensea"><?php echo     $TBASE          ; ?></td>
			    <td><?php echo  '                 '; ?></td>
			    <td><?php echo $T1; ?></td>
			    <td><?php echo $T2; ?></td>
			    <td><?php echo $T3; ?></td>
			   
			  </tr>		 
                       
                      </tbody>
		                  	 
                    </table>
 			
                      <br />
		    <button  class="btn btn-hotpink" style="float:right"  onClick="exportTableToCSV('Table_Statistique.csv')">
		    Exporter Statistique Table To Excel</button>
                  </div>
 </section>
 </div>
 <div class="row"> 
<section class="tile color transparent-white col-md-12">
                  <!-- tile header -->
                  <div class="tile-header">
                    <h1><strong>Tableau </strong> Statistique d'Intention d'Election</h1>
                    
                  </div>
                  <!-- /tile header -->

                  <!-- tile body -->
                  <div class="tile-body nopadding" style="overflow-x:auto;">
                    
                    <table class="table">
                    
                      <thead>
                        <tr class="noExl">
                        <th>MUNICIPALITES</th>
                          <th>TOTALE OUI + NON </th>
                          <th>TOTALE OUI</th>
                           <th>TOTALE NON</th>
                          <th>OUI / OUI</th>
                          <th>NON / OUI</th>
                          <th>OUI / NON</th>
                          <th>NON / NON</th>
                          
                        </tr>
                      </thead>
                      <tbody>
						  
                        <tr>
                        <td>  Cabbela   </td>
                           <td><?php echo $Somm1; ?></td>
			    <td><?php echo $N0; ?></td>
			     <td><?php echo $N7 ; ?></td>
			    <td><?php echo $OUI_OUI_Cabbela; ?></td>
			    <td><?php echo $NON_OUI_Cabbela; ?></td>
			      <td><?php echo $OUI_NON_Cabbela; ?></td>
			     <td><?php echo $NON_NON_Cabbela; ?></td>
			    
                        </tr>
                     
			
			 <tr>
			 <td>  BEN AOUN  </td>	   
                          <td><?php echo $Somm2; ?></td>
			    <td><?php echo $N1; ?></td>
			     <td><?php echo $N8 ; ?></td>
			    <td><?php echo $OUI_OUI_Bnaoun; ?></td>
			    <td><?php echo $NON_OUI_Bnaoun; ?></td>
			     <td><?php echo $OUI_NON_Bnaoun; ?></td>
			    <td><?php echo $NON_NON_Bnaoun; ?></td>
			    
                        </tr>
			 
			 <tr>
			 <td>  SOUK EJDID  </td>
                           <td><?php echo $Somm3; ?></td>
			    <td><?php echo $N2; ?></td>
			     <td><?php echo $N9 ; ?></td>
			    <td><?php echo $OUI_OUI_Souk; ?></td>
			    <td><?php echo $NON_OUI_Souk; ?></td>
			     <td><?php echo $OUI_NON_Souk; ?></td>
			     <td><?php echo $NON_NON_Souk; ?></td>
			    
                        </tr>
			
		 
			 <tr>
			  <td>  JELMA  </td>	
                          <td><?php echo $Somm4; ?></td>
			    <td><?php echo $N3; ?></td>
			     <td><?php echo $N10 ; ?></td>
			    <td><?php echo $OUI_OUI_Jelma; ?></td>
			     <td><?php echo $NON_OUI_Jelma; ?></td>
			     <td><?php echo $OUI_NON_Jelma; ?></td>
			      <td><?php echo $NON_NON_Jelma; ?></td>
			  
                        </tr>
                        
                         <tr>
                         <td>  RGUEB   </td>
                          <td><?php echo $Somm5; ?></td>
			    <td><?php echo $N4; ?></td>
			     <td><?php echo $N11  ; ?></td>
			    <td><?php echo $OUI_OUI_Rgueb; ?></td>
			    <td><?php echo $NON_OUI_Rgueb; ?></td>
			    <td><?php echo $OUI_NON_Rgueb; ?></td>
			     <td><?php echo $NON_NON_Rgueb; ?></td>
			    
                        </tr>	
                        
                         <tr>
                         <td>  HAJEB   </td>
                          <td><?php echo $Somm6; ?></td>
			    <td><?php echo $N5; ?></td>
			     <td><?php echo $N12 ; ?></td>
			    <td><?php echo $OUI_OUI_Hajeb; ?></td>
			    <td><?php echo $NON_OUI_Hajeb; ?></td>
			    <td><?php echo $OUI_NON_Hajeb; ?></td>
			     <td><?php echo $NON_NON_Hajeb; ?></td>
			    
                        </tr>
                        
                         <tr>
                          <td>  SIDI BOUZID   </td>	  
                          <td><?php echo $Somm7; ?></td>
			    <td><?php echo $N6; ?></td>
			     <td><?php echo $N13 ; ?></td>
			    <td><?php echo $OUI_OUI_Sidibouzid; ?></td>
			    <td><?php echo $NON_OUI_Sidibouzid; ?></td>
			     <td><?php echo $OUI_NON_Sidibouzid; ?></td>
			     <td><?php echo $NON_NON_Sidibouzid; ?></td>
			    
                        </tr>
                        	 
			
			 <tr>
			    <th colspan="">Totale Section:</th>
			    <td><?php echo '              '; ?></td>
			    <td class="card-greensea"><?php echo $TBASE ; ?></td>
			     <td><?php echo '              '; ?></td>
			    <td><?php echo '              '; ?></td>
			     <td><?php echo '              '; ?></td>
			     <td><?php echo '              '; ?></td>
			    <td><?php echo '              '; ?></td>
			   
			   
			  </tr>		 
                       
                      </tbody>
		                  	 
                    </table>
 			
                      <br />
		    <button  class="btn btn-red" style="float:right"  onClick="exportTableToCSV('Table_Statistique.csv')">
		    Exporter Statistique Table To Excel</button>
                  </div>
 </section>

</div>	

</div>		    