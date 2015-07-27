<?php	
	echo "<link rel='stylesheet' href='css/style.css' type='text/css' media='all'>";
	include ("../bussines_layer/gestion_pago.php");
	include ("../persistence_layer/conect.php");
	include ("../class/pago.php");

	if(isset($_POST["nuevo"]))
	{
		realizar_pago2($_POST["id"],$_POST["cuenta"]);
		echo '<script>alert("Su pago fue enviado a su cuenta")</script>';	
		echo "<div align=center>
		<meta http-equiv='Refresh' content='0;url=seleccion_empresa.php'></font></h1></div>";
	}else{
		list ($pago)=consultar_pago();
		echo "<div align=center><h1>Enviar Pago</font></h1></div><br>";	
		echo "<div name=empresas>";
			echo "<h1>Datos a enviar</h1><br><br>";
			for ($i = 0; $i <count($pago); $i++) 	
			{	
				echo "<table cellspacing=1 cellspadding=1 align=left border=2 >";
				echo "<tr >";
					echo "<td>Nombre--></td>";
					echo "<td>".$pago[$i]['nombre']." </td>";
				echo "</tr>";
				echo "<tr >";
					echo "<td>Total De Productos--></td>";
					echo "<td>".$pago[$i]['total_productos']." </td>";
				echo "</tr>";
				echo "<tr >";
					echo "<td>Valor Total A Pagar--></td>";
					echo "<td>".$pago[$i]['total_pago']." </td>";
				echo "</tr>";
				echo "<tr >";
					echo "<td>Fecha--></td>";
					echo "<td>".$pago[$i]['fecha']." </td>";
				echo "</tr>";				
				echo "</div>";
				echo "<form method = 'Post' action='enviar_pago.php'>";
					echo "<input type='hidden' name='nuevo' value=1 >";
					echo "<input type='hidden' name='id' value=".$pago[$i]['id_pago'].">";
					echo "<tr><th>Numero tarjeta/banco:</th><td><input type='number' min='1' name='cuenta'></td></tr>";
				echo "<input type='submit' value='Pagar'><form>";
			}
	}
?>