<?php

$conexion=mysqli_connect('127.0.0.1','root','','lerius_barber');
$consulta="SELECT * FROM empleado;";

header("Content-Type: application/vnd.ms-ecxel; charset=iso-8859-1");
header("Content-Disposition: attachment; filename=datos-empleado.xls");

?>

<table border=1>
    <caption> Datos de los empleados</caption>
    <tr>
        <th>Documento Empleado</th>
        <th>Tipo Documento</th>
        <th>Perfil</th>
        <th>Nombre Empleado</th>
        <th>Apellido Empleado</th>
        <th>Correo Empleado</th>
    </tr>

    <?php
    $resultado=mysqli_query($conexion, $consulta);
    while ($filas= mysqli_fetch_assoc($resultado))
    {?>
    <tr>
        <td><?php echo $filas["documento_empleado"]; ?></td>
        <td><?php echo $filas["fk_id_documento"]; ?></td>
        <td><?php echo $filas["fk_id_perfil"]; ?></td>
        <td><?php echo $filas["nombre_empleado"]; ?></td>
        <td><?php echo $filas["apellido_empleado"]; ?></td>
        <td><?php echo $filas["correo_empleado"]; ?></td>
    </tr>
    <?php } ?>
</table>