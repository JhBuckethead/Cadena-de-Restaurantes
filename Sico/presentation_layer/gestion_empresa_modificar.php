<?php	
	echo "<link rel='stylesheet' href='css/style.css' type='text/css' media='all'>";
	include ("../persistence_layer/conect.php");	
	include ("../bussines_layer/gestion_empresa_bussines.php");
	if(isset ($_POST["nombre"])){
		$rowCat=recuperar_categoria($_POST["categoria"]);
		actualizar_empresa($_POST["nombre"],$rowCat["id_categoria"],$_POST["direccion"],$_POST["descripcion"],$_POST["url"],$_POST["id"]);
		echo "<div align=center><h1>SU EMPRESA SE HA MODIFICADO CON EXITO!!
		<meta http-equiv='Refresh' content='2;url=gestion_empresa.php'></font></h1></div>";
	}else{	
		$categorias=catalogo_categoria2();
		$rowEmp = recuperar_empresa($_GET["id"]);
		
		echo "<div align=center><h1>MODIFICAR EMPRESA</h1><br>";
		echo "<form name=form action=".$_SERVER['PHP_SELF']." method='post'>";
		echo "<table class=tablas>";
			echo "<tr><td><input type='text' hidden required name=id value='".$rowEmp["id_empresa"]."'></td></tr>";
			echo "<tr><th><h4>Nombre</th><td><input type='text' required name=nombre value='".$rowEmp["nombre"]."'></td></tr>";
			echo "<tr><th><h4>Categoria</th><td><select required name=categoria>";
			foreach ($categorias as $cat)
			{
				echo "<option>".$cat["categoria"]."</option>";
			}
			echo("</select> </td></tr>");			
			echo "<tr><th><h4>Direccion</th><td><input type='text' required name=direccion value='".$rowEmp["direccion"]."'></td></tr>";
			echo "<tr><th><h4>Descripcion</th><td><input type='text' required name=descripcion value='".$rowEmp["descripcion"]."'></td></tr>";
			echo "<tr><th><h4>Imagen</th><td><input type='text' required name=url placeholder='URL de la imagen' value='".$rowEmp["url"]."'></td></tr>";
			echo "</table><br>";
		echo "<input type='submit' value='Modificar'>";
		echo "</form>";
	}
?>