<?php session_start();

if(isset($_SESSION['name'])) {
    header("Location: loggedin.php"); // redirects logged user to their homepage
    exit; 
}
if(isset($_SESSION['register'])) {
    echo '<script> alert("Already registered, please continue to login");  window.location.replace("login.php");</script>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <script src="func.js" type="text/javascript"></script>
    <title>Bio-Data System</title>
    <link rel="icon" href="BDS_Title.png" type="image/icon type">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-md bg-warning navbar-light py-3">
        <div class="container">
            <a href="index.php" class="navbar-brand">
                <img src="BDS_Logo.png" alt="" width="60" height="60">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="nav navbar-nav mx-auto">
                    <li class="nav-item"> <h1 style="font-family: monospace;" class="text-dark text-center">BIO - DATA SYSTEM</h1> </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav item">
                        <a href="login.php" class="nav-link"><strong>Login</strong></a>
                    </li>
                    <li class="nav item">
                        <a href="register.php" class="nav-link"><strong>Register</strong></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Body -->
    <section class="bg-dark p-3 text-light">
        <div class="container">
            <div class="container">
                <h2 class="text-center pt-5">Registration Form</h2>
            <p class="lead text-center text-light pb-3">Do fill up details to register your Bio-Data</p>
            <div class="d-md-flex align-items-center justify-content-center">
                <form action="register.inc.php" method="post">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="uname">
                    </div>
                    <div class="mb-3">
                      <label for="email" class="form-label text">Email address</label>
                      <input type="email" class="form-control" id="email" name="email"  required>
                      <div style="font-size: small;" class="text-light mb-3">Enter your college email address &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                    </div>
                    <div class="mb-3">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" class="form-control" id="password" name="password" required>
                      <div style="font-size: small;" class="text-light mb-3">Password must be atleast 8 characters &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                    </div>
                    <div class="mb-3">
                        <label for="cofpassword" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="cofpassword" name="cofpassword" required>
                      </div>
                    <div class="text-center">
                        
                            <input type="submit" value="Submit" name="submit" class="btn btn-primary">


                            <p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</p>
                        <?php 
                            if(isset($_GET["error"])){
                                if($_GET["error"]=="emptyinput"){
                                echo '<div class="alert">
                                      <span class="closebtn">&times;</span> Fill in all the Fields! </div>
                                      <script>
                                            var close = document.getElementsByClassName("closebtn");
                                            var i;
    
                                            for (i = 0; i < close.length; i++) {
                                            close[i].onclick = function(){
                                                var div = this.parentElement;
                                                div.style.opacity = "0";
                                                setTimeout(function(){ div.style.display = "none"; }, 600);
                                            }
                                            }
                                          </script>';
                                }
                                if($_GET["error"]=="invalidusername"){
                                    echo '<div class="alert">
                                          <span class="closebtn">&times;</span> Invalid Username </div>
                                          <script>
                                            var close = document.getElementsByClassName("closebtn");
                                            var i;
    
                                            for (i = 0; i < close.length; i++) {
                                            close[i].onclick = function(){
                                                var div = this.parentElement;
                                                div.style.opacity = "0";
                                                setTimeout(function(){ div.style.display = "none"; }, 600);
                                            }
                                            }
                                          </script>';
                                }
                                if($_GET["error"]=="invalidemail"){
                                    echo '<div class="alert">
                                          <span class="closebtn">&times;</span> Invalid Email </div>
                                          <script>
                                            var close = document.getElementsByClassName("closebtn");
                                            var i;
    
                                            for (i = 0; i < close.length; i++) {
                                            close[i].onclick = function(){
                                                var div = this.parentElement;
                                                div.style.opacity = "0";
                                                setTimeout(function(){ div.style.display = "none"; }, 600);
                                            }
                                            }
                                          </script>';
                                }
                                if($_GET["error"]=="passwordnotlengthy"){
                                    echo '<div class="alert">
                                          <span class="closebtn">&times;</span> <strong>Password is not strong</strong> </div>
                                          <script>
                                            var close = document.getElementsByClassName("closebtn");
                                            var i;
    
                                            for (i = 0; i < close.length; i++) {
                                            close[i].onclick = function(){
                                                var div = this.parentElement;
                                                div.style.opacity = "0";
                                                setTimeout(function(){ div.style.display = "none"; }, 600);
                                            }
                                            }
                                          </script>';
                                }
                                if($_GET["error"]=="passwordsdontmatch"){
                                    echo '<div class="alert">
                                          <span class="closebtn">&times;</span> <strong>Passwords does not match</strong> </div>
                                          <script>
                                            var close = document.getElementsByClassName("closebtn");
                                            var i;
    
                                            for (i = 0; i < close.length; i++) {
                                            close[i].onclick = function(){
                                                var div = this.parentElement;
                                                div.style.opacity = "0";
                                                setTimeout(function(){ div.style.display = "none"; }, 600);
                                            }
                                            }
                                          </script>';
                                }
                                if($_GET["error"]=="userexists"){
                                    echo '<div class="alert">
                                          <span class="closebtn">&times;</span> <strong>User Already Exists</strong> </div>
                                          <script>
                                            var close = document.getElementsByClassName("closebtn");
                                            var i;
    
                                            for (i = 0; i < close.length; i++) {
                                            close[i].onclick = function(){
                                                var div = this.parentElement;
                                                div.style.opacity = "0";
                                                setTimeout(function(){ div.style.display = "none"; }, 600);
                                            }
                                            }
                                          </script>';
                                }
                                
                            } 
                        ?>       
                    </div>
                    <p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</p>  <!--Tab space to increase input field size-->
                </form>
                </div>
                </div>   
        </div>
            
    </section>

    <hr>

    <!-- Footer -->
    <footer class="p-5 bg-dark text-center text-light">
        <div class="container">
            <p class="lead">
                Copyright @ 2021 Bio-Data System
            </p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>