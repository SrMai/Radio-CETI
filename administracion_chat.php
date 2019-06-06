<?php
session_start();
if(isset($_SESSION['usuario']))
{
    header('Location: login.php');
}

?>

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
    <title>Administración - Chat</title>
    <link rel="icon" href="<?php echo ($favicon) ?>" sizes="32x32">
    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/main.css" />

    <style type="text/css">
        body{
            padding: 20px;
        }
    </style>
</head>

<body>
    <center>
        <h3 class="major">Administración Del Chat</h3>
    </center>
    <div id="recargar_cl"> </div>

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
                $('#recargar_cl').load('scrips/com_live.php');
            }, 20
        );
    });
</script>