<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
    <link rel="stylesheet" href="php.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
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
       <h3>Actualizar producto</h3>
    </div>



    <?php

$codigo = $_POST ['codigo'];


$conexion=mysqli_connect('127.0.0.1','root','','lerius_barber');
$consulta="SELECT * FROM producto WHERE id_producto = '$codigo'  ;";
$resultado=mysqli_query($conexion, $consulta);
$filas=mysqli_num_rows($resultado);

while ($filas=mysqli_fetch_row($resultado))
{
    echo ('
        <section class="login" id="login">
        <center><div class="logins">
        <center>
        <form action="guardaredit.php" method="post" class="login-form">
        <img src="imagenes/WhatsApp Image 2023-03-02 at 12.35.31 PM.jpeg" width="160PX" height="120px">
        <h2>codigo del producto</h2>
        <input type="text" name="id_producto" value="'.$filas[0].'" readonly required class="btn"><br> 
        <br>
        <h2>nombre del articulo</h2>
        <input type="text" name="nombre_producto" value="'.$filas[2].'" required class="btn"><br> 
        <br>
        <h2>cantidad del articulo</h2>
        <input type="text" name="cantidad_producto" value="'.$filas[3].'" required class="btn"><br>
        <br>
        <h2>descripción del articulo</h2>
        <input type="text" name="descripcion_producto" value="'.$filas[4].'" required class="btn"><br>
        <br>
        <h2>valor del articulo</h2>
        <input type="text" name="precio_producto" value="'.$filas[5].'" required class="btn">
        <br>
        <input type="submit" value="actualizar" class="btn">
        </form>
        </center>   
        </div></center>
        </section>
        ');

}
?>


</main>
</div>


</body>
</html>
















