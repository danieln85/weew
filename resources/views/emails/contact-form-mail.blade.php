<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Content</title>
    <style>
        /* Estilos CSS */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .card {
            padding: 20px;
            border-radius: 5px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            text-align: center; /* Centrar contenido */
        }
        h1 {
            color: #333;
            text-align: center;
        }
        p {
            color: #666;
            line-height: 1.6;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s; /* Agregar transición para cambio de color */
        }
        .button:hover {
            background-color: #0056b3;
            color: #fff; /* Mantener el color de letra blanco al pasar el mouse */
        }
        .logo {
            display: inline-block;
            margin-bottom: 10px; /* Agregar espacio entre el logo y el contenido */
            width: 100px; /* Ajustar el tamaño del logo */
            height: auto; /* Hacer que la altura del logo se ajuste automáticamente */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <img src="https://www.weew.com.co/images/logo/weew-logo.png" alt="Logo" class="logo"> <!-- Ajusta la ruta de la imagen -->
            <h1>¡Un usuario diligenció el formulario de contacto!</h1>
            <h3>Los siguientes son sus datos</h3>
            
                <h2><strong>Nombre:</strong> {{ $contact->name }}</h2>
                <h2><strong>Email:</strong> {{ $contact->email }}</h2>
                <h2><strong>Celular:</strong> {{ $contact->mobile }}</h2>
                <h2><strong>Mensaje:</strong> {{ $contact->message }}</h2>
            
            
            <p>Visitar tu sitio web www.weew.com.co</p>
            <a href="http://www.weew.com.co" class="button" style="color:white!important">Visitar</a>
        </div>
    </div>
</body>
</html>
