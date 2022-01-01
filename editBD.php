<?php session_start();
    if(!isset($_SESSION['view']) && !isset($_SESSION['existview'])){
        echo '<script> alert("Add details to edit");  window.location.replace("addBD.php");</script>';
    }
    require_once 'functions.php';
    require_once 'dbconn.php';
    $usname=$_SESSION['name'];
    $sql="SELECT * FROM details WHERE usname='$usname';";
    $retval= mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($retval);
    $name=$row['name'];
    $dob=$row['dob'];
    $age=$row['age'];
    $gender=$row['gender'];
    $height=$row['height'];
    $weight=$row['weight'];
    $addr=$row['addr'];
    $mt=$row['mt'];
    $lk=$row['lk'];
    $faname=$row['faname'];
    $fo=$row['fo'];
    $moname=$row['moname'];
    $mo=$row['mo'];

    if(isset($_GET['sd'])){
        sD();
        header("Location: index.php"); // redirects them to homepage
        exit;
    }
    if($_SESSION['name']=='admin' && $_SESSION['p']=='admin123'){
        header("Location: admin.php"); // redirects logged user to their homepage
        exit;
    }
    if(!isset($_SESSION['name'])) {
        header("Location: index.php"); // redirects them to homepage
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
    <nav class="navbar navbar-expand-sm bg-warning navbar-light py-3">
        <div class="container">
            <a href="loggedin.php" class="navbar-brand">
                <img src="BDS_Logo.png" alt="" width="60" height="60">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-center" id="navmenu">
                <ul class="nav navbar-nav mx-auto">
                    <li class="nav-item"> <h1 style="font-family: monospace;" class="text-dark text-center"> BIO - DATA SYSTEM</h1> </li>
                </ul>
                <ul class="navbar-nav">
                    <!--<li class="nav item">
                        <a href="addBD.php" class="nav-link">&nbsp;    Add Bio-Data</a>
                    </li>
                    <li class="nav item">
                        <a href="viewBD.php" class="nav-link">View Bio-Data</a>
                    </li> -->
                    <li class="nav item">
                        <a href="editBD.php?sd=yes" class="nav-link"> <strong>Logout</strong> </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Body -->
    <section class="bg-dark p-4 pt-5 text-dark">
        <div class="container px-5">
            <h2 class="text-center text-secondary">
                Edit your <span class="text-white">Bio-Data</span>
            </h2>
            <div class="d-flex align-items-center justify-content-center">
                <form class="py-5" action="editBD.inc.php" method="post">
                    <div class="mb-3 text-light">
                        <label for="fname" class="form-label text">Full Name</label>
                        <input type="text" class="form-control" name="name" value='<?php echo $name; ?>' required>
                    </div>
                    <div class="mb-3 text-light">
                        <label for="dob" class="form-label text">Date Of Birth</label>
                        <input type="date" class="form-control" name="dob" value='<?php echo $dob; ?>' required>
                    </div>
                    <div class="mb-3 text-light">
                        <label for="age" class="form-label text">Age</label>
                        <input type="number" class="form-control" value='<?php echo $age; ?>' name="age" required>
                    </div>
                    <div class="mb-3 text-light">
                        <label for="gender" class="form-label text">Gender</label>
                        <select class="form-select" name="gender" >
                            <option selected> <?php echo $gender; ?> </option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                    <div class="mb-3 text-light">
                        <label for="height" class="form-label text">Height (in cm)</label>
                        <input type="number" class="form-control" name="height" value='<?php echo $height; ?>' required>
                    </div>
                    <div class="mb-3 text-light">
                        <label for="weight" class="form-label text">Weight (in kg)</label>
                        <input type="number" class="form-control" name="weight" value='<?php echo $weight; ?>' required>
                    </div>
                    <div class="mb-3 text-light">
                        <label for="address" class="form-label text">Address</label>
                        <textarea class="form-control" name="addr" required><?php echo $addr; ?></textarea>
                    </div>
                    <div class="mb-3 text-light">
                        <label for="mothertongue" class="form-label text">Mother Tongue</label>
                        <input type="text" class="form-control" name="mt" value= '<?php echo $mt; ?>' required>
                    </div>
                    <div class="mb-3 text-light">
                        <label for="lang" class="form-label text">Languages Known</label>
                        <input type="text" class="form-control" name="lk" value= '<?php echo $lk; ?>' required>
                    </div>
                    <div class="mb-3 text-light">
                        <label for="fathername" class="form-label text">Fathers' Name</label>
                        <input type="text" class="form-control" name="faname" value= '<?php echo $faname; ?>' required>
                    </div>
                    <div class="mb-3 text-light">
                        <label for="fatheroccupation" class="form-label text">Fathers' Occupation</label>
                        <input type="text" class="form-control" name="fo" value= '<?php echo $fo; ?>' required>
                    </div>
                    <div class="mb-3 text-light">
                        <label for="mothername" class="form-label text">Mothers' Name</label>
                        <input type="text" class="form-control" name="moname" value= '<?php echo $moname ?>' required>
                    </div>
                    <div class="mb-3 text-light">
                        <label for="motheroccupation" class="form-label text">Mothers' Occupation</label>
                        <input type="text" class="form-control" name="mo" value= '<?php echo $mo; ?>' required>
                    </div>
                    <div class="mb-3 text-light form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="check" required>
                        <label class="form-check-label" for="exampleCheck1">I, hereby confirm that all the information submitted above is in my best knowledge.</label>
                    </div>
                    <div class="text-center">
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                    </div>
                </form>
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