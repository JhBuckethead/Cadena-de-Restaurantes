<?php	
	echo "<link rel='stylesheet' href='css/style.css' type='text/css' media='all'>";
	include ("../bussines_layer/gestion_producto_bussines.php");
	include ("../bussines_layer/gestion_pedido.php");
	include ("../class/producto.php");
	include ("../class/pedido.php");
	include ("../persistence_layer/conect.php");


	if(isset($_POST["nuevo"])){
		realizar_pedido($_POST["id"],$_POST["cantidad"]);

		echo "<div align=center><h1>Agregado correctamente
		<meta http-equiv='Refresh' content='2;url=realizar_pedido.php'></font></h1></div>";	
		}
		else{
			//ESTA QUEMADO EL CLIENTE====
		list ($carrito_persona,$carrito,$pago)=consultar_carrito(1);
		
		echo"<f>";
		echo "<div align=center><h1>Carrito</font></h1></div>";	
		echo "<section class='cols'><div align=center class='box'><div>";
		echo 	"<br><h4>Prceder a Pagar</h4><a href='#' class='button1'><img src='images/pagar.jpg' height='50' width='50'> </a></div></section>"; 
		echo "<div name=empresas>";
		echo "<h1>Prefactura</h1><br><br>";
		
		echo "<form method = 'Post' action='enviar_pago.php'>";
		echo "<p>Nombre: ".$carrito_persona['nombres']."</p>";
		echo "<table cellspacing=1 cellspadding=1 align=left border=2 >";
			echo "<tr >";
				echo "<td>Nombre</td>";
				echo "<td>Fecha</td>";
				echo "<td>Cantidad</td>";
				echo "<td>Total</td>";
				
			echo "</tr>";
		
	for ($i = 0; $i <count($carrito); $i++) 	
	{	
	echo "<tr>";
		echo	"<td>".$carrito[$i]['nombre']." </td>
		<td name= 'fecha'>". $carrito[$i]['fecha']."</td>
		<td>".$carrito[$i]['cantidad']."</td>
		<td>".($carrito[$i]['precio'])*($carrito[$i]['cantidad'])."</td>";
		//$pago=$carrito[$i]['precio']*$carrito[$i]['cantidad']+$pago;
		echo "</tr>";	
			
	}	
	
	echo "</div>";
	echo "<h1 >Total A pagar: </h1>".$pago."";
	echo "<input type='submit' value='Pagar'><form>";
	
	}
?>