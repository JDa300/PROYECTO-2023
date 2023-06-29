<?php

$conexion=mysqli_connect('127.0.0.1','root','','lerius_barber');
$consulta="SELECT * FROM servicio;";

header("Content-Type: application/vnd.ms-ecxel; charset=iso-8859-1");
header("Content-Disposition: attachment; filename=datos-servicios.xls");

?>

<table border=1>
    <caption> Datos de los servicios</caption>
    <tr>
        <th>Id Servicio</th>
        <th>Nombre Servicio</th>
        <th>Precio Servicio</th>
        <th>Detalle Servicio</th>
       
        
    </tr>

    <?php
    $resultado=mysqli_query($conexion, $consulta);
    while ($filas= mysqli_fetch_assoc($resultado))
    {?>
    <tr>
        <td><?php echo $filas["id_servicio"]; ?></td>
        <td><?php echo $filas["nombre_servicio"]; ?></td>
        <td><?php echo $filas["precio_servicio"]; ?></td>
        <td><?php echo $filas["detalle_servicio"]; ?></td>
       
    </tr>
    <?php } ?>
</table>