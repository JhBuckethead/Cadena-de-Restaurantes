<?php  
	if (!function_exists('consulta_productos')){
	  function consulta_productos()
	  {
		$SQL_con="select pro.id_producto,pro.nombre as no1,pro.precio, emp.nombre no2,pro.url 
				from productos as pro 
				INNER JOIN empresa as emp on pro.id_empresa=emp.id_empresa";	
		$resultado_tipo= mysql_query($SQL_con);

	   while ($rowPro = mysql_fetch_array($resultado_tipo,MYSQL_ASSOC))	
		{
		  $producto[]=$rowPro;
		}
		return $producto;
		}
	}
	if (!function_exists('consulta_empresas2')){
	  function consulta_empresas2()
	  {
		$SQL_con="SELECT nombre	FROM empresa ORDER BY nombre ASC";	
		$resultado_tipo= mysql_query($SQL_con);

	   while ($rowEmp = mysql_fetch_array($resultado_tipo,MYSQL_ASSOC))	
		{
		  $empresa[]=$rowEmp;
		}
		return $empresa;
		}
	}
	
	if (!function_exists('consultar_producto')){
	  function consultar_producto($id)
	  {
			include ("conect.php");
			$SQL_con="SELECT * FROM productos WHERE id_producto='".$id."'";
			$resultado_pro= mysql_query($SQL_con) or die(mysql_error($link));;
			$rowPro = mysql_fetch_array($resultado_pro,MYSQL_ASSOC);
			return $rowPro;
		}	
	}
	
	if (!function_exists('ingresar_producto')){
	  function ingresar_producto($nombre,$descripcion,$precio,$empresa,$stock,$url)
	  {
		include ("conect.php");
		$SQL_ins="INSERT INTO productos (nombre,descripcion,precio,id_empresa,stock,url) 
				VALUES ('".$nombre."','".$descripcion."','".$precio."','".$empresa."','".$stock."','".$url."')"; 
		$resultado_ins= mysql_query($SQL_ins) or die(mysql_error($link));
		}
	}
	
	if (!function_exists('consultar_empresa')){
	  function consultar_empresa($empresa)
	  {
			include ("conect.php");
			$SQL_con="SELECT id_empresa FROM empresa WHERE nombre='".$empresa."'";
			$resultado_emp= mysql_query($SQL_con) or die(mysql_error($link));;
			$rowEmp = mysql_fetch_array($resultado_emp,MYSQL_ASSOC);
			return $rowEmp;
		}	
	}
	
	if (!function_exists('modificar_producto')){
	  function modificar_producto($nombre,$descripcion,$precio,$empresa,$stock,$url,$id)
	  {
		include ("conect.php");
		$SQL_upd="UPDATE productos SET nombre='".$nombre."',descripcion='".$descripcion."',precio='".$precio."',id_empresa='".$empresa."',stock='".$stock."',url='".$url."' WHERE id_producto=".$id.""; 
		$resultado_SQL_upd= mysql_query($SQL_upd) or die(mysql_error($link));
		}
	}
	
	if (!function_exists('eliminar_producto')){
	  function eliminar_producto($id)
	  {
		include ("conect.php");		
		$SQL_dele2="DELETE FROM productos WHERE id_producto='".$id."'";
		$resultado_elimi=mysql_query($SQL_dele2)or die(mysql_error($link));
	  }
	}
?>