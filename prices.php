<?php
session_start();
$connect = mysqli_connect("localhost", "root", "secret", "transaction");
//query to fetch user id for invoice table
$query1 = mysqli_query($connect, "SELECT * FROM users WHERE email='" . $_SESSION['login_user'] . "'");
$row = mysqli_fetch_array($query1);

$invname = $_POST['invname'];
//Query to insert invoice name
$sql = "INSERT INTO invoices (name, user_id) VALUES ('{$invname}', '" . $row['id'] . "')";
$query = mysqli_query($connect, $sql);
if ($query) {
    $invoice_id = mysqli_insert_id($connect);
    foreach ($_POST['transactions'] as $transaction) {


        $sql1 = "INSERT INTO transactions (name, price, invoice_id) VALUES ('" . $transaction['name'] . "', '" . $transaction['price'] . "', '" . $invoice_id . "')";
        $query2 = mysqli_query($connect, $sql1);
    }



    header('Location: dashboard.php ');


}
