<?php	
	echo "<link rel='stylesheet' href='css/style.css' type='text/css' media='all'>";
	include ("../persistence_layer/conect.php");	
	include ("../bussines_layer/gestion_producto_bussines.php");
	if(isset($_GET["borra"]) AND isset($_GET["eliminar"])){
		borrar_producto($_GET["eliminar"]);
		echo "<div align=center><h1>SU PRODUCTO SE HA ELIMINADO CON EXITO!!
		<meta http-equiv='Refresh' content='2;url=gestion_producto.php'></font></h1></div>";	
	}
	else{
		$producto = recuperar_producto($_GET["id"]);
		echo "<div align=center><h1>ELIMINAR PRODUCTO</h1><br><h2>".$producto->get_nombre()."<br>Descripcion: ".$producto->get_descripcion()."<br><br><br>";
		
		echo "<notif>ESTA SEGURO?</notif><br><br>";
		echo "<h3>SE BORRARA EL PRODUCTO!</h3>";
		echo "<table class=tablas><tr>";
		echo "<td width=50%><a href=gestion_producto_eliminar.php?eliminar=".$_GET["id"]."&borra='SI'><notifsi>SI</notifsi></a></td>";
		echo "<td width=50%><a href=gestion_producto.php><notifno>NO</notifno></a></td>";
		echo "</tr></table>";
	}
?>