<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de proyectos</title>
</head>
<body>
    <H3>LISTADO DE ESTUDIANTES</H3>
    <a href="RegistroEstudiantes.php">Registrar estudiante</a>
    <?php 
    include("../controlador/EliminarEstudiante.php");
    include("../controlador/ListarEstudiante.php");
    ?>

</body>
</html>