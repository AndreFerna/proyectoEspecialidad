<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de proyectos</title>
</head>
<body>
    <H3>LISTADO DE PROYECTOS</H3>
    <a href="RegistroProyectos.php">Registrar proyecto</a>
    <br>
    <?php 
    include("../controlador/ListarProyecto.php");
    ?>

</body>
</html>