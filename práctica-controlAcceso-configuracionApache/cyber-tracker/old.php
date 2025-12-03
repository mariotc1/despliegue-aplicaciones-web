<?php
// old.php
// Esta es la página antigua. Si has configurado la redirección en Apache (.htaccess)
// o a nivel de servidor, al entrar aquí debería mandarte automáticamente a new.php.
// Si quieres probar un redirect con PHP en vez de .htaccess, descomenta las 2 líneas siguientes:

// header("Location: new.php"); // o la ruta que tengas configurada
// exit;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página OLD</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #fee2e2;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }
        .box {
            background: #ffffff;
            border: 2px dashed #b91c1c;
            padding: 30px 40px;
            text-align: center;
            border-radius: 10px;
        }
        h1 { margin: 0 0 10px; color: #b91c1c; }
        p { margin: 5px 0; color: #444; }
    </style>
</head>
<body>
    <div class="box">
        <h1>Página OLD</h1>
        <p>Estás en la página antigua (old.php).</p>
        <p>Si la redirección está bien configurada, casi no deberías ver esto.</p>
    </div>
</body>
</html>
