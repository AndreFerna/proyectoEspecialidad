<?php
if (!empty($_POST["Codigo"]) &&! empty($_POST["Resumen"]) &&! empty($_POST["FechaRegistro"]) && !empty($_POST["NombreProyecto"])) { 
    $CodigoProyecto = $_POST["Codigo"];
    $NombreProyecto = $_POST["NombreProyecto"];
    $ResumenProyecto = $_POST["Resumen"]; 
    $FechaProyecto = $_POST["FechaRegistro"]; 
   
    include("bd.php");
    $Consulta="INSERT INTO Proyecto (CodigoProyecto, NombreProyecto, Resumen, FechaRegistro) VALUES ('".$CodigoProyecto."', '".$NombreProyecto."', '".$ResumenProyecto."', '".$FechaProyecto."')";
    $Resultado=False;
    try {     
    $Resultado= mysqli_query($Conexion, $Consulta); 
        }
   catch (Exception $e)
        { $Mensaje="No se pudo registrar el proyecto por error en los datos"; 
            //$error=$e->getMessage();
            print $e->getMessage();
            //print $Resultado;
        }
    if($Resultado == False) { $Mensaje="No se pudo registrar el proyecto"; 
                   // die($mysqli_error($Conexion));
                 }
    else { $Mensaje="El proyecto se registro correctamente"; }
    } // Fin del if
else {
    $Mensaje="El codigo,nombre, resumen y fecha de registro del proyecto es obligatorio";
    }
    echo "<h3>".$Mensaje."</h3>";
?>
