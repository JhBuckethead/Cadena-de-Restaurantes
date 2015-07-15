<?php
	if (!function_exists('consulta_categorias')){
	  function consulta_categorias()
	  {
		$categorias= "SELECT id_categoria, categoria FROM categoria ORDER BY categoria ASC";
		$resultado_tipo= mysql_query($categorias);

		while ($rowCat  = mysql_fetch_array($resultado_tipo,MYSQL_ASSOC))
		{
		  $categoria[]=$rowCat["categoria"];
		}
		return $categoria;
		}
	}
?>