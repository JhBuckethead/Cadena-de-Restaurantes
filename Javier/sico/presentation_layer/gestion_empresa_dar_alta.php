<?php	
	echo "<link rel='stylesheet' href='css/style.css' type='text/css' media='all'>";
	include ("../bussines_layer/gestion_empresa_bussines.php");
	include ("../class/producto.php");
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
				<h1>Gestión de Empresas<h1/>

		</section>

		<nav id='banners'>
				<ul>
					<li><a  href='gestion_empresa_nuevo.php'><img src='images/nuevo.jpg' height='25' width='25'><br>Nueva Empresa</a></li>
					<li><a href='gestion_empresa_dar_alta.php'><img src='images/nuevo2.jpg' height='25' width='25'><br> Dar de Alta</a></li>
					<li><form method='get' action='gestion_empresa_dar_alta.php'>
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
	if(isset($_GET["id"]) AND isset($_GET["alta"])){
		alta_baja_empresa($_GET["id"],$_GET["alta"]);
		echo "<div align=center><h1>SU EMPRESA SE HA REACTIVADO CON EXITO!!
		<meta http-equiv='Refresh' content='2;url=gestion_empresa.php'></font></h1></div>";	
	}	else if (isset($_GET["busqueda"])){
		$empresa=busqueda_emp(0,$_GET['busqueda']);
	}else if (!isset($_GET["busqueda"])){
		$empresa=catalogo_empresa(0);
	}	
	if ((!isset($_GET["id"]) AND !isset($_GET["alta"]))){		
		for ($i = 0; $i <count($empresa); $i++) 
		{	
			echo "<section id=contenidos class='cols'>";
			echo	"<h3><br> ".$empresa[$i]->get_nombre()." </h3>
					<p class='pad_bot1'> ". $empresa[$i]->get_categoria()."</p>
					<img src='". $empresa[$i]->get_url()."'<height='50' width='50' /img>";
			echo 	"<br><a href='gestion_empresa_dar_alta.php?alta=1 &id=".$empresa[$i]->get_id_empresa()."'class='button1'>Reactivar</a></section>";	
		}	
		echo "</div>";	
		}
?>