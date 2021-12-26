<?php
//session_start();
$host= "localhost";
$usname="root";
$pass="";
$dbname="biodata";

$conn=mysqli_connect($host,$usname,$pass,$dbname);

if(!$conn){
    die("Connection failed".mysqli_error());
} 

?>