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
         button {
    background-color: orange; 
    color: white;
    font-size: 20px; 
    padding: 10px 20px; 
    margin-top: 20px; 
    border: none;
    cursor: pointer;
}
    </style>
    <title>LOLA'S</title>
</head>
<body>
    <header class="header-logo">
        <img class="logo-image" src="<?= base_url('public/imagenes/burger.png') ?>" >

        <div class="header-text">
            <h1>LOLA's</h1>
        </div>
    </header>

    <section class="main-section">
        <div class="header-text">
            <h1>YA ERES USUARIO!</h1>
        </div>
        
        <div class="categories-container">
                <div class="categoria">
        <p>Nombre: <?= $nombre ?></p>
        <p>Email: <?= $email ?></p>
        <p>Teléfono: <?= $telefono ?></p>

        <!-- <button onclick="window.location.href='<?= base_url('categorias') ?>';">PIDE AQUI</button> -->
        <button onclick="window.location.href='<?= base_url('home') ?>';">LOG IN</button>

          
        </div>
    </section>

    <footer>
        <p>LOLA'S</p>
    </footer>
</body>
</html>
