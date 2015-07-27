<?php
	include("../bussines_layer/comprobar_sesion.php");
	include("../bussines_layer/gestion_clientes_bussines.php");

	if ($sesion) 
	{
		$nombre=$_SESSION['nombres'];
		eliminar_cliente($nombre);
		require("../bussines_layer/logout.php");
	}else{
		echo "<div align=center><h1>Debe estar Logueado<meta http-equiv='Refresh' content='2;url=../presentation_layer/index.php'></font></h1></div>";

	}
?>