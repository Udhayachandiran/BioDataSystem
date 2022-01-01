<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>login include php</title>
</head>
<body>
<?php

if(isset($_POST["submit"])){
    session_start();
    require_once 'dbconn.php';
    
    $uname=$_POST['uname'];
    $password=$_POST['password'];

    $sql="SELECT 'uname','password' FROM register WHERE uname='$uname' AND password='$password' ";
    //$rs = mysqli_query($conn,$sql);
    //$data= mysqli_fetch_assoc($rs,MYSQLI_NUM);
    $retval=mysqli_query($conn,$sql);
    
    
    if(mysqli_num_rows($retval)> 0){
        $_SESSION['name']=$_POST['uname'];
        $_SESSION['p']=$_POST['password'];
        if($_SESSION['name']=='admin' && $_SESSION['p']=='admin123'){
            echo '<script> window.alert("Logged in successfully");  window.location.replace("admin.php");</script>';
        }
        else{
        echo '<script> window.alert("Logged in successfully");  window.location.replace("loggedin.php");</script>';
        }   
        //header("location: login.php?error=none");
        //exit();
    }
    else{
        header("location: login.php?error=incorrectdet");
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