<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
     <link rel="stylesheet" href="transaction.css">
</head>
<body>
<?php
session_start();

$connect = mysqli_connect("localhost", "root", "secret", "transaction");

$sql = "SELECT * FROM users WHERE email= '" . $_SESSION['login_user'] . "'";
$query = mysqli_query($connect, $sql);
$user = mysqli_fetch_array($query);
?>

    <hr>
<div class="row">
  <div class="column1" onclick="openTab('b1');"><b>#</b></div>
  <div class="column2" onclick="openTab('b2');"> <b>Invoice name</b></div>
  <div class="column3" onclick="openTab('b3');"> <b> status</b></div>

  <hr>
</div>


<?php
$sql2 = "SELECT * FROM invoices WHERE user_id= '" . $user['id'] . "'";
$query = mysqli_query($connect, $sql2);

while ($invoice = mysqli_fetch_array($query)) {
  ?>

  <div class="row">
  <div class="column1" onclick="openTab('b1');"><?php echo $invoice['id']; ?></div>
  <div class="column2" onclick="openTab('b2');"><?php echo $invoice['name']; ?></b></div>
  <div class="column3" onclick="openTab('b3');"><?php echo $invoice['status']; ?></b></div>
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" style="background-color: #20bf20;color: black;">
        View Invoice
      </button>

  <hr>
</div>

  <?php

}
?>

</body>
</html>







