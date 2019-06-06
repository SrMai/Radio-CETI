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

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chat - Hora Valenciana</title>
    <link rel="icon" href="<?php echo ($favicon) ?>" sizes="32x32">
    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/main.css" />
    
</head>

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

        div.sticky{
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            padding: 5px;
            background-color: #000000;
            border: 2px solid #1B2A95;
            color: white;

        }
    </style>

<body>

    <center>
        <h2 class="major">Expo-Ciencia</h2>
    </center>
        <div class="sticky">
        <form method="POST" action="chat.php">
            <div class="fields">
                <div class="field half">
                    <input name="nombre" type="text" placeholder="Nombre" required>
                </div>
                <div class="field">
                    <input name="mensaje" type="text" placeholder="Texto" autocomplete="none" required>
                </div>
            </div>
            <ul class="actions">
                <li><input type="submit" value="Enviar" class="primary" /></li>
            </ul>
        </form>
    </div>
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

    
</body>

</html>

<script type="text/javascript">
    $(document).ready(function() {
        setInterval(
            function() {
                $('#recargar').load('scrips/com_live.php');
            }, 20
        );
    });
</script> 
