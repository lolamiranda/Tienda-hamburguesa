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

        .main-sections {
            display: flex;
            justify-content: center; 
            align-items: center; 
            margin-top: 20px;
        }

        .usuario-info,
        #compra-form {
            background-color: orange;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 45%; 
            margin: 0 10px;
            color: black; 
            text-align: center;
            max-width: 400px; 
        }

        #compra-form {
            background-color: white;
        }

        #compra-form label {
            display: block;
            margin-bottom: 10px;
            font-size: 1.2em;
        }

        #compra-form input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid orange;
            border-radius: 5px;
        }

        #compra-form textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid orange;
            border-radius: 5px;
        }

        #compra-form input[type="submit"] {
            background-color: orange;
            color: white;
            font-size: 20px;
            padding: 10px 20px;
            margin-top: 20px;
            border: none;
            cursor: pointer;
        }

        footer {
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
    <title>LOLA'S</title>
</head>
<body>
<header class="header-logo">
    <img class="logo-image" src="<?= base_url('public/imagenes/burger.png') ?>" >
        <div class="header-text">
            <h1>LOLA's</h1>

            
        </div>
    </header>

    <div class="logout-button" onclick="window.location.href='<?= base_url('categorias') ?>'">
        <img src="<?= base_url('public/imagenes/hacia-atras.png') ?>" alt="Logout">
    </div>

    <div class="main-sections">
        <section class="usuario-info">
                <h1>Tu informacion de contacto:</h1>

                <?php echo form_open('callumapal', 'onsubmit="return validarFormulario()"'); ?>
                <?php if ($usuario): ?>
                    <h2>Nombre: <?= $usuario['nombre'] ?></h2>
            <input type="hidden" id="nombre" name="nombre" value="<?= $usuario['nombre'] ?>">

                    <h2>Email: <?= $usuario['email'] ?></h2>
                    <h2>Teléfono: <?= $usuario['telefono'] ?></h2>
                <?php else: ?>
                    <p>Usuario no encontrado</p>
                <?php endif; ?>
           
        </section>

        <section id="compra-form">
           
            <h2>Dirección de envío:</h2>
            <label for="direccion">Dirección:</label>
            <input type="text" id="direccion" name="direccion" required>


            <label for="codigo_postal">Código Postal:</label>
            <input type="text" id="codigo_postal" name="codigo_postal" required>

            <label for="portal">Ciudad:</label>
            <input type="text" id="ciudad" name="ciudad" required>


            <h2>Opciones de envío:</h2>
            <label>
                <input type="radio" name="envio" value="estandar" checked>
                Envío Estándar 30-35 min
            </label>

            <label>
                <input type="radio" name="envio" value="express">
                Envío Express 10min
            </label>

            <input type="submit" value="COMPRA">
            <?php echo form_close(); ?>
        </section>
    </div>

    

    <footer>
        <p>LOLA'S</p>
    </footer>

    <script>
        function validarFormulario() {
            var direccion = document.getElementById('direccion').value;
            var codigo= document.getElementById('codigo_postal').value;
            var ciudad = document.getElementById('ciudad').value;

            if (direccion.length < 8) {
                alert('Debes introducir una direccion valida');
                return false;
            }

            if (ciudad.length < 3) {
                alert('Debes introducir una ciudad valida');
                return false;
            }
            

            if (codigo.length !== 5 || isNaN(codigo)) {
                alert('El codigo postal debe tener 5 dígitos numéricos.');
                return false;
            }
            return true;
        }

        
    </script>

</body>
</html>
