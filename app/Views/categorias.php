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

        .categories-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin-top: 20px;
        }

        .categoria {
            border: 1px solid orange; 
            padding: 20px;
            margin: 0 10px 20px;
            flex-basis: calc(50% - 20px); 
            box-sizing: border-box;
            text-align: center;
            background-color: #f9f9f9; 
            transition: transform 0.3s; 
        }

        .categoria a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
            font-size: 20px;
            display: block; 
        }

        .categoria img {
            max-width: 100%; 
            margin-bottom: 10px; 
        }

        .categoria:hover {
            transform: scale(1.05); 
        }

        footer {
            background-color: #ddd;
            padding: 10px;
            text-align: center;
            margin-top: auto;
        }
        
        .button-container {
    display: flex;
    justify-content: space-between;
    margin-top: 20px;
    margin-left: 20px; 
    margin-right: 20px; 
    }

    button {
    background-color: white;
    color: black;
    font-size: 20px;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
    border: 2px solid orange;
    }

    </style>
    <title>LOLA'S</title>
</head>
<body>
    <header class="header-logo">
    <img class="logo-image" src="<?= base_url('public/imagenes/burger.png') ?>" >
        <div class="header-text">
            <h1>LOLA'S</h1>

            
        </div>
    </header>

    <div class="button-container">
        <button onclick="window.location.href='<?= base_url('home/destruir') ?>'">LOG OUT</button>
        <button onclick="window.location.href='<?= base_url('carrito') ?>'">CARRITO</button>
        <button onclick="window.location.href='<?= base_url('compra/verCompras') ?>'">COMPRAS</button>
    </div>

    <section class="main-section">
        <div class="header-text">
            <h1>¿Qué quieres comer hoy?</h1>
        </div>
        
        <div class="categories-container">
            <?php foreach ($categorias as $categoria): ?>
               
                <div class="categoria">
    <a href="<?= base_url('productos/categoria/' . $categoria->id) ?>">
        <img src="<?= base_url('public/imagenes/' . $categoria->imagen) ?>" alt="<?= $categoria->nombre ?>" style="width: 50px; height: auto; float: left; margin-right: 10px;">
        <span style="display: block;text-transform: uppercase"><?= $categoria->nombre ?></span>
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
