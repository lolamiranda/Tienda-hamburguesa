
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOLA'S</title>
    <style>
        body {
            display: flex;
            height: 100vh;
            margin: 0;
        }

.left-section {
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background-color: white;
    color: orange;
    font-size: 60px;
}

.logo-image {
    max-width: 50%; 
    margin-top: 10px;
}

.left-section button {
    background-color: orange; 
    color: white;
    font-size: 20px; 
    padding: 10px 20px; 
    margin-top: 20px;
    border: none;
    cursor: pointer;
}

.right-section {
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: orange;
}

#login-form {
    text-align: center;
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

#login-form label {
    display: block;
    margin-bottom: 10px;
    color: black;
}

#login-form input {
    width: 100%;
    padding: 8px;
    margin-bottom: 15px;
    border: 1px solid #FF8C00;
    border-radius: 5px;
}

#login-form input[type="submit"] {
    background-color: orange; 
    color: white;
    cursor: pointer;
}

#login-form a {
    color: black; 
}

    </style>
</head>
<body>


   
    <div class="left-section">
        <p style="font-weight: bold;">LOLA'S</p> 
        <img class="logo-image" src="<?= base_url('public/imagenes/burger.png') ?>" >
       
    <!-- <button onclick="window.location.href='<?= base_url('categorias') ?>'">PIDE AQUI</button> -->

    </div>

    <div class="right-section">

        <div id="login-form">
            <h2>Ya eres usuario?</h2>

            <?php
            if (isset($mensajeError)) {
                echo '<p class="error-message">' . $mensajeError . '</p>';
            }
            ?>

            <?php echo form_open('home/verificarUsuarios'); ?>

            <label for="nombre">Nombre de usuario:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="contra">Contraseña:</label>
            <input type="password" id="contra" name="contra" required>

            <input type="submit" value="LOG IN">

            <?php echo form_close(); ?>

            <p id="register-link"><a href="<?= base_url('registro') ?>" style="color: black;">¿No eres usuario aún? Regístrate aquí</a></p>

        </div>

    </div>

</body>
</html>
  
       
       
       
       
       
       
     
  

