<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Business Casual - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/business-casual.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
</head>

<body>

<h1 class="site-heading text-center text-white d-none d-lg-block">
    <span class="site-heading-upper text-primary mb-3">A Free Bootstrap 4 Business Theme</span>
    <span class="site-heading-lower">Business Casual</span>
</h1>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item px-lg-4">
                    <a class="nav-link text-uppercase text-expanded" href="index.html">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item px-lg-4">
                    <a class="nav-link text-uppercase text-expanded" href="login.php">About</a>
                </li>
                <li class="nav-item px-lg-4">
                    <a class="nav-link text-uppercase text-expanded" href="products.html">Products</a>
                </li>
                <li class="nav-item active px-lg-4">
                    <a class="nav-link text-uppercase text-expanded" href="store.html">Store</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<section class="page-section cta">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 mx-auto">
                <div class="cta-inner text-center rounded">
                    <h2 class="section-heading mb-5">
                        <span class="section-heading-upper">Come On In</span>
                        <span class="section-heading-lower">We're Open</span>
                    </h2>

                    <p class="address mb-5">
                        <em>
                            <strong>1116 Orchard Street</strong>
                            <br>
                            Golden Valley, Minnesota
                        </em>
                    </p>
                    <p class="mb-0">
                        <small>
                            <em>Call Anytime</em>
                        </small>
                        <br>
                        (317) 585-8468
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <form>
            <div class="form-group">
                <label>Number:</label>
                <input type="text" name="number" class="form-control" value="0001" required="">
            </div>
            <div class="form-group">
                <label>Name:</label>
                <input type="text" name="name" class="form-control" value="lindsey" required="">
            </div>
            <div class="form-group">
                <label>Job:</label>
                <input type="text" name="job" class="form-control" value="salesman" required="">
            </div>
            <div class="form-group">
                <label>Manager number:</label>
                <input type="text" name="manager number" class="form-control" value="4422" required="">
            </div>
            <div class="form-group">
                <label>Hiredate:</label>
                <input type="text" name="hiredate" class="form-control" value="2001-09-09" required="">
            </div>
            <div class="form-group">
                <label>Salary:</label>
                <input type="text" name="salary" class="form-control" value="11111" required="">
            </div>
            <div class="form-group">
                <label>Commission:</label>
                <input type="text" name="commission" class="form-control" value="1000" required="">
            </div>
            <div class="form-group">
                <label>Department number:</label>
                <input type="text" name="deptno" class="form-control" value="50" required="">
            </div>

            <button type="submit" class="btn btn-success save-btn">Save</button>
            <script>
                <!--insert the data into database-->
            </script>
            <?php
            $username = "root";
            $password = "cjcjcj1";
            $database = "MY_DB";
            $mysqli = new mysqli("localhost", $username, $password, $database);
            $num = $mysqli->real_escape_string($_POST['EMPNO']);
            $name = $mysqli->real_escape_string($_POST['ENAME']);
            $job = $mysqli->real_escape_string($_POST['JOB']);
            $mgr = $mysqli->real_escape_string($_POST['MGR']);
            $hiredate = $mysqli->real_escape_string($_POST['HIREDATE']);
            $sal = $mysqli->real_escape_string($_POST['SAL']);
            $comm = $mysqli->real_escape_string($_POST['COMM']);
            $deptno = $mysqli->real_escape_string($_POST['DEPTNO']);

            $query = "INSERT INTO emp
            VALUES ('{$num}','{$name}','{$job}','{$mgr}','{$hiredate}','{$sal},'{$comm},'{$deptno}')";

            $mysqli->query($query);
            $mysqli->close();
            ?>
        </form>
        <script>
            var $rows = $('#table tr');
            $('#search').keyup(function () {
                var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();

                $rows.show().filter(function () {
                    var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
                    return !~text.indexOf(val);
                }).hide();
            });
            $("form").submit(function (e) {
                e.preventDefault();
                var num = $("input[name='number']").val();
                var name = $("input[name='name']").val();
                var job = $("input[name='job']").val();
                var mgr = $("input[name='mgr']").val();
                var hiredate = $("input[name='hiredate']").val();
                var sal = $("input[name='salary']").val();
                var comm = $("input[name='commission']").val();
                var deptno = $("input[name='deptno']").val();
                $('table tbody').append("<tr data-name='" + name + "' data-num='" + num + "' data-job='" + job + "' data-mgr='" + mgr + "' data-hiredate='" + hiredate + "' data-sal='" + sal + "' data-comm='" + comm + "' data-deptno='" + deptno + "'> <td>" + num + "</td><td>" + name + "</td><td>" + job + "</td><td>" + mgr + "</td><td>" + hiredate + "</td><td>" + sal + "</td><td>" + comm + "</td><td>" + deptno + "</td><td><button class='btn btn-info btn-xs btn-edit'>Edit</button><button class='btn btn-danger btn-xs btn-delete'>Delete</button></td></tr>");


                $("input[name='number']").val('');
                $("input[name='name']").val('');
                $("input[name='job']").val('');
                $("input[name='mgr']").val('');
                $("input[name='hiredate']").val('');
                $("input[name='salary']").val('');
                $("input[name='commission']").val('');
                $("input[name='deptno']").val('');
            });

            $("body").on("click", ".btn-delete", function () {
                $(this).parents("tr").remove();
            });

            $("body").on("click", ".btn-edit", function () {
                var num = $(this).parents("tr").attr('data-num');
                var job = $(this).parents("tr").attr('data-job');
                var name = $(this).parents("tr").attr('data-name');
                var mgr = $(this).parents("tr").attr('data-mgr');
                var hiredate = $(this).parents("tr").attr('data-hiredate');
                var salary = $(this).parents("tr").attr('data-sal');
                var comm = $(this).parents("tr").attr('data-comm');
                var deptno = $(this).parents("tr").attr('data-deptno');

                $(this).parents("tr").find("td:eq(0)").html('<input name="edit_num" value="' + num + '">');
                $(this).parents("tr").find("td:eq(1)").html('<input name="edit_name" value="' + name + '">');
                $(this).parents("tr").find("td:eq(2)").html('<input name="edit_job" value="' + job + '">');
                $(this).parents("tr").find("td:eq(3)").html('<input name="edit_mgr" value="' + mgr + '">');
                $(this).parents("tr").find("td:eq(4)").html('<input name="edit_hiredate" value="' + hiredate + '">');
                $(this).parents("tr").find("td:eq(5)").html('<input name="edit_sal" value="' + salary + '">');
                $(this).parents("tr").find("td:eq(6)").html('<input name="edit_comm" value="' + comm + '">');
                $(this).parents("tr").find("td:eq(7)").html('<input name="edit_deptno" value="' + deptno + '">');

                $(this).parents("tr").find("td:eq(8)").prepend("<button class='btn btn-info btn-xs btn-update'>Update</button><button class='btn btn-warning btn-xs btn-cancel'>Cancel</button>");
                $(this).hide();
            });

            $("body").on("click", ".btn-cancel", function () {
                $(this).parents("tr").attr('data-num', num);
                $(this).parents("tr").attr('data-name', name);
                $(this).parents("tr").attr('data-job', job);
                $(this).parents("tr").attr('data-mgr', mgr);
                $(this).parents("tr").attr('data-hiredate', hiredate);
                $(this).parents("tr").attr('data-sal', salary);
                $(this).parents("tr").attr('data-comm', comm);
                $(this).parents("tr").attr('data-deptno', deptno);


                $(this).parents("tr").find("td:eq(0)").text(num);
                $(this).parents("tr").find("td:eq(1)").text(name);
                $(this).parents("tr").find("td:eq(2)").text(job);
                $(this).parents("tr").find("td:eq(3)").text(mgr);
                $(this).parents("tr").find("td:eq(4)").text(hiredate);
                $(this).parents("tr").find("td:eq(5)").text(salary);
                $(this).parents("tr").find("td:eq(6)").text(comm);
                $(this).parents("tr").find("td:eq(7)").text(deptno);

                $(this).parents("tr").find(".btn-edit").show();
                $(this).parents("tr").find(".btn-update").remove();
                $(this).parents("tr").find(".btn-cancel").remove();
            });

            $("body").on("click", ".btn-update", function () {
                var name = $(this).parents("tr").find("input[name='edit_name']").val();
                var num = $(this).parents("tr").find("input[name='edit_num']").val();
                var job = $(this).parents("tr").find("input[name='edit_job']").val();
                var mgr = $(this).parents("tr").find("input[name='edit_mgr']").val();
                var hiredate = $(this).parents("tr").find("input[name='edit_hiredate']").val();
                var salary = $(this).parents("tr").find("input[name='edit_sal']").val();
                var comm = $(this).parents("tr").find("input[name='edit_comm']").val();
                var deptno = $(this).parents("tr").find("input[name='edit_deptno']").val();

                $(this).parents("tr").find("td:eq(0)").text(num);
                $(this).parents("tr").find("td:eq(1)").text(name);
                $(this).parents("tr").find("td:eq(2)").text(job);
                $(this).parents("tr").find("td:eq(3)").text(mgr);
                $(this).parents("tr").find("td:eq(4)").text(hiredate);
                $(this).parents("tr").find("td:eq(5)").text(salary);
                $(this).parents("tr").find("td:eq(6)").text(comm);
                $(this).parents("tr").find("td:eq(7)").text(deptno);

                $(this).parents("tr").attr('data-num', num);
                $(this).parents("tr").attr('data-name', name);
                $(this).parents("tr").attr('data-job', job);
                $(this).parents("tr").attr('data-mgr', mgr);
                $(this).parents("tr").attr('data-hiredate', hiredate);
                $(this).parents("tr").attr('data-sal', salary);
                $(this).parents("tr").attr('data-comm', comm);
                $(this).parents("tr").attr('data-deptno', deptno);

                $(this).parents("tr").find(".btn-edit").show();
                $(this).parents("tr").find(".btn-cancel").remove();
                $(this).parents("tr").find(".btn-update").remove();
            });
            <!--pagination-->

            $(document).ready(function () {
                $('#data').after('<div id="nav"></div>');
                var rowsShown = 3;
                var rowsTotal = $('#data tbody tr').length;
                var numPages = rowsTotal / rowsShown;
                for (i = 0; i < numPages; i++) {
                    var pageNum = i + 1;
                    $('#nav').append('<a href="#" rel="' + i + '">' + pageNum + '</a> ');
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

            });

            function search() {
                // Declare variables
                var input, filter, table, tr, td, i, txtValue, j, tag;
                input = document.getElementById("search");
                filter = input.value.toUpperCase();
                table = document.getElementById("data");
                tr = table.getElementsByTagName("tr");

                // Loop through all table rows, and hide those who don't match the search query
                for (i = 0; i < tr.length; i++) {
                    tag = 0;
                    for (j = 0; j < 8; j++) {
                        td = tr[i].getElementsByTagName("td")[j];
                        if (td) {
                            txtValue = td.textContent || td.innerText;
                            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                tag = 1;
                            }
                        }
                    }
                    if (tag === 1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }

            $(document).ready(function(){
                $('#month').click(function(){
                    var clickBtnValue = $(this).val();
                    var ajaxurl = 'ajax_month.php',
                        data =  {'action': clickBtnValue};
                    $.post(ajaxurl, data, function (response) {
                        // Response div goes here.
                        alert("Monthly report created successfully");
                    });
                });
            });
            $(document).ready(function(){
                $('#year').click(function(){
                    var clickBtnValue = $(this).val();
                    var ajaxurl = 'ajax_year.php',
                        data =  {'action': clickBtnValue};
                    $.post(ajaxurl, data, function (response) {
                        // Response div goes here.
                        alert("Annual report created successfully");
                    });
                });
            });
        </script>
        <br/>
        <!--search-->
        <input type="text" id="search" placeholder="Type to search" onkeyup="search()">
        <br/>
        <table  class=" text-center rounded table table-bordered data-table" id="data">
            <thead>
            <th>Employee number</th>
            <th>Employee name</th>
            <th>Job</th>
            <th>Manager number</th>
            <th>Hiredate</th>
            <th>Salary</th>
            <th>Commission</th>
            <th>Department number</th>
            <th>Operation
            </th>
            </thead>
            <tbody>
            <!--show the exsited data in the database-->
            <?php
            $username = "root";
            $password = "cjcjcj1";
            $database = "my_db";
            $mysqli = new mysqli("localhost", $username, $password, $database);
            $query = "SELECT * FROM emp";

            if ($result = $mysqli->query($query)) {
                while ($row = $result->fetch_assoc()) {
                    $num = $row["EMPNO"];
                    $name = $row["ENAME"];
                    $job = $row["JOB"];
                    $mgr = $row["MGR"];
                    $hiredate = $row["HIREDATE"];
                    $sal = $row["SAL"];
                    $comm = $row["COMM"];
                    $deptno = $row["DEPTNO"];

                    echo
                        '<tr> 
                  <td>' . $num . '</td> 
                  <td>' . $name . '</td> 
                  <td>' . $job . '</td> 
                  <td>' . $mgr . '</td> 
                  <td>' . $hiredate . '</td> 
                  <td>' . $sal . '</td> 
                  <td>' . $comm . '</td> 
                  <td>' . $deptno . '</td> 
                   <td><button class=\'btn btn-info btn-xs btn-edit\'>Edit</button><button class=\'btn btn-danger btn-xs btn-delete\'>Delete</button></td>
              </tr>';
                }
                $result->free();
            }
            ?>
            </tbody>
        </table>

        <?php
        function month_report()
        {
            $username = "root";
            $password = "cjcjcj1";
            $database = "my_db";
            $mysqli = new mysqli("localhost", $username, $password, $database);

            $query = "select emp.deptno,dept.dname,sum(emp.sal) AS sal
from emp,dept
where emp.deptno=dept.deptno
group by emp.deptno;";

            echo "<h1> Monthly report </h1> <br> <br>";
            echo '<table class="table table-bordered data-table"> 
      <tr> 
          <td> Department number </td> 
          <td> Department name</td> 
          <td> Monthly salary </td> 
      </tr>';
            if ($result = $mysqli->query($query)) {
                while ($row = $result->fetch_assoc()) {
                    $deptno = $row["deptno"];
                    $dname = $row["dname"];
                    $sal = $row["sal"];
                    echo
                        '<tr> 
                  <td>' . $deptno . '</td> 
                  <td>' . $dname . '</td> 
                  <td>' . $sal . '</td> 
              </tr>';
                }
                $result->free();
            }
        }
        function year_r()
        {
            $username = "root";
            $password = "cjcjcj1";
            $database = "my_db";
            $mysqli = new mysqli("localhost", $username, $password, $database);

            $query = "select emp.deptno,dept.dname,sum(emp.sal*12) AS sal
from emp,dept
where emp.deptno=dept.deptno
group by emp.deptno;";

            echo "<h1> Annual report </h1> <br> <br>";
            echo '<table class="table table-bordered data-table"> 
      <tr> 
          <td> Department number </td> 
          <td> Department name</td> 
          <td> Annual salary </td> 
      </tr>';
            if ($result = $mysqli->query($query)) {
                while ($row = $result->fetch_assoc()) {
                    $deptno = $row["deptno"];
                    $dname = $row["dname"];
                    $sal = $row["sal"];
                    echo
                        '<tr> 
                  <td>' . $deptno . '</td> 
                  <td>' . $dname . '</td> 
                  <td>' . $sal . '</td> 
              </tr>';
                }
                $result->free();
            }
        }
        if ($_GET) {
            if (isset($_GET['month'])) {
                echo 'hello';
                month_report();
            } elseif (isset($_GET['year'])) {
                year_r();
            }
        }
        ?>
        <form method="get" action="employee.php">
            <a id="first">First</a>
            <a id="last">Last</a>
            <a id="pre">Previous</a>
            <a id="next">Next</a>
            <input type="submit" name="month" class="btn btn-primary btn-lg" id="month" value="Create monthly form">
            <input type="submit" name="year" class="btn btn-primary btn-lg" id="year" value="Create annual form">
        </form>
    </div>

</section>


<footer class="footer text-faded text-center py-5">
    <div class="container">
        <p class="m-0 small">Copyright &copy; Your Website 2018</p>
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

<!-- Script to highlight the active date in the hours list -->
<script>
    $('.list-hours li').eq(new Date().getDay()).addClass('today');
</script>

</html>
