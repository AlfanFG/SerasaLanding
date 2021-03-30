<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6090784b79.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?= base_url('assets/css/header.css'); ?>">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="assets/images/logo.png">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto header__links">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <a class="nav-link" href="#">Profile</a>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Category
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <a class="nav-link" href="#">Order</a>
                    <a class="nav-link" href="#">Contacts</a>
                </div>
            </div>

            <div class="nav-icon" href="">
                <a class="nav-icon-item" href="#">
                    <img src="assets/images/instagram.png">
                </a>

                <a class="nav-icon-item" href="#">
                    <img src="assets/images/twitter.png">
                </a>

                <a class="nav-icon-item" href="#">
                    <img src="assets/images/facebook.png">
                </a>
            </div>

    </nav>

    <div class="container-fluid bg">
        <div class="row">
            <div class="col-fluid slide">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assets/images/1.jpeg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/images/2.jpeg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="..." class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button> -->
                </div>
            </div>


        </div>
        <div class="row">
            <div class="col-lg-9 coffee">
                <img src="assets/images/CoffeeH1.jpeg" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-9 work">
                <img src="assets/images/work.jpeg" alt="">
            </div>
        </div>



    </div>



    <!-- <div class="row">
            <div class="col-md-4 about">
                <a href="#">ABOUT</a>

            </div>

            <div class="col-md-4 contact">
                <a href="#">CONTACT</a>
                <div class="content">
                    +628121092
                </div>
            </div>

            <div class="col-md-4 sosmed">
                <a href="#">SOCIAL MEDIA</a>
            </div>
        </div> -->

    <!-- Footer -->
    <footer class="bg-secondary text-white">
        <!-- Grid container -->
        <div class="container-fluid footer">
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col-lg-4 col-md-4 mb-4 mb-md-0 footer-content">
                    <h5 class="text-uppercase">About</h5>

                    <p>Kurassa Coffe adalah suatu coffee shop yang berada di daerah antapani Bandung</p>
                    <a href="#">More Details</a>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-2 col-md-2 mb-2 mb-md-0 footer-content">
                    <h5 class="text-uppercase">Contacts</h5>

                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="#!" class="text-white">+628112121212</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">kurassakopi@jimail.com</a>
                        </li>

                    </ul>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-2 col-md-2 mb-2 mb-md-0 footer-content">
                    <h5 class="text-uppercase mb-0">Social Media</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>

                            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-twitter"></i></a>

                            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-instagram"></i></a>
                        </li>

                    </ul>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3 copyright">
            © 2020 Copyright:
            <a class="text-white" href="https://mdbootstrap.com/">Kurasa Coffee</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>