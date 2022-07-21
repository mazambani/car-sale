<?php
session_destroy();
unset($_SESSION['status']);
unset($_SESSION['user_id']);
unset($_SESSION['_status']);
header('location: ../index.php');
