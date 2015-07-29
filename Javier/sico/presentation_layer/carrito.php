<?php	
	echo "<link rel='stylesheet' href='css/style.css' type='text/css' media='all'>";
	include ("../bussines_layer/gestion_producto_bussines.php");
	include ("../bussines_layer/gestion_pedido.php");
	include ("../bussines_layer/gestion_pago.php");
	include ("../class/producto.php");
	include ("../class/pedido.php");
	include ("../persistence_layer/conect.php");
	include("../bussines_layer/comprobar_sesion.php");
	echo "<!DOCTYPE html>
<html lang = 'es'>
<head>
	<meta charset = 'utf-8'>
	<link rel='stylesheet' type='text/css' href='css/estilo.css'>
	
</head>
	<header>
		<section id='log'>
				<h1><img src='images/carrito.jpg'></img>	Carrito<h1/>

		</section>

		<nav id='banners'>
				<ul>
					<li><a href='#'>Inicio</a></li>
					<li><a href='seleccion_empresa.php'>Seleccionar Empresa</a></li>
					<li><a href='carrito.php'>Carrito</a></li>";
					?>
							<li><b>
								<?php if($sesion) : ?>
								<?=$_SESSION['nombres'] ?>
								<?php endif; ?>			
							</li>
							<li>
								<?php if($sesion) : ?>
								<a href="../bussines_layer/logout.php">(Cerrar Sesion)</a>
								<?php endif; ?>			
							</li>
					<?php

				echo "</ul>	
		</nav>

	</header>
<body>";
	if(isset($_POST["nuevo"])){

		realizar_pago($_POST["cliente"],$_POST["productos"],$_POST["pago"],$_POST["fecha"]);
		echo '<script>alert("Se guardó su pedido, ahora tiene que enviar el valor al banco")</script>';	
		echo "<div align=center>
		<meta http-equiv='Refresh' content='0;url=enviar_pago.php'></font></h1></div>";	
		}
		else{
			//ESTA QUEMADO EL CLIENTE====
		list ($carrito_persona,$carrito,$pago,$productos)=consultar_carrito(1);
		
		echo "<h1>Prefactura</h1><br><br>";
		echo"<section id='factura'>";
		
		echo "<form method = 'Post' action='carrito.php'>";
		echo "<br><p><b>Nombre: </b>".$carrito_persona['nombres']."<br><b>Fecha: </b>". $carrito[1]['fecha']."</p>";
			
			echo "<table cellspacing= cellspadding=1 align=left >";
				echo "<tr >";
					echo "<td><b>Nombre</td>";
					echo "<td><b>Cantidad</td>";
					echo "<td><b>Total</td>";
					
				echo "</tr>";	
			for ($i = 0; $i <count($carrito); $i++) 	
			{	
				echo "<tr >";
					echo	"<td>".$carrito[$i]['nombre']." </td>
					<td>".$carrito[$i]['cantidad']."</td>
					<td>".($carrito[$i]['precio'])*($carrito[$i]['cantidad'])."</td>";					
					
				echo "<tr >";
				echo "<input type='hidden' name='nuevo' value=1 >";
				echo "<input type='text' hidden required name=cliente value='".$carrito_persona['nombres']."'>";
				echo "<input type='text' hidden required name=fecha value='".$carrito[$i]['fecha']."'>";
				echo "<input type='text' hidden required name=pago value='".$pago."'>";
				echo "<input type='text' hidden required name=productos value='".$productos."'>";					

			}	
		
		echo "</section><section id ='pago'>";
		echo "<p><b>Total a pagar: </b><a> $".$pago."</a></p>";
		
		echo "<p><b>Total productos: </b><a> ".$productos."</a></p>";

	echo "<input type='submit' value='Pagar'><form></section></body>";

	}
?>