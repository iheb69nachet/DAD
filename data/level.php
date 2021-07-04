<?php
if(isset($_POST['insert'])){
    $hostname = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname   = "projetphase1"; 
$connect = mysqli_connect($hostname, $username, $password, $dbname); 

    print_r($_POST);
    echo('<br>');
    $sql='select * from demande where id='.$_POST['ref_id'];
    // $sql='sel'
$result = $connect->query($sql);
function getNextLeve($arr,$curent){
    $index=array_search($curent, $arr);
    if($index+2>count($arr)){
        return 'done';
    }
    
return $arr[$index+1];
}
while($row = $result->fetch_assoc()){
    $current_level=$row['current_level'];

    $steps=explode('/',$row['steps']);
$next=getNextLeve($steps,$current_level);
if($_POST['validation']!=='Valider'){
    $update='UPDATE demande
    SET is_rejected ="yes"
    WHERE id='.$_POST['ref_id']; 

}else{
    if($next!=='done'){
        $update='UPDATE demande
        SET current_level = "'.$next.'"
        WHERE id='.$_POST['ref_id'];
        }else{
            $update='UPDATE demande
            SET is_checked ="checked"
            WHERE id='.$_POST['ref_id']; 
            
        }
}

echo($update);
$connect->query($update);

header('Location: ' . $_SERVER['HTTP_REFERER']);

}
    // echo('hi');

}