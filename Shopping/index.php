<?php #Showing php errors on the browser to prevent HTTP 500 Error
ini_set("display_errors","1") ;
error_reporting(E_ALL);
?>
<?php
require 'config/config.php';

if (isset($_POST['login'])) {
      $usrname = $_POST['usrname'];
      $password = $_POST['pwd'];
      if (empty($usrname) || empty($password)) $err = "All fields are required, try again.";
      else {
            $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
            $stmt->bind_param('s', $usrname);
            $stmt->execute();
            $result = $stmt->get_result();
            if ($result->num_rows > 0) {
                  $row = $result->fetch_assoc();
                  if (password_verify($password, $row['password'])) {
                        if (($row['role_id'] == 1)) {
                              $_SESSION['_status'] = true;
                              $_SESSION['usr_id'] = $row['user_id'];
                              header('location: ../admin/index.php');
                        } else {
                              $_SESSION['status'] = true;
                              $_SESSION['usr_id'] = $row['user_id'];
                              header('location: ./home.php');
                        }
                  } else {
                        $errorMessage = "Enter valid credentials please !!!";
                  }
            } else {
                  $errorMessage = "Enter valid credentials please !!!";
            }
      }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Ordering</title>
      <link rel="stylesheet" href="assets/css/index.min.css">
      <style>

      </style>
</head>

<body>
      <form action="#" method="post" autocomplete="off">
            <div class="logo"><img src="./assets/img/aston.jpg" alt="" /></div>
            <div class="form">
                  <div class="form-group" style="margin-top: 5px;">
                        <label for="user">Username</label>
                        <input type="text" id="user" name="usrname" placeholder="Enter Your Username" />
                  </div>
                  <div class="form-group">
                        <label for="pass">Password</label>
                        <input type="password" id="password" name="pwd" placeholder="Enter Your Password" />
                  </div>
                  <button type="submit" name="login">Sign In</button>
            </div>
            <?php if (!empty($errorMessage)) {
                  echo "<p style='color: #ff3400; margin-top:10px; margin-left:8px'>$err</p>";
            } ?>
            <div class="create_act">
                  <p><a href="register.php">Create Account</a></p>
            </div>
            <div class="footer">
                  <ul>
                        <li><a href="#" target="_blank">Terms of Use |</a></li>
                        <li><a href="#" target="_blank">Privacy Policy</a></li>
                  </ul>
            </div>
      </form>
</body>

</html>