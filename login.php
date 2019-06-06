<?php
	session_start();
	if(isset($_SESSION['usuario']))
	{
		header('Location: administracion_chat.php');
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login.php</title>
</head>
<body>
	<form method="POST" action="verificar.php">
		<div style="position: relative;">
			<input type="text" name="user" placeholder="Nombre de usuario" autocomplete="none" required>
			<input type="password" name="pass" placeholder="Contraseña" autocomplete="none" required>
			<input type="submit" value="Iniciar sesión" name="iniciar">
		</div>
	</form>
</body>
</html>