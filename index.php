<?php session_start();
    require_once 'functions.php';
    //print_r($_SESSION);
    if(isset($_SESSION['name'])) {
        header("Location: loggedin.php"); 
        exit; 
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
                        <a id="login" href="login.php" class="nav-link"><strong>Login</strong></a>
                    </li>
                    <li class="nav item">
                        <a id="register" href="register.php" class="nav-link"><strong>Register</strong></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Showcase -->
    <section class="bg-warning text-secondary p-5 texr-center">
        <div class="container">
            <div class="d-sm-flex align-items-center justify-content-between">
                <div>
                    <h2>
                        FILL OUT YOUR <br> <span class="text-dark h1">
                            BIO - DATA
                        </span>
                    </h2>
                    <br>
                    <h3>
                        To Fill :
                        <p class="lead text-dark">
                            1. <a href="register.php" class="text-dark">Register</a> if you are a new user or <a href="login.php" class="text-dark">Login</a> if you are a existing user. <br> </br>
                            2. Go to Add BD to fill your details.
                        </p>
                    </h3>
                    <h3>
                        To View :
                        <!-- / Edit : -->
                        <p class="lead text-dark">
                            1. <a href="register.php" class="text-dark">Register</a> if you are a new user or <a href="login.php" class="text-dark">Login</a> if you are a existing user. <br> </br>
                            2. Go to View BD to view your Bio-data. <br>
                            <!-- 3. To Edit -> Go to Edit -->
                        </p>
                    </h3>
                </div>
                <img class="image-fluid w-50 d-none d-sm-block" src="undraw_About_me_re_82bv.svg" alt="">
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

    <hr>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>