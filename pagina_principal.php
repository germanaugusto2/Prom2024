<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celebración de los 200 años - Inicio de Sesión</title>
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            background-image: linear-gradient(to bottom right, #1a1a70, #ffd700);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
            color: #f1f1f1;
        }

        /* Estilos para el contenedor del formulario */
        #div_inicio_sesion {
            background-color: rgba(255, 255, 255, 0.2);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.4), 0 0 20px rgba(255, 215, 0, 0.5);
            width: 100%;
            max-width: 400px;
            position: relative;
            overflow: hidden;
            backdrop-filter: blur(10px);
            animation: fadeIn 2s ease-in-out;
        }

        /* Animación de entrada para el contenedor */
        @keyframes fadeIn {
            0% { opacity: 0; transform: scale(0.9); }
            100% { opacity: 1; transform: scale(1); }
        }

        h1 {
            text-align: center;
            color: #ffd700;
            font-size: 24px;
            margin-bottom: 20px;
            text-shadow: 0 0 10px rgba(255, 215, 0, 1);
            animation: glow 2s infinite alternate ease-in-out;
        }

        /* Animación de resplandor para el título */
        @keyframes glow {
            0% { text-shadow: 0 0 10px rgba(255, 215, 0, 0.8); }
            100% { text-shadow: 0 0 20px rgba(255, 215, 0, 1); }
        }

        /* Estilos para los campos del formulario */
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            background: rgba(255, 255, 255, 0.2);
            color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            outline: none;
            transition: background 0.3s ease, transform 0.3s ease;
        }

        input[type="text"]:focus, input[type="password"]:focus {
            background: rgba(255, 255, 255, 0.4);
            transform: scale(1.05);
            box-shadow: 0 4px 15px rgba(0, 0, 255, 0.5);
        }

        label {
            margin: 5px 0;
            font-size: 14px;
            color: #ffd700;
            text-shadow: 0 0 5px rgba(255, 215, 0, 0.5);
        }

        button {
            width: 100%;
            padding: 10px;
            background: linear-gradient(90deg, #1a1aff, #ffd700);
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease;
            text-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
            animation: buttonGlow 1.5s infinite alternate ease-in-out;
        }

        /* Animación de resplandor para el botón */
        @keyframes buttonGlow {
            0% { box-shadow: 0 0 10px rgba(0, 0, 255, 0.7); }
            100% { box-shadow: 0 0 20px rgba(255, 215, 0, 1); }
        }

        button:hover {
            background: linear-gradient(90deg, #ffd700, #1a1aff);
        }

        /* Animación de luces */
        .light {
            position: absolute;
            width: 15px;
            height: 15px;
            border-radius: 50%;
            background-color: #ffd700;
            animation: flicker 2s infinite alternate ease-in-out;
            opacity: 0.7;
        }

        /* Keyframes para luces parpadeantes */
        @keyframes flicker {
            0% { opacity: 0.5; transform: scale(1); }
            50% { opacity: 1; transform: scale(1.5); }
            100% { opacity: 0.5; transform: scale(1); }
        }

        /* Posiciones de luces */
        .light:nth-child(1) { top: 5px; left: 20px; }
        .light:nth-child(2) { top: 10px; right: 30px; }
        .light:nth-child(3) { bottom: 20px; left: 50px; }
        .light:nth-child(4) { bottom: 15px; right: 45px; }
        .light:nth-child(5) { top: 50%; left: 15px; }
        .light:nth-child(6) { top: 50%; right: 20px; }

        /* Estilo para centrar el contenido */
        #div_inicio_sesion form {
            display: flex;
            flex-direction: column;
        }
    </style>
</head>
<body>
    <div id="div_inicio_sesion">
        <div class="light"></div>
        <div class="light"></div>
        <div class="light"></div>
        <div class="light"></div>
        <div class="light"></div>
        <div class="light"></div>
        
        <h1>Colegio Guanenta Promoción 2024</h1>
        <form action="modelo/loguear.php" method="post">
            <label for="usuario">Usuario:</label>
            <input type="text" name="usuario" id="usuario" placeholder="Usuario" required>

            <label for="clave">Contraseña:</label>
            <input type="password" name="clave" id="clave" placeholder="Contraseña" required>

            <button type="submit">Ingresar</button>
        </form>
    </div>
</body>
</html>


