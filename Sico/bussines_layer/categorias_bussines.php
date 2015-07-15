<?php
	if (!function_exists('catalogo_categoria')){
		function catalogo_categoria()
		{		
			foreach (glob("../../persistence_layer/*.php") as $filename)
			{
				include $filename;
			}
			$categoria = consulta_categorias();
			return $categoria;
		}
	}
?>