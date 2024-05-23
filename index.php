<?php
session_start();
include("vista/Navegacion.php");
//echo $_SESSION['loggedin']." ".$_SESSION['NombreUsuario']." ".$_SESSION['TipoUsuario'];
//echo $_SESSION['loggedin'];
if(!isset($_SESSION['loggedin'])){
    echo '<h1>INICIAR SESIÓN</h1>
    <form action="controlador/Autenticacion.php" method="post">
    <label for="NombreUsuario" >Nombre de usuario</label>
    <input type="text" name="NombreUsuario" placeholder="Usuario" id="NombreUsuario" required>
    <label for="ClaveUsuario">Clave</label>
    <input type="password" name="ClaveUsuario" placeholder="Clave" id="ClaveUsuario" required>
    <input type="submit" value="Iniciar sesion">
    </form> 
    ';

    }
else {
echo'
<h1>BIENVENIDO AL SISTEMA PARA LA GESTION DE PROYECTOS DE ESPECIALIDAD '.$_SESSION["NombreUsuario"].'</h1>
<img src="https://iesanfranciscodesales.edu.co/web/wp-content/uploads/2019/06/IMG_0735_mod-270x300.png">
'; 
echo '<a href="vista/CerrarSesion.php">Cerrar sesion</a>';
}
include("vista/Footer.php");

?>