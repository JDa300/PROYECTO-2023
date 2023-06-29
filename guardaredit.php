

<?php

    $codigo=$_POST['id_producto'];
    $nombre=$_POST['nombre_producto'];
    $cantidad=$_POST['cantidad_producto'];
    $descripcion=$_POST['descripcion_producto'];
    $precio=$_POST['precio_producto'];

    
$conexion=mysqli_connect('127.0.0.1','root','','lerius_barber');
$consulta="UPDATE producto SET nombre_producto='$nombre',cantidad_producto='$cantidad',descripcion_producto='$descripcion',precio_producto='$precio' WHERE id_producto='$codigo';";
$resultado=mysqli_query($conexion, $consulta);

    if ($resultado)
    {
        echo "<script>alert('datos almacenados correctamente');
        location.href='encargado.html';
</script>";
    }
    else {
        "<script>alert('error al guardar los datos');
				location.href='encargado.html';
		</script>";
    }
    'mysql_close'($conexion); 
?>