<?php	
	echo "<link rel='stylesheet' href='css/style.css' type='text/css' media='all'>";
	include ("../bussines_layer/gestion_producto_bussines.php");
	include ("../class/producto.php");
	include ("../persistence_layer/conect.php");
	$categoria=catalogo_producto();
	
	echo "<div align=center><h1>GESTION DE PRODUCTOS</font></h1></div>";	
	echo "<section class='cols'>
			<div align=center class='box'>
			<div>";
		echo 	"<br><h4>Nuevo Producto</h4><a href='gestion_producto_nuevo.php' class='button1'><img src='images/nuevo.jpg' height='50' width='50'> </a></div>
		</div>
		</section>"; 
		echo "<div name=empresas>";
	for ($i = 0; $i <count($categoria); $i++) 	
	{	
		echo "<section id=empre class='cols'><div align=center class='box'><div>";
		echo	"<h3><br> ".$categoria[$i]->get_nombre()." </h3>
				<p class='pad_bot1'>Precio $ ". $categoria[$i]->get_precio()."</p>
				<p class='pad_bot1'>Empresa ". $categoria[$i]->get_empresa()."</p>
				<img src='". $categoria[$i]->get_url()."'<height='80' width='80' /img>";
		echo 	"<br><a href='gestion_producto_modificar.php?id=".$categoria[$i]->get_id_producto()."' class='button1'>Modificar</a></div>
				 <br><a href='gestion_producto_eliminar.php?id=".$categoria[$i]->get_id_producto()."' class='button1'>Eliminar</a></div></section>";	
	}	
	echo "</div>";
?>