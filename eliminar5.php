<?php
$id=$_POST['id'];
$conexion=mysqli_connect('127.0.0.1','root','','lerius_barber');
$consulta="DELETE FROM servicio WHERE id_servicio='$id';";
$resultado=mysqli_query($conexion, $consulta);
    if($resultado)
    {
        echo "<script> alert('datos eliminados correctamente') 
            location.href='informe5.php';</script>";
    }
    else 
    {
        echo "<script>alert('error al eliminar datos')
            location.href='informe5.php';</script>";
    }


?>