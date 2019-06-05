<?php
require 'database.php';
?>

<?php
$sql = "SELECT * FROM contacto";
$result = mysqli_query($conn, $sql);

echo('
<div class="table-wrapper">
            <table>
                <tr>
                    <td>ID:</td>
                    <td>Nombre:</td>
                    <td>Email:</td>
                    <td>Mensaje:</td>
                </tr>');

while ($mostrar = mysqli_fetch_array($result)) { ?>
			<tr>
				<td><?php echo "$mostrar[id]" ?></td>
				<td><?php echo "$mostrar[nombre]" ?></td>
				<td><?php echo "$mostrar[email]" ?></td>
				<td><?php echo "$mostrar[mensaje]" ?></td>
			</tr>
<?php
}
echo('
</table>
</div>');
?>