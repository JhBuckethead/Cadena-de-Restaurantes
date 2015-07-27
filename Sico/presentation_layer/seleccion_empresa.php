<?php
	echo "<link rel='stylesheet' href='css/style.css' type='text/css' media='all'>";
	include ("../bussines_layer/gestion_empresa_bussines.php");
	include ("../class/empresa.php");
	$empresa=catalogo_empresa(1);
	echo "<!DOCTYPE html>
<html lang = 'es'>
<head>
	<meta charset = 'utf-8'>
	<link rel='stylesheet' type='text/css' href='css/estilo.css'>
	
</head>
	<header>
		<section id='log'>
				<h1><img src='images/icon_1.gif'></img>	Seleccionar Empresa<h1/>

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


	for ($i = 0; $i <count($empresa); $i++) 
	{	
		echo "<section id=contenidos>";
		echo	"<h3><br> ".$empresa[$i]->get_nombre()." </h3>
				<p class='pad_bot1'> ". $empresa[$i]->get_categoria()."</p>
				<img id='empresa' src='". $empresa[$i]->get_url()."'<height='50' width='50' /img>";
		echo 	"<br><br><a href='realizar_pedido.php?empresa=".$empresa[$i]->get_id_empresa()."' class='button1'>IR</a></section>";
	}	
?>