<?php 
define('DB_HOST', 'localhost'); 
define('DB_NAME','crime_portal'); 
define('DB_USER','root'); 
define('DB_PASSWORD',''); 

$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_connect_error()); 

//$db=mysqli_select_db($con,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_connect_error()); 

?>