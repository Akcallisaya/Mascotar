<?php
$servername = "localhost";
$username = "root"; 
$password = "";     
$dbname = "ong";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8mb4");
// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
} 
?>
