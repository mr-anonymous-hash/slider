<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Website with Search Box and Slider</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Custom styles for this template */
    .carousel-item {
      height: 100vh;
      min-height: 300px;
      background: no-repeat center center scroll;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }
  </style>
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">Bootstrap Website</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Page Content -->
<div class="container">

  <!-- Search Box -->
  <div class="row my-4">
    <div class="col-md-6 offset-md-3">
      <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </div>

  <!-- Slider -->
  <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <img class="d-block img-fluid" src="assets/Picsart_24-04-12_12-25-52-002.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block img-fluid" src="assets/Picsart_24-04-12_12-26-31-474.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block img-fluid" src="assets/Picsart_24-04-12_12-25-30-751.jpg" alt="Third slide">
      </div>
      <div class="carousel-item">
        <img class="d-block img-fluid" src="assets/Picsart_24-04-12_12-25-15-217.jpg" alt="Fourth slide">
      </div>
      <div class="carousel-item">
        <img class="d-block img-fluid" src="assets/Picsart_24-04-12_12-24-36-800.jpg" alt="Fifth slide">
      </div>
      <div class="carousel-item">
        <img class="d-block img-fluid" src="assets/Picsart_24-04-12_12-24-21-654.jpg" alt="Sixth slide">
      </div>
      <div class="carousel-item">
        <img class="d-block img-fluid" src="assets/Picsart_24-04-12_12-24-06-121.jpg" alt="Seventh slide">
      </div>
      <div class="carousel-item">
        <img class="d-block img-fluid" src="assets/Picsart_24-04-12_12-23-46-605.jpg" alt="Eighth slide">
      </div>
      <div class="carousel-item">
        <img class="d-block img-fluid" src="assets/Picsart_24-04-12_12-23-02-334.jpg" alt="Nineth slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!-- Content -->
 
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-light">

  <!-- /.container -->
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
