<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title>Food Bank</title>
    </head>

    <body>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    </body>

    </html>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">FoodBank</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="about.php">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="login.php" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Login
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="login.php">As Donator</a></li>
                            <li><a class="dropdown-item" href="adlogin.php">As Admin</a></li>
                            <li><a class="dropdown-item" href="agentlogin.php">Agent</a></li>
                        </ul>
                    <li class="nav-item">
                        <a class="nav-link active" href="signup.php">Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/crud/Food Bank/Food Bank/contact.php">Contact Us</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button type="button" >Search</button>
                </form>
            </div>
        </div>
    </nav>

    
    <div class="alert alert-info" role="alert">
        Wanna Help!!! <a href="login.php" class="alert-link">Donate now</a>
    </div>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="p1.jpeg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>COME FORWARD AND DONATE</h5>
                    <p>BECOME A REASON FOR A CAUSE</p>
                </div>
            </div>
            <div class="carousel-item ">
                <img src="p3.jpeg" class="d-block" alt="Cinque Terre" width="1500" height="550">
                <div class="carousel-caption d-none d-md-block">
                    <h5>FOOD WASTAGE</h5>
                    <p>A HUGE AMOUNT OF FOOD IS WASTED EVERYDAY AROUND THE WORLD</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="p7.png" class="d-block" alt="Cinque Terre" width="1500" height="550">
                <div class="carousel-caption d-none d-md-block">
                    <h5>HUNGER</h5>
                    <p>ONE OF THE WORLD'S BIGGEST PROBLEM!</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container my-4 ">
        <div class="row mb-2">
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary"></strong>
                        <h3 class="mb-0">Facts</h3>
                        <div class="mb-1 text-muted"></div>
                        <p class="card-text mb-auto">>There is more than enough food produced in the world to feed
                            everyone on the planet.<br>
                            >While hunger exists worldwide, 526 million hungry people live in Asia.
                        </p>
                        <a href="https://borgenproject.org/20-facts-about-hunger/" target="_blank"
                            class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" width="300" height="250" src="hunger.jfif" alt="">

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success"></strong>
                        <h3 class="mb-0">Covid & Hunger</h3>
                        <div class="mb-1 text-muted"></div>
                        <p class="mb-auto">The covid has taken the hunger problem of the prople to next levels, millions
                            of people
                            due to loss of jobs aren'nt able to afford even 1 time food.
                        </p>
                        <a href="https://www.aljazeera.com/news/2021/7/9/every-minute-11-people-die-of-hunger-oxfam"
                            target="_blank" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" width="300" height="250" src="covid.jfif" alt="">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <title>Footer Bootstrap 4</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/css/mdb.min.css" rel="stylesheet">
    </head>

    <body>

        <footer class="page-footer bg-dark">

            <div class="bg-primary">
                <div class="container">
                    <div class="row py-4 d-flex align-items-center">

                        <div class="col-md-12 text-center">
                            <a href="#"><i class="fab fa-facebook-f white-text mr-4"> </i></a>
                            <a href="#"><i class="fab fa-twitter white-text mr-4"> </i></a>
                            <a href="#"><i class="fab fa-google-plus-g white-text mr-4"> </i></a>
                            <a href="#"><i class="fab fa-linkedin-in white-text mr-4"> </i></a>
                            <a href="#"><i class="fab fa-instagram white-text"> </i></a>
                        </div>

                    </div>
                </div>
            </div>

            <div class="container text-center text-md-left mt-5">
                <div class="row">

                    <div class="col-md-3 mx-auto mb-4">
                        <h6 class="text-uppercase font-weight-bold">Food Bank</h6>
                        <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto" style="width: 125px; height: 2px">
                        <p class="mt-2">Come forward and donate with whole heartedly, This world needs people link you!</p>
                    </div>

                    <div class="col-md-2 mx-auto mb-4">
                        <h6 class="text-uppercase font-weight-bold">Techs Used</h6>
                        <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto" style="width: 85px; height: 2px">

                        <ul class="list-unstyled">
                            <li class="my-2"><a href="#">Html 5</a></li>
                            <li class="my-2"><a href="#">Css 3</a></li>
                            <li class="my-2"><a href="#">Bootstrap 4</a></li>
                            <li class="my-2"> <a href="#">PHP</a></li>
                        </ul>
                    </div>

                    <div class="col-md-2 mx-auto mb-4">
                        <h6 class="text-uppercase font-weight-bold">Useful links</h6>
                        <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto" style="width: 110px; height: 2px">
                        <ul class="list-unstyled">
                            <li class="my-2"><a href="#">Home</a></li>
                            <li class="my-2"><a href="#">About</a></li>
                            <li class="my-2"> <a href="#">Contact Us</a></li>
                        </ul>
                    </div>

                    <div class="col-md-3 mx-auto mb-4">
                        <h6 class="text-uppercase font-weight-bold">Contact</h6>
                        <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto" style="width: 75px; height: 2px">
                        <ul class="list-unstyled">
                            <li class="my-2"><i class="fas fa-home mr-3"></i> Hosur,India</li>
                            <li class="my-2"><i class="fas fa-envelope mr-3"></i> aslamsha@gmail.com</li>
                            <li class="my-2"><i class="fas fa-phone mr-3"></i> +9199887766</li>
                            <li class="my-2"><i class="fas fa-print mr-3"></i> + 01 234 567 89</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="footer-copyright text-center py-3">
                <p>&copy; Copyright
                    <a href="#">FoodBank.com</a>
                </p>
                <p>Designed by The Food Bank</p>
            </div>
        </footer>
        <!-- Footer -->
        <!-- JQuery -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/js/mdb.min.js"></script>
    </body>

</html>