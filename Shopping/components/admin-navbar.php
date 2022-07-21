<?php #Showing php errors on the browser to prevent HTTP 500 Error
ini_set("display_errors","1") ;
error_reporting(E_ALL);
?>
<?php
require '../config/config.php';
$usr = findUsr($conn);
?>
<nav class="navbar navbar-expand-lg navbar-light rounded" aria-label="Eleventh navbar example">
      <div class="container-fluid">
            <a class="navbar-brand" href="#">
                  <img class="align-top car-brand" src="../assets/img/tesla.png" alt="Company Brand/Logo" />
                  Mota</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample09">
                  <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                              <a class="nav-link nav_link active" aria-current="page" href="../admin/index.php">Home</a>
                        </li>
                        <li class="nav-item">
                              <a class="nav-link nav_link" href="../admin/manage.php">Manage Orders</a>
                        </li>
                        <li class="nav-item">
                              <a class="nav-link nav_link" href="../admin/view.php" tabindex="-1" aria-disabled="true">Update Catalog</a>
                        </li>
                        <li class="nav-item nav_link dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="dropdown09" data-bs-toggle="dropdown" aria-expanded="false"><?php echo $usr['name'];  ?></a>
                              <ul class="dropdown-menu" aria-labelledby="dropdown09">
                                    <li><a class="dropdown-item" href="../admin/view.php">Update Catalog</a></li>
                                    <li><a class="dropdown-item" href="../admin/manage.php">Manage Orders</a></li>
                                    <li>
                                          <a class="dropdown-item" href="../components/logout.php">Logout</a>
                                    </li>
                              </ul>
                        </li>
                  </ul>
            </div>
      </div>
</nav>