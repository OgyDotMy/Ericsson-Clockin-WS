<?php 

$dbhost="localhost";
$dbuser="root";
$dbpass="";

$connect=mysqli_connect($dbhost,$dbuser,$dbpass);

if(!$connect){
    die("connection closed").mysqli_connect_error();
}else{
    echo "db ready to takeoff";
}

?>