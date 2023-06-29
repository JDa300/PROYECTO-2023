<?php


$fk_id_documento = $_POST['fk_id_documento'];
$fk_documento_empleado = $_POST['documento'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['mail'];
$fk_perfil = $_POST['fk_perfil'];
$usuario = $_POST['usuario'];
$pass = $_POST['pass'];


$conexion=mysqli_connect('127.0.0.1','root','','lerius_barber');
$consulta="INSERT INTO empleado (documento_empleado,fk_id_documento,fk_id_perfil, nombre_empleado, apellido_empleado, correo_empleado) VALUES ('$fk_documento_empleado','$fk_id_documento[0]','$fk_perfil[0]', '$nombre', '$apellido', '$correo');";
$consulta1="INSERT INTO usuario (id_usuarios, fk_perfil, usuario, pass) VALUES (null, '$fk_perfil[0]','$usuario', '$pass');";

$resultado=mysqli_query($conexion, $consulta);
$resultado=mysqli_query($conexion, $consulta1);

if ($resultado)
{
   echo "<script>alert('datos almacenados correctamente');
        location.href='administrador1.html';
        </script>";
}
else
{
    echo "<script>alert('error al guardar los datos');
        location.href='administrador1.html';
        </script>";
}

'mysql_close'($conexion);
?>