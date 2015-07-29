<?php	
	if (!function_exists('catalogo_empresa')){
		
		function catalogo_empresa($estado)
			{		
				foreach (glob("../persistence_layer/*.php") as $filename)
				{
					include $filename;
				}
				include ("../class/empresa.php");
				$empresa = consulta_empresas($estado);
				foreach ($empresa as $emp) 
				{					
					$clase_empresa = new empresa;	
					$clase_empresa->__construct2($emp["id_empresa"],$emp["nombre"],$emp["categoria"],null,null,$emp["url"],$emp["estado"]);		
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
		function insertar_empresa($nombre,$categoria,$direccion,$descripcion,$url,$estado)
		{	
			include ("../class/empresa.php");
			foreach (glob("../persistence_layer/*.php") as $filename)
			{
				include $filename;
			}
			$clase_empresa = new empresa;	
			$clase_empresa->__construct2(null,$nombre,$categoria,$direccion,$descripcion,$url,$estado);		
			ingresar_empresa($clase_empresa->get_nombre(),$clase_empresa->get_categoria(),$clase_empresa->get_direccion(),$clase_empresa->get_descripcion(),$clase_empresa->get_url(),$clase_empresa->get_estado());
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
			$clase_empresa->__construct2($id,$nombre,$categoria,$direccion,$descripcion,$url,1);		
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
			$clase_empresa->__construct2($rowEmp["id_empresa"],$rowEmp["nombre"],$rowEmp["id_categoria"],$rowEmp["direccion"],$rowEmp["descripcion"],$rowEmp["url"],$rowEmp["estado"]);				
			return $clase_empresa;
		}
	}
	
	if (!function_exists('alta_baja_empresa')){
		function alta_baja_empresa($id,$estado)
		{	
			foreach (glob("../persistence_layer/*.php") as $filename)
			{
				include $filename;
			}
			alta_baja_empres($id,$estado);
		}
	}
	
	if (!function_exists('busqueda_emp')){
		function busqueda_emp($estado,$criterio)
				{		
					foreach (glob("../persistence_layer/*.php") as $filename)
					{
						include $filename;
					}
					include ("../class/empresa.php");
					$empresa = busquedas_emp($estado,$criterio);
					foreach ($empresa as $emp) 
					{					
						$clase_empresa = new empresa;	
						$clase_empresa->__construct2($emp["id_empresa"],$emp["nombre"],$emp["categoria"],null,null,$emp["url"],$emp["estado"]);		
						$arreglo_clases[]=$clase_empresa;
					}					
					return $arreglo_clases;
				}
	}
?>