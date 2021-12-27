<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register include</title>
</head>
<body>
<?php

if(isset($_POST["submit"])){
    require_once 'functions.php';
    require_once 'dbconn.php';
    $uname=$_POST['uname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $repass=$_POST['cofpassword'];

    if(emptyInputRegister($uname,$email,$password,$repass) !== false){
        header("location: register.php?error=emptyinput");
        exit();
    }
    elseif(invalidUname($uname) !== false){
        header("location: register.php?error=invalidusername");
        exit();
    }
    elseif(invalidEmail($email) !== false){
        header("location: register.php?error=invalidemail");
        exit();
    }

    elseif(pwdLength($password)!== false){
        header("location: register.php?error=passwordnotlengthy");
        exit();
    }
    elseif(pwdMatch($password,$repass) !== false){
        header("location: register.php?error=passwordsdontmatch");
        exit();
    }
    
    elseif(unameExists($conn,$uname,$email) !== false){
        header("location: register.php?error=userexists");
        exit();
    }
    else{
    createUser($conn,$uname,$email,$password);
    $_SESSION['register']='register';
    }    
}
else{
    header("location: register.php");
    exit();
}


?>
</body>
</html>