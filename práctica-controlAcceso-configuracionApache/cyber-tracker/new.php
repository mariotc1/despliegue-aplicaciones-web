<?php
// new.php
// Página nueva a la que debe llegar el usuario tras la redirección desde old.php.
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página NEW</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #dcfce7;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }
        .box {
            background: #ffffff;
            border: 2px solid #16a34a;
            padding: 30px 40px;
            text-align: center;
            border-radius: 10px;
        }
        h1 { margin: 0 0 10px; color: #166534; }
        p { margin: 5px 0; color: #444; }
        a {
            display: inline-block;
            margin-top: 15px;
            padding: 8px 16px;
            border-radius: 6px;
            background: #16a34a;
            color: #fff;
            text-decoration: none;
        }
        a:hover { background: #15803d; }
    </style>
</head>
<body>
    <div class="box">
        <h1>Página NEW</h1>
        <p>Has llegado a la nueva página (new.php).</p>
        <p>Si venías desde old.php, la redirección está funcionando correctamente.</p>
        <a href="old.php">Volver a probar desde OLD</a>
    </div>
</body>
</html>
