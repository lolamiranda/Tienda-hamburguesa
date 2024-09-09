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
            text-align: center;
        }

        h1 {
            background-color: orange;
            padding: 10px;
            margin: 0;
            color: white;
        }

        .category {
            border: 1px solid #ddd;
            padding: 20px;
            margin: 20px;
            box-sizing: border-box;
        }

        .category a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
            font-size: 20px;
            margin-bottom: 10px;
            display: block;
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input {
            width: 50px;
        }

        button {
            margin-top: 10px;
        }

        footer {
            background-color: #ddd;
            padding: 10px;
            text-align: center;
            margin-top: auto;
        }
    </style>
    <title>LOLA'S</title>
</head>
<body>
    <h1>BURGERS</h1>

    <div class="category">
        <a >BRUTAL BACON</a>
        <form action="<?= base_url('hamburguesa/agregarHamburguesa') ?>" method="post">
            <input type="hidden" name="tipo_hamburguesa" value="brutal_bacon">
            <label for="cantidad_brutal_bacon">Cantidad:</label>
            <input type="number" id="cantidad_brutal_bacon" name="cantidad" value="1" min="1">
            <button type="submit">Añadir Cantidad</button>
        </form>
    </div>

    <div class="category">
        <a > CHEESEBURGER</a>
        <form action="<?= base_url('hamburguesa/agregarHamburguesa') ?>" method="post">
            <input type="hidden" name="tipo_hamburguesa" value="cheeseburger">
            <label for="cantidad_cheeseburger">Cantidad:</label>
            <input type="number" id="cantidad_cheeseburger" name="cantidad" value="1" min="1">
            <button type="submit">Añadir Cantidad</button>
        </form>
    </div>

    <footer>
        <p>LOLA'S</p>
    </footer>
</body>
</html>

