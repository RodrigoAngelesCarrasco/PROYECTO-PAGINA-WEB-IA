<?php
$host = "localhost";
$db = "formulario_validacion";
$user = "root";
$pass = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>
