<?php
#Showing php errors on the browser to prevent HTTP 500 Error
ini_set("display_errors","1") ;
error_reporting(E_ALL);

/**
 * Author: Mataga Believe
 * Database: MySql
 * Description: A module for connecting to the database.
 * Last Updated: 07-05-2022
 * Database Driver: MySqli OOP
 * Compatible Version: MySql 8.*.*
 * You can change the constant(s) defined in this file to match 
 * your db or environment properties inorder to connect system. 
 */


#Initializing session variable
session_start();
$_SESSION['status'] = false;
$_SESSION['logged'] = false;

/* CONNECTION PROPERTIES 
defined('DB_SERVER') ? null : define("DB_SERVER", "localhost");
defined('DB_USER') ? null : define("DB_USER", "root");
defined('DB_PASS') ? null : define("DB_PASS", "ternal45m*");
defined('DB_NAME') ? null : define("DB_NAME", "car_sales");
 */
$host= "localhost";
$user = "root";
$pass = "";
$dbname = "car_sales";
$err = "";

try {
      $conn = new mysqli($host,$user,$pass, $dbname);
} catch (Exception $e) {
      $err =  $e->getMessage();
      $fileError =  $e->getFile();
      $lineError =  $e->getLine();
}

function findUsr($conn)
{
      $stmt = $conn->prepare("SELECT * FROM users WHERE user_id = ?");
      $stmt->bind_param('s', $_SESSION['usr_id']);
      $stmt->execute();
      $result = $stmt->get_result();
      $user = $result->fetch_assoc();
      return $user;
}
