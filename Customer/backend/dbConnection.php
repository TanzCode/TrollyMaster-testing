<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "master_basket"; 
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>