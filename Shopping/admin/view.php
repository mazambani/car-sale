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
      <?php require '../components/admin-navbar.php'; ?>
      <section class="py">
            <div class="container px-lg">
                  <div class="p-2 p-lg-5  rounded-3 ">
                        <h2 class="display text-center p">Update Product Catalog</h2>
                        <div class="m-2 m-lg-2">
                              <form class="row g-3" method="POST" action="#" autocomplete="off">
                                    <div class="col-md-6">
                                          <label for="userName" class="form-label">Product Title</label>
                                          <input type="name" name="name" class="form-control" id="userName" placeholder="Tesla Model X" required />
                                    </div>
                                    <div class="col-md-6">
                                          <label for="inputCity" class="form-label">Description</label>
                                          <input type="text" class="form-control" name="username">
                                    </div>
                                    <div class="col-md-6">
                                          <label for="password" class="form-label">Price</label>
                                          <input type="number" name="pwd" class="form-control" id="price" required />
                                    </div>
                                    <div class="col-md-6">
                                          <label for="repeatPassword" class="form-label">Type</label>
                                          <input type="text" name="repeat-pwd" class="form-control" id="type" placeholder="Sudan" required />
                                    </div>

                                    <div class="col-md-6">
                                          <label for="inputId" class="form-label">Make</label>
                                          <input type="text" name="id" class="form-control" id="inputId" placeholder="Toyota, Mazda, Benz" required />

                                    </div>

                                    <div class="col-md-6">
                                          <label for="inputCity" class="form-label">Fuel</label>
                                          <select name="gender" class="form-select" id="inputCity" required>
                                                <option selected disabled>Choose Option</option>
                                                <option value="F">Petrol</option>
                                                <option value="M">Diesel</option>
                                                <option value="M">Hybrid</option>

                                          </select>
                                    </div>
                                    <div class="col-md-6">
                                          <label for="inputCity" class="form-label">Upload Picture</label>
                                          <input type="file" class="form-control">
                                    </div>
                        </div>
                        <div class="col-6 mt-3">
                              <button type="submit" style="margin-left:10px ;" name="register" class="btn btn-primary">Update</button>
                        </div>

                        </form>
                  </div>
            </div>
            </div>
      </section>
      <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>