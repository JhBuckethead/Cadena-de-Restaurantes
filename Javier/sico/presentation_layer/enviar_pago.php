<?php	
	echo "<link rel='stylesheet' href='css/style.css' type='text/css' media='all'>";
	include ("../bussines_layer/gestion_pago.php");
	include ("../persistence_layer/conect.php");
	include ("../class/pago.php");
	echo "<!DOCTYPE html>
<html lang = 'es'>
<head>
	<meta charset = 'utf-8'>
	<link rel='stylesheet' type='text/css' href='css/estilo.css'>
	
</head>
	<header>
		<section id='log'>
				<h1>Pagos<h1/>

		</section>

		<nav id='banners'>
				<ul>
					<li><a href='#'>Inicio</a></li>
					<li><a href='seleccion_empresa.php'>Seleccionar Empresa</a></li>
					<li><a href='carrito.php'>Carrito</a></li>

				</ul>	
		</nav>

	</header>
<body>";
	if(isset($_POST["nuevo"]))
	{
		realizar_pagos($_POST["id"],$_POST["cuenta"]);
		echo '<script>alert("Su pago fue enviado a su cuenta bancaria")</script>';	
		echo "<div align=center>
		<meta http-equiv='Refresh' content='0;url=seleccion_empresa.php'></font></h1></div>";
	}else{
		list ($pago)=consultar_pago();
			echo "<h1>Datos a enviar</h1><br><br><br>";
			echo"<section id='factura'>";
			for ($i = 0; $i <count($pago); $i++) 	
			{	
				echo "<table cellspacing=1 cellspadding=1 align=left  >";
				echo "<tr >";
					echo "<td><b>Nombre</td>";
					echo "<td>".$pago[$i]['nombre']." </td>";
				echo "</tr>";
				echo "<tr >";
					echo "<td><b>Total De Productos</td>";
					echo "<td>".$pago[$i]['total_productos']." </td>";
				echo "</tr>";
				echo "<tr >";
					echo "<td><b>Valor Total A Pagar</td>";
					echo "<td>".$pago[$i]['total_pago']." </td>";
				echo "</tr>";
				echo "<tr >";
					echo "<td><b>Fecha</td>";
					echo "<td>".$pago[$i]['fecha']." </td>";
				echo "</tr>";				
				echo "</section>";
				echo "<form method = 'Post' action='enviar_pago.php'>";
					echo "<input type='hidden' name='nuevo' value=1 >";
					echo "<input type='hidden' name='id' value=".$pago[$i]['id_pago'].">";
					echo "<tr><th><b>Numero tarjeta/banco:</th><td><input type='number' min='1' name='cuenta'></td></tr>";
		echo "<section id ='pago'>";
				
				echo "<br><input type='submit' value='Pagar'><form></section>";
			}
	}
?>