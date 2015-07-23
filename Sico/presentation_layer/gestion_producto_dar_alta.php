<?php	
	echo "<link rel='stylesheet' href='css/style.css' type='text/css' media='all'>";
	include ("../bussines_layer/gestion_producto_bussines.php");
	include ("../class/producto.php");
	include ("../persistence_layer/conect.php");	
	if(isset($_GET["id"]) AND isset($_GET["alta"])){
		baja_alta_product($_GET["id"],$_GET["alta"]);
		echo "<div align=center><h1>SU PRODUCTO SE HA REACTIVADO CON EXITO!!
		<meta http-equiv='Refresh' content='2;url=gestion_producto.php'></font></h1></div>";	
	}
	else{
		$categoria=catalogo_producto(0);
	
		echo "<div align=center><h1>GESTION DE PRODUCTOS</font></h1></div>";	
		echo "<section class='cols'>
				<div align=center class='box'>
				<div>";
			echo 	"<br><h4>Nuevo Producto</h4><a href='gestion_producto_nuevo.php' class='button1'><img src='images/nuevo.jpg' height='50' width='50'> </a></div>
			</section>"; 
			echo "<div name=empresas>";
		for ($i = 0; $i <count($categoria); $i++) 	
		{	
			echo "<section id=empre class='cols'><div align=center class='box'><div>";
			echo	"<h3><br> ".$categoria[$i]->get_nombre()." </h3>
					<p class='pad_bot1'>Precio $ ". $categoria[$i]->get_precio()."</p>
					<p class='pad_bot1'>Empresa ". $categoria[$i]->get_empresa()."</p>
					<img src='". $categoria[$i]->get_url()."'<height='80' width='80' /img>";
			echo 	"<br><a href='gestion_producto_dar_alta.php?alta=1 &id=".$categoria[$i]->get_id_producto()."'class='button1'>Reactivar</a></div></section>";	
		}	
		echo "</div>";
	}
?>