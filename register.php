<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
     <link rel="stylesheet" href="transaction.css">
</head>
<body>
     <!-- Navbar-->
   <nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <!-- Brand -->
<!--Navbar-->

    <a class="navbar-brand" href="#">Invoicing App</a>
</nav>

<!-- Registeration buttons-->
<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="login">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Login</a>
  </li>
  <li class="register">
    <a class="nav-link"  id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Register</a>
  </li>
</ul>
<!-- Registration buttons end-->

<!-- Tab contents-->
<div class="tab-content" id="pills-tabContent">

  <!--Login content-->
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
  <form>
  <div class="form-group">
    <label for="exampleInputEmail1" style="text-align:center;display: block;">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" style="text-align:center;display: block;">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>

  <button type="submit" class="btn btn-primary3">Login</button>
</form>

  </div>
    <!--Login content end-->




  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
       <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
  <form>
  <div class="form-group">
    <label for="regname" style="text-align:center;display: block;">Name</label>
    <input type="email" class="form-control" id="regname" aria-describedby="emailHelp" placeholder="eg. Chris Hogan">

  </div>
  <div class="form-group">
    <label for="regemail" style="text-align:center;display: block;">Email Adress</label>
    <input type="password" class="form-control" id="regemail" placeholder="eg. chris@invoiceapp.com">
  </div>
  <div class="form-group">
    <label for="regcompany" style="text-align:center;display: block;">Company's Name</label>
    <input type="email" class="form-control" id="regcompany" aria-describedby="emailHelp" placeholder="eg. Chris Tech">

  </div>
  <div class="form-group">
    <label for="regpassword" style="text-align:center;display: block;">Password</label>
    <input type="password" class="form-control" id="regpassword" placeholder="Enter Password">
  </div>

  <div class="form-group">
    <label for="regpasswordcon" style="text-align:center;display: block;">Confirm Password</label>
    <input type="password" class="form-control" id="regpasswordcon" placeholder="Confirm Password">
  </div>
  <button type="submit" class="btn btn-primary3" >Register</button>
</form>

  </div>
  </div>

</div>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonym<i class="fas fa-user"></i>ous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>
