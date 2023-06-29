<?php


$fk_id_documento = $_POST['fk_id_documento'];
$documento = $_POST['documento'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$perfil = $_POST['perfil'];
$usuario = $_POST['usuario'];
$pass = $_POST['pass'];


$conexion=mysqli_connect('127.0.0.1','root','','lerius_barber');
$consulta="INSERT INTO cliente (documento_cliente,fk_id_documento,fk_id_perfil, primer_nombre, primer_apellido) VALUES ('$documento','$fk_id_documento[0]','$perfil', '$nombre', '$apellido');";
$consulta1="INSERT INTO usuario (id_usuarios, fk_perfil, usuario, pass) VALUES (null, '$perfil[0]','$usuario', '$pass');";
$resultado=mysqli_query($conexion, $consulta);
$resultado=mysqli_query($conexion, $consulta1);

if ($resultado)
{
   echo "<script>alert('datos almacenados correctamente');
        location.href='inicio.html';
        </script>";
}
else
{
    echo "<script>alert('error al guardar los datos');
        location.href='registro.html';
        </script>";
}

'mysql_close'($conexion);
?>