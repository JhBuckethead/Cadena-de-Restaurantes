<?php	
	if (!function_exists('catalogo_empresa')){
		
		function catalogo_empresa()
			{		
				foreach (glob("../persistence_layer/*.php") as $filename)
				{
					include $filename;
				}
				include ("../class/empresa.php");
				$empresa = consulta_empresas();
				foreach ($empresa as $emp) 
				{					
					$clase_empresa = new empresa;	
					$clase_empresa->__construct2($emp["id_empresa"],$emp["nombre"],$emp["categoria"],null,null,$emp["url"]);		
					$arreglo_clases[]=$clase_empresa;
				}
				
				return $arreglo_clases;
			}
	}
	
	if (!function_exists('recuperar_categoria')){
		function recuperar_categoria($categoria)
		{		
			include ("../class/empresa.php");
			foreach (glob("../persistence_layer/*.php") as $filename)
			{
				include $filename;
			}
			$rowCat=consultar_categoriass($categoria);
			$clase_empresa = new empresa;	
			$clase_empresa->set_categoria($rowCat["id_categoria"]);				
			return $clase_empresa;
		}
	}
	
	if (!function_exists('insertar_empresa')){
		function insertar_empresa($nombre,$categoria,$direccion,$descripcion,$url)
		{	
			include ("../class/empresa.php");
			foreach (glob("../persistence_layer/*.php") as $filename)
			{
				include $filename;
			}
			$clase_empresa = new empresa;	
			$clase_empresa->__construct2(null,$nombre,$categoria,$direccion,$descripcion,$url);		
			ingresar_empresa($clase_empresa->get_nombre(),$clase_empresa->get_categoria(),$clase_empresa->get_direccion(),$clase_empresa->get_descripcion(),$clase_empresa->get_url());
		}
	}
	
	if (!function_exists('catalogo_categoria2')){
		function catalogo_categoria2()
		{		
			include ("../class/empresa.php");
			foreach (glob("../persistence_layer/*.php") as $filename)
			{
				include $filename;
			}
			$categoria = consulta_categorias2();
			foreach ($categoria as $cat) 
				{
					$clase_empresa = new empresa;	
					$clase_empresa->set_categoria($cat["categoria"]);	
					$arreglo_clases[]=$clase_empresa;				
				}
			return $arreglo_clases;
		}
	}
	
	if (!function_exists('actualizar_empresa')){
		function actualizar_empresa($nombre,$categoria,$direccion,$descripcion,$url,$id)
		{	
			include ("../class/empresa.php");
			foreach (glob("../persistence_layer/*.php") as $filename)
			{
				include $filename;
			}
			$clase_empresa = new empresa;	
			$clase_empresa->__construct2($id,$nombre,$categoria,$direccion,$descripcion,$url);		
			modificar_empresa($clase_empresa->get_nombre(),$clase_empresa->get_categoria(),$clase_empresa->get_direccion(),$clase_empresa->get_descripcion(),$clase_empresa->get_url(),$clase_empresa->get_id_empresa());
		}
	}
	
	if (!function_exists('recuperar_empresa')){
		function recuperar_empresa($id)
		{		
			include ("../class/empresa.php");
			foreach (glob("../persistence_layer/*.php") as $filename)
			{
				include $filename;
			}
			$rowEmp = consulta_empresa($id);
			$clase_empresa = new empresa;	
			$clase_empresa->__construct2($rowEmp["id_empresa"],$rowEmp["nombre"],$rowEmp["id_categoria"],$rowEmp["direccion"],$rowEmp["descripcion"],$rowEmp["url"]);				
			return $clase_empresa;
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