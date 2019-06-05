<?php
require 'database.php';
?>

<?php
$sql = "SELECT * FROM pedidos";
$result = mysqli_query($conn, $sql);

echo('
<div class="table-wrapper">
	<table>
		<tr>
			<td>ID:</td>
			<td>Canción:</td>
			<td>Artista:</td>
			<td>Comentario:</td>
		</tr>');

while ($mostrar = mysqli_fetch_array($result)) { ?>
			<tr>
				<td><?php echo "$mostrar[id]" ?></td>
				<td><?php echo "$mostrar[nombre]" ?></td>
				<td><?php echo "$mostrar[artista]" ?></td>
				<td><?php echo "$mostrar[comentario]" ?></td>
			</tr>
<?php
}
echo('
</table>
</div>');
?>