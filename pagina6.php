<!DOCTYPE html>
<html>
<head>
    <title>Meses</title>
</head>
<body>
    <h1>Meses</h1>
    <?php
$meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
sort($meses); 
foreach ($meses as $mes) {
    echo $mes . "<br>";
}
?>
</body>
</html>
