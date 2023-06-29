<?php

$conexion=mysqli_connect('127.0.0.1','root','','lerius_barber');
$consulta="SELECT * FROM usuario;";

header("Content-Type: application/vnd.ms-ecxel; charset=iso-8859-1");
header("Content-Disposition: attachment; filename=datos-usuario.xls");

?>

<table border=1>
    <caption> Datos de los usuarios</caption>
    <tr>
        <th>Id Usuarios</th>
        <th>Perfil Usuario</th>
        <th>Usuario</th>
        <th>Contrasena</th>
        
    </tr>

    <?php
    $resultado=mysqli_query($conexion, $consulta);
    while ($filas= mysqli_fetch_assoc($resultado))
    {?>
    <tr>
        <td><?php echo $filas["id_usuarios"]; ?></td>
        <td><?php echo $filas["fk_perfil"]; ?></td>
        <td><?php echo $filas["usuario"]; ?></td>
        <td><?php echo $filas["pass"]; ?></td>
    </tr>
    <?php } ?>
</table>