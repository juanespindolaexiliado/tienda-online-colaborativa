<?php
$pedidos = [
    [
        "id" => 1,
        "cliente" => "Ana Pérez",
        "producto" => "Notebook",
        "cantidad" => 1,
        "precio" => 650000,
        "estado" => "Pendiente"
    ],
    [
        "id" => 2,
        "cliente" => "Carlos Soto",
        "producto" => "Teclado",
        "cantidad" => 2,
        "precio" => 25000,
        "estado" => "En preparación"
    ],
    [
        "id" => 3,
        "cliente" => "María González",
        "producto" => "Mouse inalámbrico",
        "cantidad" => 1,
        "precio" => 18000,
        "estado" => "Enviado"
    ]
];

function calcularTotal($cantidad, $precio)
{
    return $cantidad * $precio;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de pedidos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
        }

        th, td {
            padding: 12px;
            border: 1px solid #cccccc;
            text-align: left;
        }

        th {
            background-color: #1f6f43;
            color: white;
        }
    </style>
</head>
<body>

    <h1>Gestión de pedidos</h1>

    <table>
        <tr>
            <th>ID</th>
            <th>Cliente</th>
            <th>Producto</th>
            <th>Cantidad</th>
            <th>Total</th>
            <th>Estado</th>
        </tr>

        <?php foreach ($pedidos as $pedido): ?>
            <tr>
                <td><?php echo $pedido["id"]; ?></td>
                <td><?php echo htmlspecialchars($pedido["cliente"]); ?></td>
                <td><?php echo htmlspecialchars($pedido["producto"]); ?></td>
                <td><?php echo $pedido["cantidad"]; ?></td>
                <td>
                    $<?php
                    echo number_format(
                        calcularTotal($pedido["cantidad"], $pedido["precio"]),
                        0,
                        ",",
                        "."
                    );
                    ?>
                </td>
                <td><?php echo htmlspecialchars($pedido["estado"]); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>
</html>
