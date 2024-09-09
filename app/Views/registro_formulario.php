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
        

    #registro-form {
        text-align: center;
        background-color: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-top: 20px; 
        max-width: 400px; 
        margin-left: auto;
        margin-right: auto;
    }

    #registro-form label {
        display: block;
        margin-bottom: 10px;
        font-size: 1.2em; 
    }

    #registro-form input {
        width: 100%;
        padding: 8px;
        margin-bottom: 15px;
        border: 1px solid orange;
        border-radius: 5px;
    }



    #registro-form input[type="submit"] {
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
            <h1>REGISTRATE </h1>
        </div>
        
                <div id="registro-form">

        <?php echo form_open('registro/procesarFormulario', 'onsubmit="return validarFormulario()"'); ?>

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="contra">Contraseña:</label>
        <input type="password" id="contra" name="contra" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
 
        <label for="telefono">Teléfono:</label>
        <input type="text" id="telefono" name="telefono" required>

        <input type="submit" value="REGISTRATE">

        <?php echo form_close(); ?>

 
        </div>
    </section>

    <footer>
        <p>LOLA'S</p>
    </footer>

    <script>
        function validarFormulario() {
            var nombre = document.getElementById('nombre').value;
            var email = document.getElementById('email').value;
            var contra = document.getElementById('contra').value;
            var telefono = document.getElementById('telefono').value;

            if (nombre.includes(' ') || nombre.length > 19){
                alert('El nombre no debe contener espacios');
                return false;
            }
            if (contra.length < 8 || !(/[a-zA-Z]/.test(contra)) || !(/\d/.test(contra)) || !(/[!@#$%^&*(),.?":{}|<>]/.test(contra))) {
                alert('La contraseña debe tener al menos 8 caracteres, incluir al menos una letra, un número y un carácter especial.');
                return false;
            }


            if (telefono.length !== 9 || isNaN(telefono)) {
                alert('El teléfono debe tener 9 dígitos numéricos.');
                return false;
            }
            return true;
        }

        
    </script>

</body>
</html>
