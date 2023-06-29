<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Facturas</title>
   <link rel="stylesheet" href="php.css">
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
   <link rel="stylesheet" href="php.css">
   <link rel="stylesheet" href="dashboard.css">
</head>
<body>
   
<div class="grid-container">

      
<header class="header">
  <div class="menu-icon" onclick="openSidebar()">
 
</header>


 
    <!--Barra lateral-->
    <aside id="sidebar">
      <div class="sidebar-title">
        <div class="sidebar-brand">
          <center>
          <img src="imagenes/logo1.png" alt="logo"  width="160PX" height="120px">
          </center>
          <br>
          <span></span> LERIUS_BARBER
        </div>
        <span class="material-icons-outlined" onclick="closeSidebar()">close</span>
        
      </div>
      
      <ul class="sidebar-list">
        <li class="sidebar-list-item" onclick="window.location.href='dashboard.html'">
        
            Panel de Control
          </a>
        </li>
        
        <li class="sidebar-list-item" onclick="window.location.href='administrador1.html'">
          
           Crear Empleado
          </a>
        </li>

    
        <li class="sidebar-list-item" onclick="window.location.href='encargado.html'">
          
            Actualizar Producto
          </a>
        </li>
        <li class="sidebar-list-item" onclick="window.location.href='listados.html'"> 
          
            Generar Informes
          </a>
        </li>
       
        <li class="sidebar-list-item" onclick="window.location.href='barberia.html'">
          
              </span> Cerrar Sesión
          </a>
        </li>
      </ul>
    </aside>
    <!--acaba la barra lateral-->

<main class="main-container"> 

<section class="login" id="login">
    <div class="heading">
       <h3>Informe Facturas</h3>
    </div>

    <?php


echo '<br><br><center><h1>Puede ver la información de la factura, si desea puede descargar el informe en ecxel
    dando click en el boton GENERAR_XLS.</h1></center>';


    $conexion=mysqli_connect('127.0.0.1','root','','lerius_barber');
    $consulta="SELECT * FROM factura;";
    $resultado=mysqli_query($conexion, $consulta);
    $filas=mysqli_num_rows($resultado);

    echo '<center><table border=2></center>';
    echo '<center><tr><th>ID</th><th>FECHA</th><th>HORA</th><th>TIPOPAGO</th><th>DOCEMPLEADO</th><th>DOCCLIENTE</th><th>Eliminar</th></tr></center>';
    while ($filas= mysqli_fetch_row($resultado))
     {
        echo '<tr><td>'.$filas[0].'</td><td>'.$filas[1].'</td><td>'.$filas[2].'</td><td>'.$filas[3].'</td> <td>'.$filas[4].'</td><td>'.$filas[5].'</td>
        <td><form action="eliminar6.php" method="post">
        <input type="hidden" name="id" value="'.$filas[0].'"> 
        <input type="submit" value="Eliminar Registro"> 
        </form></td></tr>'; 

     }

     echo '<center><br><br><br><br></table></center>';
     echo ('<center><br><br><form action="generarxls6.php" method="post" class="login-form"><input type="submit" value="GENERAR_XLS" class="btn"> 
     </form></td></tr></center>');
 
?>

</main>
</div>
 
</body>
</html>






