<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Meses</h1>
<?php
$meses = array(
    "enero" => 31,
    "febrero" => 28, 
    "marzo" => 31,
    "abril" => 30,
    "mayo" => 31,
    "junio" => 30,
    "julio" => 31,
    "agosto" => 31,
    "septiembre" => 30,
    "octubre" => 31,
    "noviembre" => 30,
    "diciembre" => 31
);

foreach ($meses as $mes => $dias) {
    echo "El mes de $mes tiene $dias días.<br>";
}
?>
</body>
</html>
