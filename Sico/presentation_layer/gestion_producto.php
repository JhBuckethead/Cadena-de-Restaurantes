<?php	
	echo "<link rel='stylesheet' href='css/style.css' type='text/css' media='all'>";
	include ("../bussines_layer/gestion_producto_bussines.php");
	include ("../class/producto.php");
	include ("../persistence_layer/conect.php");
	$id_empres=$_GET['empre'];	
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
					<li><a href='gestion_producto_dar_alta.php?id_empres=".$id_empres."' class='button1'><img src='images/nuevo2.jpg' height='25' width='25'> </a><br>Dar de alta</li>
					<li>
		<form method='get' action='gestion_producto.php'>
		<input type='text' name='busqueda' size='15' maxlength='20' value=''>
		<input type='hidden' name='empre' size='15' maxlength='20' value='".$_GET['empre']."' />
		<input type='submit' value='Buscar'/>
		</form>	
				</ul>	
		</nav>

	</header>
<body>";
	
	if(isset($_GET["busqueda"])){		
		$categoria=busqueda_producto(1,$_GET['empre'],$_GET['busqueda']);
	}else{			
		$categoria=catalogo_producto(1,$_GET['empre']);
	}
		echo "<div name=empresas>";
	for ($i = 0; $i <count($categoria); $i++) 	
	{	
		echo "<section id=contenidos class='cols'>";
		echo	"<h3><br> ".$categoria[$i]->get_nombre()." </h3>
				<p class='pad_bot1'>Precio $ ". $categoria[$i]->get_precio()."</p>
				<p class='pad_bot1'>Empresa ". $categoria[$i]->get_empresa()."</p>
				<img src='". $categoria[$i]->get_url()."'<height='80' width='80' /img>";
		echo 	"<br><a href='gestion_producto_modificar.php?id_empres=".$id_empres." &id=".$categoria[$i]->get_id_producto()."' class='button1'>Modificar</a>
				 <br><br><a href='gestion_producto_eliminar.php?id_empres=".$id_empres." &id=".$categoria[$i]->get_id_producto()."' class='button1'>Dar de Baja</a></section>";	
	}	
	echo "</div>";
?>