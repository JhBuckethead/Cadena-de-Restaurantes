<?php
	echo "<link rel='stylesheet' href='css/style.css' type='text/css' media='all'>";
	include ("../persistence_layer/conect.php");
	include ("../bussines_layer/gestion_empresa_bussines.php");
	if(isset ($_POST["nombre"])){
		$rowCat=recuperar_categoria($_POST["categoria"]);
		insertar_empresa($_POST["nombre"],$rowCat->get_categoria(),$_POST["direccion"],$_POST["descripcion"],$_POST["url"]);
		
		echo "<div align=center><h1>SU EMPRESA SE HA GUARDADO CON EXITO!!
		<meta http-equiv='Refresh' content='2;url=gestion_empresa.php'></font></h1></div>";
	}else{		
		$categorias=catalogo_categoria2();
		echo "<div align=center><h1>NUEVA EMPRESA</h1><br>";
		echo "<form name=form action=".$_SERVER['PHP_SELF']." method='post'>";
		echo "<table class=tablas>";
			echo "<tr><th><h4>Nombre</th><td><input type='text' required name=nombre></td></tr>";
			echo "<tr><th><h4>Categoria</th><td><select required name=categoria>";
			for ($i = 0; $i <count($categorias); $i++) 
			{
				echo "<option>".$categorias[$i]->get_categoria()."</option>";
			}					
			echo("</select> </td></tr>");			
			echo "<tr><th><h4>Direccion</th><td><input type='text' required name=direccion></td></tr>";
			echo "<tr><th><h4>Descripcion</th><td><input type='text' required name=descripcion></td></tr>";
			echo "<tr><th><h4>Imagen</th><td><input type='text' required name=url placeholder='URL de la imagen'></td></tr>";
			echo "</table><br>";
		echo "<input type='submit' value='Guardar'>";
		echo "</form>";
	}
?>