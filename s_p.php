<?php
require 'database.php';
?>

<?php
echo $message;
if (!empty($_POST['nombre']) && !empty($_POST['artista']) && !empty($_POST['comentario'])) {
    $sql = "INSERT INTO pedidos (nombre, artista, comentario) VALUES (:nombre, :artista, :comentario)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nombre', $_POST['nombre']);
    $stmt->bindParam(':artista', $_POST['artista']);
    $stmt->bindParam(':comentario', $_POST['comentario']);
    if ($stmt->execute()) {
        $message = 'Enviado';
        echo $message;
    } else {
        $message = 'Error';
        echo $message;

    }
}
?>

<script language="Javascript">

location.href='index.php';

</script>