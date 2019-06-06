<?php
include 'database.php';

$usuario = $_POST['user'];
$password = $_POST['pass'];

$result = mysqli_query($conn,"SELECT * fRoM cuentas WHERE nombre = 'usuario");
{
	if ($row = mysqli_fetch_array($result)) {
		if ($row["contraseña"] == $password) {
			session_start();
			$_SESSION´['usuario'] = $usuario;
			header("Location: administracion_chat.php");
		}
		else
		{
			echo "<script>
				alert('Nombre de usuario o contraseña incorrectos, por favor vuelva a introducirlas:');
				window.location= 'login.php'
			</scrip>";
		}
	}
	else
	{
	echo "<script>
	alert('Nombre de usuario o contraseña incorrectos!');
	window.location = ´login.php´
	</Script>";
}
}
?>

<?php
include 'database.php';

$usuario = $_POST["user"];
$password = $_POST["pass"];


$result = mysqli_query($conn,"SELECT * FROM cuentas WHERE nombre = '$usuario'");
if($row = mysqli_fetch_array($result))
{

 if($row["password"] == $password)
 {
  session_start();
  $_SESSION['usuario'] = $usuario;
  header("Location: index.php");
 }
 else
 {
   echo "<script>
                 alert('Nombre de usuario o contraseña incorrectos!');
                 window.location= 'login.php'
     </script>";
 }
}
else
{
  echo "<script>
                alert('Nombre de usuario o contraseña incorrectos!');
                window.location= 'login.php'
    </script>";
}
mysqli_free_result($result);
mysqli_close($con);
?>
