<?php
$host = 'localhost';
$dbname = 'vulnerable_db';
$username = 'root';  // Cambia si es necesario
$password = '';  // Cambia si es necesario

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
} catch (PDOException $e) {
    die("Error en la conexión: " . $e->getMessage());
}
?>
