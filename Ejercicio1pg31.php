<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>

<h1>Ordenar nombres de aves alfabeticamente</h1>
<hr>
<?php
$bird = array("Urraca", "Torogoz", "Golondrina", "Lechuza campestre", "Buitre negro", "Focha americana", "Dúcula verde");
sort($bird);

$clength = count($bird);
for($x =0; $x < $clength; $x++) {
    echo $bird[$x] ;
    echo "<br> <br> " ;
}
?>   
</body>
</html>