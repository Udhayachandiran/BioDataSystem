<html>

<body>
<?php

$host= "localhost";
$uname="root";
$pass="";
$dbname="biodata";

$conn=mysqli_connect($host,$uname,$pass,$dbname);

if(!$conn){
    die("Connection failed".mysqli_error());
}

$name=$_POST['name'];
$dob=$_POST['dob'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$height=$_POST['height'];
$weight=$_POST['weight'];
$addr=$_POST['addr'];
$mt=$_POST['mt'];
$lk=$_POST['lk'];
$faname=$_POST['faname'];
$fo=$_POST['fo'];
$moname=$_POST['moname'];
$mo=$_POST['mo'];

$sql="INSERT INTO details(name,dob,age,gender,height,weight,addr,mt,lk,faname,fo,moname,mo) VALUES('$name','$dob',$age,'$gender',$height,$weight,'$addr','$mt','$lk','$faname','$fo','$moname','$mo')";

if(mysqli_query($conn,$sql)){
    echo "<script> alert('Inserted successfully');</script>";
    header("Location: viewBD.php");
    exit;
} 

?>
</body>
</html>