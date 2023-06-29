<?php

$conexion=mysqli_connect('127.0.0.1','root','','lerius_barber');
$consulta="SELECT * FROM proveedor;";

header("Content-Type: application/vnd.ms-ecxel; charset=iso-8859-1");
header("Content-Disposition: attachment; filename=datos-proveedor.xls");

?>

<table border=1>
    <caption> Datos de los proveedores</caption>
    <tr>
        <th>Id Proveedor</th>
        <th>Nombre Proveedor</th>
        <th>Telefono Proveedor</th>
        <th>Direccion Proveedor</th>
       
        
    </tr>

    <?php
    $resultado=mysqli_query($conexion, $consulta);
    while ($filas= mysqli_fetch_assoc($resultado))
    {?>
    <tr>
        <td><?php echo $filas["id_proveedor"]; ?></td>
        <td><?php echo $filas["nombre_proveedor"]; ?></td>
        <td><?php echo $filas["telefono_proveedor"]; ?></td>
        <td><?php echo $filas["direccion_proveedor"]; ?></td>
       
    </tr>
    <?php } ?>
</table>