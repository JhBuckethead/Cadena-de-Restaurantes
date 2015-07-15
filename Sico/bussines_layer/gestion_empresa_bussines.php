<?php	
	if (!function_exists('catalogo_empresa')){
		function catalogo_empresa()
			{		
				foreach (glob("../persistence_layer/*.php") as $filename)
				{
					include $filename;
				}
				$empresa = consulta_empresas();
				return $empresa;
			}
	}
	
	if (!function_exists('recuperar_categoria')){
		function recuperar_categoria($categoria)
		{		
			foreach (glob("../persistence_layer/*.php") as $filename)
			{
				include $filename;
			}
			$rowCat=consultar_categoriass($categoria);
			return $rowCat;
		}
	}
	
	if (!function_exists('insertar_empresa')){
		function insertar_empresa($nombre,$categoria,$direccion,$descripcion,$url)
		{	
			foreach (glob("../persistence_layer/*.php") as $filename)
			{
				include $filename;
			}
			ingresar_empresa($nombre,$categoria,$direccion,$descripcion,$url);
		}
	}
	
	if (!function_exists('catalogo_categoria2')){
		function catalogo_categoria2()
		{		
			foreach (glob("../persistence_layer/*.php") as $filename)
			{
				include $filename;
			}
			$categoria = consulta_categorias2();
			return $categoria;
		}
	}
	
	if (!function_exists('actualizar_empresa')){
		function actualizar_empresa($nombre,$categoria,$direccion,$descripcion,$url,$id)
		{	
			foreach (glob("../persistence_layer/*.php") as $filename)
			{
				include $filename;
			}
			modificar_empresa($nombre,$categoria,$direccion,$descripcion,$url,$id);
		}
	}
	
	if (!function_exists('recuperar_empresa')){
		function recuperar_empresa($id)
		{		
			foreach (glob("../persistence_layer/*.php") as $filename)
			{
				include $filename;
			}
			$rowEmp = consulta_empresa($id);
			return $rowEmp;
		}
	}
	
	if (!function_exists('borrar_empresa')){
		function borrar_empresa($id)
		{	
			foreach (glob("../persistence_layer/*.php") as $filename)
			{
				include $filename;
			}
			eliminar_empresa($id);
		}
	}
?>