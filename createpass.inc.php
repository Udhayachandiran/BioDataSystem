<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create pass include</title>
</head>
<body>
<?php

if(isset($_POST["submit"])){
    require_once 'dbconn.php';
    require_once 'functions.php';
    $e=$_SESSION['e'];
    $password=$_POST['password'];
    $newpass=$_POST['cofpassword'];

    if(pwdLength($password)!== false){
        header("location: createpass.php?error=passwordnotlengthy");
        exit();
    }
    elseif(pwdMatch($password,$newpass) !== false){
        header("location: createpass.php?error=passwordsdontmatch");
        exit();
    }
    
    else{
    updPass($conn,$password,$newpass,$e);
    }    
}
else{
    header("location: login.php");
    exit();
}


?>
</body>
</html>