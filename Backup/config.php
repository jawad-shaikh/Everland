<?php 
$username = "root";
$password = "";
$server = "127.0.0.1";
$db = "ecommercesirjawad";

$con = mysqli_connect($server,$username,$password,$db);

if (!$con) {
	echo "<h3 class='container bg-dark text-center p-3 text-warning rounded-lg mt-5'> Database Connection not Establish</h3>";
}

 ?>