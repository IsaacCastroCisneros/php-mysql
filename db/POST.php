<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prueba";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
};



$estado=$_POST['estado'];   
$codigo=$_POST['codigo'];
$dato=$_POST['dato'];

$sql = "INSERT INTO prueba (estado,codigo,dato) VALUES ('$estado','$codigo','$dato')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
};

?>