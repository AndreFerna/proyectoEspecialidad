<?php 
    include("Navegacion.php");
    echo "<h1>REGISTRAR ESPECIALIDAD</h1>";
    include("../controlador/RegistrarEspecialidad.php");
    echo '<form action="RegistroEspecialidades.php" method="post">
        <label for="Codigo">Codigo especialidad:</label>
        <input type="number" name="Codigo" id="Codigo"><br>
        <label for="NombreEspecialidad">Nombre de la especialidad:</label>
        <input type="text" name="NombreEspecialidad" id="NombreEspecialidad"><br>
        <button type="submit">Registrar Especialidad</button>
    </form>';

    include("Footer.php"); 
    ?>