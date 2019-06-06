<?php
require 'database.php';
?>

<?php
$sql = "SELECT * FROM live_chat";
$result = mysqli_query($conn, $sql);

echo('<div style="width:100%; padding: 5px;">');

while ($mostrar = mysqli_fetch_array($result)) { ?>
	<div class="card">
  <div class="card-body">
    <p style="font-size: 15px; color: #1C62C4;"><?php echo $mostrar['nombre']; ?></p>
    <p style="font-size: 15px; color: #848484;"><?php echo $mostrar['mensaje']; ?></p>
  </div>
</div>
<?php
}
echo('</div>');
?>
