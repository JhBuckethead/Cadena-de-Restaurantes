<?php	
	echo "<link rel='stylesheet' href='css/style.css' type='text/css' media='all'>";
	include ("../bussines_layer/gestion_producto_bussines.php");
	include ("../bussines_layer/gestion_pedido.php");
	include ("../class/producto.php");
	include ("../class/pedido.php");
	include ("../persistence_layer/conect.php");


	if(isset($_POST["nuevo"])){
		realizar_pedido($_POST["id"],$_POST["cantidad"],date('Y-m-d', time()));
			echo "<div align=center><h1>Agregado correctamente
			<meta http-equiv='Refresh' content='2;url=realizar_pedido.php'></font></h1></div>";		
		}
		else{
		$categoria=catalogo_producto(1);		
		echo "<div align=center><h1>Realizar Pedidos</font></h1></div>";	
		echo "<section class='cols'><div align=center class='box'><div>";
		echo 	"<br><h4>Carrito</h4><a href='carrito.php' class='button1'><img src='images/carrito.jpg' height='50' width='50'> </a></div></section>"; 
		echo "<div name=empresas>";
	for ($i = 0; $i <count($categoria); $i++) 	
	{	
		echo "<section id=empre class='cols'><div align=center class='box'><div>";
		echo	"<h3><br> ".$categoria[$i]->get_nombre()." </h3><p class='pad_bot1'>Precio $ ". $categoria[$i]->get_precio()."</p><p class='pad_bot1'>Empresa ". $categoria[$i]->get_empresa()."</p><img src='". $categoria[$i]->get_url()."'<height='80' width='80' /img>";

		echo "<form name=form action='realizar_pedido.php' method='post'>";
			echo "<input type='hidden' name='id' value=".$categoria[$i]->get_id_producto().">";
			echo "<tr><th>Cantidad</th><td><input type='number' min='1' max='999' name='cantidad'></td></tr>";
			echo "<input type='hidden' name='nuevo' value=1 >";
			echo "</table><br><input type='submit' value='Agregar'></div></section>";
		echo "</form>";			
	}	
	echo "</div>";	
	}
?>