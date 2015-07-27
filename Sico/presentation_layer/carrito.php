
<?php	
	echo "<link rel='stylesheet' href='css/style.css' type='text/css' media='all'>";
	include ("../bussines_layer/gestion_producto_bussines.php");
	include ("../bussines_layer/gestion_pedido.php");
	include ("../class/producto.php");
	include ("../class/pedido.php");
	include ("../persistence_layer/conect.php");


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
					<li><a href='carrito.php'>Carrito</a></li>

				</ul>	
		</nav>

	</header>
<body>";


	if(isset($_POST["nuevo"])){
		realizar_pedido($_POST["id"],$_POST["cantidad"]);

		echo "<div align=center><h1>Agregado correctamente
		<meta http-equiv='Refresh' content='2;url=realizar_pedido.php'></font></h1></div>";	
		}
		else{
			//ESTA QUEMADO EL CLIENTE====
		list ($carrito_persona,$carrito,$pago)=consultar_carrito(1);
		
		echo "<h1>Prefactura</h1><br><br>";
		echo"<section id='factura'>";
		echo "<form method = 'Post' action='enviar_pago.php'>";
		echo "<br><p><b>Nombre: </b>".$carrito_persona['nombres']."</p>";
		echo "<table cellspacing=3 cellspadding=r align=left>";
			echo "<tr >";
				echo "<td><b>Producto</td>";
				echo "<td><b>Fecha</td>";
				echo "<td><b>Cantidad</td>";
				echo "<td><b>Total</td>";
				
			echo "</tr>";
		
	for ($i = 0; $i <count($carrito); $i++) 	
	{	
	echo "<tr>";
		echo	"<td>".$carrito[$i]['nombre']." </td>
		<td name= 'fecha'>". $carrito[$i]['fecha']."</td>
		<td>".$carrito[$i]['cantidad']."</td>
		<td>".($carrito[$i]['precio'])*($carrito[$i]['cantidad'])."</td>";

		//$pago=$carrito[$i]['precio']*$carrito[$i]['cantidad']+$pago;

	echo "</tr>";	
			
	}	
	
	
	echo "</section><section id ='pago'>";
	echo "<p><b>Total a pagar: </b><a> $".$pago."</a></p>";
	echo "<input type='submit' value='Pagar'><form></section></body>";
	}
?>


