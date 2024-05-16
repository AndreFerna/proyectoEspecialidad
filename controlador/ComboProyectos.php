<?php
 include("bd.php");

 $ConsultaPRO="SELECT * FROM proyecto";

 $ResultadoPRO=False;
    try {     
    $ResultadoPRO= mysqli_query($Conexion, $ConsultaPRO); 
        }
   catch (Exception $e)
        { $Mensaje="No se pudo consultar los proyectos"; 
            //$error=$e->getMessage();
            print $e->getMessage();
            //print $Resultado;
        }
    if($ResultadoPRO == False) { $Mensaje="No se pudo consultar los proyectos"; 
                   // die($mysqli_error($Conexion));
                 }
    else { 
        echo '<select name="ProyectoEstudiante" id="ProyectoEstudiante">';
        while($RegistroPRO=$ResultadoPRO->fetch_assoc()){
            if($Registro["CodigoProyecto"]==$RegistroPRO["CodigoProyecto"]){
                echo '<option value="'.$RegistroPRO["CodigoProyecto"].'" selected>'.$RegistroPRO["NombreProyecto"].'</option>';
            }
            else {
            echo '<option value="'.$RegistroPRO["CodigoProyecto"].'">'.$RegistroPRO["NombreProyecto"].'</option>';
            }
        }  // Fin del ciclo del listado de proyectos
        echo '</select>';
     }
 
?>