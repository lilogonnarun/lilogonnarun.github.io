<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$message="";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', 'cjcjcj1', 'registration');

// REGISTER USER
if (isset($_POST['con'])) {
    // receive all input values from the form
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $message = mysqli_real_escape_string($db, $_POST['message']);
    $selected_val = $_POST['Color'];
    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($message)) { array_push($errors, "Message is required"); }


    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {

        $query = "INSERT INTO contact (email,message) 
  			  VALUES('$email', '$message')";
        mysqli_query($db, $query);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You have submitted.";
        header('location:index.php');
    }
}
?>
