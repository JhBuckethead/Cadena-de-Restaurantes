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
				<h1>Gestión de Empresas<h1/>


		</section>

		<nav id='banners'>
				<ul>
					<li><a  href='gestion_empresa_nuevo.php'><img src='images/nuevo.jpg' height='25' width='25'><br>Nueva Empresa</a></li>
					<li><a href='gestion_empresa_dar_alta.php'><img src='images/nuevo2.jpg' height='25' width='25'><br> Dar de Alta</a></li>
					<li><a href='gestion_pagos.php'><img src='images/nuevo2.jpg' height='25' width='25'><br>Pedidos/Pagos</a></li>
					<li>
					<form method='get' action='gestion_empresa.php'>
				<input type='text' name='busqueda' size='15' maxlength='20' value='' />					  	
					<input type='submit' value='Buscar'/>
					</form>";

					?>
				<!--
					<li><b>
						<?php if($sesion) : ?>
						<?=$_SESSION['nombres'] ?>
						<?php endif; ?>			
					</li>
				-->
					<li>
						<?php if($sesion) : ?>
						<a href="../bussines_layer/logout.php">(Cerrar Sesion)</a>
						<?php endif;?>Administrador
					</li>


					<?php
				echo "</ul>	
		</nav>

	</header>
<body>";
		echo "<section id='opcion'>";
	if(isset($_POST["nuevo"]))
	{
		echo "hola";
	}else{
		list ($pago)=consultar_total_pagos();
			echo "<h1>Pedidos/Pagos realizados</h1><br><br><br>";
			echo"<section id='factura'>";
				
				echo "<table cellspacing=1 cellspadding=1 align=left  >";
				echo "<tr >";
					echo "<td><b>Nombre</td>";
					echo "<td><b>Total De Productos</td>";
					echo "<td><b>Valor Total A Pagar</td>";
					echo "<td><b>Fecha</td>";
					echo "<td><b>Estado</td>";
				echo "</tr>";
			for ($i = 0; $i <count($pago); $i++) 	
			{	
				echo "<tr >";
					echo "<td>".$pago[$i]['nombre']." </td>";
					echo "<td>".$pago[$i]['total_productos']." </td>";
					echo "<td>".$pago[$i]['total_pago']." </td>";
					echo "<td>".$pago[$i]['fecha']." </td>";
					echo "<td>".$pago[$i]['estado']." </td>";
				echo "</tr>";			
			echo "</section>";				
			}
	}
?>