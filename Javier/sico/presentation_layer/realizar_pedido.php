<?php	
	echo "<link rel='stylesheet' href='css/style.css' type='text/css' media='all'>";
	include ("../bussines_layer/gestion_producto_bussines.php");
	include ("../bussines_layer/gestion_pedido.php");
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
				<h1><img src='images/icon_3.gif'></img>	Selecciona tu Pedido<h1/>

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
							<li><br>
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
		realizar_pedido($_POST["id"],$_POST["cantidad"],date('Y-m-d', time()));
			echo '<script>alert("Agregado a carrito")</script>';
			echo "<div align=center>
			<meta http-equiv='Refresh' content='0;url=realizar_pedido.php?empresa=".$_POST["empresa_id"]."'></font></h1></div>";		
		}
		else{
		//echo ($_GET["empresa"]);

		$categoria=seleccion_empresa(1,$_GET["empresa"]);		

	for ($i = 0; $i <count($categoria); $i++) 	
	{	
		echo "<section id=contenidos>";
		echo"<h3><br> ".$categoria[$i]->get_nombre()." </h3><p class='pad_bot1'>Precio $ ". $categoria[$i]->get_precio()."</p><p class='pad_bot1'>Empresa ". $categoria[$i]->get_empresa()."</p><img id='empresa'src='". $categoria[$i]->get_url()."'<height='80' width='80' /img>";
		echo "<form name=form action='realizar_pedido.php' method='post'>";
			echo "<input type='hidden' name='id' value=".$categoria[$i]->get_id_producto().">";
			echo "<div id='cantidad'><br>Cantidad: </th><td><input id='cantidad' type='number' min='1' max='999' name='cantidad'></td></tr>";
			echo "<input type='hidden' name='nuevo' value=1 >";
			echo "<input type='hidden' name='empresa_id' value= ".$_GET["empresa"]." >";

			echo "</table><br><br><input id='agregar' type='submit' value='Añadir'></section>";
		echo "</form>";			
	}	
	}
?>