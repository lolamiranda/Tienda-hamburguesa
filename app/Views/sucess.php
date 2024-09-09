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

        .main-cont {
            flex-grow: 1; 
            display: flex;
            justify-content: center; 
            align-items: center; 
            flex-direction: column; 
            text-align: center;
            padding: 20px;
        }

        .main-cont p {
            font-size: 18px;
            color: #333;
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
            <h1>PAGO COMPLETADO</h1>
        </div>
    </header>

    <div class="main-cont">
        <p>Codigo de operacion: <?php echo htmlspecialchars($peticionActual); ?></p>
        <p>Gracias por completar el pago. Serás redirigido para seguir comprando.</p>
        <script>
            setTimeout(function() {
                window.location.href = 'categorias'; 
            }, 4000); 
        </script>
    </div>

    <footer class="footer">
        <p>LOLA'S</p>
    </footer>

</body>
</html>
