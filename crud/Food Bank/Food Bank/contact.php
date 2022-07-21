</html><!DOCTYPE html>
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
                            <li><a class="dropdown-item" href="agentlogin.php">Agent</a></li>
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

    <section>
        <div class="container my-3">
            <div class="row">
                <div class="md-col-12">
                    <p style="text-align:center;"><b>We are always here to help.If you have requirements/queries about our services, kindly feel free to contact
                        on the below mentioned details.<b>
                    </p>
                    <hr>
                </div>
            </div>
        </div>
    </section>

    <section class="form-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 address">
                    <h5><b>ADMIN INFO</b></h5>
                <h5>Call Us/ Whatsapp</h5>
                    <p><a href="tel: 998877664"><i class="fas fa-phone"></i> 998877664</a><br>
                    </p>
                    <h5>Email</h5>
                    <p>
                        <a href="aslamsha014@gmail.com"><i class="fas fa-envelope"></i> aslamsha014@gmail.com</a><br>
                    </p>
                    <h5>Working Hours</h5>
                    <p>
                        Mon - Fri : 9am - 6pm(IST)
                    </p>
                    <h5>Address</h5>
                    <p>
                        xyz Nagar, Opp ro nethaji road, Hosur- 635110
                    </p>

                </div>
                <div class="col-md-6 address">
                <h5><b>AGENT INFO</b></h5>
                    <h5>Call Us/ Whatsapp</h5>
                    <p><a href="tel: 998877664"><i class="fas fa-phone"></i> 998877664</a><br>
                    </p>
                    <h5>Email</h5>
                    <p>
                        <a href="aslamsha014@gmail.com"><i class="fas fa-envelope"></i> aslamsha014@gmail.com</a><br>
                    </p>
                    <h5>Working Hours</h5>
                    <p>
                        Mon - Fri : 9am - 6pm(IST)
                    </p>
                    <h5>Address</h5>
                    <p>
                        xyz Nagar, Opp ro nethaji road, Hosur- 635110
                    </p>
                </div>
            </div>
        </div>
        </div>
    </section>


    <?php require 'Navbar/footer.php' ?>

    </body>

</html>