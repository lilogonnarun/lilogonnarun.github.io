<?php
session_start();

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}
include('contact.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home - CJ's coffee shop</title>

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
</head>

<body>
<div>
    <h1 class="site-heading text-center text-dark d-none d-lg-block">
        <span class="site-heading-upper text-primary mb-3">Enjoy your first and every cup!</span>
        <span class="site-heading-lower animated fadeIn infinite">specialty coffee</span>
    </h1>
</div>

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
                <li class="nav-item active px-lg-4">
                    <a class="nav-link text-uppercase text-expanded" href="index.html">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item  px-lg-4">
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

<audio controls autoplay="autoplay">
    <source src="audio/ENJOY_PIANO_g_leadman_HIBOU547_LC06881_LV.mp3" type="audio/ogg">
</audio>

<section class="page-section clearfix">
    <div class="container">
        <div class="intro">
            <img class="intro-img img-fluid mb-3 mb-lg-0 rounded animated fadeInDown" src="img/intro.jpg" alt="">
            <div class="intro-text left-0 text-center bg-faded p-5 rounded animated slideInLeft">
                <h2 class="section-heading mb-4">
                    <span class="section-heading-upper">Fresh Coffee</span>
                    <span class="section-heading-lower">Worth Drinking</span>
                </h2>
                <p class="mb-3">Every cup of our quality artisan coffee starts with locally sourced, hand picked
                    ingredients. Once you try it, our coffee will be a blissful addition to your everyday morning
                    routine - we guarantee it!
                </p>
                <div class="intro-button mx-auto">
                    <a class="btn btn-primary btn-xl bigger_font" id="click">Click Me!</a>
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<br>
<section class="page-section clearfix">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img class="img-fluid mb-0 rounded animated slideInRight slow delay-1s"
                     src="img/shutterstock_473186926-2000x1333.jpg" height="1333"
                     width="2000" alt="brew coffee"/>
                <h2 class="section-heading mb-4">
                    <a href="login.php"><span
                                class="section-heading-lower text-light  animated heartBeat slow infinite">BREW GUIDE</span></a>
                </h2>
            </div>
            <div class="col-sm-6 ">

                <img src="img/cafe-saturnus.jpg" class="img-fluid mb-0 rounded animated  slideInLeft delay-1s"
                     height="427" width="640" alt="coffee"/>
                <h2 class="section-heading mb-4">
                    <a href="visitUs.html"><span
                                class="section-heading-lower text-light  animated heartBeat slow infinite">CAFE LOCATOR</span></a>
                </h2>
            </div>
        </div>
    </div>
</section>

<section class="page-section cta no_margin">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="cta-inner text-center rounded">
                    <h2 class="section-heading mb-4">
                        <span class="section-heading-upper">Our Promise</span>
                        <span class="section-heading-lower">To You</span>
                    </h2>
                    <p class="mb-0">When you walk into our shop to start your day, we are dedicated to providing you
                        with friendly service, a welcoming atmosphere, and above all else, excellent products made with
                        the highest quality ingredients. If you are not satisfied, please let us know and we will do
                        whatever we can to make things right!</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="page-section about-heading inverse no_margin">
    <br><br>

    <br><br>
    <div class="container">
        <img class="animated fadeIn slow delay-1s img-fluid rounded about-heading-img mb-3 mb-lg-0"
             src="img/hero-14f46b4a616e09285566779e8d82b59b9b5e4fcc2e9dff59a19c84028bad7546.jpg" height="620"
             width="1677" alt="coffee shop"/>
        <div class="about-heading-content">
            <div class="row">
                <div class="col-xl-9 col-lg-10 mx-auto">
                    <div class="bg-faded rounded p-5">
                        <h2 class="section-heading mb-4">
                            <span class="section-heading-upper">Strong Coffee, Strong Roots</span>
                            <span class="section-heading-lower">About Our Cafe</span>
                        </h2>
                        <p>Founded in 1987 by the Hernandez brothers, our establishment has been serving up rich coffee
                            sourced from artisan farmers in various regions of South and Central America. We are
                            dedicated to travelling the world, finding the best coffee, and bringing back to you here in
                            our cafe.</p>
                        <p class="mb-0">We guarantee that you will fall in
                            <em>lust</em>
                            with our decadent blends the moment you walk inside until you finish your last sip. Join us
                            for your daily routine, an outing with friends, or simply just to enjoy some alone time.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="footer text-faded text-center py-5">
    <div class="container">
        <br><br>
        <h3 class="text-warning text-uppercase">contact us</h3>
        <br>
        <form class="form-inline needs-validation" id="contact" action="index.php" method="post">
            <label for="email" class="mr-sm-2 text-light">Email address: </label>
            <input name="email" id="email" type="email" class="form-control mb-2 mr-sm-2 text-center"
                   placeholder="We'll reply to this email" required>


            <label for="subject" name="subject" class="mr-sm-2 text-light">Subject:</label>
            <select name="subject" id="subject" class="form-control contact-title mb-2 mr-sm-2 text-center">
                <option value="general question">General Question</option>
                <option value="online order">Online Order</option>
                <option value="event inquiry">Event Inquiry</option>
                <option value="cafe experience">Cafe Experience</option>
            </select>
            <label for="message" class="mr-sm-2 text-light">Message:</label>
            <textarea id="message" name="message" class="form-control mb-2 mr-sm-2 text-center" rows="5"
                      required></textarea>
            <br><input type="submit"  name="con" class="btn btn-lg btn-warning mb-2 mr-sm-2 ">
        </form>
    </div>
    <br><br>
    <p class="m-0 small">Copyright &copy; Chen Jin 2019</p>
</footer>


<!-- Bootstrap core JavaScript -->
<script src="jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function () {


        $('#contact').submit(function () {
            alert("Thank you for your message.We will contact you through email later.");
        });

        function animateCSS(element, animationName, callback) {
            const node = document.querySelector(element);
            node.classList.add('animated', animationName);

            function handleAnimationEnd() {
                node.classList.remove('animated', animationName);
                node.removeEventListener('animationend', handleAnimationEnd);

                if (typeof callback === 'function') callback()
            }

            node.addEventListener('animationend', handleAnimationEnd)
        }

        var count = 0;
        $('#click').click(function () {
            count++;
            animateCSS('#click', 'shake');
            $(this).toggleClass('red');
            // alert(count);
            if (count === 10) {
                $('#click').addClass("animated hinge");
            }
            if (count > 10) {
                alert("Easter egg！ Add remark 'Jin' to your online order and you'll get 20% off :)");
                count = 0;
            }
        });

    })
</script>
</body>

</html>