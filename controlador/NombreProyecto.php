<?php

include("bd.php");

$ConsultaE="select * from proyecto where CodigoProyecto='".$Registro["CodigoProyecto"]."'";

$ResultadoE=False;
    try {     
    $ResultadoE= mysqli_query($Conexion, $ConsultaE); 
        }
   catch (Exception $e)
        { $Mensaje="No se pudo consultar el proyecto"; 
            //$error=$e->getMessage();
            print $e->getMessage();
            //print $Resultado;
        }
    if($ResultadoE == False) { $Mensaje="No se pudo consultar el proyecto"; 
                   // die($mysqli_error($Conexion));
                 }
    else { 
        $RegistroE=$ResultadoE->fetch_assoc();
        echo $RegistroE["NombreProyecto"];
     }


    



?>

