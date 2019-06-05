<?php
require 'database.php';
?>

<?php
$message = '';
if (!empty($_POST['nombre']) && !empty($_POST['artista']) && !empty($_POST['comentario'])) {
    $sql = "INSERT INTO pedidos (nombre, artista, comentario) VALUES (:nombre, :artista, :comentario)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nombre', $_POST['nombre']);
    $stmt->bindParam(':artista', $_POST['artista']);
    $stmt->bindParam(':comentario', $_POST['comentario']);
    if ($stmt->execute()) {
        $message = '';
    } else {
        $message = '';
    }
}
?>

<script language="Javascript">

location.href='index.php';

</script>