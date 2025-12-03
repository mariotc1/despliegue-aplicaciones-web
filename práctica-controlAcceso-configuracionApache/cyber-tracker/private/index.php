<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Zona privada</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #0f172a;
            color: #e5e7eb;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }
        .card {
            background: #111827;
            padding: 40px 30px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.5);
            text-align: center;
            max-width: 480px;
            width: 100%;
        }
        h1 {
            margin: 0 0 10px;
            font-size: 28px;
            color: #38bdf8;
        }
        p {
            margin: 8px 0;
            font-size: 16px;
            color: #cbd5f5;
        }
        .tag {
            display: inline-block;
            margin-top: 18px;
            padding: 6px 12px;
            border-radius: 999px;
            background: #22c55e22;
            color: #22c55e;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 0.08em;
        }
        .small {
            margin-top: 20px;
            font-size: 13px;
            color: #9ca3af;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>Zona privada</h1>
        <p>Has accedido correctamente al área protegida del sitio.</p>
        <p>Aquí solo pueden entrar usuarios con contraseña.</p>
        <span class="tag">Acceso autorizado</span>
        <p class="small">Si has llegado hasta aquí, la autenticación HTTP de la carpeta funciona correctamente.</p>
    </div>
</body>
</html>
