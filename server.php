<?php
session_start();



$nameError = false;
$emailError = false;
$companyError = false;
$passwordError = false;

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$company = $_POST['company'];


/* Name Validation*/
if (empty($_POST["name"])) {
    $nameError = "*Name is required";
} else if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
    $nameError = "*Only letters and spaces allowed.";
}

/* company Validation*/
if (empty($_POST["company"])) {
    $companyError = "*Company Name is required";
}
/* Email Validation*/
if (empty($_POST["email"])) {
    $emailError = "*Email is required";
} else {
    if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $emailError = "*Invalid email format";
    }
}

/* Password Validation*/
$hashedpassword = md5($password);
if ($password !== $_POST['cpassword']) {
    $passwordError = '*Passwords do not match';
} elseif (strlen($password) < 8) {
    $passwordError = "*Password must be 8characters";
}

if ($nameError == false && $emailError == false && $companyError == false && $passwordError == false) {
    $connection = mysqli_connect("localhost", "root", "secret", "transaction");
    $query = "INSERT INTO users ( name, email, password, company) VALUES ('{$name}', '{$email}', '{$hashedpassword}', '{$company}')";



} else {
    $_SESSION['nameError'] = $nameError;
    $_SESSION['emailError'] = $emailError;
    $_SESSION['companyError'] = $companyError;
    $_SESSION['passwordError'] = $passwordError;

    header('location: register.php');
}


?>
