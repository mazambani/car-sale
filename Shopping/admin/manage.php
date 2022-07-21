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
      <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
      <link rel="stylesheet" href="../assets/css/dataTables.bootstrap.min.css">
      <link rel="stylesheet" href="../assets/css/datatables.min.css">
      <link rel="stylesheet" href="../assets/css/styles.css" />
</head>

<body>
      <!-- === Navigation === -->
      <?php include '../components/admin-navbar.php'; ?>
      <!-- === End Of Navigation === -->
      <div class="container">
            <table id="#myTable" class="table table-billing-history table-bordered mt-4">
                  <thead>
                        <tr>
                              <th>Customer</th>
                              <th>Order Date</th>
                              <th>Product</th>
                              <th>Price</th>
                              <th>Status</th>
                        </tr>
                  </thead>
                  <tbody>

                  </tbody>
            </table>
      </div>
      <script src="../assets/js/bootstrap.bundle.min.js"></script>
      <script src="../assets/js/dataTables.bootstrap5.js"></script>
      <script src="../assets/js/jquery.dataTables.min.js"></script>
      <script src="../assets/js/jquery.min.js"></script>
      <script>
            $(document).ready(function() {
                  $('#myTable').DataTable();
            });
      </script>
</body>

</html>