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
      <link rel="shortcut icon" href="../assets/img/logo.png" type="image/x-icon">
      <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
      <link rel="stylesheet" href="../assets/css/styles.css" />
</head>

<body>
      <!-- === Navigation === -->
      <?php include '../components/admin-navbar.php'; ?>
      <!-- === End Of Navigation === -->
      <div class="container-fluid">
            <div class="row">
                  <h2 class="text-center mt-4">Product Catalog</h2>
                  <div class="container">
                        <button type="button" class="btn btn-primary">Add New</button>
                  </div>
                  <div class="col-md-3 mt-2">
                        <div class="card" style="width:100%;">
                              <img src="../assets/img/aston.jpg" class="card-img-top" alt="...">
                              <div class="card-body">
                                    <h5 class="card-title">Mercedes Benz</h5>
                                    <a role="button" class="w-100 mt-3 btn btn btn-outline-primary">Update Product</a>
                                    <a role="button" class="w-100 mt-3 btn btn btn-outline-danger">Remove Product</a>
                              </div>
                        </div>
                  </div>
                  <div class="col-md-3 mt-2">
                        <div class="card" style="width:100%;">
                              <img src="../assets/img/aston.jpg" class="card-img-top" alt="...">
                              <div class="card-body">
                                    <h5 class="card-title">Mercedes Benz</h5>
                                    <a role="button" class="w-100 mt-3 btn btn btn-outline-primary">Update Product</a>
                                    <a role="button" class="w-100 mt-3 btn btn btn-outline-danger">Remove Product</a>
                              </div>
                        </div>
                  </div>

                  <div class="col-md-3 mt-2">
                        <div class="card" style="width:100%;">
                              <img src="../assets/img/aston.jpg" class="card-img-top" alt="...">
                              <div class="card-body">
                                    <h5 class="card-title">Mercedes Benz</h5>
                                    <a role="button" class="w-100 mt-3 btn btn btn-outline-primary">Update Product</a>
                                    <a role="button" class="w-100 mt-3 btn btn btn-outline-danger">Remove Product</a>
                              </div>
                        </div>
                  </div>

            </div>
      </div>
      <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>