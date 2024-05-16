<?php 
    include("Navegacion.php");
    echo "<h1>ACTUALIZAR ESTUDIANTE</h1>";
    include("../controlador/ActualizarEstudiante.php");
    echo '<form action="ActualizacionEstudiantes.php" method="post">
        <input type="hidden" id="CodigoActual" name="CodigoActual" value="'.$_GET["CodigoEstudiante"].'">
        <label for="CodigoEstudiante">Codigo estudiante:</label>
        <input type="number" name="CodigoEstudiante" id="CodigoEstudiante" value="'.$Registro["CodigoEstudiante"].'"><br>
        <label for="¨PrimerNombreEstudiante">Primer nombre de estudiante:</label>
        <input type="text" name="PrimerNombreEstudiante" id="PrimerNombreEstudiante" value="'.$Registro["PrimerNombre"].'"><br>
        <label for="SegundoNombreEstudiante">Segundo nombre de estudiante:</label>
        <input type="text" name="SegundoNombreEstudiante" id="SegundoNombreEstudiante" value="'.$Registro["SegundoNombre"].'"><br>
        <label for="PrimerApellidoEstudiante">Primer apellido de estudiante:</label>
        <input type="text" name="PrimerApellidoEstudiante" id="PrimerApellidoEstudiante" value="'.$Registro["PrimerApellido"].'"><br>
        <label for="SegundoApellidoEstudiante">Segundo apellido de estudiante:</label>
        <input type="text" name="SegundoApellidoEstudiante" id="SegundoApellidoEstudiante"  value="'.$Registro["SegundoApellido"].'"><br>
        <label for="CursoEstudiante">Curso de estudiante:</label>
        <input type="text" name="CursoEstudiante" id="CursoEstudiante"  value="'.$Registro["Curso"].'"><br>
        <label for="EspecialidadEstudiante">Especialidad</label>';
           include("../controlador/ComboEspecialidades.php");
           echo '
        <br>
            <label for="ProyectoEstudiante">Proyecto</label>';
            include("../controlador/ComboProyectos.php");
            echo '
            <br>
                
        <label for="FechaNacimiento">Fecha de nacimiento:</label>
        <input type="date" name="FechaNacimiento" id="FechaNacimiento" value="'.$Registro["FechaNacimiento"].'"><br>
        <button type="submit">Actualizar estudiante</button>
    </form>';
    include("Footer.php"); 
    ?>