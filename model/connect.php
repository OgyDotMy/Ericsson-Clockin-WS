<?php 

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="log";

$connect=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$connect){
    die("connection closed").mysqli_connect_error();
}else{
//     echo "db ready to takeoff";
}

?>
