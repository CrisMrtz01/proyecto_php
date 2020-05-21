<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
<?php 
	if (isset($_POST['canthoras'])) {

		$horas = $_POST['canthoras'];

		function CalcularHorasSemanales($canthoras)
		{
			$horasSemanales = $canthoras * 6;
			return($horasSemanales); 
		}

		function calcularSalario($horasSemanales){
			$salario = $horasSemanales * 10;
			return($salario);
		}

		$horasSemanales = round(CalcularhorasSemanales($horas));
		$sueldo = round(calcularSalario($horasSemanales));

		echo "Cantidad de Horas semanales: $horasSemanales<br>";
		echo "Cantidad horas diarias:$horas <br>";
		echo "Sueldo: $sueldo $ . <br>";

	}
?>
</body>
</html>