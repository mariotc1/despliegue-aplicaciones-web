<?php
    // Configuración de la conexión a la base de datos
    $servidor = "localhost";
    $usuario = "root";
    $contrasena = "root";
    $basedatos = "cyber_monday";

    // Crear la conexión PDO
    try {
        $conexion = new PDO("mysql:host=$servidor;dbname=$basedatos;charset=utf8", $usuario, $contrasena);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
    } catch (PDOException $e) {
        die("Error de conexión: " . $e->getMessage());
    }
?>