<?php  
	if (!function_exists('consulta_empresas')){
	  function consulta_empresas()
	  {
		$SQL_con="SELECT emp.id_empresa,emp.nombre, cat.categoria, emp.url
					FROM empresa as emp 
					INNER JOIN categoria as cat on emp.id_categoria=cat.id_categoria";	
		$resultado_tipo= mysql_query($SQL_con);

	   while ($rowEmp = mysql_fetch_array($resultado_tipo,MYSQL_ASSOC))	
		{
		  $empresa[]=$rowEmp;
		}
		return $empresa;
		}
	}
	
	if (!function_exists('consultar_categoriass')){
	  function consultar_categoriass($categoria)
	  {
		include ("conect.php");
		$SQL_con="SELECT id_categoria FROM categoria WHERE categoria='".$categoria."'";
		$resultado_cat= mysql_query($SQL_con) or die(mysql_error($link));;
		$rowCat = mysql_fetch_array($resultado_cat,MYSQL_ASSOC);
		return $rowCat;
		}
	
	}
	if (!function_exists('ingresar_empresa')){
	  function ingresar_empresa($nombre,$categoria,$direccion,$descripcion,$url)
	  {
		include ("conect.php");
		$SQL_ins="INSERT INTO empresa (nombre,id_categoria,direccion,descripcion,url) 
				VALUES ('".$nombre."','".$categoria."','".$direccion."','".$descripcion."','".$url."')"; 
		$resultado_ins= mysql_query($SQL_ins) or die(mysql_error($link));
		}
	}
	
	if (!function_exists('consulta_categorias2')){
		  function consulta_categorias2()
		  {
			  $SQL_con="SELECT categoria FROM categoria ORDER BY categoria ASC";	
			$resultado_cat= mysql_query($SQL_con) or die(mysql_error($link)); 
			while ($rowCat = mysql_fetch_array($resultado_cat,MYSQL_ASSOC))	{
			  $categorias[]=$rowCat;
			}	
			return $categorias;
		}
	}
	
	if (!function_exists('modificar_empresa')){
	  function modificar_empresa($nombre,$categoria,$direccion,$descripcion,$url,$id)
	  {
		include ("conect.php");
		$SQL_upd="UPDATE empresa SET nombre='".$nombre."',id_categoria=".$categoria.",direccion='".$direccion."',descripcion='".$descripcion."',url='".$url."' WHERE id_empresa=".$id.""; 
		$resultado_SQL_upd= mysql_query($SQL_upd) or die(mysql_error($link));
		}
	}
	
	if (!function_exists('consulta_empresa')){
		  function consulta_empresa($id)
		  {
			  include ("conect.php");
			  $SQL_con="SELECT * FROM empresa WHERE id_empresa=".$id."";
			  $resultado_emp= mysql_query($SQL_con) or die(mysql_error($link));;
			  $rowEmp = mysql_fetch_array($resultado_emp,MYSQL_ASSOC);
			  return $rowEmp;
		}
	}
	
	if (!function_exists('eliminar_empresa')){
	  function eliminar_empresa($id)
	  {
		include ("conect.php");		
		$SQL_dele2="DELETE FROM productos WHERE id_empresa='".$id."'";
		$resultado_elimi=mysql_query($SQL_dele2)or die(mysql_error($link));
		$SQL_dele="DELETE FROM empresa WHERE id_empresa='".$id."'";
		$resultado_elimi=mysql_query($SQL_dele)or die(mysql_error($link));
		
		}
	}
?>