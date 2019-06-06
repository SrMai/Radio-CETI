<?php
$conn = mysqli_connect($host = 'localhost', $user = 'root', $password = '', $database = 'radio');

$sql = "SELECT * FROM contacto";
$result = mysqli_query($conn, $sql);
$mostrar = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administración - Hora Valenciana</title>
    <link rel="icon" href="<?php echo ($favicon) ?>" sizes="32x32">
    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/main.css" />
    
</head>

<style>
        body {
            background-image: url('img/1.gif');
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

<body>
    <center>
        <h3 class="major">Live chat</h3>
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
