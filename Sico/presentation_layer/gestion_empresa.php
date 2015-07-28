<?php
	
	echo "<link rel='stylesheet' href='css/style.css' type='text/css' media='all'>";
	include ("../bussines_layer/gestion_empresa_bussines.php");
	include ("../class/empresa.php");
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
					<li><form method='get' action='gestion_empresa.php'>
				<input type='text' name='busqueda' size='15' maxlength='20' value='' />					  	
					<input type='submit' value='Buscar'/>
					</form>	
				</ul>	
		</nav>

	</header>
<body>";
		echo "<section id='opcion'>";

	if(isset($_GET["busqueda"])){		
		$empresa=busqueda_emp(1,$_GET['busqueda']);
	}else{			
		$empresa=catalogo_empresa(1);
	}
		echo "</section>"; 
	for ($i = 0; $i <count($empresa); $i++) 
	{	
		echo "<section id=contenidos class='cols'>";
		echo	"<h3><br> ".$empresa[$i]->get_nombre()." </h3>
				<p class='pad_bot1'> ". $empresa[$i]->get_categoria()."</p>
				<img id= 'empresa' src='". $empresa[$i]->get_url()."'<height='50' width='50' /img><br>";
		echo 	"<br><a href='gestion_empresa_modificar.php?id=".$empresa[$i]->get_id_empresa()."' class='button1'>Modificar Empresa</a><br><br>
				<a href='gestion_producto.php?empre=".$empresa[$i]->get_id_empresa()."' class='button1'>Modificar Productos</a>
				 <br><br><a href='gestion_empresa_eliminar.php?id=".$empresa[$i]->get_id_empresa()."' class='button1'>Dar de Baja</a></section>";
	}	
?>
