<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros en la Librería</title>
</head>
<body>
    <h1>Lista de Libros</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Autor</th>
                <th>Editorial</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($libros as $libro): ?>
                <tr>
                    <td><?php echo htmlspecialchars($libro['id']); ?></td>
                    <td><?php echo htmlspecialchars($libro['titulo']); ?></td>
                    <td><?php echo htmlspecialchars($libro['autor']); ?></td>
                    <td><?php echo htmlspecialchars($libro['editorial']); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
