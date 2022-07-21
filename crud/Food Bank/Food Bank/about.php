<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&family=Lobster&display=swap');
    </style>
    <link rel="stylesheet" href="style1.css">
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

        <title>Hello, world!</title>
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
                        </ul>
                    <li class="nav-item">
                        <a class="nav-link active" href="signup.php">Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="contact.php">Contact Us</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button type="button" >Search</button>
                </form>
            </div>
        </div>
    </nav>
    <section class="about-section">
        <div class="container p-1 p-sm-3 text-center">
            <div class="row">
                <div class="col-12">
                    <h2>About Food Bank</h2>
                    <hr>
                </div>

                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="hunger1.jpg" class="d-block w-100" alt="Cinque Terre" width="1500" height="550">
                        </div>
                    </div>
                </div>
                <!--
                <div class="col-md-3">
                    <img class="img-fluid" src="hunger.jpg" alt="">
                    
                </div>
            -->
                <div class="col-md-12">
                    <h2 style="font-family:'Baloo Bhai',cursive">This application is made to tackle the hunger problem
                        in
                        India.
                        Food is the basic necessity of every human being and getting
                        food should be his basic right, but due to unfortunate circumstances some people couldn't afford
                        it and live with Hunger which
                        is a serious problem as it is both hard and life threatning. Eventhough the government and
                        various NGO's work tirelessly on this
                        issue but then still it could'nt be resolved and our country remains at the top of global index
                        hunger rate. Our aim is to fight
                        hunger and make sure that the no Indian sleeps without food with help of Food donations to the
                        NGO's from the general Public living
                        around, bcz only when we work together we will be able to tackle this messy problem.
                    </h2>
                    <hr>
                </div>
            </div>
        </div>
    </section>


    <?php require 'Navbar/footer.php' ?>
       
    </body>

</html>