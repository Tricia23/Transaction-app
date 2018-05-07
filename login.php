<?php
session_start();
 /*Login authentication*/

$logemailError = false;
$logpasswordError = false;

$emaillogin = $_POST['emaillogin'];
$passwordlogin = $_POST['passwordlogin'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
//check if email is empty//
    if (empty($_POST["emaillogin"])) {

        $logemailError = 'Please enter username.';

    }

            // Check if password is empty
    if (empty(($_POST['passwordlogin']))) {

        $logpasswordError = 'Please enter your password.';

    }

    if ($logemailError == false && $logpasswordError == false) {
        // valid
        $connection = mysql_connect("localhost", "root", "secret", "transaction");
        $query = mysql_query("select * from users where password='$password' AND email='$email'", $connection);
        $rows = mysql_num_rows($query);
        if ($rows == 1) {
            $_SESSION['login_user'] = $emaillogin; // Initializing Session
            header("location: dashboard.php"); // Redirecting To Other Page
        } else {
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
