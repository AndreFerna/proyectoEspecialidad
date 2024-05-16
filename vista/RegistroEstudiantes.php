<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de estudiantes</title>
</head>
<body>
    <h1>Registro de estudiates</h1>
    <?php include("../controlador/RegistrarEstudiante.php"); ?>
    <form action="RegistroEstudiantes.php" method="post">
        <label for="CodigoEstudiante">Codigo estudiante:</label>
        <input type="number" name="CodigoEstudiante" id="CodigoEstudiante"><br>
        <label for="¨PrimerNombreEstudiante">Primer nombre de estudiante:</label>
        <input type="text" name="PrimerNombreEstudiante" id="PrimerNombreEstudiante"><br>
        <label for="SegundoNombreEstudiante">Segundo nombre de estudiante:</label>
        <input type="text" name="SegundoNombreEstudiante" id="SegundoNombreEstudiante"><br>
        <label for="PrimerApellidoEstudiante">Primer apellido de estudiante:</label>
        <input type="text" name="PrimerApellidoEstudiante" id="PrimerApellidoEstudiante"><br>
        <label for="SegundoApellidoEstudiante">Segundo apellido de estudiante:</label>
        <input type="text" name="SegundoApellidoEstudiante" id="SegundoApellidoEstudiante"><br>
        <label for="CursoEstudiante">Curso de estudiante:</label>
        <input type="text" name="CursoEstudiante" id="CursoEstudiante"><br>
        <label for="EspecialidadEstudiante">Especialidad</label>
           <?php include("../controlador/ComboEspecialidades.php"); ?>
        <br>
            <label for="ProyectoEstudiante">Proyecto</label>
            <?php include("../controlador/ComboProyectos.php"); ?>
            <br>
                
        <label for="FechaNacimiento">Fecha de nacimiento:</label>
        <input type="date" name="FechaNacimiento" id="FechaNacimiento"><br>
        <button type="submit">Registrar estudiante</button>
    </form>

</body>
</html>