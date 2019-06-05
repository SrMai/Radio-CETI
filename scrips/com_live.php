<?php
require 'database.php';
?>

<?php
$sql = "SELECT * FROM live_chat";
$result = mysqli_query($conn, $sql);

while ($mostrar = mysqli_fetch_array($result)) { ?>
    <div>
        <span style="color: #1C62C4;"><?php echo $mostrar['nombre']; ?></span>
        <span style="color: #848484;"><?php echo $mostrar['mensaje']; ?></span>
    </div>
<?php
}
?>