<?php #Showing php errors on the browser to prevent HTTP 500 Error
ini_set("display_errors","1") ;
error_reporting(E_ALL);


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Car Sales</title>
  <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/styles.css" />
</head>

<body>
  <!-- === Navigation === -->
  <?php include './components/navbar.php'; ?>
  <!-- === End Of Navigation === -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3 mt-4">
        <h2>Car Category</h2>
        <ul class="list-group">
          <li class="list-group-item active" aria-current="true">General List</li>
          <li class="list-group-item">Sedan</li>
          <li class="list-group-item">Convertible</li>
          <li class="list-group-item">Hatchback</li>
          <li class="list-group-item">Pickup Truck</li>
        </ul>
      </div>
      <div class="col-md-3 mt-5">
        <div class="card" style="width:100%;">
          <img src="assets/img/aston.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Mercedes Benz</h5>
            <p class="card-text">Price: <span><b>$4567</b></span></p>
            <p class="card-text">Type: <span><b>$4567</b></span></p>
            <p class="card-text">Latest New Version</p>
            <a role="button" href="ordering.php" class="w-100 btn btn btn-outline-primary">Buy Now</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 mt-5">
        <div class="card" style="width:100%;">
          <img src="assets/img/aston.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Mercedes Benz</h5>
            <p class="card-text">Price: <span><b>$4567</b></span></p>
            <p class="card-text">Type: <span><b>$4567</b></span></p>
            <p class="card-text">Latest New Version</p>
            <a role="button" class="w-100 btn btn btn-outline-primary">Buy Now</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 mt-5">
        <div class="card" style="width:100%;">
          <img src="assets/img/aston.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Mercedes Benz</h5>
            <p class="card-text">Price: <span><b>$4567</b></span></p>
            <p class="card-text">Type: <span><b>$4567</b></span></p>
            <p class="card-text">Latest New Version</p>
            <a role="button" class="w-100 btn btn btn-outline-primary">Buy Now</a>
          </div>
        </div>
      </div>

    </div>
  </div>
  <script src="./assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>