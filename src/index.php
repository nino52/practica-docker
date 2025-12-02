<?php
// Datos de conexión
$servername = "mysql";   // Nombre del servicio MySQL dentro de Docker
$username   = "root";
$password   = "123456";
$database   = "practica";

try {
    // Intentar conexión a MySQL
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "<h1>Hola mundo desde PHP + MySQL en Docker</h1>";
    echo "<p>Conexión exitosa a la base de datos!</p>";

} catch(PDOException $e) {
    echo "<h1>Hola mundo</h1>";
    echo "<p>Error de conexión: " . $e->getMessage() . "</p>";
}
?>
