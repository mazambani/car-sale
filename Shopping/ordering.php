<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Ordering</title>
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
      <?php include './components/navbar.php'; ?>
      <div class="container">
            <h2 class="mt-4">Ordering</h2>
            <div class="row">
                  <!-- <div class="col-md-5"> -->
                  <form action="#" class="col-md-5">
                        <div class="col-mod-5">
                              <label class="mb-3 " for="">Name</label>
                              <input type="text" disabled class="form-control">
                        </div>
                        <div class="col-mod-5">
                              <label class="mb-3 mt-3" for="">Address</label>
                              <input type="text" class="form-control " placeholder="Line 1">
                        </div>
                        <div class="col-mod-5">
                              <input type="text" class="form-control mb-3 mt-5" placeholder="Line 2">
                        </div>


                        <div class="col-mod-5">
                              <label class="mb-2 mt-2" for="">Email</label>
                              <input type="text" class="form-control" placeholder="Enter valid email address">
                        </div>

                        <button type="submit" class="btn btn-primary mb-4 mt-4">Place Order</button>
                  </form>
                  <div class="col-md-2"></div>
                  <div class="col-md-5">
                        <ul class="list-group summary">
                              <h2 class="sm-mt-4">Order Summary</h2>
                              <li class="list-group-item">Make:</li>
                              <li class="list-group-item">Model: </li>
                              <li class="list-group-item">Type: </li>
                              <li class="list-group-item">Description</li>
                              <li class="list-group-item"><b>Total</b></li>

                        </ul>
                  </div>
                  <!-- </div> -->
            </div>
      </div>

      <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>