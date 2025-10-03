<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Producto</title>
    <style>
        .producto-ficha {
            border: 1px solid #ccc;
            padding: 20px;
            margin: 20px;
            width: 300px;
            font-family: Arial, sans-serif;
        }
        .producto-ficha h2 {
            margin-top: 0;
        }
        .producto-ficha p {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

    <h1>Detalles del Producto</h1>

    <?php
    // 1. Definir el array de datos del producto (en un caso real, vendría de una base de datos)
    $datos_producto = [
        'id' => 1,
        'nombre' => 'Camiseta de Algodón I',
        'descripcion' => 'Una camiseta nada comoda  y de alta calidad, perfecta para el día a día.',
        'precio' => 19.99,
        'imagen' => 'images/camiseta.jpg', // Asegúrate de tener una carpeta 'images' con la imagen
        'stock' => 50
    ];


     $datos_producto2 = [
        'id' => 1,
        'nombre' => 'Camiseta de Algodón II',
        'descripcion' => 'Una camiseta nada comoda  y de alta calidad, perfecta para el día a día.',
        'precio' => 19.99,
        'imagen' => 'images/camiseta.jpg', // Asegúrate de tener una carpeta 'images' con la imagen
        'stock' => 50
    ];

    // 2. Mostrar la información del producto usando un bucle o directamente con las claves
    echo '<div class="producto-ficha">';
    echo '<h2>' . htmlspecialchars($datos_producto['nombre']) . '</h2>';
    echo '<img src="' . htmlspecialchars($datos_producto['imagen']) . '" alt="' . htmlspecialchars($datos_producto['nombre']) . '" width="150">';
    echo '<p><strong>Descripción:</strong> ' . htmlspecialchars($datos_producto['descripcion']) . '</p>';
    echo '<p><strong>Precio:</strong> $' . number_format($datos_producto['precio'], 2) . '</p>';
    echo '<p><strong>Stock disponible:</strong> ' . htmlspecialchars($datos_producto['stock']) . '</p>';
    echo '</div>';



  echo '<div class="producto-ficha">';
    echo '<h2>' . htmlspecialchars($datos_producto2['nombre']) . '</h2>';
    echo '<img src="' . htmlspecialchars($datos_producto2['imagen']) . '" alt="' . htmlspecialchars($datos_producto2['nombre']) . '" width="150">';
    echo '<p><strong>Descripción:</strong> ' . htmlspecialchars($datos_producto2['descripcion']) . '</p>';
    echo '<p><strong>Precio:</strong> $' . number_format($datos_producto2['precio'], 2) . '</p>';
    echo '<p><strong>Stock disponible:</strong> ' . htmlspecialchars($datos_producto2['stock']) . '</p>';
    echo '</div>';


    ?>

</body>
</html>
