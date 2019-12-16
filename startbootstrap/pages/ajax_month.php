<?php
$username = "root";
$password = "cjcjcj1";
$database = "my_db";
$mysqli = new mysqli("localhost", $username, $password, $database);
if ($mysqli->connect_error) {
    die("连接失败: " . $mysqli->connect_error);
}
echo "连接成功";

$query = "select emp.deptno,dept.dname,sum(emp.sal) AS sal
from emp,dept
where emp.deptno=dept.deptno
group by emp.deptno;";

echo "<b> Database Output </b> <br> <br>";
echo '<table border="0" cellspacing="2" cellpadding="2"> 
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

function select() {
    echo "The select function is called.";
    exit;
}