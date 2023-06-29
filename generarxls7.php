<?php

$conexion=mysqli_connect('127.0.0.1','root','','lerius_barber');
$consulta="SELECT * FROM cliente;";

header("Content-Type: application/vnd.ms-ecxel; charset=iso-8859-1");
header("Content-Disposition: attachment; filename=datos-clientes.xls");

?>

<table border=1>
    <caption> Datos de los clientes</caption>
    <tr>
        <th>Documento Cliente</th>
        <th>Tipo Documento</th>
        <th>Perfil</th>
        <th>Nombre</th>
        <th>Apellido</th>
 
    </tr>

    <?php
    $resultado=mysqli_query($conexion, $consulta);
    while ($filas= mysqli_fetch_assoc($resultado))
    {?>
    <tr>
        <td><?php echo $filas["documento_cliente"]; ?></td>
        <td><?php echo $filas["fk_id_documento"]; ?></td>
        <td><?php echo $filas["fk_id_perfil"]; ?></td>
        <td><?php echo $filas["primer_nombre"]; ?></td>
        <td><?php echo $filas["primer_apellido"]; ?></td>
       
    </tr>
    <?php } ?>
</table>