<?php 
    include("Navegacion.php");
    echo "<h1>REGISTRAR PROYECTO</h1>";
    include("../controlador/RegistrarProyecto.php");
    echo '<form action="RegistroProyectos.php" method="post">
        <label for="Codigo">Codigo proyecto:</label>
        <input type="number" name="Codigo" id="Codigo"><br>
        <label for="NombreProyecto">Nombre de proyecto:</label>
        <input type="text" name="NombreProyecto" id="NombreProyecto"><br>
        <label for="Resumen">Resumen:</label>
        <textarea name="Resumen" id="Resumen" rows="5" cols="20"></textarea><br>
        <label for="FechaRegistro">Fecha registro:</label>
        <input type="date" name="FechaRegistro" id="FechaRegistro"><br>
        <button type="submit">Registrar proyecto</button>
    </form>';
    include("Footer.php"); 
    ?>