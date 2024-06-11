<!DOCTYPE html>
<html>
<head>
    <title>Días de la Semana</title>
</head>
<body>
    <?php
    $dias_semana = array("lunes", "martes", "miércoles", "jueves", "viernes", "sábado", "domingo");
    echo "Primer día de la semana: " . $dias_semana[0] . "<br>";
    echo "Último día de la semana: " . end($dias_semana);
    ?>
</body>
</html>
