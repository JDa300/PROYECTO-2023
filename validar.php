<?php
$usuario = $_POST['usuario'];
$clave = $_POST['inicio_password'];


$conexion=mysqli_connect('127.0.0.1','root','','lerius_barber');
$consulta="SELECT fk_perfil FROM usuario WHERE usuario='$usuario' AND pass='$clave';";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);
if($filas>0)
{
	while($filas=$resultado->fetch_array())
	{
		$perfil = $filas['fk_perfil'];
	}
	switch($perfil)
	{
		case 1:
		echo "<script>alert('Bienvenido al sistema Administrador');
				location.href='dashboard.html';
		</script>";
		break;
		case 2:
		echo "<script>alert('Bienvenido al sistema Usuario');
				location.href='barberia.html';
		</script>";
		break;
		case 3:
			echo "<script>alert('Bienvenido al sistema Encargado');
					location.href='encargado.html';
			</script>";
			break;

		default:
		echo "<script>alert('Error de perfil');
				location.href='inicio.html';
		</script>";
		break;
	}

}
else
{
	echo "<script>alert('Nombre de usuario y contraseña incorrectos');
				location.href='inicio.html';
		</script>";
}
?>