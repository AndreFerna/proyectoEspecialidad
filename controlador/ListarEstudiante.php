<?php

include("bd.php");

$Consulta="select * from estudiante";

$Resultado=False;
    try {     
    $Resultado= mysqli_query($Conexion, $Consulta); 
        }
   catch (Exception $e)
        { $Mensaje="No se pudo consultar los estudiantes"; 
            //$error=$e->getMessage();
            print $e->getMessage();
            //print $Resultado;
        }
    if($Resultado == False) { $Mensaje="No se pudo consultar los estudiantes"; 
                   // die($mysqli_error($Conexion));
                 }
    else { 
        echo '<table border="1">
        <tr>
            <td>Codigo de estudiante</td>
            <td>Primer nombre</td>
            <td>Segundo nombre</td>
            <td>Primer apellido</td>
            <td>Segundo apellido</td>
            <td>Curso</td>
            <td>Especialidad</td>
            <td>Proyecto</td>
            <td>Fecha de nacimiento</td>
            <td colspan="2">Acciones</td>
        </tr>';
        while($Registro=$Resultado->fetch_assoc()){
            echo'
            <tr>
                <td>'.$Registro["CodigoEstudiante"].'</td>
                <td>'.$Registro["PrimerNombre"].'</td>
                <td>'.$Registro["SegundoNombre"].'</td>
                <td>'.$Registro["PrimerApellido"].'</td>
                <td>'.$Registro["SegundoApellido"].'</td>
                <td>'.$Registro["Curso"].'</td>
                <td>';
                include("NombreEspecialidad.php");
                echo '</td>
                <td>';
                include("NombreProyecto.php");
                echo '</td>
                <td>'.$Registro["FechaNacimiento"].'</td>
                <td><a href="ActualizacionEstudiantes.php?CodigoEstudiante='.$Registro["CodigoEstudiante"].'" >Editar</a></td>
                <td><a href="#" onclick="Preguntar('.$Registro["CodigoEstudiante"].')">Eliminar</a></td>
            </tr>';
        }  // Fin del ciclo del listado de los estudiantes
        echo '</table>';
     }

?>

<script type="text/javascript">
    function Preguntar(CodigoEstudiante)
    {
        if(confirm("¿Esta seguro de eliminar el estudiante con codigo "+CodigoEstudiante+"?"))
        {
            window.location.href = "Estudiantes.php?CodigoEstudiante="+CodigoEstudiante;  
        }
    }
</script>
