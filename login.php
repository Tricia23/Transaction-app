<?php
session_start();
 /*Login authentication*/

$logemailError = false;
$logpasswordError = false;

$emaillogin = $_POST['emaillogin'];
$passwordlogin = $_POST['passwordlogin'];
$hashedpasswordlogin = md5($passwordlogin);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
//check if email is empty//
    if (empty($_POST["emaillogin"])) {

        $logemailError = 'Please enter email.';

    }

            // Check if password is empty
    if (empty(($_POST['passwordlogin']))) {

        $logpasswordError = 'Please enter your password.';

    }

    if ($logemailError == false && $logpasswordError == false) {
        // valid
        $connection = mysqli_connect("localhost", "root", "secret", "transaction");
        $query = mysqli_query($connection, "select * from users where password='$hashedpasswordlogin' AND email='$emaillogin'");
        $rows = mysqli_num_rows($query);
        if ($rows == 1) {
            $_SESSION['login_user'] = $emaillogin; // Initializing Session
            header("location: index.php"); // Redirecting To Other Page
        } else {
            die("hello");
            // invalid
            $_SESSION['loginError'] = "Username or Password is invalid";

            header("location: register.php");
        }
    } else {
            // invalid
        $_SESSION['logemailError'] = $logemailError;
        $_SESSION['logpasswordError'] = $logpasswordError;
        header("location: register.php");
    }



}
