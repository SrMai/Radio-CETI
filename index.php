<?php
require 'database.php';
?>

<!--
    Creditos:
    Html5 up || @ajlkn ||
    www.carlosayala.me
-->
<!DOCTYPE HTML>
<html>

<head>
    <title>Radio-Ceti</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />

    <style>
        body {
            background-image: url('img/2.jpg');
            background-size: cover;
            background-repeat: none;
        }

        #contenedor {
            width: 40%;
            background: #fff;
            margin: 0 auto;
            padding: 20px;
            border-radius: 12px;
            -moz-border-radius: 12px;
            -o-border-radius: 12px;
            -webkit-border-radius: 12px;
        }

        #caja-chat {
            width: 90%;
            height: 400px;
        }
    </style>

</head>

<body class="is-preload">

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Header -->
        <header id="header">
            <div class="content">
                <div class="inner">
                    <h1>Radio-Ceti</h1>
                    <p>Este es un proyecto escolar para la exposición de proyectos en el plantel Rio Santiago</p>
                </div>
            </div>
        </header>
        <!-- Header -->
        <header id="header">
            <div class="content">
                <nav>
                    <ul>
                        <li><a href="#pedir">Pedir cancion</a></li>
                        <li><a href="#chat">Live-Chat</a></li>
                        <li><a href="#contacto">Contacto</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <!-- Main -->
        <div id="main">

            <!-- Pedir una cancion -->
            <article id="pedir">
                <h2 class="major">¿Qué canción quieres?</h2>
                <form method="POST" action="index.php">
                    <div class="fields">
                        <div class="field half">
                            <label for="artista">Nombre de la canción</label>
                            <input name="nombre" type="text" placeholder="Nombre de la canción" required>
                        </div>
                        <div class="field half">
                            <label for="artista">Artista</label>
                            <input name="artista" type="text" placeholder="¿Cual es el artista que canta esa canción?" required>
                        </div>
                        <div class="field">
                            <label for="comentario">Mensaje(opcional)</label>
                            <input name="comentario" type="text" placeholder="¿Quieres mandar algun saludo?" autocomplete="nope" required>
                        </div>
                    </div>
                    <style>
                        input[type="submit"],
                        button,
                        .button {
                            -moz-appearance: none;
                            -webkit-appearance: none;
                            -ms-appearance: none;
                            appearance: none;
                            -moz-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
                            -webkit-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
                            -ms-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
                            transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
                            background-color: transparent;
                            border-radius: 4px;
                            border: 0;
                            box-shadow: inset 0 0 0 1px #ffffff;
                            color: #ffffff !important;
                            cursor: pointer;
                            display: inline-block;
                            font-size: 0.8rem;
                            font-weight: 300;
                            height: 2.75rem;
                            letter-spacing: 0.2rem;
                            line-height: 2.75rem;
                            outline: 0;
                            padding: 0 1.25rem 0 1.35rem;
                            text-align: center;
                            text-decoration: none;
                            text-transform: uppercase;
                            white-space: nowrap;
                        }
                    </style>
                    <ul>
                        <li><input type="submit" value="Pedir canción" /></li>
                    </ul>
                </form>
            </article>
            <?php
            $message = '';
            if (!empty($_POST['nombre']) && !empty($_POST['artista']) && !empty($_POST['comentario'])) {
                $sql = "INSERT INTO pedidos (nombre, artista, comentario) VALUES (:nombre, :artista, :comentario)";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(':nombre', $_POST['nombre']);
                $stmt->bindParam(':artista', $_POST['artista']);
                $stmt->bindParam(':comentario', $_POST['comentario']);
                if ($stmt->execute()) {
                    $message = '<h1>Gracias por enviar tu canción! :)</h1>';
                } else {
                    $message = 'Error al enviar el formulario';
                }
            }
            ?>

            <!-- Live-Chat -->
            <article id="chat">
                <h2 class="major">Live</h2>
                <div id="recargar"> </div>
                <br />
                <form method="POST" action="index.php">
                    <div class="fields">
                        <div class="field half">
                            <input name="nombre" type="text" placeholder="Nombre" required>
                        </div>
                        <div class="field">
                            <textarea name="mensaje" type="text" placeholder="Texto" autocomplete="none" required></textarea>
                        </div>
                    </div>
                    <ul class="actions">
                        <li><input type="submit" value="Enviar" class="primary" /></li>
                    </ul>
                </form>
            </article>
            <?php
            $message = '';
            if (!empty($_POST['nombre']) && !empty($_POST['mensaje'])) {
                $sql = "INSERT INTO live_chat (nombre, mensaje) VALUES (:nombre, :mensaje)";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(':nombre', $_POST['nombre']);
                $stmt->bindParam(':mensaje', $_POST['mensaje']);
                if ($stmt->execute()) {
                    $message = '';
                } else {
                    $message = '';
                }
            }
            ?>

            <!-- Contacto -->
            <article id="contacto">
                <h2 class="major">Contacto</h2>
                <form method="POST" action="index.php">
                    <div class="fields">
                        <div class="field half">
                            <label for="nombre">Nombre</label>
                            <input name="nombre" type="text" placeholder="Escribe tú nombre" required>
                        </div>
                        <div class="field half">
                            <label for="email">Email</label>
                            <input name="email" type="email" placeholder="contacto@tecnologos-lab.com" required>
                        </div>
                        <div class="field">
                            <label for="mensaje">Mensaje</label>
                            <textarea name="mensaje" id="message" rows="4" placeholder="Escribe redacta tu mensaje (max 400 caracteres)" required></textarea>
                        </div>
                    </div>
                    <ul class="actions">
                        <li><input type="submit" value="Enviar" class="primary" /></li>
                    </ul>
                </form>
            </article>
        </div>
        <?php
        $message = '';
        if (!empty($_POST['nombre']) && !empty($_POST['email']) && !empty($_POST['mensaje'])) {
            $sql = "INSERT INTO contacto (nombre, email, mensaje) VALUES (:nombre, :email, :mensaje)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':nombre', $_POST['nombre']);
            $stmt->bindParam(':email', $_POST['email']);
            $stmt->bindParam(':mensaje', $_POST['mensaje']);
            if ($stmt->execute()) {
                header('Location: index.php');
            } else {
                $message = '';
            }
        }
        ?>

        <!-- Footer -->
        <footer id="footer">
            <p class="copyright">Copyright &copy; 2018-2020 <a style="text-decoration: none;" href="#">Radio-CETI</a> - Todos los derechos reservados<br></p>
            <p class="copyright"><a href="http://www.carlosayala.me">Carlos Ayala </a> y <a href="http://www.oscarnoe.me">Oscar noe</a></p>
        </footer>
    </div>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>

<script type="text/javascript">
    $(document).ready(function() {
        setInterval(
            function() {
                $('#recargar').load('scrips/com_live.php');
            }, 1000
        );
    });
</script>