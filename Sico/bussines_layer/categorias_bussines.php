<?php
	function catalogo_categoria()
	{		
  		foreach (glob("../../persistence_layer/*.php") as $filename)
		{
		    include $filename;
		}
  		$categoria = consulta_categorias();
		return $categoria;
	}
?>