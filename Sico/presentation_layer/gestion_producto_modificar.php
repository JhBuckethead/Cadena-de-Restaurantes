<?php	
	echo "<link rel='stylesheet' href='css/style.css' type='text/css' media='all'>";
	include ("../persistence_layer/conect.php");	
	include ("../bussines_layer/gestion_producto_bussines.php");
	if(isset ($_POST["nombre"])){
		$rowEmp=recuperar_empresa($_POST["empresa"]);	
		actualizar_producto($_POST["nombre"],$_POST["descripcion"],$_POST["precio"],$rowEmp->get_empresa(),$_POST["stock"],$_POST["url"],$_POST["id"],1);
		echo "<div align=center><h1>SU PRODUCTO SE HA MODIFICADO CON EXITO!!
		<meta http-equiv='Refresh' content='2;url=gestion_producto.php'></font></h1></div>";
	}else{	
		$empresas=catalogo_empresas2();
		$producto = recuperar_producto($_GET["id"]);
		
		echo "<div align=center><h1>MODIFICAR PRODUCTO</h1><br>";
		echo "<form name=form action=".$_SERVER['PHP_SELF']." method='post'>";
		echo "<table class=tablas>";
			echo "<tr><td><input type='text' hidden required name=id value='".$producto->get_id_producto()."'></td></tr>";
			echo "<tr><th><h4>Nombre</th><td><input type='text' required name=nombre value='".$producto->get_nombre()."'></td></tr>";
			echo "<tr><th><h4>Empresa</th><td><select required name=empresa>";
			for ($i = 0; $i <count($empresas); $i++) 
			{
				echo "<option>".$empresas[$i]->get_empresa ()."</option>";
			}	
			echo("</select> </td></tr>");			
			echo "<tr><th><h4>Precio</th><td><input type='text' required name=precio value='".$producto->get_precio()."'></td></tr>";
			echo "<tr><th><h4>Descripcion</th><td><input type='text' required name=descripcion value='".$producto->get_descripcion()."'></td></tr>";
			echo "<tr><th><h4>Stock</th><td><input type='number' required min='1' max='999' name=stock value='".$producto->get_stock()."'></td></tr>";
			echo "<tr><th><h4>Imagen</th><td><input type='text' required name=url placeholder='URL de la imagen' value='".$producto->get_url()."'></td></tr>";
			echo "</table><br>";
		echo "<input type='submit' value='Modificar'>";
		echo "</form>";
	}
?>