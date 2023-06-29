<?php
$id=$_POST['id'];
$conexion=mysqli_connect('127.0.0.1','root','','lerius_barber');
$consulta="DELETE FROM empleado WHERE documento_empleado='$id';";
$resultado=mysqli_query($conexion, $consulta);
    if($resultado)
    {
        echo "<script> alert('datos eliminados correctamente') 
            location.href='informe1.php';</script>";
    }
    else 
    {
        echo "<script>alert('error al eliminar datos')
            location.href='informe1.php';</script>";
    }


?>