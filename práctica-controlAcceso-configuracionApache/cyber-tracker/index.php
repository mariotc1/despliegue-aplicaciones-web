<?php
    require_once "config/conexion.php";
    require_once "controllers/OfertaController.php";

    $controlador = new OfertaController($conexion); // Inyectar la conexión PDO en el controlador
    $controlador->index(); // Llamar al método index del controlador
?>