<?php	
	echo "<link rel='stylesheet' href='css/style.css' type='text/css' media='all'>";
	include ("../persistence_layer/conect.php");	
	include ("../bussines_layer/gestion_empresa_bussines.php");
	if(isset($_GET["borra"]) AND isset($_GET["eliminar"])){
		borrar_empresa($_GET["eliminar"]);
		echo "<div align=center><h1>SU EMPRESA SE HA ELIMINADO CON EXITO!!
		<meta http-equiv='Refresh' content='2;url=gestion_empresa.php'></font></h1></div>";	
	}
	else{
		$empresa = recuperar_empresa($_GET["id"]);
		echo "<div align=center><h1>ELIMINAR EMPRESA</h1><br><h2>".$empresa->get_nombre()."<br>direccion: ".$empresa->get_direccion()."<br><br><br>";
		
		echo "<notif>ESTA SEGURO?</notif><br><br>";
		echo "<h3>SE BORRARA LA EMPRESA Y TODOS LOS PRODUCTOS QUE OFRECE LA MISMA</h3>";
		echo "<table class=tablas><tr>";
		echo "<td width=50%><a href=gestion_empresa_eliminar.php?eliminar=".$_GET["id"]."&borra='SI'><notifsi>SI</notifsi></a></td>";
		echo "<td width=50%><a href=gestion_empresa.php><notifno>NO</notifno></a></td>";
		echo "</tr></table>";
	}
?>