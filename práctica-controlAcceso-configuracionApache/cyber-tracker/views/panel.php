<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>CyberTracker</title>
        <style>
            body { font-family: Arial; margin: 40px; }
            form { margin-bottom: 25px; }
            table { border-collapse: collapse; width: 100%; margin-top: 20px; }
            th, td { border: 1px solid #aaa; padding: 8px; text-align: left; }
            th { background: #eee; }
        </style>
    </head>
    <body>
        <h1>CyberTracker – Cazador de Ofertas</h1>

        <h2>Registrar Producto</h2>
        <form method="POST">
            <input type="text" name="nombre" placeholder="Nombre producto" required>
            <input type="number" step="0.01" name="precio" placeholder="Precio" required>
            <input type="text" name="web" placeholder="Web" required>
            <button type="submit" name="guardar">Guardar</button>
        </form>

        <h2>Buscar Producto</h2>
        <form method="GET">
            <input type="text" name="buscar" placeholder="Buscar por nombre">
            <button type="submit">Buscar</button>
        </form>

        <h2>Resultados</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Producto</th>
                <th>Precio</th>
                <th>Web</th>
            </tr>

            <?php if (!empty($resultados)): ?>
                <?php foreach ($resultados as $oferta): ?>
                    <tr>
                        <td><?= htmlspecialchars($oferta["id"]) ?></td>
                        <td><?= htmlspecialchars($oferta["nombre"]) ?></td>
                        <td><?= htmlspecialchars($oferta["precio"]) ?> €</td>
                        <td><?= htmlspecialchars($oferta["web"]) ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </table>
    </body>
</html>