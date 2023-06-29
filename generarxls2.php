<?php

$conexion=mysqli_connect('127.0.0.1','root','','lerius_barber');
$consulta="SELECT * FROM producto;";

header("Content-Type: application/vnd.ms-ecxel; charset=iso-8859-1");
header("Content-Disposition: attachment; filename=datos-producto.xls");

?>

<table border=1>
    <caption> Datos de los productos</caption>
    <tr>
        <th>Id Producto</th>
        <th>Imagen Producto</th>
        <th>Nombre Producto</th>
        <th>Cantidad Producto</th>
        <th>Descripcion Producto</th>
        <th>Precio Producto</th>
        <th>Id Tipo Producto</th>
        <th>Id Proveedor</th>
        <th>Id Factura</th>
    </tr>

    <?php
    $resultado=mysqli_query($conexion, $consulta);
    while ($filas= mysqli_fetch_assoc($resultado))
    {?>
    <tr>
        <td><?php echo $filas["id_producto"]; ?></td>
        <td><?php echo $filas["imagen_producto"]; ?></td>
        <td><?php echo $filas["nombre_producto"]; ?></td>
        <td><?php echo $filas["cantidad_producto"]; ?></td>
        <td><?php echo $filas["descripcion_producto"]; ?></td>
        <td><?php echo $filas["precio_producto"]; ?></td>
        <td><?php echo $filas["fk_id_tipo_producto"]; ?></td>
        <td><?php echo $filas["fk_id_proveedor"]; ?></td>
        <td><?php echo $filas["fk_id_factura"]; ?></td>
    </tr>
    <?php } ?>
</table>