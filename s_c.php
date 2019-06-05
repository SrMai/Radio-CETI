<?php
require 'database.php';
?>

<?php
$message = '';
if (!empty($_POST['nombre']) && !empty($_POST['email']) && !empty($_POST['mensaje'])) {
    $sql = "INSERT INTO contacto (nombre, email, mensaje) VALUES (:nombre, :email, :mensaje)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nombre', $_POST['nombre']);
    $stmt->bindParam(':email', $_POST['email']);
    $stmt->bindParam(':mensaje', $_POST['mensaje']);
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