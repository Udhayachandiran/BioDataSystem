<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>editBD include php</title>
</head>
<body>
<?php

if(isset($_POST["submit"])){
    require_once 'dbconn.php';
    $usname=$_SESSION['name'];
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
    
    if(ctype_alpha(str_replace(' ', '', $name)) && ctype_alpha(str_replace(' ', '', $mt)) && preg_match("/^[a-zA-Z ,.]*$/", $lk) && ctype_alpha(str_replace(' ', '', $faname)) && ctype_alpha(str_replace(' ', '', $fo)) && ctype_alpha(str_replace(' ', '', $moname)) && ctype_alpha(str_replace(' ', '', $mo))){
        if($gender=='Select'){
            echo "<script> window.alert('Error!! Select Gender'); window.location.replace('editBD.php');</script>";
        }
        else{
        $sql="UPDATE `details` SET `usname`='$usname',`name`='$name',`dob`='$dob',`age`='$age',`gender`='$gender',`height`='$height',`weight`='$weight',`addr`='$addr',`mt`='$mt',`lk`='$lk',`faname`='$faname',`fo`='$fo',`moname`='$moname',`mo`='$mo' WHERE usname ='$usname'; ";
            if(mysqli_query($conn,$sql)){
                $_SESSION['view']='view';
                echo "<script> window.alert('Bio-Data edited successfully'); window.location.replace('viewBD.php');</script>";
            }
            else{
                echo "$sql".mysqli_error();
            }
        }
    }
    else{
        echo "<script> window.alert('Error!! Input appropriate text for each field'); window.location.replace('editBD.php');</script>";
    }
    
}
else{
    header("location: editBD.php");
    exit();
}
?>
</body>
</html>