<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Transactions</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
     <link rel="stylesheet" href="transaction.css">
</head>
<body>

  <!-- Navbar-->
   <nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="#">Invoicing App</a>

    <div class="dropdown">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        OGTECH
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="#">View Invoices</a>
        <a class="dropdown-item" href="#">create invoices</a>
      </div>
    </div>
    <a class="navbar-brands" href="#">
      <i class="fas fa-user"> WELCOME, ORE</i>
   </a>
</nav>
<!--Navbar-->


<div>
  <h3 class="invtitle">Enter Details Below To Create Invoice</h3>
</div>
<div>
  <h5 class="invname">Invoice Name:</h5>
</div>
<div class="form-group">
  <input type="text" class="form-control" id="usr">
</div>

<div>
  <h5 class="invprice">Invoice Price:$15,000</h5>
</div>
<hr>
<div>
  <h3 class="transtitle">Transactions</h3>
</div>
<div>
  <h5 class="addtrans">Add Transaction:<input class="btn btn-primary" type="button" value="+"></h5>
</div>
<hr>
<div class="row">
  <div class="column1" onclick="openTab('b1');"><b>#</b></div>
  <div class="column2" onclick="openTab('b2');"> <b>Transaction name</b></div>
  <div class="column3" onclick="openTab('b3');"> <b> Price($)</b></div>
  <input class="btn btn-primary2" type="button" value="X">
  <hr>
</div>

<div class="row">
  <div class="column1" onclick="openTab('b1');">1</div>
  <div class="column2" onclick="openTab('b2');"> Website</b></div>
  <div class="column3" onclick="openTab('b3');"> 5000</b></div>
  <input class="btn btn-primary2" type="button" value="X">
  <hr>
</div>

<div class="row">
  <div class="column1" onclick="openTab('b1');">2</div>
  <div class="column2" onclick="openTab('b2');"> Mobile Emergency App</b></div>
  <div class="column3" onclick="openTab('b3');"> 10000</b></div>
  <input class="btn btn-primary2" type="button" value="X">
  <hr>
</div>
<input class="btn btn-primary3" type="button" value="Create Invoice">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonym<i class="fas fa-user"></i>ous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>
