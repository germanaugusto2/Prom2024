<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colegio San José de Guanenta - Eventos</title>
    <style>
        /* Estilos generales similares a index.php */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #0a192f;
            color: #fff;
            margin: 0;
            padding: 0;
            transition: background-color 0.5s;
        }

        header {
            background: #FFD700;
            color: #003366;
            text-align: center;
            padding: 40px 20px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.2);
            text-shadow: 0 0 10px rgba(255, 215, 0, 1), 0 0 20px rgba(255, 215, 0, 1);
        }

        header h1 {
            font-family: 'Georgia', serif;
            font-size: 2.8em;
            margin: 0;
            text-shadow: 0 0 20px rgba(255, 215, 0, 1), 0 0 30px rgba(255, 215, 0, 1);
        }

        nav {
            display: flex;
            justify-content: center;
            background-color: #003366;
            padding: 15px;
        }

        nav a {
            color: #FFD700;
            text-decoration: none;
            padding: 14px 22px;
            font-weight: bold;
            transition: background 0.3s, transform 0.3s;
            margin: 0 10px;
            text-shadow: 0 0 10px rgba(255, 215, 0, 1);
        }

        nav a:hover {
            background-color: #FFD700;
            color: #003366;
            border-radius: 5px;
            transform: translateY(-2px);
        }

        .content {
            text-align: center;
            padding: 40px 20px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            color: #FFD700;
        }

        .content h2 {
            font-size: 2em;
            margin-top: 20px;
            color: #FFD700;
            text-shadow: 0 0 10px rgba(255, 215, 0, 1);
        }

        .event-list {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            box-shadow: 0px 6px 20px rgba(0, 0, 0, 0.5);
        }

        .event {
            padding: 15px;
            margin-bottom: 15px;
            border-bottom: 1px solid #FFD700;
            text-align: left;
            color: #FFD700;
        }

        .event h3 {
            font-size: 1.5em;
            margin: 0;
        }

        .event p {
            font-size: 1.1em;
            margin: 5px 0;
        }

        /* Formulario para agregar eventos */
        .event-form {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            color: #FFD700;
            box-shadow: 0px 6px 20px rgba(0, 0, 0, 0.5);
        }

        .event-form input,
        .event-form textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #FFD700;
            background-color: #0a192f;
            color: #FFD700;
        }

        .event-form button {
            padding: 10px 20px;
            background-color: #FFD700;
            color: #003366;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .event-form button:hover {
            background-color: #003366;
            color: #FFD700;
        }

        footer {
            background-color: #003366;
            color: #FFD700;
            text-align: center;
            padding: 20px 0;
            font-size: 1em;
            box-shadow: 0px -4px 10px rgba(0, 0, 0, 0.5);
        }
    </style>
</head>
<body>

    <!-- Encabezado -->
    <header>
        <h1>Eventos Colegio San José de Guanenta</h1>
    </header>

    <!-- Barra de navegación -->
    <nav>
        <a href="index.php">INICIO</a>
        <a href="#">INSTITUCIÓN</a>
        <a href="#">BANDA</a>
        <a href="#">GALERÍA</a>
        <a href="eventos.php">EVENTOS</a>
    </nav>

    <!-- Contenido principal -->
    <div class="content">
        <h2>Próximos Eventos</h2>

        <!-- Lista de eventos -->
        <div class="event-list">
            <div class="event">
                <h3>Ceremonia de Graduación</h3>
                <p>Fecha: 5 de Diciembre, 2024</p>
                <p>Descripción: Celebración de la ceremonia de graduación para los estudiantes de último grado.</p>
            </div>
            <div class="event">
                <h3>Concurso de Ciencias</h3>
                <p>Fecha: 15 de Noviembre, 2024</p>
                <p>Descripción: Evento anual de competencia científica para fomentar la creatividad e innovación.</p>
            </div>
            <!-- Agrega más eventos según sea necesario -->
        </div>

        <!-- Formulario para agregar un nuevo evento -->
        <div class="event-form">
            <h2>Agregar Nuevo Evento</h2>
            <form action="procesar_evento.php" method="POST">
                <input type="text" name="nombre_evento" placeholder="Nombre del Evento" required>
                <input type="date" name="fecha_evento" required>
                <textarea name="descripcion_evento" rows="4" placeholder="Descripción del Evento" required></textarea>
                <button type="submit">Agregar Evento</button>
            </form>
        </div>
    </div>

    <!-- Pie de página -->
    <footer>
        &copy; 2024 Colegio San José de Guanenta. Todos los derechos reservados.
    </footer>

</body>
</html>
