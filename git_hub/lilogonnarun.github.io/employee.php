<?php include('application.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Application - CJ's coffee shop</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/business-casual.css" rel="stylesheet">
    <
    <link href="css/business-casual.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet'>
    <link href='http://fonts.googleapis.com/css?family=Merienda+One' rel='stylesheet' type='text/css'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
</head>

<body>

<h1 class="site-heading text-center text-dark d-none d-lg-block">
    <span class="site-heading-upper text-primary mb-3">Enjoy your first and every cup!</span>
    <span class="site-heading-lower animated fadeIn infinite">specialty coffee</span>
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
<div>
<img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="img/espresso.jpg" alt="" id="shop">
    <cite class="centered2 bigger_font">Apply for Your Pour-over Coffee Experience</cite>
</div>
<!--<div class="form-actions">-->
<!--    <cite class="text-light bigger_font"></cite>-->
<!--</div>-->

<br>
<br>
<div class="container">
    <form id="form" class="apply_bigger" method="post" action="application.php">
        <div class="form-group mid_font">
            <label>Name:</label>
            <input type="text" name="name" class="form-control" value="lindsey" required="">
        </div>
        <div class="form-group mid_font">
            <label>Appoint shop:</label>
            <select name="shop" class="form-control">
                <option value="Nanjing">Nanjing</option>
                <option value="Shenzhen">Shenzhen</option>
                <option value="Hangzhou">Hangzhou</option>
                <option value="Nanchang">Nanchang</option>
            </select>
        </div>
        <div class="form-group mid_font">
            <label>Appoint time</label>
            <input type="date" class="form-control" name="date" value="2020-01-01" required="">
        </div>
        <div class="form-group mid_font">
            <label>Tell us more about you:</label>
            <textarea type="text" name="intro" class="form-control"
                      placeholder="your preference to coffee type,your expectaions..."></textarea>
        </div>
        <div class="form-group form-actions mid_font">
            <label>Our available baristar:</label>
            <table class=" text-center rounded table table-bordered data-table" id="data">
                <thead>
                <th>Employee number</th>
                <th>Barista name</th>
                <th>Gender</th>
                <th>Location</th>
                <th>Advantage</th>
                <th>Choice</th>
                </thead>
                <tbody>
                <!--show the exsited data in the database-->
                <?php
                $username = "root";
                $password = "cjcjcj1";
                $database = "my_db";
                $mysqli = new mysqli("localhost", $username, $password, $database);


                $query = "SELECT * FROM barista order by empno";

                if ($result = $mysqli->query($query)) {
                    while ($row = $result->fetch_assoc()) {
                        $num = $row["EMPNO"];
                        $name = $row["ENAME"];
                        $gender = $row["GENDER"];
                        $location = $row["LOC"];
                        $advantage = $row["ADVANTAGE"];

                        echo
                            '<tr> 
                  <td>' . $num . '</td> 
                  <td>' . $name . '</td> 
                  <td>' . $gender . '</td> 
                  <td>' . $location . '</td> 
                  <td>' . $advantage . '</td> 
                  <td><button class=\'btn btn-info btn-xs\' disabled >choose</button>
              </tr>';
                    }
                    $result->free();
                }
                ?>
                </tbody>
            </table>

        </div>
        <br><br>
        <div class="form-actions">
            <input type="submit" name="save" class="btn-lg btn-light save-btn" value="Save">
        </div>
        <br>
        <table class=" text-center rounded table table-bordered data-table" id="application">
            <thead>
            </thead>
            <tbody></tbody>
        </table>
        <script>
            $(document).ready(function () {
                $('#application').append("<tr><td>Applicant name</td>\n" +
                    "                <td>Appoint shop</td>\n" +
                    "                <td>appoint date</td>\n" +
                    "                <td>Introduction</td>\n" +
                    "                <td>Operation</td></tr>");
                $("#form").submit(function (e) {
                    e.preventDefault();
                    var name = $("input[name='name']").val();
                    var shop = $("select").children("option:selected").val();
                    var date = $("input[name='date']").val();
                    var intro = $("textarea").val();
                    alert("Please check you application. modify if neccessary.");
                    $('#application').append("<tr data-name='" + name + "' " +
                        "data-shop='" + shop + "' data-date='" + date + "' " +
                        "data-intro='" + intro + "'> " +
                        "<td>" + name + "</td><td>" + shop + "</td><td>" + date + "</td>" +
                        "<td>" + intro + "</td><td><button class='btn btn-info btn-xs btn-edit'>Edit</button>" +
                        "<button class='btn btn-danger btn-xs btn-delete'>Delete</button></td></tr>");

                    $("input[name='name']").val('');
                    $("select").children("option:selected").val('');
                    $("input[name='date']").val('');
                    $("textarea").val('');
                });

                $("body").on("click", ".btn-delete", function () {
                    $(this).parents("tr").remove();
                });

                $("body").on("click", ".btn-edit", function () {
                    var name = $(this).parents("tr").attr('data-name');
                    var shop = $(this).parents("tr").attr('data-shop');
                    var date = $(this).parents("tr").attr('data-date');
                    var intro = $(this).parents("tr").attr('data-intro');


                    $(this).parents("tr").find("td:eq(0)").html('<input name="data_name" value="' + name + '">');
                    $(this).parents("tr").find("td:eq(1)").html('<input name="data_shop" value="' + shop + '">');
                    $(this).parents("tr").find("td:eq(2)").html('<input name="data_date" value="' + date + '">');
                    $(this).parents("tr").find("td:eq(3)").html('<input name="data_intro" value="' + intro + '">');

                    $(this).parents("tr").find("td:eq(4)").prepend("<button class='btn btn-info btn-xs btn-update'>Update</button><button class='btn btn-warning btn-xs btn-cancel'>Cancel</button>");
                    $(this).hide();
                });

                $("body").on("click", ".btn-cancel", function () {
                    var name = $(this).parents("tr").attr('data-name');
                    var shop = $(this).parents("tr").attr('data-shop');
                    var date = $(this).parents("tr").attr('data-date');
                    var intro = $(this).parents("tr").attr('data-intro');


                    $(this).parents("tr").find("td:eq(0)").text(name);
                    $(this).parents("tr").find("td:eq(1)").text(shop);
                    $(this).parents("tr").find("td:eq(2)").text(date);
                    $(this).parents("tr").find("td:eq(3)").text(intro);


                    $(this).parents("tr").find(".btn-edit").show();
                    $(this).parents("tr").find(".btn-update").remove();
                    $(this).parents("tr").find(".btn-cancel").remove();
                });

                $("body").on("click", ".btn-update", function () {
                    var name = $(this).parents("tr").attr('data-name');
                    var shop = $(this).parents("tr").attr('data-shop');
                    var date = $(this).parents("tr").attr('data-date');
                    var intro = $(this).parents("tr").attr('data-intro');


                    $(this).parents("tr").find("td:eq(0)").text(name);
                    $(this).parents("tr").find("td:eq(1)").text(shop);
                    $(this).parents("tr").find("td:eq(2)").text(date);
                    $(this).parents("tr").find("td:eq(3)").text(intro);

                    $(this).parents("tr").attr('data-name', name);
                    $(this).parents("tr").attr('data-shop', shop);
                    $(this).parents("tr").attr('data-date', date);
                    $(this).parents("tr").attr('data-intro', intro);


                    $(this).parents("tr").find(".btn-edit").show();
                    $(this).parents("tr").find(".btn-cancel").remove();
                    $(this).parents("tr").find(".btn-update").remove();
                });
            });
            <!--SHOW FORM-->
        </script>
        <br>
    </form>
    <br>
    <div class="form-actions">
        <input type="submit" class="alert-dark btn-lg " name="con" id="confirm" value="Confirm">
    </div>
    <SCRIPT>


        $("#confirm").click(function () {
            alert("Your application have been submitted, we will contact you later. Please check! ");
            location.href = 'index.html';
        })


        <!--pagination-->
        $(document).ready(function () {
            $('#data').after('<div id="nav"></div>');
            var rowsShown = 3;
            var rowsTotal = $('#data tbody tr').length;
            var numPages = rowsTotal / rowsShown;
            for (i = 0; i < numPages; i++) {
                var pageNum = i + 1;
                $('#nav').append('<a class="text-warning form-actions mid_font" href="#" rel="' + i + '">Page ' + pageNum + ' &nbsp;&nbsp;  </a> ');
            }
            $('#data tbody tr').hide();
            $('#data tbody tr').slice(0, rowsShown).show();
            $('#nav a:first').addClass('active');
            $('#nav a').bind('click', function () {

                $('#nav a').removeClass('active');
                $(this).addClass('active');
                var currPage = $(this).attr('rel');
                var startItem = currPage * rowsShown;
                var endItem = startItem + rowsShown;
                $('#data tbody tr').css('opacity', '0.0').hide().slice(startItem, endItem).css('display', 'table-row').animate({opacity: 1}, 300);
            });
        })
    </SCRIPT>
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
<script></script>
</body>

<!-- Script to highlight the active date in the hours list -->
<script>
    $('.list-hours li').eq(new Date().getDay()).addClass('today');
</script>

</html>
