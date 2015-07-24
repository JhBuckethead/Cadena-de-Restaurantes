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
				echo "carrito";
				$carrito = consultar_carrito2($id_persona);
				return $carrito;
			}
	}
	



?>