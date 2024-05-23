<?php 
    include("Navegacion.php");
    echo "<h1>REGISTRAR ESTUDIANTE</h1>";
    include("../controlador/RegistrarEstudiante.php");
    echo '<form action="RegistroEstudiantes.php" method="post">
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
        <label for="EspecialidadEstudiante">Especialidad</label>';
        include("../controlador/ComboEspecialidades.php");
        echo '<br>
            <label for="ProyectoEstudiante">Proyecto</label>';
        include("../controlador/ComboProyectos.php");
        echo'    <br>
        <label for="FechaNacimiento">Fecha de nacimiento:</label>
        <input type="date" name="FechaNacimiento" id="FechaNacimiento"><br>
        <button type="submit">Registrar estudiante</button>
    </form>';
    include("Footer.php"); 
    ?>