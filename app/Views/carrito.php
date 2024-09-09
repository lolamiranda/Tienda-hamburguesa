<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOLA'S</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-color: #f9f9f9;
        }

        html, body, div {
    margin: 0;
    padding: 0;
}

        .header-logo {
            background-color: orange;
            text-align: left; 
            padding: 10px; 
            box-sizing: border-box; 
            display: flex;
            align-items: center; 
            justify-content: space-between; 
        }

        .header-logo img {
            max-width: 50px; 
            height: auto;
            margin-right: 10px; 
        }

        .header-text {
            text-align: center;
            flex-grow: 1; 
        }

        .header-text h1 {
            font-size: 24px;
            margin: 10px 0;
        }

  

        .producto {
            border: 2px solid orange;
            padding: 20px;
            margin-bottom: 20px;
            background-color: #fff;
            transition: transform 0.3s;
        }

        .producto:hover {
            transform: scale(1.02);
        }

        .producto p {
            margin: 0;
            font-size: 18px;
            color: #333;
        }

        .producto button {
            background-color: #dc3545;
            color: #fff;
            padding: 10px;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }

        .producto button:hover {
            background-color: #c82333;
        }

        .compra-button {
    background-color: orange; 
    color: #fff;
    padding: 15px 25px;
    border: 2px solid orange; 
    cursor: pointer;
    font-size: 18px;
    margin-top: 20px;
}

        .compra-button::before {
            content: '\2190'; 
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
        }

        .compra-button:hover {
            background-color: #218838;
        }

        .footer {
            background-color: #ddd;
            padding: 10px;
            text-align: center;
            margin-top: auto;
        }

        .logout-button img {
            max-width: 50px; 
            height: auto;
            margin-right: 15px;
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <header class="header-logo">
        <img class="logo-image" src="<?= base_url('public/imagenes/burger.png') ?>" >
        <div class="header-text">
            <h1>CARRITO</h1>
        </div>
    </header>

    <div class="logout-button" onclick="window.location.href='<?= base_url('categorias') ?>'">
        <img src="<?= base_url('public/imagenes/hacia-atras.png') ?>" alt="Logout">
    </div>

    <div class="main-cont">
       

    <form method="post" action="<?= base_url('carrito/eliminarProducto') ?>">
    <?php foreach ($carrito as $producto): ?>
        <div class="producto">
            <p>Nombre: <?= $producto['nombre'] ?></p>
            <p>Cantidad: <?= $producto['cantidad'] ?></p>
            <p>Precio: <?= $producto['precio'] ?></p>
            <input type="hidden" name="id" id="id" value="<?= $producto['id'] ?>">
            <button type="submit" name="eliminar">Eliminar</button>
        </div>
    <?php endforeach; ?>
</form>

<p>Total del Carrito: <?= $total ?> </p>

<?php if ($total > 0): ?>
    <form method="post" action="<?= base_url('compra/verDetalles') ?>">
        <button class="compra-button" type="submit" name="comprar">COMPRA</button>
    </form>
<?php else: ?>
    <p>Tu carrito está vacío</p>
<?php endif; ?>


    </div>


    

    <footer class="footer">
        <p>LOLA'S</p>
    </footer>

</body>
</html>
