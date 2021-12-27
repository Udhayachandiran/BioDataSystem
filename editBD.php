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
            <a href="index.html" class="navbar-brand">
                <img src="BDS_Logo.png" alt="" width="60" height="60">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-center" id="navmenu">
                <ul class="nav navbar-nav mx-auto">
                    <li class="nav-item"> <h1 style="font-family: monospace;" class="text-dark text-center">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; BIO - DATA SYSTEM</h1> </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav item">
                        <a href="addBD.html" class="nav-link">&nbsp;    Add Bio-Data</a>
                    </li>
                    <li class="nav item">
                        <a href="viewBD.html" class="nav-link">View Bio-Data</a>
                    </li>
                    <li class="nav item">
                        <a href="index.html" class="nav-link">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Body -->
    <section class="bg-dark p-4 pt-5 text-dark">
        <div class="container px-5">
            <h2 class="text-center text-secondary">
                Edit <span class="text-white">Bio-Data</span>
            </h2> <br>
            <div class="d-flex align-items-center justify-content-center">
                
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