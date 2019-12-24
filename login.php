<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login in - CJ's coffee shop</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
    <link href="css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet'>
    <link href='http://fonts.googleapis.com/css?family=Merienda+One' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/animation.css" rel="stylesheet">

    <!--google map file-->
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCrZRAEwIJrZw7inKCRSsGMSkCE-RsEP8E&libraries=places"></script>

    <!--js files-->
    <script src="http://malsup.github.com/jquery.form.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
</head>

<body>

<h1 class="site-heading text-center text-dark d-none d-lg-block">
    <span class="site-heading-upper text-primary mb-3">Enjoy your first and every cup!</span>
    <span class="site-heading-lower animated fadeIn slow infinite">specialty coffee</span>
</h1>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item  px-lg-4">
                    <a class="nav-link text-uppercase text-expanded" href="index.html">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item active px-lg-4">
                    <a class="nav-link text-uppercase text-expanded" href="login.php">Pour-over coffee experience</a>
                </li>
                <li class="nav-item px-lg-4">
                    <a class="nav-link text-uppercase text-expanded" href="visitUs.html">Visit us</a>
                </li>
                <li class="nav-item px-lg-4">
                    <a class="nav-link text-uppercase text-expanded" href="aboutUs.html">About us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<section class="page-section about-heading">
    <div class="container">

        <video src="audio/video.mp4" class="img-fluid rounded about-heading-img mb-3 mb-lg-0" autoplay controls></video>

        <div class="about-heading-content">
            <div class="row">
                <div class="col-xl-9 col-lg-10 mx-auto">
                    <div class="bg-faded rounded p-5">
                        <h2 class="section-heading mb-4">
                            <span class="section-heading-intro">
                                For your first pour-over coffee experience
                            </span>
                            <span class="section-heading-diff">LOGIN NOW</span>
                        </h2>

                        <form method="post" action="login.php" id="myForm" class="needs-validation">
                            <?php include('error.php'); ?>
                            <div class="form-group">
                                <label for="name">Username</label>
                                <input type="text" class="form-control" placeholder="Enter Username" name="username">
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="form-group">
                                <label for="pwd">Password:</label>
                                <input type="password" class="form-control" placeholder="Enter password"
                                       name="password">
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>

                            <div class="input-group">
                                <button type="submit" class="btn-lg btn-light" name="login_user">Login</button>
                            </div>

                            <br>
                            <p>
                                Not yet a member? <a href="register.php">Sign up</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="footer text-faded text-center py-5">
    <div class="container">
        <p class="m-0 small">Copyright &copy; Chen Jin 2019</p>
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="jquery/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
<script>
    // Disable form submissions if there are invalid fields
    (function () {
        'use strict';
        window.addEventListener('load', function () {
            // Get the forms we want to add validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function (form) {
                form.addEventListener('submit', function (event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();

</script>
</body>

</html>
