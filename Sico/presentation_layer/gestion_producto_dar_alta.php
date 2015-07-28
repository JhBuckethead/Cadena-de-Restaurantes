<?php	
	echo "<link rel='stylesheet' href='css/style.css' type='text/css' media='all'>";
	include ("../bussines_layer/gestion_producto_bussines.php");
	include ("../class/producto.php");
	include ("../persistence_layer/conect.php");	
	echo "<!DOCTYPE html>
<html lang = 'es'>
<head>
	<meta charset = 'utf-8'>
	<link rel='stylesheet' type='text/css' href='css/estilo.css'>
	
</head>
	<header>
		<section id='log'>
				<h1>Gestión de Productos<h1/>

		</section>

		<nav id='banners'>
				<ul>
					<li><a href='gestion_producto_nuevo.php'><img src='images/nuevo.jpg' height='25' width='25'><br>Nuevo producto </a></li>
					<li>
		<form method='get' action='gestion_producto_dar_alta.php'>
		<input type='text' name='busqueda' size='15' maxlength='20' value=''>
		<input type='hidden' name='id_empres' size='15' maxlength='20' value='".$_GET['id_empres']."' />
		<input type='submit' value='Buscar'/>
		</form>	
				</ul>	
		</nav>

	</header>
<body>";
	if(isset($_GET["id_empres"]) AND isset($_GET["alta"])){
		baja_alta_product($_GET["id_empres"],$_GET["alta"]);
		echo "<div align=center><h1>SU PRODUCTO SE HA REACTIVADO CON EXITO!!
		<meta http-equiv='Refresh' content='2;url=gestion_empresa.php'></font></h1></div>";	
	}else if (isset($_GET["busqueda"])){
		$categoria=busqueda_producto(0,$_GET['id_empres'],$_GET['busqueda']);
	}else if (!isset($_GET["busqueda"])){
		$categoria=catalogo_producto(0,$_GET["id_empres"]);
	}	
	if ((!isset($_GET["id"]) AND !isset($_GET["alta"]))){
		echo "<div name=empresas>";
		for ($i = 0; $i <count($categoria); $i++) 	
		{	
			echo "<section id=contenidos class='cols'>";
			echo	"<h3><br> ".$categoria[$i]->get_nombre()." </h3>
					<p class='pad_bot1'>Precio $ ". $categoria[$i]->get_precio()."</p>
					<p class='pad_bot1'>Empresa ". $categoria[$i]->get_empresa()."</p>
					<img src='". $categoria[$i]->get_url()."'<height='80' width='80' /img>";
			echo 	"<br><a href='gestion_producto_dar_alta.php?alta=1 &id_empres=".$categoria[$i]->get_id_producto()."'class='button1'>Reactivar</a></section>";	
		}	
		echo "</div>";
	}
?>