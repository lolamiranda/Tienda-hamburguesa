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

        .category {
            border: 1px solid #ddd;
            padding: 20px;
            margin: 0 10px 20px;
            flex-basis: calc(50% - 20px);
            box-sizing: border-box;
        }

        .category a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
            font-size: 20px;
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
    <header class="header-logo">
        <img class="logo-image" src="burger.png" >
        <div class="header-text">
            <h1>LOLA's</h1>
        </div>
    </header>

    <section class="main-section">
        <div class="header-text">
            <h1>Novedades</h1>
        </div>
        
        <div class="categories-container">

        <div class="category"><a href="novedades.html">BURGER DORITOS</a></div>
            <div class="category"><a href="menuParrilla.html">HELADO FRESA</a></div>
          
        </div>
    </section>

    <footer>
        <p>LOLA'S</p>
    </footer>
</body>
</html>
