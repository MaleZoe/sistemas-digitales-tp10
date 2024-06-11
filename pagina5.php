<!DOCTYPE html>
<html>
<head>
    <title>alineación</title>
</head>
<body>
    <h1>Alineación</h1>
<?php
$jugador = array("Gómez", "Rodríguez", "López", "Martínez", "Pérez");
$alineacion = "La alineación del equipo está compuesta por (" . implode(", ", $jugador) . ").";
echo $alineacion;
?>
</body>
</html
