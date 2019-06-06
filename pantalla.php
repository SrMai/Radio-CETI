<?php
require 'database.php';
?>


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
    
    <script type="text/javascript">
        $(document).ready(function() {
            $("textarea[maxlength]").keyup(function() {
                var limit = $(this).attr("maxlength"); // Límite del textarea
                var value = $(this).val(); // Valor actual del textarea
                var current = value.length; // Número de caracteres actual
                if (limit < current) { // Más del límite de caracteres?
                    // Establece el valor del textarea al límite
                    $(this).val(value.substring(0, limit));
                }
            });

        });
    </script>

    <style>
        body {
            background-image: url('img/');
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
<!-- Tarjetas de mensajes -->
    <style type="text/css">
    .news-box{
        padding: 20px;
    }
    .news-box hr{
        border-color: #ff9900;
        border: 0;
        height: 2px;
        width: 90%;
        background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(153, 179, 181, 0.75), rgba(0,0,0, 0));
    }
    .news-text{
        margin-left: 4%;
    }
        .welcome-page{
    width: 100%;
    align: center;
  background-color: rgba(44, 47, 51, 0.75);
    border-radius: 4px;
    border-color: black;
    color: white;
    font-family: "Segoe UI",Arial,Helvetica,sans-serif;
    font-size: 100%;
    }

    .welcome-page h1{
        !color: #ff9900 !important;
    }

    .welcome-page h2{
        color: #ff9900;
    }
    .welcome-page h3{
        color: #ff9900;
    }

</style>

</head>

<body>

    <center>
        <h2 class="major">Expo-Ciencia</h2>
    </center>
        
    <div style="color:white; border-radius:15px; margin:1%;" class="text-center bg-min-dark font-weight-light">
        <div id="bienvenido" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
            <hr style="width: 90%;" class="hr-light">
            <div class="card-body">
                <div id="recargar"> </div></p>
                 </div>
                   </div>
                     </div>
                      <div class="container">
                            <div class="card-body">
            
                                <div id="recargar"> </div>
                        
                            </div>
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
