<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colegio San José de Guanenta - Graduación</title>
    <style>
        /* Estilos generales */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #0a192f; /* Fondo oscuro */
            color: #fff; /* Texto blanco para contraste */
            margin: 0;
            padding: 0;
            transition: background-color 0.5s;
        }

        /* Encabezado */
        header {
            background: #FFD700; /* Amarillo neón */
            color: #003366; /* Azul oscuro */
            text-align: center;
            padding: 40px 20px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.2);
            animation: fadeIn 1s ease-in;
            text-shadow: 0 0 10px rgba(255, 215, 0, 1), 0 0 20px rgba(255, 215, 0, 1);
        }

        header h1 {
            font-family: 'Georgia', serif;
            font-size: 2.8em;
            margin: 0;
            text-shadow: 0 0 20px rgba(255, 215, 0, 1), 0 0 30px rgba(255, 215, 0, 1);
        }

        /* Barra de navegación */
        nav {
            display: flex;
            justify-content: center;
            background-color: #003366; /* Azul oscuro */
            padding: 15px;
            animation: slideIn 0.5s ease;
        }

        nav a {
            color: #FFD700; /* Amarillo neón */
            text-decoration: none;
            padding: 14px 22px;
            font-weight: bold;
            border: 2px solid transparent;
            transition: background 0.3s, transform 0.3s, border 0.3s;
            border-radius: 5px;
            margin: 0 10px;
            text-shadow: 0 0 10px rgba(255, 215, 0, 1);
        }

        nav a:hover {
            background-color: #FFD700; /* Amarillo neón */
            color: #003366; /* Azul oscuro */
            border: 2px solid #003366; /* Bordes azul oscuro */
            transform: translateY(-2px); /* Efecto de elevación */
            text-shadow: 0 0 10px rgba(255, 215, 0, 1);
        }

        /* Sección principal */
        .content {
            text-align: center;
            padding: 40px 20px;
            background: rgba(255, 255, 255, 0.2); /* Fondo semitransparente */
            border-radius: 10px;
            box-shadow: 0px 6px 20px rgba(0, 0, 0, 0.5);
            color: #FFD700; /* Amarillo neón */
            animation: fadeIn 1s ease-in;
            position: relative;
            overflow: hidden;
        }

        .content h2 {
            font-size: 2em;
            margin-top: 20px;
            color: #FFD700; /* Amarillo neón */
            text-shadow: 0 0 10px rgba(255, 215, 0, 1);
        }

        .content p {
            font-size: 1.2em;
            color: #fff; /* Texto blanco */
            margin-bottom: 30px;
            font-style: italic;
        }

        /* Sección de fotos de graduación */
        .photos {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            justify-content: center;
            padding: 20px;
        }

        .photos div {
            text-align: center;
            animation: zoomIn 0.5s ease-in-out;
        }

        .photos h3 {
            font-size: 1.3em;
            color: #FFD700; /* Amarillo neón */
            margin-bottom: 10px;
            text-shadow: 0 0 10px rgba(255, 215, 0, 1);
        }

        .photos img {
            max-width: 300px; /* Tamaño promedio */
            width: 100%; /* Permite que las imágenes se adapten a la anchura del contenedor */
            border-radius: 15px;
            box-shadow: 0px 6px 16px rgba(0, 0, 0, 0.5);
            transition: transform 0.3s, box-shadow 0.3s;
            cursor: pointer; /* Cambia el cursor al pasar sobre la imagen */
        }

        .photos img:hover {
            transform: scale(1.1);
            box-shadow: 0px 8px 25px rgba(0, 0, 0, 0.5);
        }

        /* Modal */
        .modal {
            display: none; /* Oculto por defecto */
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.9); /* Fondo oscuro */
            justify-content: center;
            align-items: center;
        }

        .modal img {
            max-width: 90%;
            max-height: 90%;
            border-radius: 15px;
        }

        /* Pie de página */
        footer {
            background-color: #003366; /* Azul oscuro */
            color: #FFD700; /* Amarillo neón */
            text-align: center;
            padding: 20px 0;
            font-size: 1em;
            box-shadow: 0px -4px 10px rgba(0, 0, 0, 0.5);
            animation: fadeIn 1s ease-in;
        }

        /* Animaciones */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideIn {
            from {
                transform: translateY(-100%);
            }
            to {
                transform: translateY(0);
            }
        }

        @keyframes zoomIn {
            from {
                opacity: 0;
                transform: scale(0.9);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }
    </style>
</head>
<body>

    <!-- Encabezado -->
    <header>
        <h1>Colegio San José de Guanenta</h1>
    </header>

    <!-- Barra de navegación -->
    <nav>
        <a href="#">INSTITUCIÓN</a>
        <a href="#">BANDA</a>
        <a href="#">DESTACADOS</a>
        <a href="#">MOSAICO</a>
        <a href="#">DIRECTIVAS</a>
        <a href="#">GALERÍA</a>
        <a href="#">CREADORES</a>
    </nav>

    <!-- Contenido principal -->
    <div class="content">
        <h2>"El honor más grande aún no se ha otorgado, la carrera más dura aún no ha comenzado."</h2>
        <p>No basta con soñar, hay que echarle manos a la obra, luchar hasta conseguir el éxito de nuestro presente. Nunca es tarde.</p>
        
        <!-- Fotos de graduación -->
        <div class="photos">
            <div>
                <h3>Once Uno - Jornada Mañana</h3>
                <img src="img/11-1.jpeg" alt="Foto de graduación1 Jornada Mañana" onclick="openModal(this)">
            </div>
            <div>
                <h3>Once Dos - Jornada Mañana</h3>
                <img src="img/11-2.jpeg" alt="Foto de graduación2 Jornada Mañana" onclick="openModal(this)">
            </div>
            <div>
                <h3>Once Tres - Jornada Mañana</h3>
                <img src="img/11-3.jpeg" alt="Foto de graduación3 Jornada Mañana" onclick="openModal(this)">
            </div>
            <div>
                <h3>Once Cuatro - Jornada Mañana</h3>
                <img src="img/11-4.jpeg" alt="Foto de graduación4 Jornada Mañana" onclick="openModal(this)">
            </div>
            <div>
                <h3>Once Cinco - Jornada Mañana</h3>
                <img src="img/11-5.jpeg" alt="Foto de graduación5 Jornada Mañana" onclick="openModal(this)">
            </div>
        </div>
    </div>

    <!-- Modal para imagen agrandada -->
    <div class="modal" id="imageModal" onclick="closeModal()">
        <img id="modalImage" src="" alt="Imagen agrandada">
    </div>

    <!-- Pie de página -->
    <footer>
        &copy; 2024 Colegio San José de Guanenta. Todos los derechos reservados.
    </footer>

    <script>
        function openModal(img) {
            var modal = document.getElementById("imageModal");
            var modalImg = document.getElementById("modalImage");
            modal.style.display = "flex"; // Muestra el modal
            modalImg.src = img.src; // Establece la fuente de la imagen del modal
        }

        function closeModal() {
            var modal = document.getElementById("imageModal");
            modal.style.display = "none"; // Oculta el modal
        }
    </script>
</body>
</html>



