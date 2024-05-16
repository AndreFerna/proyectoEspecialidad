<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualización de estudiantes</title>
</head>
<body>
    <h1>Actualización de estudiates</h1>
    <?php include("../controlador/ActualizarEstudiante.php"); ?>
    <form action="ActualizacionEstudiantes.php" method="post">
        <input type="hidden" id="CodigoActual" name="CodigoActual" value="<?php echo $_GET["CodigoEstudiante"]; ?>">
        <label for="CodigoEstudiante">Codigo estudiante:</label>
        <input type="number" name="CodigoEstudiante" id="CodigoEstudiante" value="<?php echo $Registro["CodigoEstudiante"]; ?>"><br>
        <label for="¨PrimerNombreEstudiante">Primer nombre de estudiante:</label>
        <input type="text" name="PrimerNombreEstudiante" id="PrimerNombreEstudiante" value="<?php echo $Registro["PrimerNombre"]; ?>"><br>
        <label for="SegundoNombreEstudiante">Segundo nombre de estudiante:</label>
        <input type="text" name="SegundoNombreEstudiante" id="SegundoNombreEstudiante" value="<?php echo $Registro["SegundoNombre"]; ?>"><br>
        <label for="PrimerApellidoEstudiante">Primer apellido de estudiante:</label>
        <input type="text" name="PrimerApellidoEstudiante" id="PrimerApellidoEstudiante" value="<?php echo $Registro["PrimerApellido"]; ?>"><br>
        <label for="SegundoApellidoEstudiante">Segundo apellido de estudiante:</label>
        <input type="text" name="SegundoApellidoEstudiante" id="SegundoApellidoEstudiante"  value="<?php echo $Registro["SegundoApellido"]; ?>"><br>
        <label for="CursoEstudiante">Curso de estudiante:</label>
        <input type="text" name="CursoEstudiante" id="CursoEstudiante"  value="<?php echo $Registro["Curso"]; ?>"><br>
        <label for="EspecialidadEstudiante">Especialidad</label>
           <?php include("../controlador/ComboEspecialidades.php"); ?>
        <br>
            <label for="ProyectoEstudiante">Proyecto</label>
            <?php include("../controlador/ComboProyectos.php"); ?>
            <br>
                
        <label for="FechaNacimiento">Fecha de nacimiento:</label>
        <input type="date" name="FechaNacimiento" id="FechaNacimiento" value="<?php echo $Registro["FechaNacimiento"]; ?>"><br>
        <button type="submit">Actualizar estudiante</button>
    </form>

</body>
</html>