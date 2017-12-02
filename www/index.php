<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
	<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</head>
<body>

	<div class="mdl-grid">
		<form action="" method="POST">
			<h3>Ingrese cada los precios de los productos: </h3>
			<input type="text" class="mdl-textfield__input" placeholder="Valor 1" type="number" name="valor1">
			<br>
			<input type="text" class="mdl-textfield__input" placeholder="Valor 2" type="number" name="valor2">
			<br>
			<input type="text" class="mdl-textfield__input" placeholder="Valor 3" type="number" name="valor3">
			<br>
			<input type="text" class="mdl-textfield__input" placeholder="Valor 4" type="number" name="valor4">
			<br>
			<button type="submit">Calcular</button>
		</form>
	</div>

	<div>
	<?php 
		if(count($_POST)==4){
			$subtotal = array_sum($_POST);
			$monto_base_descuento = 10000;
			$procentaje=null;
			echo "<div> <h4>";
			echo 'El subtotal de la compra es de <b>'.$subtotal.'</b><br>';

			if ($subtotal > $monto_base_descuento) {
				$total = $subtotal - ($subtotal*0.1);
				$porcentaje="10%";
			}else{
				$total = $subtotal - ($subtotal*0.05);
				$porcentaje="5%";
			}

			echo 'y el total a pagar es de <b>'.$total.'</b> con un '.$porcentaje.' de descuento.';

			echo "<div></h4>";
			};

	 ?>


	</div>
</body>
</html>