<?php

session_start();
include("bd.php");
if(mysqli_connect_error()){
        exit("Fallo al conectarse a la base de datos ".mysqli_connect_error());
    }

if(!isset($_POST["NombreUsuario"], $_POST["ClaveUsuario"])){
        header("Location: index.php");
    }

    $Consulta="select NombreUsuario, ClaveUsuario, TipoUsuario from usuario where NombreUsuario = '".$_POST["NombreUsuario"]."'";

    $Resultado=False;
    try {     
    $Resultado= mysqli_query($Conexion, $Consulta); 
        }
   catch (Exception $e)
        { $Mensaje="No se pudo consultar el usuario ".$_POST["NombreUsuario"]; 
            //$error=$e->getMessage();
            print $e->getMessage();
            //print $Resultado;
        }
    if($Resultado == False) { $Mensaje="No se pudo consultar el usuario ".$_POST["NombreUsuario"]; 
                   // die($mysqli_error($Conexion));
                 }
    else { 
    $Registro=$Resultado->fetch_assoc();
    echo $Registro["NombreUsuario"]."<br>";
    echo $Registro["ClaveUsuario"]."<br>";
    echo $Registro["TipoUsuario"]."<br>";

    if($_POST["ClaveUsuario"]==$Registro["ClaveUsuario"]){
                //Iniciar sesion
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['NombreUsuario'] = $Registro["NombreUsuario"];
            $_SESSION['TipoUsuario'] = $Registro["TipoUsuario"];
            //print_r($_SESSION);
            echo "es:".$_SESSION['loggedin']." es ".$_SESSION['NombreUsuario']." es ".$_SESSION['TipoUsuario'].$_POST["ClaveUsuario"];
            header("Location: ../index.php");
            }
        else {header("Location: ../index.php");
        }
        }
          //  else {
        //header("Location: ../index.php");
       //}        


    //$Resultado->close();


?>