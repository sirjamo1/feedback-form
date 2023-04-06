<?php 

define('DB_HOST', 'localhost');
define('DB_USER', 'James');
define('DB_PASS', 'password');
define('DB_NAME', 'php_dev');

//create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
//check connection
if ($conn->connect_error) {
 die('Connection Failed ' . $conn->connect_error);

}
?>