
<?php	
if (!function_exists('realizar_pedido')){

	function realizar_pedido($id ,$cantidad,$fecha)
	{	
		foreach (glob("../persistence_layer/*.php") as $filename)
		{
			include $filename;
		}
		include ("../class/pedido.php");
		realizar_pedido2($id , $cantidad,$fecha);
	}
}


if (!function_exists('consultar_carrito')){

function consultar_carrito($id_persona)
{	
foreach (glob("../persistence_layer/*.php") as $filename)
{
include $filename;
}
include ("../class/pedido.php");

list ($carrito_persona,$carrito) = consultar_carrito2($id_persona);
return array ($carrito_persona, $carrito);

}
}
if (!function_exists('seleccion_empresa')){

function seleccion_empresa($estado,$empres)
{	
foreach (glob("../persistence_layer/*.php") as $filename)
{
include $filename;
}
include ("../class/producto.php");
$producto = empres($estado,$empres);	
foreach ($producto as $pro) 
{	
$clase_producto = new producto;	
$clase_producto->__construct2($pro["id_producto"],$pro["no1"],null,$pro["precio"],$pro["no2"],null,$pro["url"],$pro["estado"]);	
$arreglo_clases[]=$clase_producto;
}	
return $arreglo_clases;
}
}
?>