<?php 
    session_start();
   
    require_once 'functions.php';
    if(isset($_GET['sd'])){
        sD();
        header("Location: index.php"); // redirects them to homepage
        exit;
    }
    if(!isset($_SESSION['name']) || ($_SESSION['name']!='admin' && $_SESSION['P']!='admin123')) {
        header("Location: index.php"); // redirects them to homepage
        exit; 
    }
    //$uname = $_SESSION['name'];
    require_once 'dbconn.php';

    $sql="SELECT * FROM register;";
    $sql1="SELECT * FROM details;";
    $rs=mysqli_query($conn,$sql1);
    $retval= mysqli_query($conn,$sql);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Bio-Data System</title>
    <link rel="icon" href="BDS_Title.png" type="image/icon type">
    
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-sm bg-warning navbar-light py-3">
        <div class="container">
            <a href="index.php" class="navbar-brand">
                <img src="BDS_Logo.png" alt="" width="60" height="60">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-center" id="navmenu">
                <ul class="nav navbar-nav mx-auto">
                    <li class="nav-item"> <h1 style="font-family: monospace;" class="text-dark text-center">&emsp;&emsp;&emsp; BIO - DATA SYSTEM</h1> </li>
                </ul>
                <ul class="navbar-nav">
                    <!-- <li class="nav item">
                        <a href="addBD.php" class="nav-link">Add Bio-Data</a>
                    </li>
                    <li class="nav item">
                        <a href="viewBD.php" class="nav-link">View Bio-Data</a>
                    </li> -->
                    <li class="nav item">
                        <a href="admin.php?sd=yes" class="nav-link"><strong>Logout</strong></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Body -->
    <section class="bg-dark p-4 pt-5 text-dark">
        <div class="container">
            <h2 class="text-center text-secondary">
                ADMIN @ <span class="text-white">BioDataSystem</span>
            </h2> <br><br><br>
            <div class="text-center" >
            <button class="btn btn-outline-light" type="button"   onclick="javascript:toggleDisplay('regusers');"> Registered Users</button> <br> <br>
            <table id="regusers"  class="table table-light table-bordered table-striped hide">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">S.No</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $count=1;
                        if(mysqli_num_rows($retval) > 0){
                        while($row = mysqli_fetch_assoc($retval)){
                                $usname = $row['uname'];
                                $email = $row['email'];
                                $password = $row['password'];
                                echo "<tr>";
                                echo "<th scope='row'>$count</th>";
                                $count++;
                                echo "<td>$usname</td>";
                                echo "<td>$email</td>>";
                                echo "<td>$password</td>";
                                echo "</tr>";
                            }
                        }
                        else{
                            echo '<div class="container text-center">
                                    <div class="alert wi cent ">
                                      <span class="closebtn">&times;</span> No Registered Users! </div>
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
                                          </script> </div></div>';
                            //<script> alert("Add details to view");  window.location.replace("admin.php");</script>
                        }
                    ?>
                </tbody>
            </table> <br>
            <button class="btn btn-outline-light"" type="button"   onclick="javascript:toggleDisplay('userdets');"> User Details </button> <br> <br>
            <table id="userdets"  class="table table-light table-bordered table-striped hide">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">S.No</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Date Of Birth</th>
                    <th scope="col">Age</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Height</th>
                    <th scope="col">Weight</th>
                    <th scope="col">Address</th>
                    <th scope="col">Mother Tongue</th>
                    <th scope="col">Languages Known</th>
                    <th scope="col">Father's Name</th>
                    <th scope="col">Father's Occupation</th>
                    <th scope="col">Mother's Name</th>
                    <th scope="col">Mother's Occupation</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $count=1;
                        if(mysqli_num_rows($rs) > 0){
                        while($row = mysqli_fetch_assoc($rs)){
                                $name = $row['name'];
                                $dob = $row['dob'];
                                $age = $row['age'];
                                $gender = $row['gender'];
                                $height = $row['height'];
                                $weight = $row['weight'];
                                $addr = $row['addr'];
                                $mt = $row['mt'];
                                $lk = $row['lk'];
                                $faname = $row['faname'];
                                $fo = $row['fo'];
                                $moname = $row['moname'];
                                $mo = $row['mo'];
                                echo "<tr>";
                                echo "<th scope='row'>$count</th>";
                                $count++;
                                echo "<td>$name</td>";
                                echo "<td width='115px'>$dob</td>>";
                                echo "<td>$age</td>";
                                echo "<td>$gender</td>";
                                echo "<td>$height</td>";
                                echo "<td>$weight</td>";
                                echo "<td>$addr</td>";
                                echo "<td>$mt</td>";
                                echo "<td>$lk</td>";
                                echo "<td>$faname</td>";
                                echo "<td>$fo</td>";
                                echo "<td>$moname</td>";
                                echo "<td>$mo</td>";
                                echo "</tr>";
                            }
                        }
                        else{
                            echo '<div class="alert wi centi">
                                      <span class="closebtn">&times;</span> No user details exists! </div>
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
                            //<script> alert("Add details to view");  window.location.replace("admin.php");</script>
                        }
                    ?>
                </tbody>
            </table> <br> <br>
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
<script>

function toggleDisplay(id) {
  if( $('#'+id).hasClass('hide') ) {
    $('#'+id).removeClass('hide');
    $('#'+id).addClass('show');
  } else {
    $('#'+id).removeClass('show');
    $('#'+id).addClass('hide');
  }
}
</script>