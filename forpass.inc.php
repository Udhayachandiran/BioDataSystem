<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>forpass include php</title>
</head>
<body>
<?php

if(isset($_POST["submit"])){
    session_start();
    require_once 'dbconn.php';
    
    $uname=$_POST['uname'];
    $email=$_POST['email'];
    $sql="SELECT 'uname','email' FROM register WHERE uname='$uname' AND email='$email' ";
    //$rs = mysqli_query($conn,$sql);
    //$data= mysqli_fetch_assoc($rs,MYSQLI_NUM);
    $retval=mysqli_query($conn,$sql);
    
    if(mysqli_num_rows($retval)> 0){
        $_SESSION['e']=$email;
        echo '<script> window.location.replace("createpass.php");</script>';
  
        //header("location: login.php?error=none");
        //exit();
    }
    else{
        header("location: forpass.php?error=incorrectdet");
        exit();
    }
}
else{
    header("location: login.php");
    exit();
}
?>
</body>
</html>