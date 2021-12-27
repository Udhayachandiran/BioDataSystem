<?php 
function emptyInputRegister($uname,$email,$password,$repass){
    $result;
    if(empty($uname) || empty($email) || empty($password) || empty($repass)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function invalidUname($uname){
    $result;
    if(!preg_match("/^[a-zA-Z0-9]*$/", $uname)) {
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
} 

function invalidEmail($email){
    $result;
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
} 

function pwdLength($password){
    $result;
    if(strlen($password)>=8){
        $result = false;
    }
    else{
        $result = true;
    }
    return $result;
}

function pwdMatch($password,$repass){
    $result;
    if($password !== $repass){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function unameExists($conn,$uname,$email){
    $sql="SELECT * FROM register WHERE uname='$uname' OR email='$email';";
    $retval=mysqli_query($conn,$sql);
    if($row = mysqli_fetch_assoc($retval)){
        return $row;
   }
   else{
       $result = false;
       return $result;
   }
}

function createUser($conn,$uname,$email,$password){
    $sql="INSERT INTO register(uname,email,password) VALUES('$uname','$email','$password')";
    if(mysqli_query($conn,$sql)){
        echo "<script> alert('Registered successfully');  window.location.replace('login.php'); </script>";  
        
    }
    else{
        echo "$sql".mysqli_error();
    }   
}

function sD(){
        
    session_destroy();
}


  ?>