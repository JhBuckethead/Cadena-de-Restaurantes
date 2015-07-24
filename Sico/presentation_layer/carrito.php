<?php	
	echo "<link rel='stylesheet' href='css/style.css' type='text/css' media='all'>";
	include ("../bussines_layer/gestion_producto_bussines.php");
	include ("../bussines_layer/gestion_pedido.php");
	include ("../class/producto.php");
	include ("../class/pedido.php");
	include ("../persistence_layer/conect.php");


	if(isset($_POST["nuevo"])){echo "HOLA";
		realizar_pedido($_POST["id"],$_POST["cantidad"]);

		echo "<div align=center><h1>Agregado correctamente
		<meta http-equiv='Refresh' content='2;url=realizar_pedido.php'></font></h1></div>";	
		}
		else{
			//ESTA QUEMADO EL CLIENTE====
		$carrito=consultar_carrito(1);
		
		echo "<div align=center><h1>Carrito</font></h1></div>";	
		echo "<section class='cols'><div align=center class='box'><div>";
		echo 	"<br><h4>Prceder a Pagar</h4><a href='#' class='button1'><img src='images/pagar.jpg' height='50' width='50'> </a></div></section>"; 
		echo "<div name=empresas>";
	for ($i = 0; $i <count($carrito); $i++) 	
	{	
		echo "<section id=empre class='cols'><div align=center class='box'><div>";
		echo	"<h3><br> ".$carrito[$i]['nombre']." </h3><p class='pad_bot1'>Fecha ". $carrito[$i]['fecha']."</p><p class='pad_bot1'>Precio ".$carrito[$i]['precio']."</p><img src='". $carrito[$i]['url']."'<height='80' width='80' /img>";
		echo "<p class='pad_bot1'>Cantidad ".$carrito[$i]['cantidad']." </p>";
		echo "<br> <br> <tr><th>Cantidad</th><td><input type='number' value= ".$carrito[$i]['cantidad']."name='cantidad'></td></tr></div></section>";
	}	
	echo "</div>";
	
	}
?>