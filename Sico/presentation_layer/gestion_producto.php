<?php	
	include ("../persistence_layer/conect.php");
	$SQL_con="SELECT * FROM productos";	
	$resultado_tipo= mysql_query($SQL_con);
	while ($rowPro = mysql_fetch_array($resultado_tipo,MYSQL_ASSOC))
	
	{
	  $categoria[]=$rowPro;
	}
	foreach ($categoria as $cat) 
	{		
		echo "<section class='cols'>
			<div class='box'>
			<div>";
		echo	"<h2><br> Nombre:".$cat["nombre"]." </h2>
			<p class='pad_bot1'>Precio". $cat["precio"]."</p>";
		echo 	"<a href='carrito.php?id=".$cat["id_producto"]."' class='button1'>Añadir al carrito de compras</a></div>
			</div>
		</section>";
	}
	
?>