<?php 

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbtable="log";

$connect=mysqli_connect($dbhost,$dbuser,$dbpass,$dbtable);

if(!$connect){
    die("connection closed").mysqli_connect_error();
}else{
//     echo "db ready to takeoff";
}

?>
