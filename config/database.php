<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'Piotr');
define('DB_PASS', 'Hasło4321');
define('DB_NAME', 'php_feedback');

//Create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

//Check connection
if ($conn->connect_error) {
  die('Connection Failed' . $conn->connect_error);
}
