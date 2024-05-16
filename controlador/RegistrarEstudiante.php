<?php
//echo $_POST["ProyectoEstudiante"];
if (!empty($_POST["CodigoEstudiante"]) && !empty($_POST["PrimerNombreEstudiante"]) && !empty($_POST["PrimerApellidoEstudiante"]) && !empty($_POST["CursoEstudiante"]) && !empty($_POST["EspecialidadEstudiante"]) && !empty($_POST["ProyectoEstudiante"])) { 
    $CodigoEstudiante = $_POST["CodigoEstudiante"];
    $PrimerNombreEstudiante = $_POST["PrimerNombreEstudiante"]; 
    $SegundoNombreEstudiante = $_POST["SegundoNombreEstudiante"];
    $PrimerApellidoEstudiante = $_POST["PrimerApellidoEstudiante"];
    $SegundoApellidoEstudiante = $_POST["SegundoApellidoEstudiante"];
    $CursoEstudiante = $_POST["CursoEstudiante"];     
    $EspecialidadEstudiante = $_POST["EspecialidadEstudiante"];
    $ProyectoEstudiante = $_POST["ProyectoEstudiante"];         
    $FechaNacimientoEstudiante = $_POST["FechaNacimiento"];      
    
    include("bd.php");
    $Consulta="INSERT INTO estudiante (codigoestudiante, primernombre, segundonombre, primerapellido, segundoapellido, curso, codigoespecialidad, codigoproyecto, fechanacimiento) VALUES ('".$CodigoEstudiante."', '".$PrimerNombreEstudiante."', '".$SegundoNombreEstudiante."', '".$PrimerApellidoEstudiante."', '".$SegundoApellidoEstudiante."', '".$CursoEstudiante."', '".$EspecialidadEstudiante."', '".$ProyectoEstudiante."', '".$FechaNacimientoEstudiante."')";
  
    //echo $Consulta;

    $Resultado=False;
    try {     
    $Resultado= mysqli_query($Conexion, $Consulta); 
        }
   catch (Exception $e)
        { $Mensaje="No se pudo registrar el estudiante por error en los datos"; 
            //$error=$e->getMessage();
            print $e->getMessage();
            //print $Resultado;
        }
    if($Resultado == False) { $Mensaje="No se pudo registrar el estudiante"; 
                   // die($mysqli_error($Conexion));
                 }
    else { $Mensaje="El estudiante se registro correctamente"; }
    } // Fin del if
else {
    $Mensaje="El codigo, primer nombre, primer apellido, curso, especialidad y proyecto son obligatorios";
    }
    echo "<h3>".$Mensaje."</h3>";


?>