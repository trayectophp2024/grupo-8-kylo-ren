<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "star_wars"; 

$conn = new mysqli($host,$user,$password, $database);

if ($conn->connect_error) {
    die ("conexion fallida:" . $conn->connect_error); 
}

?>