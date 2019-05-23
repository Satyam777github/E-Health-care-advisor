<?php include_once("connection.php");
  session_start();

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>HCA</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link rel="icon" type="image/x-icon" href="/healthcheck/image/9.png">

  <link rel="stylesheet" type="text/css" href="/healthcheck/css/style.css">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Orbitron" />
  
  <style type="text/css">

  	.carousel-item img{
  		width: 100%;
  		height: auto;
  	}
  </style>
</head>

<body>

<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="/healthcheck/index.php">
	<img src="/healthcheck/image/9.png" style="max-height: 
	50px; max-width: 50px;"> Health Care Advisor
  </a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto" ">
      <li class="nav-item ">
        <a class="nav-link active" href="/healthcheck/index.php" style="padding-left: 15px;padding-right: 15px;">Home</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="/healthcheck/include/medicine.php"  >Medicine</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/healthcheck/include/disease.php" >Diseases</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="/healthcheck/include/aboutus.php"  >About Us &nbsp &nbsp</a>
      </li>
      <?php if (isset($_SESSION['username'])): ?>
        <li class="nav-item">
        <a class="nav-link" href="#"  ><?php echo $_SESSION['username']; ?> </a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="/healthcheck/include/logout.php"  >Logout </a>
      </li>
      <?php else: ?>
      <li class="nav-item">
        <a class="nav-link" href="/healthcheck/include/login.php"   style="padding-right: 20px;">Login </a>
      </li> 
      <?php endif; ?>
      
      
      <a class="btn btn-success right" href="/healthcheck/include/symptom.php">Symptom Checker</a>
    </ul>
  </div> 
</nav>
  
 











