<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>addBDinclude</title>
</head>
<body>
<?php

if(isset($_POST["submit"])){
    require_once 'dbconn.php';
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
        echo "<script> window.alert('Inserted successfully'); window.location.replace('viewBD.php');</script>";
    }
    else{
    echo "$sql".mysqli_error();
    }
}
else{
    header("location: addBD.php");
    exit();
}
?>
</body>
</html>