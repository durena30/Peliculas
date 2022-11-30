<?php
  $auth =true;
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" /> -->
    <!-- <script script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link rel="stylesheet" type="text/css" href="../styles/bootstrap.min.css" media="screen" />
    <script src="https://kit.fontawesome.com/fb1fc3d33e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../styles/bootstrap.css" media="screen" />
    <?php
    if(isset($_GET["page"])&&$_GET["page"]=="dashboard"){
      ?>
    <link rel="stylesheet" type="text/css" href="../styles/dashboard.css" media="screen" />
      <?php
    }
    ?>
    <link rel="stylesheet" type="text/css" href="../styles/styles.css" media="screen" />
    <title>PopCorn Movies</title>
    <script src="https://kit.fontawesome.com/fb1fc3d33e.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="../resources/imgs/popcorn.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <!-- <script src="https://kit.fontawesome.com/fb1fc3d33e.js" crossorigin="anonymous"></script><style media="all" id="fa-v4-font-face"/> -->

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <img src="../resources/imgs/popcorn.png" width=5%/>
    <a class="navbar-brand" href="#">PopCorn</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor02">
      <ul class="navbar-nav me-auto ">
        <li class="nav-item">
          <a class="nav-link active" href="#">Home
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#features">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#pricing">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
      </ul>
      <?php
        if($auth){
      
      ?>
        <form class="d-flex">
          <input class="form-control me-sm-2" type="text" placeholder="Search">
          <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
        </form>
      <?php
        }else{
          ?>
       <div class="row">
        <div class="col"><button class="btn btn-warning" id="Loginbtn1" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Login</button></div>
        <div class="col"><button class="btn btn-outline-warning" id="Registerbtn1">Register</button></div>
       </div>   
      
      <?php 
        }
      ?>
    </div>
  </div>
</nav>