<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
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

        .categorias-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin-top: 20px;
        }

        .producto {
    border: 1px solid orange; 
    padding: 15px; 
    margin: 0 5px 20px 5px; 
    max-width: 250px; 
    box-sizing: border-box;
    text-align: center;
    background-color: #f9f9f9; 
    transition: transform 0.3s; 
    display: inline-block; 
}


        .producto a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
            font-size: 16px;
            display: block; 
        }

        .producto img {
            max-width: 100%; 
            margin-bottom: 10px; 
        }

        .producto:hover {
            transform: scale(1.05); 
        }

        footer {
            background-color: #ddd;
            padding: 10px;
            text-align: center;
            margin-top: auto;
        }
        button {
    background-color: white;
    color: black;
    font-size: 20px;
    padding: 10px 20px;
    margin-top: 10px;
    border: none;
    cursor: pointer;
    margin-left: auto; 
    border: 2px solid orange;
}
.logout-button img {
            max-width: 50px; 
            height: auto;
            margin-right: 15px;
            margin-top: 20px;
        }

    </style>
    <title>LOLA'S</title>
</head>
<body>

    <header class="header-logo">
        <div class="header-text">

            <h1><?= strtoupper($categoria['nombre']) ?></h1>
            
        </div>
    </header>

    <div class="logout-button" onclick="window.location.href='<?= base_url('categorias') ?>'">
        <img src="<?= base_url('public/imagenes/hacia-atras.png') ?>" alt="Logout">
    </div>

    <button onclick="window.location.href='<?= base_url('home/destruir') ?>'">LOG OUT</button>

    <section class="main-section">
        <div class="categorias-container">
            <?php foreach ($productos as $producto): ?>
                <div class="producto">
                <a href="<?= base_url('productos/detalles/'. $producto['id'] )?>">
                        <img src="<?= base_url('public/imagenes/' . $producto['imagen']) ?>" alt="<?= $producto['nombre'] ?>">
                        <span style="display: block;text-transform: uppercase"><?= $producto['nombre'] ?></span>
                        Precio: $<?= $producto['precio'] ?><br>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    

    <footer>
        <p>LOLA'S</p>
    </footer>
</body>
</html>
