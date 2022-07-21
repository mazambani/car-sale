<?php #Showing php errors on the browser to prevent HTTP 500 Error
ini_set("display_errors","1") ;
error_reporting(E_ALL);
?>
<?php
require './config/config.php';
if (isset($_POST['register'])) {
      $name = $_POST['name'];
      $user_name = $_POST['username'];
      $password = $_POST['pwd'];
      $repeat_pwd = $_POST['repeat-pwd'];
      $phone = $_POST['full_phone'];
      $gender = $_POST['gender'];
      $marital = $_POST['marital'];
      $id = $_POST['id'];
      if ($password != $repeat_pwd) $err = "Password and Re-Type fields don't match";
      else {
            $hashed = password_hash($password, PASSWORD_DEFAULT);
            $result =  $conn->query("INSERT INTO `users` VALUES(NULL,'$name','$user_name','$hashed','$id','$gender','$marital','$phone',2)");
            if (!$result) $err = "Failed to register your account, try again";
            header('location: index.php');
      }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Car Sales</title>
      <link rel="stylesheet" href="./assets/css/intlTelInput.min.css">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
      <link rel="stylesheet" href="assets/css/styles.css" />
      <style>
            .iti-flag {
                  background-image: url("assets/img/flags.png");
            }

            @media (-webkit-min-device-ratio: 2),
            (min-resolution: 192dpi) {
                  .iti-flag {
                        background-image: url("assets/img/flags@2x.png");
                  }
            }

            ;
      </style>

</head>

<body>
      <section class="py">
            <div class="container px-lg">
                  <div class="p-2 p-lg-5  rounded-3 ">
                        <h2 class="display text-center p">New Account Registration</h2>
                        <div class="m-2 m-lg-2">
                              <form class="row g-3" method="POST" action="#" autocomplete="off">
                                    <div class="col-md-6">
                                          <label for="userName" class="form-label">Full Name</label>
                                          <input type="name" name="name" class="form-control" id="userName" placeholder="Ralph Ralten" required />
                                    </div>
                                    <div class="col-md-6">
                                          <label for="inputCity" class="form-label">Username</label>
                                          <input type="text" class="form-control" name="username">
                                    </div>
                                    <div class="col-md-6">
                                          <label for="password" class="form-label">Password</label>
                                          <input type="password" name="pwd" class="form-control" id="password" required />
                                    </div>
                                    <div class="col-md-6">
                                          <label for="repeatPassword" class="form-label">Confirm Password</label>
                                          <input type="password" name="repeat-pwd" class="form-control" id="repeatPassword" required />
                                    </div>

                                    <div class="col-md-6">
                                          <label for="inputId" class="form-label">National ID</label>
                                          <input type="text" name="id" class="form-control" id="inputId" placeholder="63-1234567-R23" required />

                                    </div>

                                    <div class="col-md-6">
                                          <label for="inputCity" class="form-label">Gender</label>
                                          <select name="gender" class="form-select" id="inputCity" required>
                                                <option selected disabled>Choose Option</option>
                                                <option value="F">Female</option>
                                                <option value="M">Male</option>
                                          </select>
                                    </div>
                                    <div class="col-md-6">
                                          <label for="inputCity" class="form-label">Marital Status</label>
                                          <select name="marital" class="form-select" id="inputCity" required>
                                                <option selected disabled>Choose Option</option>
                                                <option value="Single">Single</option>
                                                <option value="Married">Married</option>
                                                <option value="Divorced">Divorced</option>
                                          </select>
                                    </div><br>
                                    <div class="col-md-6">
                                          <label for="phone" class="form-label">Mobile Number</label><br>
                                          <input type="tel" style="width: 100%;" name="full_phone" class="form-control" id="phone" required />
                                    </div>
                                    <div class="col-12 mt-3">
                                          <div class="form-check">
                                                <input class="form-check-input" required type="checkbox" id="gridCheck" required />
                                                <label class="form-check-label" for="gridCheck">
                                                      Accept all <a href="#">terms and conditions.</a>
                                                </label>
                                          </div>
                                    </div>
                        </div>
                        <div class="col-12 mt-3">
                              <button type="submit" name="register" class="btn btn-primary">Register Account</button>
                        </div>

                        </form>
                  </div>
            </div>
            </div>
      </section>
      <script src="assets/js/intlTelInput.min.js"></script>
      <script>
            var input = document.querySelector("#phone");
            var iti = window.intlTelInput(input, {
                  initialCountry: "zw",
                  nationalMode: true,
                  utilsScript: "assets/js/utils.js",
            });
      </script>
      <script src="./assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>