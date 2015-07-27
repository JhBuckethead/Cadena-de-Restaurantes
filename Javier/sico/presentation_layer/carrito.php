<?php	
	echo "<link rel='stylesheet' href='css/style.css' type='text/css' media='all'>";
	include ("../bussines_layer/gestion_producto_bussines.php");
	include ("../bussines_layer/gestion_pedido.php");
	include ("../bussines_layer/gestion_pago.php");
	include ("../class/producto.php");
	include ("../class/pedido.php");
	include ("../persistence_layer/conect.php");


	if(isset($_POST["nuevo"])){

		realizar_pago($_POST["cliente"],$_POST["productos"],$_POST["pago"],$_POST["fecha"]);
		echo '<script>alert("Guardado")</script>';	
		echo "<div align=center>
		<meta http-equiv='Refresh' content='0;url=enviar_pago.php'></font></h1></div>";	
		}
		else{
			
		list ($carrito_persona,$carrito)=consultar_carrito(1);
		
		echo"<f>";
		echo "<div align=center><h1>Carrito</font></h1></div>";	
		echo "<section class='cols'><div align=center class='box'><div>";
		echo 	"<br><h4>Prceder a Pagar</h4><a href='#' class='button1'><img src='images/pagar.jpg' height='50' width='50'> </a></div></section>"; 
		echo "<div name=empresas>";
		echo "<h1>Prefactura</h1><br><br>";
		
		echo "<form method = 'Post' action='carrito.php'>";
			echo "<p>Nombre: ".$carrito_persona['nombres']."</p>";
			echo "<table cellspacing=1 cellspadding=1 align=left border=2 >";
				echo "<tr >";
					echo "<td>Nombre</td>";
					echo "<td>Fecha</td>";
					echo "<td>Cantidad</td>";
					echo "<td>Total</td>";
					
				echo "</tr>";
			$pago=0;
			$productos=0;	
			for ($i = 0; $i <count($carrito); $i++) 	
			{	
				echo "<tr >";
					echo	"<td>".$carrito[$i]['nombre']." </td>
					<td >". $carrito[$i]['fecha']."</td>
					<td>".$carrito[$i]['cantidad']."</td>
					<td>".($carrito[$i]['precio'])*($carrito[$i]['cantidad'])."</td>";
					$pago=$carrito[$i]['precio']*$carrito[$i]['cantidad']+$pago;
					$productos=$carrito[$i]['cantidad']+$productos;
				echo "<tr >";
				echo "<input type='hidden' name='nuevo' value=1 >";
				echo "<input type='text' hidden required name=cliente value='".$carrito_persona['nombres']."'>";
				echo "<input type='text' hidden required name=fecha value='".$carrito[$i]['fecha']."'>";
				echo "<input type='text' hidden required name=pago value='".$pago."'>";
				echo "<input type='text' hidden required name=productos value='".$productos."'>";					

			}	
		echo "</div>";
		echo "<h1 >Total A pagar: </h1>".$pago."";
		echo "<p >Total productos: </h1>".$productos."</p>";
		echo "<input type='submit' value='Pagar'><form>";
	}
?>