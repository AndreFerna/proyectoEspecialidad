<?php
echo '
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="/cequeda_php1/css/estilo.css">
</head>
<body>
<div class="Encabezado">
  <img src="https://iesanfranciscodesales.edu.co/web/wp-content/uploads/2019/06/ESCUDO-300x300.png" alt="">

<ul>
  <li><a href="/cequeda_php1">Inicio</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Estudiante</a>
    <div class="dropdown-content">
      <a href="/cequeda_php1/vista/Estudiantes.php">Listar estudiantes</a>
      <a href="/cequeda_php1/vista/RegistroEstudiantes.php">Registrar estudiante</a>
      </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Proyectos</a>
    <div class="dropdown-content">
      <a href="/cequeda_php1/vista/Proyectos.php">Listar proyectos</a>
      <a href="/cequeda_php1/vista/RegistroProyectos.php">Registrar proyecto</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Especialidad</a>
    <div class="dropdown-content">
      <a href="/cequeda_php1/vista/Especialidades.php">Listar especialidades</a>
      <a href="/cequeda_php1/vista/RegistroEspecialidades.php">Registrar especialidad</a>
    </div>
  </li>
</ul>
</div>';

?>
