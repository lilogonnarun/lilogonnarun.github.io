<?php
session_start();
// initializing variables
$name="";
$intro="";
$date="";
$shop="";

// connect to the database
$db = mysqli_connect('localhost', 'root', 'cjcjcj1', 'registration');

// REGISTER USER
if (isset($_POST['con'])||isset($_POST['save'])) {
    // receive all input values from the form
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $intro = mysqli_real_escape_string($db, $_POST['intro']);
    $shop = $_POST['shop'];
    $date = date('Y-m-d', strtotime($_POST['date']));

        $query = "INSERT INTO application (name,shop,date,intro) 
  			  VALUES('$name','$shop','$date','$message')";
        mysqli_query($db, $query);


        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You have submitted.";
        header('location:index.php');

}
