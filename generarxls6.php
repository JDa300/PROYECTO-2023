<?php

$conexion=mysqli_connect('127.0.0.1','root','','lerius_barber');
$consulta="SELECT * FROM factura;";

header("Content-Type: application/vnd.ms-ecxel; charset=iso-8859-1");
header("Content-Disposition: attachment; filename=datos-facturas.xls");

?>

<table border=1>
    <caption> Datos de las facturas</caption>
    <tr>
        <th>Id Factura</th>
        <th>Fecha Factura</th>
        <th>Hora Factura</th>
        <th>Tipo de Pago</th>
        <th>Documento del Empleado</th>
        <th>Documento del Cliente</th>
       
    </tr>

    <?php
    $resultado=mysqli_query($conexion, $consulta);
    while ($filas= mysqli_fetch_assoc($resultado))
    {?>
    <tr>
        <td><?php echo $filas["id_factura"]; ?></td>
        <td><?php echo $filas["fecha_factura"]; ?></td>
        <td><?php echo $filas["hora_factura"]; ?></td>
        <td><?php echo $filas["fk_id_tipo_pago"]; ?></td>
        <td><?php echo $filas["fk_id_empleado"]; ?></td>
        <td><?php echo $filas["fk_id_cliente"]; ?></td>
    </tr>
    <?php } ?>
</table>